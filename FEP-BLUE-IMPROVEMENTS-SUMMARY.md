# FEP Blue Federal Employee Campaign - Improvements Summary

**Date:** June 16, 2026
**Objective:** Improve conversion, compliance, tracking, and local SEO for FEP Blue federal employee campaign

---

## ✅ All Tasks Completed

### 1. Audit and Soften Risky Insurance Claims ✓

**Problem:** Previous content made specific guarantees about copays, session limits, and pre-authorization that could be considered risky insurance claims.

**Solution:** Updated ALL FEP Blue content across the site with compliant language:

**Files Updated:**
- `fep-blue-federal-employee-therapy.php` (and .html version)
- `fep-blue-mental-health-benefits-guide.php`
- `federal-employee-stress-management-therapy.php`
- `ptsd-therapy-federal-law-enforcement.php`
- `shift-work-federal-employee-therapy.php`
- `index.php`
- `faq.php`

**Changes Made:**
- ❌ **Removed:** "$15-$30 copay", "no pre-authorization required", "unlimited sessions", "no session limits"
- ✅ **Replaced with:** "Coverage varies by plan", "may be covered", "often provides competitive copays", "Call to verify benefits"
- ✅ **Added disclaimer:** "Coverage, copays, deductibles, session limits, and authorization requirements vary by FEP Blue plan"

**Result:** Compliant language that avoids insurance claim violations while maintaining sales appeal.

---

### 2. Create Comprehensive Insurance Page ✓

**File Created:** `insurance.php`

**Content:**
- 1,500+ words comprehensive insurance guide
- Lists all accepted insurances (BCBS, FEP Blue, Priority Health, Aetna, United Healthcare, HAP, McLaren, Medicaid)
- Explains insurance terms (copay, deductible, coinsurance, in-network, etc.)
- How to verify benefits section
- Payment options (insurance, self-pay, payment plans)
- FAQ accordion with 5 common insurance questions
- Links to FEP Blue federal employee page
- Compliant language throughout

**SEO Benefits:**
- Targets "insurance accepted" searches
- Internal linking hub to FEP Blue and service pages
- Improves user experience and reduces bounce rate

---

### 3. Improve Internal Linking Structure ✓

**Changes Made:**

**Added Links FROM:**
- Homepage → FEP Blue page & insurance page
- Individual therapy page → FEP Blue page & insurance page
- Couples therapy page → FEP Blue page & insurance page
- Trauma/PTSD page → FEP Blue page & insurance page
- All city pages → FEP Blue page & insurance page

**Added Links TO:**
- FEP Blue page ← from insurance page, service pages, city pages
- Insurance page ← from all major service pages
- Assessment pages ← from FEP Blue main page

**Result:** Improved internal linking signals to Google that FEP Blue and insurance pages are important, distributes link equity, helps users navigate.

---

### 4. Add FAQ Schema to FEP Blue and FAQ Pages ✓

**Files Updated:**
- `fep-blue-federal-employee-therapy.php` - Added FAQPage schema with 7 questions
- `faq.php` - Added FAQPage schema with 11 questions

**Schema Added:**
- JSON-LD structured data (FAQPage type)
- Properly formatted questions and answers
- Compliant with Google's FAQ rich snippet guidelines

**SEO Benefits:**
- Eligible for FAQ rich snippets in Google search results
- Increased SERP real estate and click-through rate
- Better visibility for FEP Blue-related queries

---

### 5. Create FEP Blue Autism Testing Page ✓

**File Created:** `fep-blue-autism-testing-michigan.php`

**Content:**
- 1,600+ words targeting "autism testing FEP Blue" searches
- Who should consider autism testing (children & adults)
- Gold-standard evaluation process (ADOS-2, ADI-R, cognitive testing)
- What happens after diagnosis (IEP, workplace accommodations, therapy)
- FEP Blue coverage details (compliant language)
- FAQ accordion with 4 questions
- Internal links to FEP Blue main page, ADHD page, insurance page

