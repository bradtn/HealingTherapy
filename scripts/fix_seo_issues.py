#!/usr/bin/env python3
"""
Script to fix critical SEO and security issues across all HTML pages
"""

import os
import re
import glob

# Define the list of HTML files to process (excluding perinatal-therapy.html)
html_files = [
    'index.html',
    'appointment.html',
    'individual-therapy.html',
    'couples-therapy.html',
    'family-therapy.html',
    'group-therapy.html',
    'psychological-testing.html',
    'telehealth-therapy.html',
    'therapists.html',
    'dr-nadia-habhab.html',
    'tiffany-murray.html',
    'malak-wehbe.html',
    'amal-ayad.html',
    'dr-tiffany-murray.html',
    'faq.html',
    'all-blogs.html',
    'autism-evaluation.html',
    'autism-screening-tool.html',
    'autism-signs.html',
    'breaking-stigma.html',
    'coping-with-postpartum-pepression.html',
    'healing-starts-with-you.html',
    'how-to-find-the-right-therapist.html',
    'is-austim-curable.html',
    'parenting-child.html',
    'suicide-hotline.html',
    'understanding-depression.html'
]

base_dir = '/opt/HealingTherapy'
changes_log = []

def log_change(file, description):
    """Log a change made to a file"""
    changes_log.append(f"{file}: {description}")
    print(f"  ✓ {file}: {description}")

def fix_schema_context(content, filename):
    """Fix schema.org URL from http://www.schema.org to https://schema.org"""
    old_pattern = '"@context": "http://www.schema.org"'
    new_pattern = '"@context": "https://schema.org"'

    if old_pattern in content:
        content = content.replace(old_pattern, new_pattern)
        log_change(filename, "Fixed schema.org URL (http://www -> https://)")

    return content

def remove_trailing_tabs(content, filename):
    """Remove trailing tab characters from schema markup"""
    changes_made = False

    # Remove tabs before closing quotes in JSON-LD
    patterns = [
        (r'\\t"', r'"'),  # Remove \t before quotes
        (r'\t"', r'"'),   # Remove actual tabs before quotes
    ]

    for old, new in patterns:
        if re.search(old, content):
            content = re.sub(old, new, content)
            changes_made = True

    if changes_made:
        log_change(filename, "Removed trailing tabs from schema markup")

    return content

def fix_address_in_schema(content, filename):
    """Fix address to be consistent: 22005 Outer Dr W"""
    old_addresses = [
        '"streetAddress": "23500 Park St"',
        '"streetAddress": "3200 Greenfield Rd"'
    ]
    new_address = '"streetAddress": "22005 Outer Dr W"'

    for old_addr in old_addresses:
        if old_addr in content:
            content = content.replace(old_addr, new_address)
            log_change(filename, f"Fixed address in schema markup to 22005 Outer Dr W")

    return content

def add_security_to_external_links(content, filename):
    """Add rel='noopener noreferrer' to all target='_blank' links"""
    count = 0

    # Pattern to find target="_blank" without rel="noopener noreferrer"
    # Look for target="_blank" that doesn't already have rel with noopener
    pattern = r'(<a\s+[^>]*target="_blank"[^>]*)(>)'

    matches = re.finditer(pattern, content, re.IGNORECASE)

    for match in matches:
        link_tag = match.group(1)
        # Check if it already has rel="noopener noreferrer"
        if 'rel=' not in link_tag or ('rel=' in link_tag and 'noopener' not in link_tag):
            # Add rel="noopener noreferrer"
            if 'rel=' in link_tag:
                # Update existing rel
                link_tag = re.sub(r'rel="([^"]*)"', r'rel="\1 noopener noreferrer"', link_tag)
            else:
                # Add new rel
                link_tag = link_tag + ' rel="noopener noreferrer"'

            new_link = link_tag + match.group(2)
            content = content.replace(match.group(0), new_link)
            count += 1

    if count > 0:
        log_change(filename, f"Added security attributes to {count} external link(s)")

    return content

def fix_google_analytics(content, filename):
    """Add Google Analytics library script before gtag config"""
    # Check if gtag is present but the library script is missing
    if 'gtag(' in content and 'googletagmanager.com/gtag/js' not in content:
        # Find the gtag script block
        pattern = r'(<script>\s*window\.dataLayer)'
        replacement = r'<script async src="https://www.googletagmanager.com/gtag/js?id=G-TSBF8KK4BW"></script>\n    \1'

        if re.search(pattern, content):
            content = re.sub(pattern, replacement, content)
            log_change(filename, "Added Google Analytics library script")

    return content

def add_canonical_url(content, filename):
    """Add canonical URL to each page"""
    # Skip if canonical already exists
    if '<link rel="canonical"' in content:
        return content

    # Determine the canonical URL based on filename
    if filename == 'index.html':
        canonical_url = 'https://www.healingtherapycenter.com/'
    else:
        # Remove .html extension for canonical URL
        page_name = filename.replace('.html', '')
        canonical_url = f'https://www.healingtherapycenter.com/{page_name}'

    # Find the closing </head> tag and insert before it
    canonical_tag = f'    <link rel="canonical" href="{canonical_url}">\n'

    # Insert before </head>
    if '</head>' in content:
        content = content.replace('</head>', f'{canonical_tag}</head>')
        log_change(filename, f"Added canonical URL: {canonical_url}")

    return content

