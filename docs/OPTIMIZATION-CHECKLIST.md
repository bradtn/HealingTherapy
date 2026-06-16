# Static HTML Optimization Checklist
## Healing Therapy Center Website

Print this checklist and check off items as you complete them.

---

## 📋 PHASE 1: QUICK WINS (30 minutes)

### Backup First! ⚠️
- [ ] Login to cPanel File Manager
- [ ] Compress `public_html` folder to ZIP
- [ ] Download backup ZIP to computer
- [ ] Date of backup: _______________

### Delete Unused Files (2 min, saves 21.5MB)
- [ ] Delete `assets/img/blog2.jpg.original`
- [ ] Delete `assets/img/blog3.jpg.original`
- [ ] Delete `assets/img/blog-6.jpg.original`
- [ ] Verify site still works

### Optimize Font Loading (10 min, saves 400KB)
- [ ] Find old Google Fonts link in HTML
- [ ] Replace with optimized version (only 400,500,600,700 weights)
- [ ] Test 2-3 pages to verify fonts look correct
- [ ] Update all HTML pages (or PHP header include)

### Add .htaccess Optimizations (5 min, huge impact)
- [ ] Backup existing .htaccess (if exists)
- [ ] Create/update .htaccess with optimization code
- [ ] Test site loads correctly
- [ ] Check HTTPS redirect works (if SSL enabled)

### Add 'defer' to Scripts (10 min)
- [ ] Add `defer` to Bootstrap JS
- [ ] Add `defer` to vendor scripts (AOS, Glightbox, Swiper)
- [ ] Add `defer` to main.js
- [ ] Test all JavaScript functionality works

### Test Quick Wins
- [ ] Run PageSpeed Insights BEFORE changes: Score = _____
- [ ] Run PageSpeed Insights AFTER changes: Score = _____
- [ ] Test on mobile device
- [ ] Test on desktop
- [ ] Improvement: +_____ points

---

## 📋 PHASE 2: IMAGE OPTIMIZATION (2-4 hours)

### Compress JPG/PNG Images
- [ ] Download all images from `assets/img/`
- [ ] Use TinyPNG.com to compress all JPGs
- [ ] Use TinyPNG.com to compress all PNGs
- [ ] Compare file sizes: Before ___MB → After ___MB
- [ ] Upload compressed images back to server
- [ ] Test random pages to verify images load

### Convert Large JPGs to WebP
- [ ] Identify JPGs > 300KB
- [ ] Convert to WebP using Squoosh.app
  - [ ] malak.jpg → malak.webp
  - [ ] blog-7.jpg → blog-7.webp
  - [ ] (List others: ________________)
- [ ] Update HTML to use `<picture>` element with WebP + fallback
- [ ] Test in Chrome (WebP) and Safari (fallback)

### Re-compress Existing WebP Files
- [ ] individual.webp (767KB → target 200KB)
- [ ] hero-bg.webp (764KB → target 250KB)
- [ ] therapist-bg.webp (550KB → target 180KB)
- [ ] faq.webp (546KB → target 150KB)
- [ ] Upload re-compressed images
- [ ] Test visual quality acceptable

### Test Image Optimization
- [ ] All images load correctly
- [ ] No broken images
- [ ] Quality looks good
- [ ] Total image size: Before 34MB → After ___MB

---

## 📋 PHASE 3: CODE OPTIMIZATION (30-60 min)

### Minify CSS
- [ ] Copy contents of `assets/css/main.css`
- [ ] Minify at cssminifier.com
- [ ] Save as `assets/css/main.min.css`
- [ ] Update HTML `<link>` tags to use main.min.css
- [ ] Test site styling looks correct
- [ ] File size: Before 48KB → After ___KB

### Minify JavaScript
- [ ] Copy contents of `assets/js/main.js`
- [ ] Minify at javascript-minifier.com
- [ ] Save as `assets/js/main.min.js`
- [ ] Update HTML `<script>` tags to use main.min.js
- [ ] Test all JavaScript functionality
- [ ] File size: Before 5.7KB → After ___KB

### Optional: Use CDN for Vendor Files
- [ ] Replace local Bootstrap CSS with CDN version
- [ ] Replace local Bootstrap JS with CDN version
- [ ] Test site works with CDN versions
- [ ] Remove unused vendor files (optional)

---

## 📋 PHASE 4: SEO & ACCESSIBILITY (1-2 hours)

### Check Meta Descriptions
- [ ] Homepage (150-160 chars, has CTA)
- [ ] Individual Therapy page
- [ ] Couples Therapy page
- [ ] Autism Evaluation page
- [ ] ADHD Testing page
- [ ] Team member pages
- [ ] Blog posts