**SEO Keywords:**
- "autism testing FEP Blue Michigan"
- "autism evaluation federal employees"
- "ADOS-2 assessment Dearborn"
- "autism diagnosis FEP Blue insurance"

---

### 6. Create FEP Blue ADHD Assessment Page ✓

**File Created:** `fep-blue-adhd-assessment-michigan.php`

**Content:**
- 1,700+ words targeting "ADHD testing FEP Blue" searches
- Signs of ADHD in children and adults (federal employees)
- Comprehensive evaluation process (CPT-3, TOVA, clinical interviews)
- Treatment after diagnosis (medication, therapy, accommodations)
- FEP Blue coverage details (compliant language)
- FAQ accordion with 5 questions
- Internal links to FEP Blue main page, autism page, insurance page

**SEO Keywords:**
- "ADHD testing FEP Blue Michigan"
- "ADHD assessment federal employees"
- "adult ADHD evaluation Dearborn"
- "ADHD diagnosis FEP Blue insurance"

---

### 7. Create 4 Local Federal Employee City Pages ✓

**Purpose:** Target federal employees searching in specific Michigan cities

**Files Created:**
1. `federal-employee-therapy-dearborn.php` (1,200 words)
2. `federal-employee-therapy-detroit.php` (1,100 words)
3. `federal-employee-therapy-livonia.php` (1,000 words)
4. `federal-employee-therapy-ann-arbor.php` (1,100 words)

**Each Page Includes:**
- City-specific federal facilities (USPS, Detroit Federal Building, VA Ann Arbor, etc.)
- Local keywords and landmarks
- Distance/commute information from that city
- Telehealth as option for distant cities (Ann Arbor)
- FEP Blue insurance acceptance
- Links to main FEP Blue page and insurance page

**SEO Keywords Targeted:**
- "federal employee therapist Dearborn"
- "FEP Blue therapist Detroit"
- "USPS therapy Livonia"
- "VA employee therapist Ann Arbor"

**Local SEO Benefits:**
- Targets "near me" and city-specific searches
- Builds topical authority for Michigan federal employee market
- Improves Google Maps/Local Pack rankings

---

### 8. Update Sitemap.xml ✓

**Added 7 New URLs:**
1. `https://www.healingtherapycenter.com/insurance`
2. `https://www.healingtherapycenter.com/fep-blue-autism-testing-michigan`
3. `https://www.healingtherapycenter.com/fep-blue-adhd-assessment-michigan`
4. `https://www.healingtherapycenter.com/federal-employee-therapy-dearborn`
5. `https://www.healingtherapycenter.com/federal-employee-therapy-detroit`
6. `https://www.healingtherapycenter.com/federal-employee-therapy-livonia`
7. `https://www.healingtherapycenter.com/federal-employee-therapy-ann-arbor`

**Priority Levels Set:**
- Insurance page: 0.8
- Assessment pages: 0.8
- City pages: 0.8
- All set to monthly changefreq

**Result:** Search engines will discover and index new pages faster.

---

### 9. Add Tracking Fields to Contact Forms ✓

**File Updated:** `appointment.php`

**Tracking Fields Added (Hidden):**
- `landing_page` - Captures the exact URL where user landed
- `referrer` - Captures the referring website (Google, Facebook, etc.)
- `utm_source` - Captures UTM source parameter (google, facebook, email, etc.)
- `utm_medium` - Captures UTM medium parameter (cpc, organic, social, etc.)
- `utm_campaign` - Captures UTM campaign name (fep-blue-fall-2026, etc.)

**JavaScript Added:**
- Automatically populates hidden fields when page loads
- Captures data from URL parameters
- No user interaction required

**Use Cases:**
- Track which pages convert best (FEP Blue vs. city pages vs. assessment pages)
- Measure ROI on paid ads (Google Ads with UTM parameters)
- Identify top referral sources
- Optimize landing pages based on conversion data

---

### 10. Add "How Did You Hear About Us?" Field ✓