def optimize_page_title(content, filename):
    """Optimize page titles for better SEO"""
    title_map = {
        'index.html': 'Healing Therapy Center | Mental Health Services in Dearborn, MI',
        'appointment.html': 'Schedule Appointment | Healing Therapy Center - Dearborn, MI',
        'individual-therapy.html': 'Individual Therapy & Counseling | Healing Therapy Center Dearborn',
        'couples-therapy.html': 'Couples Therapy & Marriage Counseling | Dearborn, MI',
        'family-therapy.html': 'Family Therapy Services | Healing Therapy Center Michigan',
        'group-therapy.html': 'Group Therapy Sessions | Healing Therapy Center Dearborn',
        'psychological-testing.html': 'Psychological Testing & Assessment | Dearborn, MI',
        'telehealth-therapy.html': 'Online Telehealth Therapy | Healing Therapy Center Michigan',
        'therapists.html': 'Our Therapists & Mental Health Professionals | Dearborn, MI',
        'dr-nadia-habhab.html': 'Dr. Nadia Habhab | Licensed Psychologist | Healing Therapy Center',
        'tiffany-murray.html': 'Tiffany Murray, LMSW | Therapist | Healing Therapy Center',
        'dr-tiffany-murray.html': 'Dr. Tiffany Murray, LMSW | Therapist | Healing Therapy Center',
        'malak-wehbe.html': 'Malak Wehbe | Therapist | Healing Therapy Center Dearborn',
        'amal-ayad.html': 'Amal Ayad | Therapist | Healing Therapy Center Dearborn',
        'faq.html': 'Frequently Asked Questions | Healing Therapy Center Dearborn',
        'all-blogs.html': 'Mental Health Blog & Resources | Healing Therapy Center',
        'autism-evaluation.html': 'Autism Evaluation & Assessment | Healing Therapy Center Dearborn',
        'autism-screening-tool.html': 'Autism Screening Tool & Resources | Healing Therapy Center',
        'autism-signs.html': 'Signs of Autism in Children | Healing Therapy Center',
        'breaking-stigma.html': 'Breaking Mental Health Stigma | Healing Therapy Center Blog',
        'coping-with-postpartum-pepression.html': 'Coping with Postpartum Depression | Healing Therapy Center',
        'healing-starts-with-you.html': 'Healing Starts With You | Mental Health Blog',
        'how-to-find-the-right-therapist.html': 'How to Find the Right Therapist | Healing Therapy Center',
        'is-austim-curable.html': 'Is Autism Curable? | Healing Therapy Center Resources',
        'parenting-child.html': 'Parenting Tips & Child Mental Health | Healing Therapy Center',
        'suicide-hotline.html': 'Suicide Prevention Hotline & Resources | Healing Therapy Center',
        'understanding-depression.html': 'Understanding Depression | Healing Therapy Center Blog'
    }

    if filename in title_map:
        new_title = title_map[filename]
        # Find and replace title
        pattern = r'<title>[^<]*</title>'
        replacement = f'<title>{new_title}</title>'

        if re.search(pattern, content):
            old_title = re.search(pattern, content).group(0)
            content = re.sub(pattern, replacement, content)
            log_change(filename, f"Updated page title to: {new_title}")

    return content

def remove_empty_keywords(content, filename):
    """Remove empty keywords meta tag"""
    pattern = r'\s*<meta name="keywords" content="">\s*\n'

    if re.search(pattern, content):
        content = re.sub(pattern, '\n', content)
        log_change(filename, "Removed empty keywords meta tag")

    return content

def process_file(filepath, filename):
    """Process a single HTML file"""
    print(f"\nProcessing: {filename}")

    try:
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()

        original_content = content

        # Apply all fixes
        content = fix_schema_context(content, filename)
        content = remove_trailing_tabs(content, filename)
        content = fix_address_in_schema(content, filename)
        content = add_security_to_external_links(content, filename)
        content = fix_google_analytics(content, filename)
        content = add_canonical_url(content, filename)
        content = optimize_page_title(content, filename)
        content = remove_empty_keywords(content, filename)

        # Only write if changes were made
        if content != original_content:
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(content)
            return True
        else:
            print(f"  → No changes needed")
            return False

    except Exception as e:
        print(f"  ✗ Error processing {filename}: {str(e)}")
        return False

def main():
    """Main function to process all files"""
    print("=" * 80)
    print("FIXING CRITICAL SEO AND SECURITY ISSUES")
    print("=" * 80)

    files_processed = 0
    files_modified = 0

    for filename in html_files:
        filepath = os.path.join(base_dir, filename)

        if not os.path.exists(filepath):
            print(f"\n⚠ Warning: {filename} not found, skipping...")
            continue

        files_processed += 1
        if process_file(filepath, filename):
            files_modified += 1

    print("\n" + "=" * 80)
    print("SUMMARY")
    print("=" * 80)
    print(f"Files processed: {files_processed}")
    print(f"Files modified: {files_modified}")
    print(f"Total changes: {len(changes_log)}")
    print("\nAll changes have been applied successfully!")

    # Save detailed log
    with open(os.path.join(base_dir, 'seo_fixes_log.txt'), 'w') as f:
        f.write("SEO AND SECURITY FIXES LOG\n")
        f.write("=" * 80 + "\n\n")
        for change in changes_log:
            f.write(change + "\n")
        f.write(f"\n\nTotal changes: {len(changes_log)}\n")

    print(f"\nDetailed log saved to: {os.path.join(base_dir, 'seo_fixes_log.txt')}")

if __name__ == "__main__":
    main()
