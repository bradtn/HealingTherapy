# Core Web Vitals Optimization Guide - 2026

**Site Type:** PHP/HTML
**Location:** Dearborn, Michigan
**Last Updated:** April 26, 2026

---

## Current Status (April 2026)

### Completed ✅
- TL;DR summaries added to all condition pages (AI search optimization)
- Last Reviewed dates added
- Schema markup comprehensive (7 types)
- BreadcrumbSchema on all condition pages
- PersonSchema on all team member pages
- Google Business Profile set up and active
- Image lazy loading with width/height attributes
- FAQ sections on service pages (added to autism-evaluation.php)

### Critical Optimizations Needed ❌

---

## 1. Image Optimization (URGENT - High Impact)

**Current Status:** Using `<img>` tags with lazy loading ✅ and width/height ✅

**2026 Standard:** Further optimize for Core Web Vitals

**Impact on Metrics:**
- **LCP:** Hero images could load faster
- **CLS:** Currently good (width/height present)
- **Performance:** Could improve with better compression

**Action Required:**

### A. Convert to WebP Format

**Why:** WebP provides 25-35% better compression than JPEG/PNG

**How:**
1. Use online tools:
   - Squoosh.app
   - CloudConvert.com
   - TinyPNG.com
2. Convert all images to WebP
3. Update `<img src="image.jpg">` to `<img src="image.webp">`
4. Keep originals as fallback

**Example:**
```html
<!-- Before -->
<img src="team-shawn.jpg" alt="Dr. Shawn Harrington" loading="lazy" width="320" height="320">

<!-- After -->
<picture>
  <source srcset="team-shawn.webp" type="image/webp">
  <img src="team-shawn.jpg" alt="Dr. Shawn Harrington" loading="lazy" width="320" height="320">
</picture>
```

### B. Compress All Images

**Target Sizes:**
- Hero images: < 200KB
- Team photos: < 100KB
- Icons/logos: < 50KB

**Tools:**
- TinyPNG.com - Easy drag & drop
- Squoosh.app - Advanced compression
- ImageOptim (Mac) or RIOT (Windows)

### C. Preload Critical Images

For above-fold hero images, add to `<head>`:

```html
<link rel="preload" as="image" href="hero-image.webp">
```

**Files to Update:**
- Hero images on all main pages
- Team member photos
- Service page headers

---

## 2. Core Web Vitals Targets (2026)

### Required Thresholds
- **LCP:** < 2.5 seconds (Good)
- **INP:** < 200ms (Good) - **REPLACED FID in March 2026**
- **CLS:** < 0.1 (Good)

### What Changed in 2026

**OLD (2025):** FID (First Input Delay) - only measured first click
**NEW (2026):** INP (Interaction to Next Paint) - measures ALL clicks/taps throughout page visit

**Why It Matters:** INP is more comprehensive, catches slow interactions later in page lifecycle

### Testing Tools
1. **Google Search Console** - Core Web Vitals report (field data - MOST IMPORTANT)
   - Shows real user data
   - Mobile + Desktop reports
   - Identifies problematic pages
2. **PageSpeed Insights** - https://pagespeed.web.dev/ (field + lab data)
   - Test individual pages
   - Get specific recommendations
3. **Chrome DevTools** - Lighthouse tab (lab data)
   - Development testing
   - Simulate different devices

### Priority
1. Fix field data issues first (real users)
2. Use lab data for debugging
3. **Test on mobile first** (mobile-first indexing)

---

## 3. PHP/HTML-Specific Performance Optimizations

### A. Minify CSS and JavaScript

**Current:** Likely unminified
**Better:** Minified files load faster

**How:**
- Use online minifiers:
  - CSS: https://cssminifier.com
  - JS: https://javascript-minifier.com
- Or use build tools: Gulp, Webpack

**Example:**
```html
<!-- Before -->
<link rel="stylesheet" href="assets/css/styles.css">

<!-- After -->
<link rel="stylesheet" href="assets/css/styles.min.css">
```

### B. Defer Non-Critical JavaScript

**Add `defer` or `async` to scripts:**