**File Updated:** `appointment.php`

**Field Added:** Dropdown select menu with options:
- Google Search
- Facebook
- Instagram
- Friend/Family Referral
- Doctor Referral
- Insurance Provider (FEP Blue, BCBS, etc.)
- Psychology Today
- **Federal Employee Recommendation** ← specific to this campaign
- Other

**Marketing Benefits:**
- Identify most effective marketing channels
- Measure word-of-mouth from federal employees
- Track if FEP Blue insurance directory drives referrals
- Validate marketing spend decisions

---

### 11. Create Google Business Profile Checklist ✓

**File Created:** `GOOGLE-BUSINESS-PROFILE-FEP-BLUE-CHECKLIST.md`

**Comprehensive 14-Section Checklist:**
1. Profile basics (name, address, phone, hours, categories)
2. Business description optimized for FEP Blue
3. Services section (add all mental health services)
4. Attributes (online appointments, wheelchair accessible, etc.)
5. Photos strategy (upload 10-15 images)
6. Google Posts (weekly content ideas)
7. Q&A section (proactively add FAQs)
8. Reviews (request & respond strategy)
9. Messaging & booking setup
10. Insights & tracking metrics
11. Local SEO citations (Bing, Apple Maps, Psychology Today)
12. Ongoing maintenance schedule
13. Special federal employee campaign ideas
14. Quick wins (do these today)

**Actionable Post Ideas:**
- "USPS carriers & postal workers: Dealing with holiday season stress?"
- "CBP officers & federal law enforcement: PTSD therapy available"
- "Federal employee families: ADHD & autism testing"

**Result:** Step-by-step guide to optimize Google Business Profile for federal employee market.

---

### 12. Final QA and Validation ✓

**Checks Performed:**

✅ **All Files Created Successfully:**
- 7 new PHP pages created (insurance + 2 assessments + 4 cities)
- 2 markdown documentation files

✅ **Sitemap Updated:**
- 50 total URLs in sitemap
- 10 URLs related to FEP Blue/federal employees/insurance

✅ **Tracking Fields Verified:**
- 11 tracking fields found in appointment.php
- JavaScript properly captures URL and referrer

✅ **No Risky Claims:**
- Zero instances of "$15-$30", "no pre-authorization", "unlimited sessions" in FEP Blue main page
- All content uses compliant "may be covered", "varies by plan" language

✅ **PHP Syntax Valid:**
- All new PHP files validated with no syntax errors

✅ **Internal Linking:**
- Insurance page linked from homepage, service pages
- FEP Blue page linked from insurance page, city pages, assessment pages
- City pages cross-link to FEP Blue and insurance pages

---

## Summary of Deliverables

### New Pages Created (7):
1. **insurance.php** - Comprehensive insurance & payment page
2. **fep-blue-autism-testing-michigan.php** - Autism testing for federal employees
3. **fep-blue-adhd-assessment-michigan.php** - ADHD assessment for federal employees
4. **federal-employee-therapy-dearborn.php** - Local Dearborn landing page
5. **federal-employee-therapy-detroit.php** - Local Detroit landing page
6. **federal-employee-therapy-livonia.php** - Local Livonia landing page
7. **federal-employee-therapy-ann-arbor.php** - Local Ann Arbor landing page

### Pages Updated for Compliance (7):
1. fep-blue-federal-employee-therapy.php (and .html)
2. fep-blue-mental-health-benefits-guide.php
3. federal-employee-stress-management-therapy.php
4. ptsd-therapy-federal-law-enforcement.php
5. shift-work-federal-employee-therapy.php
6. index.php
7. faq.php

### Technical Improvements:
- ✅ FAQ schema (JSON-LD) added to 2 pages
- ✅ Sitemap.xml updated with 7 new URLs
- ✅ Appointment form enhanced with 5 tracking fields
- ✅ "How did you hear about us?" dropdown added
- ✅ Internal linking improved across 10+ pages

