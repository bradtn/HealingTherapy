# SEO Changes — Healing Therapy Center

**Date:** 2026-10-03
**Companion to:** `docs/SEO-AUDIT.md`. Finding IDs (T*, S*, C*, H*, M*, L*, P*) refer to that document.
**Search Console baseline:** 2026-06-30 → 2026-09-29: 554 clicks, 45,308 impressions, 1.22% CTR.

> **Pushing to GitHub does not change the live site.** healingtherapycenter.com is on GoDaddy cPanel, so these changes go live only when the files below are uploaded.

## Deploying

0. **Before uploading anything:**
   - **Delete `forms/appointment_debug.log` from the server.** It is publicly readable today and holds an appointment requester's name (audit T4/C0).
   - **Download a backup of the live `public_html/.htaccess`.** The live site runs PHP 8.2.32. If that file contains a block starting `# php -- BEGIN cPanel-generated handler, do not edit` (or any other "cPanel-generated" block), paste it unchanged at the **bottom** of the new `.htaccess` before uploading. Otherwise the site falls back to the server's default PHP version. The code has no PHP 8-only features and passes a syntax check on PHP 7.4–8.3, so a fallback would not break it, but keep the selected version anyway.
   - **Upload only the files listed below.** Do not upload the whole folder: it contains the Search Console zip, `docs/` and other repo-only files.
1. **Upload these files**, keeping their folder paths (57 files):
   - `.htaccess`, `404.php`, `sitemap.xml`, `assets/img/malak.jpg`
   - `includes/head.php`, `includes/footer.php`, `includes/therapist-profile.php`
   - Every changed page, as listed in the tables below: 50 root-level `.php` files.

   To list them all: `git diff --name-only e275082 -- . ':!docs' ':!.gitignore'`

   Do not upload `docs/` or `.gitignore`. They are repo-only, and `.htaccess` now blocks `docs/` anyway.
2. **Test immediately after uploading `.htaccess`.**
   - These must redirect (301) in one hop:
     - `http://healingtherapycenter.com/` → `https://www.healingtherapycenter.com/`
     - `https://www.healingtherapycenter.com/appointment/` → `/appointment`
     - `/appointment.php` → `/appointment`
     - `/appointment.html` → `/appointment`
     - `/index.php` → `/`
   - These must return **404**: `/docs/`, `/backup-html-originals/`, `/forms/rate_limit.txt`, `/router.php`, `/does-not-exist` (which should show the new "We couldn't find that page" design).
   - These must return **200**: `/robots.txt`, `/sitemap.xml`, `/llms.txt`, `/google9551257daa769288.html`.
   - Submit the contact and appointment forms once each, since they post to `/forms/*.php`.
3. **If anything returns a 500 after the upload, restore the previous `.htaccess`.** It is in git history: `git show e275082:.htaccess`. The new rules were verified on Apache 2.4.68, but GoDaddy's build can differ.
4. **Afterwards:**
   - Search Console → Sitemaps → resubmit `sitemap.xml`.
   - URL Inspection → Request indexing for the pages listed in H6.

---

## Changes by file

### Server and technical