```html
<!-- Critical scripts (needed immediately) -->
<script src="critical.js"></script>

<!-- Non-critical scripts (can load later) -->
<script src="analytics.js" defer></script>
<script src="animations.js" defer></script>
```

**Difference:**
- `defer`: Load in parallel, execute after HTML parsed
- `async`: Load and execute ASAP (use for independent scripts)

### C. Font Optimization

**Current Status:** Check if using Google Fonts via `@import` or `<link>`

**Option 1: Preconnect (Quick Fix)**
Add to `<head>`:
```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
```

**Option 2: Self-Host Fonts (Better)**
1. Download fonts from Google Fonts
2. Host on your server
3. Use `@font-face` in CSS:

```css
@font-face {
  font-family: 'Inter';
  src: url('/assets/fonts/inter.woff2') format('woff2');
  font-display: swap; /* Prevents invisible text */
}
```

**Option 3: font-display Property (Easiest)**
Add to CSS:
```css
@font-face {
  font-display: swap; /* or optional */
}
```

### D. Enable Gzip/Brotli Compression

**Check if enabled:**
```bash
curl -H "Accept-Encoding: gzip" -I https://www.healingtherapycenter.com
```

**Enable in .htaccess:**
```apache
# Enable Gzip compression
<IfModule mod_deflate.c>
  AddOutputFilterByType DEFLATE text/html text/plain text/xml text/css text/javascript application/javascript application/json
</IfModule>

# Or enable Brotli (better compression)
<IfModule mod_brotli.c>
  AddOutputFilterByType BROTLI_COMPRESS text/html text/plain text/xml text/css text/javascript application/javascript application/json
</IfModule>
```

### E. Browser Caching

**Add to .htaccess:**
```apache
<IfModule mod_expires.c>
  ExpiresActive On

  # Images
  ExpiresByType image/jpeg "access plus 1 year"
  ExpiresByType image/png "access plus 1 year"
  ExpiresByType image/webp "access plus 1 year"
  ExpiresByType image/svg+xml "access plus 1 year"

  # CSS and JavaScript
  ExpiresByType text/css "access plus 1 month"
  ExpiresByType application/javascript "access plus 1 month"

  # Fonts
  ExpiresByType font/woff2 "access plus 1 year"
</IfModule>
```

---

## 4. AI Search Optimization (2026 Priority)

### Completed ✅
- TL;DR summaries on all condition pages
- Structured "What is it?" / "How we help" format
- Last Reviewed dates
- Location mentions (Dearborn, Michigan)
- FAQ sections

### Still Needed
- [ ] Monthly AI visibility testing (see AI-SEARCH-VISIBILITY-TRACKING.md)
- [ ] Track AI referral traffic in Google Analytics
- [ ] Test in ChatGPT, Claude, Perplexity monthly
- [ ] Update content with 2026 references

### What AI Engines Look For
1. **Direct, scannable answers** ✅ (you have TL;DRs)
2. **FAQ sections** ✅ (added to pages)
3. **Freshness signals** ✅ (Last Reviewed dates)
4. **Local context** ✅ (Dearborn, Michigan mentions)
5. **Structured data** ✅ (schema markup)

---

## 5. Brand Signals (NEW 2026 Priority)

### Completed ✅
- Google Business Profile set up

### Critical Next Steps

**Action Required:**
1. **Maintain Google Business Profile**
   - Keep hours updated
   - Add posts monthly (mental health tips, updates)
   - Respond to all reviews within 48 hours
   - Upload photos regularly (office, team)
   - Enable messaging if you want direct contact

2. **Directory Listings** (see DIRECTORY-LISTING-STRATEGY.md)
   - Psychology Today (TIER 1 - highest ROI)
   - TherapyDen
   - GoodTherapy
   - Professional associations

3. **NAP Consistency**
   Ensure identical info everywhere:
   ```
   Name: Healing Therapy Center
   Address: 22005 Outer Dr W, Dearborn, MI 48124
   Phone: (313) 654-1915
   ```

4. **Review Generation**
   - Request Google reviews from satisfied clients
   - Facebook reviews
   - Respond to all reviews (positive and negative)

---

## 6. Implementation Priority