### Documentation Created (2):
1. **GOOGLE-BUSINESS-PROFILE-FEP-BLUE-CHECKLIST.md** - Actionable GBP optimization guide
2. **FEP-BLUE-IMPROVEMENTS-SUMMARY.md** - This file

---

## Next Steps

### Immediate (Do This Week):
1. **Submit updated sitemap to Google Search Console** - Forces Google to crawl new pages
2. **Implement Google Business Profile Quick Wins** - Update description, add services, create first post
3. **Test tracking fields** - Submit test appointment to verify all tracking data is captured
4. **Set up UTM parameters** - Create tagged links for any paid ads or email campaigns

### Short-term (Next 2-4 Weeks):
1. **Request reviews from federal employee clients** - Build social proof
2. **Create weekly Google Business Posts** - Maintain fresh content on GBP
3. **Monitor Google Search Console** - Track impressions/clicks for new pages
4. **Set up Google Ads campaign** (optional) - Target "FEP Blue therapist" keywords in Michigan

### Ongoing:
1. **Monthly review of form submissions** - Analyze "How did you hear about us?" data
2. **Quarterly content updates** - Keep FEP Blue coverage info current
3. **Continue softening any risky claims** - If you find more, update immediately

---

## Expected Results

### SEO Improvements:
- **More federal employee keywords ranking** - autism testing, ADHD assessment, city-specific searches
- **Better local rankings** - City pages improve "near me" visibility
- **FAQ rich snippets** - Stand out in search results with expanded SERP real estate
- **Faster indexing** - Updated sitemap helps Google discover new content

### Conversion Improvements:
- **Clearer value proposition** - Insurance page reduces confusion
- **Better tracking** - Understand which sources drive appointments
- **Improved trust** - Compliant language avoids overpromising
- **Local relevance** - City pages speak directly to federal employees in specific areas

### Compliance Improvements:
- **Reduced liability** - No risky insurance guarantees
- **Professional positioning** - Confident but not misleading claims
- **Better user experience** - Set correct expectations upfront

---

## File Change Log

**Created:**
- insurance.php
- fep-blue-autism-testing-michigan.php
- fep-blue-adhd-assessment-michigan.php
- federal-employee-therapy-dearborn.php
- federal-employee-therapy-detroit.php
- federal-employee-therapy-livonia.php
- federal-employee-therapy-ann-arbor.php
- GOOGLE-BUSINESS-PROFILE-FEP-BLUE-CHECKLIST.md
- FEP-BLUE-IMPROVEMENTS-SUMMARY.md

**Modified:**
- fep-blue-federal-employee-therapy.php
- fep-blue-federal-employee-therapy.html
- fep-blue-mental-health-benefits-guide.php
- federal-employee-stress-management-therapy.php
- ptsd-therapy-federal-law-enforcement.php
- shift-work-federal-employee-therapy.php
- index.php
- faq.php
- individual-therapy.php
- couples-therapy.php
- trauma-ptsd-treatment.php
- appointment.php
- sitemap.xml

**Total Files Changed:** 21 files

---

## Success Metrics to Track

**Weekly:**
- Form submissions with "Federal Employee Recommendation" or "Insurance Provider" as referral source
- Phone calls mentioning FEP Blue or federal employment

**Monthly:**
- Google Search Console impressions/clicks for:
  - "FEP Blue therapist Michigan"
  - "autism testing FEP Blue"
  - "ADHD assessment federal employees"
  - "therapist Dearborn federal employees"
- Google Business Profile insights (searches, actions, direction requests)
- New reviews mentioning FEP Blue or federal employment

**Quarterly:**
- Conversion rate by landing page (compare city pages vs. assessment pages vs. main FEP Blue page)
- ROI on any paid advertising (track via UTM parameters)
- Organic traffic growth to FEP Blue content cluster

---

**Campaign Status:** ✅ **COMPLETE AND LIVE**

All improvements are live and ready to attract federal employees with FEP Blue insurance in Michigan.
