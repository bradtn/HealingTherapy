# Title Tag Length Violations - Fixes Required

**Target:** ≤ 59 characters (Google displays ~60 chars max)
**Total Pages:** 61
**Violations:** 4
**Pass Rate:** 93.4%

---

## 🚨 VIOLATIONS REQUIRING IMMEDIATE FIX

### 1. Blue Cross Blue Shield Therapy Michigan
**File:** `blue-cross-blue-shield-therapy-michigan.php:3`
**Current Title:** `Blue Cross Blue Shield Therapy Michigan | BCBS Mental Health`
**Length:** 60 characters ❌

**Recommended Fix:**
```php
$page_title = 'BCBS Therapy Michigan | Blue Cross Mental Health';
```
**New Length:** 51 characters ✅
**Impact:** More concise, keeps key terms, under limit

---

### 2. Frequently Asked Questions
**File:** `faq.php:3`
**Current Title:** `Frequently Asked Questions | Healing Therapy Center Dearborn`
**Length:** 63 characters ❌

**Recommended Fix:**
```php
$page_title = 'FAQ | Healing Therapy Center Dearborn, MI';
```
**New Length:** 43 characters ✅
**Impact:** "FAQ" is universally understood, saves 20 characters

**Alternative (if you prefer spelling it out):**
```php
$page_title = 'FAQs | Healing Therapy Center Dearborn';
```
**New Length:** 42 characters ✅

---

### 3. FEP Blue Therapist Michigan
**File:** `fep-blue-federal-employee-therapy.php:3`
**Current Title:** `FEP Blue Therapist Michigan | Federal Employee Mental Health`
**Length:** 60 characters ❌

**Recommended Fix:**
```php
$page_title = 'FEP Blue Therapist Michigan | Federal Employee';
```
**New Length:** 49 characters ✅
**Impact:** Removes redundant "Mental Health" (implied by "Therapist")

**Alternative (even more concise):**
```php
$page_title = 'FEP Blue Therapy Michigan | Federal Employees';
```
**New Length:** 48 characters ✅

---

### 4. Trauma & PTSD Treatment in Michigan
**File:** `trauma-ptsd-treatment.php:3`
**Current Title:** `Trauma & PTSD Treatment in Michigan | Healing Therapy Center`
**Length:** 60 characters ❌

**Recommended Fix:**
```php
$page_title = 'Trauma & PTSD Treatment Michigan | HTC Dearborn';
```
**New Length:** 52 characters ✅
**Impact:** Removes "in", abbreviates center name

**Alternative (keeps full name):**
```php
$page_title = 'Trauma & PTSD Therapy in Michigan | Dearborn';
```
**New Length:** 48 characters ✅

---

## ✅ BORDERLINE (59 chars - currently OK but monitor)

These titles are at the limit but still acceptable:

### 1. PTSD & Trauma Therapy: Understanding and Healing | Michigan
**File:** `ptsd-trauma-therapy-guide.php:3`
**Length:** 59 characters ✅
**Status:** PASS (but at limit)

### 2. Crisis Resources & Suicide Hotline | Healing Therapy Center
**File:** `suicide-hotline.php:3`
**Length:** 59 characters ✅
**Status:** PASS (but at limit)

---

## 📝 HOW TO IMPLEMENT FIXES

### Option 1: Manual Edit (Quick)
Edit each file individually using the Edit tool.

**Example for blue-cross-blue-shield-therapy-michigan.php:**
```php
// OLD (line 3):
$page_title = 'Blue Cross Blue Shield Therapy Michigan | BCBS Mental Health';

// NEW (line 3):
$page_title = 'BCBS Therapy Michigan | Blue Cross Mental Health';
```

### Option 2: Batch Script (All at once)
I can create a script to update all 4 violations automatically.

---

## 🎯 PRIORITY ORDER

**HIGH PRIORITY (Fix Now):**
1. ✅ FAQ page (63 chars - most over limit)

**MEDIUM PRIORITY (Fix This Week):**
2. ✅ Blue Cross Blue Shield page (60 chars)
3. ✅ FEP Blue page (60 chars)
4. ✅ Trauma PTSD page (60 chars)

---

## ✅ TITLE TAG BEST PRACTICES REFERENCE

**Optimal Length:** 50-59 characters
**Maximum:** 60 characters (Google may truncate)
**Minimum:** 30 characters (too short looks spammy)

**Structure Tips:**
- Lead with primary keyword
- Include location (Michigan, Dearborn)
- Add brand name at end
- Use " | " or " - " separators
- Avoid keyword stuffing

**Good Examples from Your Site:**
- ✅ `Anxiety Therapy in Michigan | Telehealth & Dearborn` (51 chars)
- ✅ `ADHD Testing & Evaluation in Michigan | Children & Adults` (57 chars)
- ✅ `Therapist Troy MI | Mental Health Counseling & Therapy` (54 chars)

---

## 🚀 NEXT STEPS

**Immediate:**
1. Fix the 4 violations above
2. Test titles in Google SERP preview tool
3. Monitor Search Console for title changes

**Ongoing:**
1. Check all new pages before publishing
2. Use title length checker (free tools: Moz, SEOmofo)
3. Review titles quarterly

---

**Want me to implement these fixes automatically? I can update all 4 files now.**