| File | What changed | Why | Search Console / audit finding | Monitor afterwards |
|---|---|---|---|---|
| `.htaccess` | **Rewrote the redirect/rewrite section.** Changes, in rule order: (1) Apache's internal redirects are excluded from all rules. (2) Repo-only paths return 404: `docs/`, `scripts/`, `backup-html-originals/`, `includes/`, `router.php`, `.gitignore`, `forms/*.txt`, `*.md`, `*.csv`, `*.py`, `*.sh`, `*.zip`, `*.log`. (3) Legacy URLs redirect straight to the final `https://www` clean URL: old typo URLs, `/index`, `/index.php`, `/index.html`, `*.html`, top-level `*.php` (GET/HEAD only) and trailing slashes. (4) A single protocol + host rule that leaves `/.well-known/` alone. (5) The clean-URL → `.php` rewrite now matches top-level slugs only. (6) Missing pages and blocked paths are served by `404.php`, because the host ignores `ErrorDocument`. | Trailing slash returned 500; every page had a `.php` duplicate; legacy URLs took 2–3 hops; docs, backups (with the old address), exports and visitor-IP rate-limit files were public | T1–T5; `/appointment.html` 572 impr at pos 7.35 vs `/appointment` 985 impr at pos 42.94 | Pages report: "Server error (5xx)", "Page with redirect", "Duplicate without user-selected canonical"; Crawl stats 5xx share |
| `404.php` (new) | Site-designed error page with links to services, therapists, insurance, FAQ and contact. `noindex, follow`, no canonical. Keeps Apache's error status via `REDIRECT_STATUS`, which works under mod_php, CGI and FastCGI (a 403 stays 403, a 500 stays 500), and returns a real 404 when requested directly | `ErrorDocument` pointed at a file that didn't exist | T5 | Soft-404 count in the Pages report |
| `includes/head.php` | Optional `$meta_robots`. Canonical, `og:url` and BreadcrumbList are skipped when `$canonical_url` is empty. Every existing page sets a canonical, so their output is unchanged (verified by crawl) | Needed for a noindexed error page without a canonical | T5 | — |
| `sitemap.xml` | `lastmod` = each page's real last change (git), or 2026-10-03 for pages changed here. URLs and priorities unchanged | 64/74 dates were stale | T8 | Sitemaps report: "last read" date and discovered URLs |
| `assets/img/malak.jpg` | 3024×4032 / 688 KB → 704×939 / 69 KB, metadata stripped. It now matches the other headshots (about 700×1000) | Shown at 112–491 px; phone-camera original | Audit M5 | Core Web Vitals (mobile) for `/malak-wehbe` and `/therapists` |
| `.gitignore` | Ignores `*.zip` | Keeps Search Console exports out of this public repo. `endsite` runs `git add -A` | Rule 7 | — |

### Sitewide templates

| File | What changed | Why | Finding | Monitor |
|---|---|---|---|---|
| `includes/footer.php` | "Areas We Serve → Dearborn" now links to the homepage instead of `/federal-employee-therapy-dearborn`. Detroit, Livonia and Ann Arbor (federal-employee pages) moved under a new "Federal Employees" footer heading | A sitewide "Dearborn" anchor told Google the Dearborn page was a niche federal page | T6; "therapy dearborn" 186 impr pos 23.4, "therapist dearborn" 119 pos 18.8, "therapists in dearborn" 83 pos 14.4, "dearborn therapist" 88 pos 29.2 | Positions of those four queries; homepage impressions for Dearborn terms |
| `includes/therapist-profile.php` | New optional `$tp_specialty_links`: Areas of Focus chips with a matching service page become links. "Insurance & payment options" link added to the profile sidebar | Profiles convert best (Dr. Habhab 13.6% CTR) but linked to no service page | Audit §6 | Clicks from profiles to service pages (GA4); service-page rankings |

### Homepage

| File | What changed | Why | Finding | Monitor |
|---|---|---|---|---|
| `index.php` | Removed `aggregateRating` (4.8/38) from the MedicalBusiness JSON-LD. H2 "Trusted Healing Therapy Services Near Me in Dearborn, MI" → "Visit Our Therapy Office in Dearborn, MI" | Rating wasn't shown on the page and self-serving reviews can't earn stars (manual-action risk); "near me" in copy is keyword stuffing | T9, L2 | Search Console → Manual actions (should stay clean); homepage Dearborn queries |

### Insurance cluster