### TIER 1: This Week
1. ✅ Add TL;DR summaries (DONE)
2. ✅ Add Last Reviewed dates (DONE)
3. ✅ Google Business Profile (DONE)
4. 🔲 Test Core Web Vitals in Google Search Console
5. 🔲 Run initial AI visibility tests
6. 🔲 Set up Psychology Today profiles

### TIER 2: This Month
1. 🔲 Convert images to WebP format
2. 🔲 Compress all images (< 200KB for heroes)
3. 🔲 Add font-display: swap to fonts
4. 🔲 Verify Gzip compression enabled
5. 🔲 Add browser caching to .htaccess
6. 🔲 List on 5-10 directories

### TIER 3: Next Quarter
1. 🔲 Monitor Core Web Vitals monthly
2. 🔲 Track AI search citations monthly
3. 🔲 Build directory presence (15+ listings)
4. 🔲 Collect and respond to reviews (target: 20-30 Google reviews)
5. 🔲 Create Michigan-specific content if needed

---

## 7. Quick Wins Checklist

- [x] Schema markup (excellent coverage)
- [x] TL;DR summaries for AI search
- [x] Last Reviewed dates
- [x] BreadcrumbSchema
- [x] PersonSchema for team
- [x] Google Business Profile
- [x] Image lazy loading
- [x] Image width/height attributes
- [x] FAQ sections
- [ ] Phone number prominent in schema ✅ (already in schema - verify visible on site)
- [ ] WebP image format
- [ ] Gzip/Brotli compression
- [ ] Browser caching
- [ ] Font optimization
- [ ] Psychology Today listings
- [ ] Monthly Core Web Vitals monitoring
- [ ] Monthly AI visibility testing

---

## 8. Measuring Success

### Track Monthly
1. **Core Web Vitals scores** (Google Search Console)
   - LCP trend
   - INP trend (NEW 2026 metric)
   - CLS trend
   - % pages passing thresholds (target: 75%+)

2. **AI Search Visibility** (AI-SEARCH-VISIBILITY-TRACKING.md)
   - Citations in ChatGPT responses
   - Citations in Claude responses
   - Citations in Perplexity responses
   - AI referral traffic %

3. **Rankings**
   - Top keyword positions
   - Local pack visibility (Google Maps 3-pack)
   - Featured snippets won

4. **Traffic**
   - Organic traffic trend (target: +10-15%/quarter)
   - AI referral traffic (target: 5%+ of total)
   - Directory referral traffic (target: 15-20%)
   - Conversion rate by source

5. **Reviews**
   - Google reviews count (target: +2-4/month)
   - Average rating
   - Response rate

---

## 9. Common Issues & Fixes

### If LCP is Poor (> 4.0s):

**Check:**
1. Hero image file size (compress to < 200KB)
2. Image format (convert to WebP)
3. Server response time (upgrade hosting if slow)
4. Render-blocking resources (defer non-critical JS/CSS)

**Quick Fixes:**
```html
<!-- Preload critical hero image -->
<link rel="preload" as="image" href="hero.webp">

<!-- Defer non-critical CSS -->
<link rel="stylesheet" href="non-critical.css" media="print" onload="this.media='all'">

<!-- Defer JavaScript -->
<script src="script.js" defer></script>
```

---

### If INP is Poor (> 500ms):

**Check:**
1. Heavy JavaScript execution
2. Third-party scripts (analytics, chat widgets)
3. Event listeners on clicks
4. Long-running tasks

**Quick Fixes:**
```html
<!-- Defer third-party scripts -->
<script src="analytics.js" defer></script>

<!-- Load heavy scripts after page load -->
<script>
window.addEventListener('load', function() {
  // Load heavy scripts here
});
</script>
```

---

### If CLS is Poor (> 0.25):

**Current Status:** Should be good (you have width/height on images) ✅

**If still poor, check:**
1. Ads or embeds without reserved space
2. Dynamic content insertion
3. Web fonts causing layout shift

**Fixes:**
```html
<!-- Always set dimensions -->
<img src="image.webp" width="800" height="600" alt="...">

<!-- Reserve space for embeds -->
<div style="aspect-ratio: 16/9;">
  <iframe src="..."></iframe>
</div>

<!-- Prevent font layout shift -->
<style>
@font-face {
  font-display: swap;
}
</style>
```