### Improve Alt Text on Images
- [ ] Logo has descriptive alt text
- [ ] Team member photos have names
- [ ] Service images describe the service
- [ ] Hero images have descriptive alt text
- [ ] All `<img>` tags have alt attribute

### Add ARIA Labels
- [ ] Phone number links have aria-label
- [ ] Social media icon links have aria-label
- [ ] Mobile menu toggle has aria-label
- [ ] Form inputs have labels or aria-label
- [ ] Modal close buttons have aria-label

### Check Heading Hierarchy
- [ ] Homepage has one H1, logical H2-H6
- [ ] Service pages have proper hierarchy
- [ ] No skipped heading levels
- [ ] Headings describe content accurately

### Check Color Contrast
- [ ] Run WebAIM contrast checker on main colors
- [ ] Body text has 4.5:1 contrast minimum
- [ ] Button text has 4.5:1 contrast
- [ ] Fix any failing color combinations

---

## 📋 PHASE 5: TESTING & VALIDATION (1 hour)

### PageSpeed Insights
- [ ] Test homepage (mobile): Score = _____
- [ ] Test homepage (desktop): Score = _____
- [ ] Test Individual Therapy page: Score = _____
- [ ] Test Couples Therapy page: Score = _____
- [ ] Test Autism Evaluation page: Score = _____
- [ ] All pages score 80+ on mobile?

### Core Web Vitals
- [ ] LCP (Largest Contentful Paint) < 2.5s
- [ ] INP (Interaction to Next Paint) < 200ms
- [ ] CLS (Cumulative Layout Shift) < 0.1
- [ ] Fix any pages with "Poor" scores

### HTML Validation
- [ ] Run homepage through validator.w3.org
- [ ] Fix any errors
- [ ] Run 2-3 other pages through validator
- [ ] All pages valid HTML?

### Browser Testing
- [ ] Chrome (desktop)
- [ ] Firefox (desktop)
- [ ] Safari (desktop)
- [ ] iPhone/Safari (mobile)
- [ ] Android/Chrome (mobile)
- [ ] iPad (tablet)

### Functionality Testing
- [ ] Navigation menus work
- [ ] Forms submit correctly
- [ ] All links work
- [ ] Images load properly
- [ ] JavaScript animations work
- [ ] Contact info displays correctly
- [ ] Schema markup displays in search (check Google)

---

## 📋 PHASE 6: MONITORING (Ongoing)

### Weekly (First Month)
- [ ] Check PageSpeed Insights scores
- [ ] Check Google Search Console for errors
- [ ] Monitor site uptime
- [ ] Check for broken links

### Monthly
- [ ] Review Core Web Vitals in Search Console
- [ ] Check for 404 errors
- [ ] Update "Last Reviewed" dates on content
- [ ] Check if new images need compression

### Quarterly
- [ ] Full site audit (repeat optimizations)
- [ ] Update vendor libraries if needed
- [ ] Review and refresh meta descriptions
- [ ] Check mobile usability report

---

## 🎯 SUCCESS METRICS

### Performance Goals
- [ ] PageSpeed mobile score: 80+
- [ ] PageSpeed desktop score: 90+
- [ ] Total page size: < 1.5MB
- [ ] Load time on 3G: < 3 seconds

### File Size Goals
- [ ] Total images: < 10-12MB (from 34MB)
- [ ] CSS: < 40KB (from 48KB)
- [ ] Fonts: < 150KB (from 500KB+)

### SEO Goals
- [ ] All pages have unique meta descriptions
- [ ] All images have descriptive alt text
- [ ] Schema markup validates
- [ ] No HTML validation errors

### Accessibility Goals
- [ ] All interactive elements have labels
- [ ] Color contrast passes WCAG AA
- [ ] Heading hierarchy is logical
- [ ] Forms are properly labeled

---

## 📝 NOTES & ISSUES

### Issues Encountered:
1. _______________________________________________
2. _______________________________________________
3. _______________________________________________

### How Issues Were Resolved:
1. _______________________________________________
2. _______________________________________________
3. _______________________________________________

### Items to Revisit Later:
1. _______________________________________________
2. _______________________________________________
3. _______________________________________________

---

## ✅ COMPLETION

### Final Scores:
- **PageSpeed Mobile:** Before _____ → After _____
- **PageSpeed Desktop:** Before _____ → After _____
- **Total Site Size:** Before _____ → After _____
- **Improvement:** _____ % faster

### Date Completed: _______________
### Completed By: _______________

**Congratulations! Your site is now optimized! 🎉**

---

**Next:** Set calendar reminders for monthly monitoring and quarterly audits.
