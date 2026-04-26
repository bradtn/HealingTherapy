# Core Web Vitals Monitoring Guide (2026)

## 2026 Standards - NEW Metrics

### Critical Change: INP Replaced FID (March 2026)
Google officially replaced **FID (First Input Delay)** with **INP (Interaction to Next Paint)** as a Core Web Vital in March 2026.

---

## Current Core Web Vitals (2026)

| Metric | What It Measures | Good | Needs Improvement | Poor |
|--------|------------------|------|-------------------|------|
| **LCP** (Largest Contentful Paint) | Loading speed of largest element | < 2.5s | 2.5s - 4.0s | > 4.0s |
| **INP** (Interaction to Next Paint) | Responsiveness to clicks/taps | < 200ms | 200ms - 500ms | > 500ms |
| **CLS** (Cumulative Layout Shift) | Visual stability | < 0.1 | 0.1 - 0.25 | > 0.25 |

**Goal:** 75% of page visits must meet "Good" thresholds

---

## How to Check Your Core Web Vitals

### Method 1: Google Search Console (MOST IMPORTANT)

This shows **real user data** from actual visitors to your site.

**Steps:**
1. Go to [Google Search Console](https://search.google.com/search-console)
2. Select your property: healingtherapycenter.com
3. Click **Core Web Vitals** in left sidebar
4. View reports for:
   - Mobile (check this FIRST - most users)
   - Desktop

**What to Look For:**
- Green = Good URLs
- Yellow = URLs need improvement
- Red = Poor URLs

**Click into each category to see:**
- Which specific pages are failing
- What metric is causing the issue (LCP, INP, CLS)
- Historical trends

---

### Method 2: PageSpeed Insights (Testing Tool)

Test individual pages: https://pagespeed.web.dev/

**How to Use:**
1. Enter URL: https://www.healingtherapycenter.com/[page]
2. Click "Analyze"
3. View both:
   - **Field Data** (real users - 28 day average)
   - **Lab Data** (simulated test)

**Priority:** Field Data > Lab Data (real users matter most)

---

### Method 3: Chrome DevTools (Development)

For testing changes before deploying:

1. Open page in Chrome
2. Right-click > Inspect
3. Click **Lighthouse** tab
4. Select "Performance"
5. Click "Analyze page load"

**Note:** This is lab data only, not real users

---

## Understanding Each Metric

### LCP (Largest Contentful Paint) - Loading Speed

**What it measures:** How fast the largest visible element loads

**Common causes of poor LCP:**
- Large images not optimized
- Slow server response
- Render-blocking JavaScript/CSS
- Slow resource load times

**Your site's common LCP elements:**
- Hero images on pages
- Team member photos
- Service page headers

**How to improve:**
- Optimize images (compress, use WebP format)
- Add width/height to images (already doing ✅)
- Use lazy loading for below-fold images (already doing ✅)
- Preload critical images
- Use a CDN for image delivery

---

### INP (Interaction to Next Paint) - NEW 2026 METRIC

**What it measures:** How quickly page responds when user clicks/taps/types

**Common causes of poor INP:**
- Heavy JavaScript execution
- Long tasks blocking main thread
- Slow event handlers
- Third-party scripts

**Examples of interactions:**
- Clicking navigation menu
- Tapping appointment button
- Clicking accordion/FAQ items
- Form interactions

**How to improve:**
- Break up long JavaScript tasks
- Use async/defer for non-critical scripts
- Optimize event handlers
- Reduce third-party script impact
- Use web workers for heavy processing

---

### CLS (Cumulative Layout Shift) - Visual Stability

**What it measures:** How much content shifts around while loading

**Common causes of poor CLS:**
- Images without width/height (you're good ✅)
- Ads/embeds without reserved space
- Fonts causing layout shift (FOUT/FOIT)
- Dynamic content injection

**How to improve:**
- Always set width/height on images ✅ (already doing)
- Reserve space for dynamic content
- Use font-display: optional or swap
- Avoid inserting content above existing content
- Preload fonts

---

## Monthly Monitoring Checklist

### First Week of Each Month:

- [ ] Check Google Search Console Core Web Vitals report
- [ ] Review mobile performance (primary concern)
- [ ] Review desktop performance
- [ ] Identify any pages moved from Good → Needs Improvement
- [ ] Note any pages moved to Poor status
- [ ] Document any improvements (Poor → Good)

### Test These Priority Pages:
1. Homepage (index.php)
2. ADHD Testing (adhd-testing-evaluation.php)
3. Autism Evaluation (autism-evaluation.php)
4. Anxiety Therapy (anxiety-therapy-michigan.php)
5. Couples Therapy (couples-therapy.php)
6. Trauma Treatment (trauma-ptsd-treatment.php)

---

## Monthly Tracking Template

```markdown
## [Month Year] Core Web Vitals Report

**Report Date:** [Date]
**Data Source:** Google Search Console
**Data Period:** [28-day period]

### Mobile Performance

**Overall Status:**
- Good URLs: X (X%)
- Needs Improvement: X (X%)
- Poor URLs: X (X%)

**Metric Breakdown:**

| Metric | Good | Needs Improvement | Poor |
|--------|------|-------------------|------|
| LCP    | X%   | X%                | X%   |
| INP    | X%   | X%                | X%   |
| CLS    | X%   | X%                | X%   |

**Pages Needing Attention:**
1. [URL] - Issue: [LCP/INP/CLS] - Score: [X]
2. [URL] - Issue: [LCP/INP/CLS] - Score: [X]

### Desktop Performance

**Overall Status:**
- Good URLs: X (X%)
- Needs Improvement: X (X%)
- Poor URLs: X (X%)

### Month-over-Month Changes
- Good URLs: [+/- X%]
- Poor URLs: [+/- X%]
- Trend: [Improving/Declining/Stable]

### Action Items
- [ ] Fix [specific page] - [specific issue]
- [ ] Optimize [element] on [pages]
- [ ] Test fix on [page] with PageSpeed Insights

### Notes
[Any significant changes, updates made, or observations]
```

---

## Quick Fixes for Common Issues

### If LCP is Poor (> 4.0s):

**Check:**
1. Are images compressed? (Use TinyPNG.com or Squoosh.app)
2. Are images in WebP format?
3. Is the largest image above the fold?
4. Any render-blocking CSS/JS?

**Quick wins:**
- Compress hero images (target < 200KB)
- Convert PNG/JPG to WebP
- Preload critical images:
  ```html
  <link rel="preload" as="image" href="hero-image.webp">
  ```

---

### If INP is Poor (> 500ms):

**Check:**
1. Any heavy JavaScript on the page?
2. Third-party scripts (analytics, chat widgets)?
3. Complex event listeners?

**Quick wins:**
- Defer non-critical scripts:
  ```html
  <script src="script.js" defer></script>
  ```
- Load third-party scripts after page load
- Simplify click handlers

---

### If CLS is Poor (> 0.25):

**Check:**
1. Do all images have width/height? ✅ (you're doing this)
2. Are fonts causing layout shift?
3. Any content injected dynamically?

**Quick wins:**
- Preload fonts:
  ```html
  <link rel="preload" href="font.woff2" as="font" type="font/woff2" crossorigin>
  ```
- Use font-display: optional in CSS:
  ```css
  @font-face {
    font-family: 'YourFont';
    font-display: optional;
  }
  ```

---

## Integration with AI Search Visibility

**Important:** Core Web Vitals impact AI search rankings too!

ChatGPT, Claude, and Perplexity consider:
- Page load speed
- Mobile performance
- User experience signals

**Poor Core Web Vitals = Lower AI citation likelihood**

Monitor both together:
- Core Web Vitals (this document)
- AI Search Visibility (AI-SEARCH-VISIBILITY-TRACKING.md)

---

## Goals & Timeline

### Q2 2026 (Current - Jun)
**Target:**
- 75% of pages "Good" on mobile
- Identify and fix worst performers
- Establish baseline metrics

### Q3 2026 (Jul-Sep)
**Target:**
- 85% of pages "Good" on mobile
- All priority pages (top 10 services) "Good"
- INP < 200ms site-wide

### Q4 2026 (Oct-Dec)
**Target:**
- 90%+ pages "Good" on mobile
- Maintain performance
- No pages in "Poor" status

---

## Tools & Resources

### Testing Tools:
- [Google Search Console](https://search.google.com/search-console) - Real user data
- [PageSpeed Insights](https://pagespeed.web.dev/) - Page testing
- [Chrome DevTools](https://developer.chrome.com/docs/devtools/) - Development
- [Web.dev Measure](https://web.dev/measure/) - Quick tests

### Image Optimization:
- [TinyPNG](https://tinypng.com/) - Compress images
- [Squoosh](https://squoosh.app/) - Advanced compression
- [CloudConvert](https://cloudconvert.com/) - Convert to WebP

### Learning Resources:
- [Web.dev Core Web Vitals](https://web.dev/vitals/)
- [INP Optimization Guide](https://web.dev/inp/)
- [2026 Core Web Vitals Technical Guide](https://almcorp.com/blog/core-web-vitals-2026-technical-seo-guide/)

---

## Alert Thresholds

**Create email alerts when:**
- Good URLs drop below 70%
- Any priority page moves to "Poor"
- Site-wide LCP increases > 1 second
- INP increases > 100ms

**How to set up:**
Google Search Console doesn't have automatic alerts, but check weekly manually until stable.

---

**Last Updated:** April 26, 2026
**Next Review:** May 1-7, 2026