| File | What changed | Why | Finding | Monitor |
|---|---|---|---|---|
| `blue-cross-blue-shield-therapy-michigan.php` | **Title:** "BCBS Therapy Michigan \| Blue Cross Mental Health" → "Blue Cross Blue Shield of Michigan Therapists \| Dearborn". **Description:** "Dearborn therapists in-network with Blue Cross Blue Shield of Michigan & Blue Care Network: counseling, couples therapy & ADHD testing. (313) 654-1915". **Link added** → FEP Blue therapy. **Removed** "LLMSW" from the credentials line | The searches it can win come from people looking for a therapist who takes BCBS, not from coverage questions | 2,743 impr, 10 clicks, 0.36% CTR, pos 16.69; "blue cross blue shield of michigan therapists" 125 @17.7; psychologist variants ≈200 @15–20 | CTR and position (28 days vs 28 days); the query above |
| `priority-health-therapy-michigan.php` | **Title:** → "Priority Health Therapy Coverage & Therapists \| Dearborn". **Description:** → "Does Priority Health cover therapy? Benefits vary by plan. Our Dearborn therapists are in-network and check your copay, deductible and referral needs first." **Removed** "LLMSW" | It ranks on page one for coverage questions, but the snippet didn't answer them | 939 impr, 0.64% CTR, pos 10.17; "does priority health cover therapy" @10.5 | CTR at stable position |
| `aetna-therapy-michigan.php` | **Title:** "Aetna Therapy Michigan \| Mental Health Coverage Accepted" → "Aetna Therapists in Dearborn, MI \| In-Person & Telehealth". **Removed** "LLMSW" | National "does Aetna cover therapy" queries (pos 55–80) are unwinnable; provider queries are at 19–26 | 1,084 impr, pos 37.27; "aetna therapist near me" 48 @19.3 | Provider-query positions |
| `united-healthcare-therapy-michigan.php` | Removed "LLMSW" from the credentials line | No clinician holds that credential | P4 | — |
| `fep-blue-mental-health-benefits-guide.php` | **Description:** → "How FEP Blue mental health benefits work for Michigan federal employees: covered services, pre-authorization, session limits and how to verify your costs." (it no longer promises copays the page doesn't give). **Links** → FEP ADHD, FEP autism, shift-work and PTSD law-enforcement pages. **Accuracy:** "(Fully Covered)" removed; Myth #1 corrected (claims carry a diagnosis code; no absolute "NEVER"); crisis lines now "988 Suicide & Crisis Lifeline: call or text 988" and "Veterans Crisis Line: Dial 988, then Press 1" | Ranks at 8.8 but gets few clicks; the snippet was inaccurate; YMYL accuracy | 1,142 impr, 5 clicks, 0.44% CTR, pos 8.79 | CTR at stable position |
| `fep-blue-federal-employee-therapy.php` | **Links** → guide, FEP ADHD, FEP autism, PTSD law-enforcement and stress pages, plus the four federal city pages. **Privacy FAQ** corrected on the page and in the markup. **FAQ markup:** questions aligned with the visible headings; telehealth answer aligned. Title and description unchanged (best CTR in the cluster) | Hub never linked to its spokes; FEP testing pages were linked only from each other; inaccurate privacy claim | 490 impr, 1.22% CTR, pos 15.57 | Clicks; spoke-page impressions |
| `fep-blue-adhd-assessment-michigan.php`, `fep-blue-autism-testing-michigan.php` | "Related Pages" now include `/adhd-testing-evaluation` or `/autism-evaluation`, plus the benefits guide | Each was linked only from the other (now linked from 4 pages each) | 44 impr @8.16; 40 impr @8.5 | Impressions and clicks |
| `insurance.php` | **Hub links** → FEP benefits guide, Blue Care Network (BCBS page), private-pay page, autism insurance guide | Hub-and-spoke structure | 202 impr, pos 20.79 | Spoke impressions |
| `private-pay-out-of-network-therapy.php` | **Description** shortened (166 → 152 characters). Superbill clarification added to the visible FAQ and its markup: submitting a superbill sends a diagnosis to the insurer | Over the length limit; accuracy | 72 impr (live since 2026-09-13) | — |
| `autism-evaluation-michigan-insurance.php` | **Title:** → "Does Insurance Cover Autism Evaluations in Michigan?". **Links** → `/autism-evaluation` and the BCBS, Aetna and Priority Health pages | It led with `/autism-evaluation`'s main phrase; no impressions | 0 impr | Impressions after indexing |
| `faq.php`, `federal-employee-therapy-{ann-arbor,dearborn,detroit,livonia}.php` | "Complete … FEP Blue Coverage Guide" anchors now point to the guide instead of the service page. `/faq` FAQ markup aligned with the visible answers: the visible FEP answer gained the "varies by plan, call to verify" sentence the markup already had; the insurer-list answer no longer names insurers the visible text doesn't | Anchor/target mismatch; markup must match visible content | Audit §4, §8 | — |

### Testing / autism / ADHD cluster

| File | What changed | Why | Finding | Monitor |
|---|---|---|---|---|
| `autism-evaluation.php` | **Title:** "Autism Evaluation in Dearborn, MI \| Children" → "Child Autism Evaluation & Testing in Dearborn, MI". **Description:** → "Autism evaluations for children in Dearborn, MI using the ADOS-2 and ADI-R, with a detailed report and feedback session. BCBS, Aetna accepted. (313) 654-1915". **Links** → screening tool ("a screening, not a diagnosis"), autism signs, insurance guide, FEP autism page | Missing "testing" wording; weakly linked (3 → 8 linking pages) | 91 impr, 0 clicks, pos 20.51; "autism evaluation near me" 75 @15.7 | Impressions, position |
| `adhd-testing-evaluation.php` | **Title:** → "ADHD Testing for Children & Adults in Dearborn, MI". **H1:** → "Comprehensive ADHD Evaluations for Children, Teens & Adults". **Description:** → in-person office testing (removed "telehealth statewide", which contradicted its own FAQ). **Links** → ADHD guide, FEP ADHD page, therapists | Zero impressions in 3 months; inaccurate snippet | 0 impr; "adhd testing near me" 59 @13.1 | Impressions after Request indexing |
| `autism-screening-tool.php` | **Title:** → "Free Toddler Autism Screening Questionnaire (M-CHAT-R)". **H1:** + " for Toddlers". **Description:** states "A screening, not a diagnosis". Disclaimer now links to `/autism-evaluation`. "Insurance Accepted" now links to `/insurance` (was `/#hero`); "Evidence-Based" anchor → "Autism Evaluations" | Toddler/M-CHAT queries; YMYL clarity that screening ≠ diagnosis | 412 impr, pos 59.19; toddler/M-CHAT queries 184 impr @62–96 | Toddler-query positions |
| `autism-signs.php`, `is-autism-curable.php` | Contextual links → `/autism-evaluation`, `/autism-screening-tool`, `/autism-signs` | Supporting articles didn't link to the service | Audit §6 | — |
| `psychological-testing.php` | One sentence added naming Dr. Nadia Habhab, PhD, LP (testing and autism evaluations are among her listed areas of focus), linked to her profile. Nothing else changed | E-E-A-T for a YMYL service; this page's title, H1 and anchors are protected | 2,394 impr, 39 clicks, pos 31.48 | Clicks must not drop |

### Core service pages

| File | What changed | Why | Finding | Monitor |
|---|---|---|---|---|
| `anxiety-therapy-michigan.php` | **Title:** → "Anxiety Therapy in Dearborn, MI \| Telehealth in Michigan". **H1:** → "Anxiety & Panic Disorder Treatment in Dearborn and Across Michigan". **Description:** Dearborn-first. Clinicians named (Dr. Habhab, Donna Majed, Malak Wehbe, from their profiles). Telehealth link. **Crisis box added** (988, Crisis Text Line), matching the depression page | Led with unwinnable statewide terms; no crisis resources on an anxiety page | 838 impr, 0 clicks, pos 62.83; "anxiety therapy" 58 @11.1 | Dearborn anxiety query positions |
| `premarital-counseling-michigan.php` | **Title:** → "Premarital Counseling in Dearborn, MI & Online in Michigan". **Description:** removed "Insurance accepted." (the page says "Insurance May Cover") | Wrong-intent impressions ("seminars" @78); overstated insurance | 1,304 impr, pos 55.34 | Share of impressions from "seminar" queries; Dearborn premarital positions |
| `couples-therapy.php` | Links → premarital, telehealth, family | Premarital had 1 in-content link; family had 3 | 2,620 impr, pos 43.12 | — |
| `individual-therapy.php`, `telehealth-therapy.php`, `anxiety-therapy-guide.php`, `parenting-child.php` | Contextual links → telehealth, therapists, anxiety service page, family therapy | Internal linking | Audit §6 | — |
| `family-therapy.php`, `group-therapy.php`, `perinatal-therapy.php` | One sentence each naming the relevant clinician, linked to their profile, using only what the profile states (Malak Wehbe: children and adolescents, CBT, play and art-based techniques; Donna Majed: individual and group therapy, women's mental health; Tiffany Murray: perinatal and postpartum; Donna Majed: postpartum) | No service page named a clinician | 1,533 / 451 / 387 impr | Position of "family counseling near me" (114 @14.6), "play therapy dearborn" (64 @6.3) |
| `trauma-ptsd-treatment.php` | FAQ markup answer aligned with the visible answer | Markup must match the visible text | Audit §8 | — |
| `attorney-…`, `first-responder-…`, `nurse-burnout-…`, `seasonal-affective-disorder-therapy-michigan.php` | Descriptions trimmed to ≤160 characters; facts unchanged | Phone number was truncated | T11 | — |

### Location pages

| File | What changed | Why | Finding | Monitor |
|---|---|---|---|---|
| All 7 `therapist-*-mi.php` | Team list replaced with profile-sourced entries, each name linked to its profile. Removed the wrong "LLMSW" credentials (Amal Ayad, Malak Wehbe) and the unsupported "executive stress" and "couples" attributions | Credential accuracy (YMYL); profiles weren't linked | P4; doorway review | — |
| `therapist-birmingham-mi.php` | **Title:** → "Birmingham, MI Therapy \| Telehealth or Dearborn Office". **Description:** telehealth or the Dearborn office | The old title implied a Birmingham office | 552 impr, 0.54% CTR, pos 30.49 | CTR |
| `therapist-bloomfield-hills-mi.php` | **Title:** → "Bloomfield Hills Therapy \| Telehealth or Dearborn Office"; description likewise | Same | 47 impr, pos 15.91 | — |
| `therapist-grosse-pointe-mi.php`, `therapist-northville-mi.php` | Descriptions 188/175 → 145/142 characters | Over the limit | T11 | Impressions after indexing |
| `therapist-troy-mi.php` | H2 "Meet Our Troy-Area Therapists" → "Meet Our Therapists" | Implied a local team | Doorway review | See H5 (consolidation decision) |

### Profiles and team page

| File | What changed | Why | Finding | Monitor |
|---|---|---|---|---|
| `dr-tiffany-murray.php` | **Title:** → "Tiffany Murray, LMSW \| Perinatal Therapist in Dearborn, MI". **Description:** her listed specialties; "couples counseling" removed (not on her page). Focus chips linked | Snippet showed no specialty or location and advertised a service her page doesn't mention | 764 impr, 1.57% CTR, pos 12.62 | CTR at stable position |
| `malak-wehbe.php` | **Title:** → "Malak Wehbe, MA, TLLP \| Child & Family Therapist, Dearborn" (from her own bio). Chip and bio link → family therapy | Role unclear in the snippet | 217 impr, 3.69% CTR, pos 12.86 | CTR |
| `dr-nadia-habhab.php`, `donna-majed.php` | Focus chips linked to the matching service pages. **Titles, descriptions and bios unchanged** | Best CTRs on the site (13.6% / 11.3%) | — | Clicks must not drop |
| `therapists.php` | **H1:** "Compassionate People. Meaningful Change." → "Meet Our Dearborn Therapists" with the tagline below. Tiffany's card: "Trauma-Focused Therapy" → "Life Transitions" (her profile says trauma-informed and lists Life Transitions) | The H1 named no topic; the card made an unsupported claim | 1,242 impr, pos 37.83 | Position |

---

## Validation performed

| Check | Result |
|---|---|
| PHP syntax (`php -l`) on every changed file under PHP 7.4, 8.0, 8.1, 8.2 (live: 8.2.32) and 8.3 | All clean; no PHP 8-only functions or syntax anywhere in the codebase |
| Full crawl of all 74 pages, compared with the pre-change crawl | All 200; one self-referencing `https://www` canonical each; titles ≤ 60 (longest 58); descriptions ≤ 160; exactly one H1, never equal to the title; no duplicate titles or descriptions; all JSON-LD parses; no `http://` or non-www references; no broken or non-canonical internal links; no orphan pages |
| FAQ structured data vs visible content | 157/157 questions and answers match |
| `.htaccess` on a local Apache 2.4.68 replica (http/https, www/non-www) | 56 URL cases pass (one-hop redirects, 404s for blocked paths, 200s for robots/sitemap/llms/verification/assets/forms); form POST not redirected; HSTS present; all 74 sitemap URLs return 200 with no redirect; no internal-redirect loops or PHP errors logged |
| Rendering | Changed sections checked in Chromium at 390 px (focus chips, crisis box, footer, team H1, location team list, autism paragraph); earlier mobile/desktop parity check on 8 key pages |
| Build/lint toolchain | None exists for this plain-PHP site (no package.json/composer). `php -l` and the crawl are the checks |
| Live site vs the repo version these changes start from (`e275082`), all 74 pages, paced crawl | 74/74 identical: titles, descriptions, canonicals, headings, structured-data types, internal links and full main text. No direct edits on the server would be overwritten |
| Leftover files on the live server (HEAD requests only) | `forms/appointment_debug.log` and `forms/rate_limit.txt` publicly readable (see step 0); `forms/mailtest.php` already removed |
| Not verifiable from here | Behaviour on GoDaddy's Apache (do the step 2 checks after upload); Business Profile settings; Search Console data after the change |

## Location pages, second pass (2026-10-03, after the owner's decision to keep them)

The suburb pages exist to bring telehealth clients from Oakland County and the Grosse Pointes, so they were kept and improved rather than consolidated (audit H5).

| File(s) | What changed | Why | Monitor |
|---|---|---|---|
| All 7 `therapist-*-mi.php` | Titles → "{City}, MI Therapist \| Telehealth or Dearborn Office" (Rochester Hills, Bloomfield Hills and Grosse Pointe drop ", MI" to stay ≤ 60). Birmingham and Bloomfield Hills get back the word "Therapist", which the first pass had dropped | Suburb searches are mostly "therapist + city" (e.g. "therapist birmingham" 19 impr, "therapist novi mi" 15, "therapist troy" 12); the title now also tells searchers up front that care is telehealth or the Dearborn office | CTR and position for "therapist {city}" queries |
| `therapist-troy-mi.php`, `therapist-rochester-hills-mi.php`, `therapist-novi-mi.php` | Descriptions → "Telehealth therapy for {City} residents, or in person at our Dearborn office…", keeping each page's existing services and insurers | Same intent as the titles; Birmingham, Bloomfield Hills, Grosse Pointe and Northville were already done | CTR |
| Troy, Rochester Hills, Northville, and federal Dearborn, Detroit and Livonia pages | Drive times corrected from OpenStreetMap routing to 835 Mason St, given as ranges (see audit P8) | They were written for the old office and understated, e.g. Troy said 25 min, measured about 30 mi / ~44 min uncongested | — |
| 6 suburb pages and federal Dearborn and Livonia pages | "Free parking" → "public parking near our West Dearborn office" | "Free" was unverified for the new office; the homepage says public parking is available nearby | — |

Validation: PHP 8.2 syntax check clean; all 74 pages re-checked (status, title ≤ 60, description ≤ 160, single H1 ≠ title, canonical, no duplicate titles or descriptions): no problems.

## Post-deploy verification (live, 2026-10-03)

| Check | Result |
|---|---|
| `forms/appointment_debug.log` | 404: removed |
| Redirect and access matrix against the live server (52 URL cases) | 0 failures. Every http, bare-domain, `index`, `.html`, `.php`, trailing-slash and old typo variant reaches its `https://www` URL in one 301. All repo-only paths 404 (`docs/`, backups, scripts, CSV, includes, `router.php`, `.gitignore`, `forms/rate_limit.txt`). `robots.txt`, `sitemap.xml`, `llms.txt`, Google verification, CSS and `forms/csrf_token.php` return 200 |
| All 74 sitemap URLs | 200 with no redirect |
| Live content vs committed code (all 74 pages) | 74/74 identical (titles, descriptions, canonicals, headings, text, structured data, links) |
| Error pages | **The host overrides `.htaccess` `ErrorDocument`**: every error came back as a bare 13-byte "404 Not Found", before and after the deploy. Status codes are correct, so there is no SEO impact. Fixed in commit `322234f`: `.htaccess` now routes missing pages and blocked paths to `404.php` (missing assets keep the bare 404). Tested on an Apache replica configured to override `ErrorDocument` the way the host does, and on standard Apache: 0 failures. **Needs one more upload of `.htaccess`** |

## How to judge the results

- Compare the **28 days after upload with the 28 days before**, per page, in Search Console → Performance with a page filter.
- **Title/description changes are tests.** If a page's clicks fall while its average position holds, revert that page's title. Each previous value is in the tables above and in git history.
- **Expect these effects:**
  - The `http://` homepage row disappears after the Business Profile change.
  - Old-address and `/appointment.html` rows fade.
  - Server-error and duplicate counts in the Pages report fall over 2–6 weeks.
- **Protected pages must not drop:** `/psychological-testing` (39 clicks), `/dr-nadia-habhab` (61 clicks), `/donna-majed` (20) and the homepage. If any of them falls by more than about 20% over 28 days with no position change, investigate first.

## Indexing and "therapist near me" pass (2026-10-26)

**Search Console (28 days):** 221 clicks, 16,962 impressions, avg position 23.2. URL Inspection: 59/75 sitemap pages indexed.

| Page | Problem | Change |
|---|---|---|
| `/` | "therapist near me" 153 impr at pos ~2.7 but 1.3% CTR; title led with the brand | Title → "Therapists in Dearborn, MI \| Healing Therapy Center"; description names services, Saturday hours, telehealth and phone |
| `/anxiety-therapy-guide` | Crawled, not indexed. Same types/treatments as `/anxiety-therapy-michigan` (cannibalisation) | **301 → `/anxiety-therapy-michigan`**, file deleted, out of sitemap; "What causes anxiety?" FAQ moved to the service page |
| `/adhd-guide-adults-children` | Unknown to Google. Duplicates `/adhd-testing-evaluation` (signs, types, testing steps, treatment) | **301 → `/adhd-testing-evaluation`**, file deleted, out of sitemap; blog card and links repointed |
| `/coping-with-postpartum-depression` | Crawled, not indexed. H5-only structure, steps 5 and 10 not headings, broken nested lists, city-list filler | Rewritten with H2/H3 structure, baby blues vs PPD, partner section, urgent-help box (911, 988, 1-833-TLC-MAMA), links to postpartum and perinatal pages, Tiffany Murray and Donna Majed, FAQ + FAQPage markup |
| `/breaking-stigma` | Crawled, not indexed. Contained a pasted postpartum paragraph (duplicate of the PPD post), grammar errors, only linked from the blog index | Rewritten: types of stigma, myths, family conversations, confidentiality, FAQ; links to individual therapy, telehealth, therapists, first-responder/physician pages |
| `/teen-mental-health-guide` | Crawled, not indexed; mentions self-harm with no crisis info; only linked from the blog index | H2/H3 structure, crisis box, links to depression/anxiety/ADHD pages, Malak Wehbe and Dr. Habhab, FAQ; linked from family therapy and Malak's profile |
| `/how-to-find-the-right-therapist` | Unknown to Google; description promised red flags and insurance tips the page didn't have; H5 headings | Rewritten around the "therapist near me" intent: goals, Michigan license types, location/format, insurance, questions to ask, fit and red flags, FAQ |
| `/is-autism-curable` | Unknown to Google; H5 headings; self-links opened in new tabs | H2/H3 headings, relative links, links to autism evaluation and signs |
| Discovered/unknown pages | Weak internal linking | Footer now links ADHD Testing, Autism Evaluation, Burnout & Work Stress and the federal Dearborn page. Contextual links added from service pages, FAQ, therapists page and profile chips (`$tp_specialty_links`) to the burnout, ADHD, teen, autism-insurance, stigma and find-a-therapist pages; Kalee LaPointe named on anxiety and couples pages |
| `llms.txt` | Malak and Amal credentials didn't match `config.php` | Fixed; added Key Pages and Guides URL lists |
| `sitemap.xml` | Kalee launch pages still dated 10-03 | 10-09 for those; 10-26 for every page whose content changed in this pass |

**Not changed, needs the owner:** adult autism testing ("adult autism testing near me", pos 53.9). `/autism-evaluation` is written for children while `/psychological-testing` says evaluations cover adults. Confirm adult autism evaluations are offered before writing adult content.