---

## 10. Tools & Resources

### Free Testing Tools
- [Google Search Console](https://search.google.com/search-console) - Real user data
- [PageSpeed Insights](https://pagespeed.web.dev/) - Page testing
- [Web.dev Measure](https://web.dev/measure/) - Quick tests
- [GTmetrix](https://gtmetrix.com/) - Detailed performance analysis

### Image Optimization
- [TinyPNG](https://tinypng.com/) - Compress PNG/JPG
- [Squoosh](https://squoosh.app/) - Advanced compression & WebP conversion
- [CloudConvert](https://cloudconvert.com/) - Batch conversion

### Code Optimization
- [CSS Minifier](https://cssminifier.com/)
- [JavaScript Minifier](https://javascript-minifier.com/)

### Learning Resources
- [Web.dev Core Web Vitals](https://web.dev/vitals/)
- [INP Optimization Guide](https://web.dev/inp/) - NEW 2026 metric
- [2026 Core Web Vitals Technical Guide](https://almcorp.com/blog/core-web-vitals-2026-technical-seo-guide/)

---

## 11. Server-Side Optimizations

### If You Have Server Access

**Check Current Setup:**
- PHP version (use PHP 8.0+ for better performance)
- Server caching (OPcache for PHP)
- Database optimization (if using MySQL)

**Recommended .htaccess Additions:**
```apache
# Force HTTPS (if not already)
RewriteEngine On
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

# Enable Gzip
<IfModule mod_deflate.c>
  AddOutputFilterByType DEFLATE text/html text/plain text/xml text/css text/javascript application/javascript application/json application/xml
</IfModule>

# Browser Caching
<IfModule mod_expires.c>
  ExpiresActive On
  ExpiresByType image/jpg "access plus 1 year"
  ExpiresByType image/jpeg "access plus 1 year"
  ExpiresByType image/png "access plus 1 year"
  ExpiresByType image/webp "access plus 1 year"
  ExpiresByType text/css "access plus 1 month"
  ExpiresByType application/javascript "access plus 1 month"
</IfModule>

# Security headers (bonus)
<IfModule mod_headers.c>
  Header set X-Content-Type-Options "nosniff"
  Header set X-Frame-Options "SAMEORIGIN"
  Header set X-XSS-Protection "1; mode=block"
</IfModule>
```

---

## 12. Priority Pages to Optimize First

Focus optimization efforts on highest-traffic pages:

1. **Homepage** (index.php) - Most visited
2. **ADHD Testing** (adhd-testing-evaluation.php) - High-value service
3. **Autism Evaluation** (autism-evaluation.php) - High-value service
4. **Anxiety Therapy** (anxiety-therapy-michigan.php) - High search volume
5. **Couples Therapy** (couples-therapy.php) - Popular service
6. **Trauma Treatment** (trauma-ptsd-treatment.php) - Important service

**Why:** Optimize pages that drive most traffic/revenue first, then expand.

---

## Summary: PHP/HTML Performance Optimization Roadmap

**You have excellent SEO fundamentals already.** This guide focuses on:

1. **Core Web Vitals** - Meet 2026 standards (especially new INP metric)
2. **Image optimization** - WebP format, compression, preloading
3. **Code optimization** - Minification, deferring, caching
4. **AI search** - Already well-optimized with TL;DRs and FAQs
5. **Brand building** - Directory listings, reviews

**Start with:**
- Core Web Vitals check (30 minutes)
- Image compression (2-3 hours)
- .htaccess optimizations (30 minutes)
- Psychology Today setup (2-3 hours)

**Then monitor monthly and iterate.**

---

**Last Updated:** April 26, 2026
**Next Review:** May 2026
**See Also:**
- 2026-SEO-IMPLEMENTATION-GUIDE.md (master action plan)
- CORE-WEB-VITALS-MONITORING.md (detailed monitoring)
- AI-SEARCH-VISIBILITY-TRACKING.md (AI testing)
- DIRECTORY-LISTING-STRATEGY.md (directory roadmap)
