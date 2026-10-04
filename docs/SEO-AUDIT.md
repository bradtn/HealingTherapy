# SEO Audit — Healing Therapy Center

**Date:** 2026-10-03
**Site:** https://www.healingtherapycenter.com
**Search Console data:** Web search, last 3 months (2026-06-30 → 2026-09-29, 92 days): 554 clicks, 45,308 impressions, 1.22% CTR.

## How this audit was done

| Source | What it covered |
|---|---|
| Search Console export | Pages (58 rows), Queries (1,000 rows), Devices, daily Chart. The 1,000 listed queries cover 181 clicks / 24,268 impressions; the rest are anonymized long-tail queries. |
| Codebase | All 74 root-level pages, `includes/`, `.htaccess`, `sitemap.xml`, `robots.txt`, `llms.txt`, git history. |
| Full crawl | Every page rendered and parsed: title, description, canonical, OG, robots, H1–H3, JSON-LD (parsed and walked), internal links, image alt, word count. The local render is byte-identical to the live HTML apart from a monitoring script GoDaddy injects. |
| Live server | Redirect chains and status codes for URL variants, until the host's bot protection started challenging this server (see S3). Once the block lifted: HEAD checks for leftover files, response headers (Apache, PHP 8.2.32, no CDN/cache layer), and a paced re-crawl of all 74 live pages to compare with the repo version the changes started from. |
| Local Apache 2.4 replica | The site's `.htaccess` exercised over http/https and www/non-www to reproduce and then verify server behaviour. |

**Limits.** The Search Console export does not join queries to pages, so query → URL mappings below are inferred from content and titles and are labelled as such. Business Profile settings, backlinks and Core Web Vitals field data were not visible to this audit.

---

## 1. Confirmed technical problems

### T1. Trailing-slash URLs return HTTP 500 — Critical
`https://www.healingtherapycenter.com/appointment/` and `/psychological-testing/` returned **500** on the live server. Cause: the clean-URL rule rewrote `page/` to `page/.php`, then `page/.php.php`, and so on until Apache aborted. Any crawler, backlink or typed URL with a trailing slash hit a server error, and repeated 5xx responses make Google slow its crawl rate for the whole host.

### T2. Every page answers at a duplicate `.php` URL — High
`/index.php` and `/appointment.php` returned **200** (same for every page), so each page had two crawlable URLs. Canonical tags pointed to the clean URLs, which limited the damage, but crawl budget and link signals were still being split. `/index.php` was a full duplicate of the homepage.

### T3. Redirect chains on legacy URLs — High
| Requested | Before |
|---|---|
| `http://healingtherapycenter.com/` | 301 → `https://healingtherapycenter.com/` → 301 → `https://www…/` (2 hops) |
| `/index.html` | 301 → `/index` → 301 → `/` (2 hops) |
| `http://www…/appointment.html` | 301 → `https://www…/appointment.html` → 301 → `/appointment` (2 hops) |
| `http://healingtherapycenter.com/appointment.html` | 3 hops |

The HTTPS rule redirected to the *requested* host, so the www fix and the `.html` fix each added another hop. Every extra hop slows users and loses a little signal on old backlinks and the Business Profile links.

`http://www.healingtherapycenter.com/` → `https://www.healingtherapycenter.com/` was already a **single 301**. The HTTP/HTTPS homepage split is *not* caused by a missing redirect (see S1).

### T4. Repository files were publicly downloadable — High (privacy + duplicate content)
The whole project folder is uploaded to the server, and nothing blocked the non-site parts:
- `docs/` (internal SEO reports, an SEO audit PDF), the root CSV crawl exports and `scripts/`: confirmed **200** on the live site.
- `backup-html-originals/`: confirmed **200**. That is 42 old copies of pages, several still carrying the **old address (22005 Outer Dr W)**, and three with no canonical tag.
- `includes/*.php` partials and `router.php` (the local dev router) were reachable as standalone URLs.
- `forms/rate_limit.txt` and `forms/appointment_rate_limit.txt` are written by the form handlers and hold `IP address | date-hour` for everyone who submitted the contact or appointment form in the last ~2 hours. For a therapy practice that is sensitive data. **Confirmed live:** `/forms/rate_limit.txt` returned 200 (34 bytes).
- **`forms/appointment_debug.log` is live and publicly readable** (200, 146 bytes; checked with a HEAD request, contents not opened). A temporary diagnostic added on 2026-09-14 (commit `270ae33`) wrote a line per appointment request with the timestamp and the email subject "New appointment request from <name>". The code was removed the same day, but the file was left on the server, and its name is visible in this public repo's history. **Delete it from the server now**, then check cPanel → Raw Access logs for any requests to `/forms/appointment_debug.log` to see whether anyone opened it. The practice should judge whether that rises to a privacy incident. `forms/mailtest.php` (whose access key is also in the public history) already returns 404 and is gone.

### T5. Error pages pointed at a file that did not exist — Medium
`ErrorDocument 404/403/500 /404.php`, but there was no `404.php`. Visitors got a bare error page with no navigation back into the site. After deploying a real `404.php`, the live server still returned a bare 13-byte "404 Not Found" for every error: the host overrides `.htaccess` `ErrorDocument`. The fix routes missing pages and blocked paths to `404.php` with rewrite rules, and `404.php` sends the 404 status itself.

### T6. Sitewide footer sends "Dearborn" to a federal-employee page — High
The footer's "Areas We Serve" list links **Dearborn → `/federal-employee-therapy-dearborn`** ("Federal Employee Therapist Dearborn MI | FEP Blue"), and Detroit, Livonia and Ann Arbor go to the matching federal-employee pages. That is on all 74 pages. Effects:
- every page tells Google the site's "Dearborn" page is a niche federal-employee page, while the homepage is the actual Dearborn office page. Dearborn queries rank poorly: "therapy dearborn" pos 23.4, "therapist dearborn" 18.8, "therapists in dearborn" 14.4, "dearborn therapist" 29.2, "therapy dearborn mi" 25.9.
- visitors who click "Dearborn" land on a page written for federal employees.
- those four pages have **no in-content links at all**; the footer is their only link source.

### T7. Old address explains the "22005 Outer Dr W" queries — Low (already resolved in code)
Until commit `7724e94` (2026-09-11) the site's content and JSON-LD gave the office address as **22005 Outer Dr W, Dearborn**. That covers most of the export window, which is why the site ranked around position 8–9 for "who owns 22005 outer dr w dearborn mi" and similar (4 queries, 594 impressions, 0 clicks). The current site uses 835 Mason St STE D160 everywhere (pages, schema, footer, `llms.txt`); the only remaining copies were in the public `backup-html-originals/` (T4). These impressions should fade without action. In the 19 days since the change, impressions per day fell 15% (535 → 453) while clicks per day rose (6.2 → 7.5), CTR rose from 1.17% to 1.65% and average position improved from 30.8 to 24.0. That is consistent with shedding irrelevant impressions, though new pages also launched on 2026-09-11.

### T8. Sitemap `lastmod` dates were stale — Medium
64 of 74 URLs said `2026-07-03`, but those pages changed on 2026-09-11 → 09-13 (the address change among them). Google ignores `lastmod` on sites where it proves unreliable, so accurate dates matter for recrawl of changed pages.

### T9. Homepage marks up a star rating that is not on the page — Medium
The homepage `MedicalBusiness` JSON-LD carried `aggregateRating` 4.8 / 38 reviews. No rating or review appears on the page. Google's structured-data rules require marked-up content to be visible, and reviews a business marks up about itself are not eligible for review stars anyway. The markup could not earn rich results and risked a "spammy structured data" manual action.

### T10. Weak internal linking to pages that already rank near page one — High
Several pages are linked from only one other page (usually the blog index): `/fep-blue-adhd-assessment-michigan` (pos 8.16), `/fep-blue-autism-testing-michigan` (pos 8.5), `/autism-evaluation-michigan-insurance`, `/adhd-guide-adults-children`, `/anxiety-therapy-guide`, `/grief-loss-counseling-guide`, `/how-to-find-the-right-therapist`, `/ptsd-trauma-therapy-guide`, `/teen-mental-health-guide`, `/breaking-stigma`. The FEP Blue benefits guide (1,142 impressions, pos 8.79) is linked from only 4 pages.

### T11. Seven meta descriptions over 160 characters — Low
`therapist-grosse-pointe-mi` (188), `therapist-northville-mi` (175), `seasonal-affective-disorder-therapy-michigan` (169), `first-responder-therapy-michigan` (167), `private-pay-out-of-network-therapy` (166), `nurse-burnout-therapy-michigan` (163), `attorney-therapy-michigan` (161). The phone number at the end gets truncated.

### What is already in good shape (verified on all 74 pages)
- Exactly one canonical per page, absolute `https://www`, self-referencing; `og:url` matches; no `http://` or non-www URL anywhere in HTML or JSON-LD.
- No `noindex`, no hreflang, no duplicate titles or descriptions; every title ≤ 60 characters; exactly one H1 per page, never identical to the title.
- No broken internal links, no links to `.html`/`.php`/trailing-slash variants, no orphan pages.
- All images have alt text. CSS is minified (`main.min.css`, one line). Mobile and desktop render the same content (identical word counts, headings and links on every page tested); CLS ≤ 0.034.
- `sitemap.xml` lists exactly the 74 live pages, all `https://www`; `robots.txt` allows CSS/JS and references the sitemap; `llms.txt` exists with the current address.
- All 157 FAQ questions in JSON-LD (28 FAQPage blocks) appear on their pages with matching answers. 153 match word for word; four on `/fep-blue-federal-employee-therapy` are worded slightly differently from the visible headings.

---

## 2. Suspected problems that need verification

### S1. The `http://` homepage row is the Google Business Profile link — most likely explanation
**Evidence.**
- Nothing on the site points Google at `http://`: canonicals, sitemap, internal links, OG and JSON-LD are all `https://www`.
- `http://www…/` 301s to `https://www…/` in one hop, so Google cannot index the http URL as a page.
- Search Console normally reports organic results under the canonical URL. Business Profile results (local pack, Maps, the brand knowledge panel's Website button) are reported under the exact URL saved in the profile.
- The two rows look like two different result types:
  - `http://www…/`: position 5.00, 2.75% CTR, 229 clicks.
  - `https://www…/`: position 27.76, 0.53% CTR, which is the organic homepage ranking for broad terms.
- Many zero-click queries sit at about position 1, which is typical of local-pack listings where people call or ask for directions instead of clicking: "therapeutic counseling" (103 impressions, pos 1.0), "psychiatric evaluation" (94, pos 1.0), "therapy for adhd" (73, pos 1.3), "dbt therapist" (55, pos 1.0), "therapy for ptsd" (48, pos 1.2), "teen counseling near me" (53, pos 1.4).

**Verify.** Business Profile → Edit profile → Contact → Website.

**Action (if confirmed).** Change it to `https://www.healingtherapycenter.com/`, optionally with UTM parameters so the profile's traffic stays separable in Analytics. This removes a redirect hop on every profile click and does not touch the profile's ranking. Afterwards the `http://` row will stop growing and that traffic will appear under the https URL. Note the change date so the shift isn't mistaken for a ranking change. **Do not** add redirects or change canonicals: the "successful HTTP result" is the profile listing, and its equity is already preserved by the existing 301.

### S2. `/appointment.html` is the Business Profile appointment link — likely
`/appointment.html` (572 impressions, 4 clicks, pos 7.35) vs `/appointment` (985 impressions, 0 clicks, pos 42.94) is the same pattern as S1.
- The site links only to `/appointment`, the sitemap lists `/appointment`, and `/appointment.html` 301s to it.
- Google's organic index therefore uses `/appointment`. A row for `/appointment.html` with a page-one position most likely comes from a profile field that displays the URL as saved: Business Profile → **Appointment link** (or a booking link).

**Verify** that field. **Action:** set it to `https://www.healingtherapycenter.com/appointment`. The 301 already carries any ranking signal from the old URL, so nothing on the site needs to change.

### S3. Host bot protection serves a 200 "One moment, please…" page
After a burst of requests from this audit, every URL from this server returned a JavaScript challenge page with **status 200**: `robots.txt`, `sitemap.xml`, 404s and all. Hosts normally exempt verified Googlebot, but if Googlebot were ever challenged, Google would see every URL as the same thin page with a 200 status. **Verify in Search Console:**
- Settings → Crawl stats: host status, and response codes by type.
- Settings → robots.txt report: the fetched content.
- Sitemaps: status and last read date.
- URL Inspection → Test live URL on a couple of pages: the rendered HTML should be the real page.

### S4. Desktop vs mobile — query mix, not rendering
| Device | Clicks | Impressions | CTR | Position |
|---|---|---|---|---|
| Mobile | 354 | 14,493 | 2.44% | 16.91 |
| Desktop | 197 | 30,650 | 0.64% | 33.56 |
| Tablet | 3 | 165 | 1.82% | 22.35 |

**Ruled out:** rendering. Desktop and mobile serve identical content, headings, links and structured data (tested on 8 key pages), and layout shift is negligible on both. Nothing hides content by breakpoint.

**What the data shows:** 64.5% of listed-query impressions come from queries averaging position > 20 (34.1% at 20–50, 30.4% at 50+), and those produced 23 of 181 listed clicks. "Near me" and local-pack queries, where the site ranks at the top, are mostly mobile, while broad Michigan/Detroit head terms ("online therapy michigan" pos 71.9, "couples therapy detroit mi" pos 49.9) generate large numbers of deep-position impressions. Some deep desktop impressions are typically automated rank-checking rather than people.

**Verify:** Performance → filter Device = Desktop, then Device = Mobile, and compare the top queries by impressions. If desktop is dominated by position-40+ head terms, the gap is query mix and needs no technical fix.

### S5. Core Web Vitals field data — unverified
The PageSpeed Insights API quota was exhausted during the audit, so no field data was retrieved. Lab checks found low CLS and a minified stylesheet, but some images are far larger than they are displayed (see recommendation M5). **Verify** Search Console → Core Web Vitals (mobile and desktop).

### S6. Footer credit link fails
`https://spectersystems.ca/portfolio` (the "Designed by Specter Systems" footer link on every page) resolves in DNS but refuses connections from this server. Check from a browser.
- Facebook (400), samhsa.gov (403) and moovitapp.com (403) also failed from a script. These sites routinely block automated requests, so check them by hand.
- The other 21 external links return 200.

---

## 3. Search-intent / query clusters

All 1,000 listed queries were classified by intent (first matching rule wins). Weighted position is impression-weighted.

| Cluster | Queries | Clicks | Impr. | CTR | Wtd pos | Actionable? |
|---|---|---|---|---|---|---|
| Branded: practice name | 3 | 88 | 482 | 18.3% | 5.8 | Protect (already strong) |
| Branded: therapist names | 5 | 21 | 289 | 7.3% | 12.5 | Protect; profile titles (section 7) |
| Local / "near me" / city + therapist/therapy | 213 | 22 | 5,021 | 0.4% | 31.1 | **Yes**: homepage + Business Profile; fix footer anchors (T6) |
| Generic "healing" phrasing ("healing therapy", "healing centers") | 130 | 8 | 3,741 | 0.2% | 29.9 | Partly; the brand name is a generic phrase, so most of this is ambiguous intent |
| Couples / marriage / premarital | 93 | 2 | 2,890 | 0.1% | 43.3 | Limited; mostly Detroit-targeted head terms (section 6) |
| Anxiety / depression / trauma / specialty | 107 | 2 | 2,694 | 0.1% | 45.0 | Limited; statewide head terms |
| Insurance (BCBS, Priority, FEP, Aetna, private pay) | 151 | 5 | 2,181 | 0.2% | 34.1 | **Yes**: pages already rank 8–17 (section 4) |
| Generic therapy / counseling head terms | 90 | 4 | 1,817 | 0.2% | 32.7 | Low; mostly local-pack impressions |
| Online / telehealth | 33 | 0 | 1,495 | 0.0% | 72.5 | Low; national platforms own this SERP |
| Testing: autism | 67 | 20 | 1,093 | 1.8% | 53.6 | **Yes**: real clicks despite deep positions (section 5) |
| Family / child / teen / parenting | 35 | 6 | 693 | 0.9% | 12.5 | **Yes**: near page one |
| **Irrelevant:** massage / holistic / metaphysical / speech therapy | 24 | 1 | 623 | 0.2% | 49.7 | **No**: "healing" partial match to other services |
| **Irrelevant:** old address / property owner | 4 | 0 | 594 | 0.0% | 8.8 | **No**: see T7; fades on its own |
| Testing: ADHD | 22 | 0 | 429 | 0.0% | 27.5 | **Yes** (section 5) |
| Testing: psychological testing / evaluation | 14 | 2 | 165 | 1.2% | 9.8 | Yes |
| Unclassified (other people/businesses, typos) | 9 | 0 | 61 | 0.0% | 18.3 | No |

**Irrelevant traffic, kept separate from opportunities (do not optimize for these):**
- **Old address / property-owner queries:** "who owns 22005 outer dr w dearborn mi" (252 impr), "owner of 22005 outer dr w dearborn mi" (246), "22005 outer dr w dearborn mi owner" (77). These came from the old address on the site (T7).
- **"Healing" partial matches for other services:** "healing therapy massage dearborn" (50), "healing therapy massage" (30), "metaphysical therapist michigan" (84), "holistic mental health near me" (138, pos 83), "speech therapy dearborn" (21).
- **Other practitioners and businesses:** a clinician's name that appears nowhere on the site (29 impressions, pos 2; see P19), another person's name (4) and another center's name (4).

**Where the clicks actually come from.** 114 of the 181 listed clicks come from queries at average position ≤ 3 (brand, therapist names, local pack). Queries averaging position > 20 hold 64.5% of listed impressions but produced only 23 clicks. The improvement opportunity is the **position 5–20 band** (insurance pages, FEP pages, family counseling, Dearborn-local terms), not the deep head terms.

**Query-shape warning.** Nine queries shaped "mi … dearborn" ("mi anxiety therapy dearborn" 103, "mi adults adhd therapy dearborn" 94, "mi private pay therapist dearborn" 87, "mi online couples therapy dearborn" 85, "mi gottman method couples therapy dearborn" 82, …) total 687 impressions and 0 clicks, and the "mi" at the start isn't how people type. They are most likely automated rank-tracking or directory queries. Treat them as directional only, not as demand.

### Likely ranking URL per opportunity cluster (inferred; the export does not join queries to pages)
| Query cluster | Most likely URL | Intent | Main problem |
|---|---|---|---|
| "therapist near me", "therapy near me", "therapy center near me", "therapists in dearborn" | Business Profile (`http://` homepage row) / homepage | Local provider | Ranking on organic; local pack does the work. Fix footer anchor (T6) and the Business Profile URL (S1) |
| "therapy" (pos 7.0), "family counseling" (pos 6.2), "psychiatric evaluation" (pos 1.0) | Local pack / Business Profile | Local provider | Zero-click local impressions. Nothing on-page will change these |
| "family counseling near me" (pos 14.6) | `/family-therapy` | Local provider | Ranking. Only 3 pages linked to it in body text |
| "anxiety therapy" (pos 11.1), "mi anxiety therapy dearborn" | `/anxiety-therapy-michigan` | Local provider | Title and H1 led with "Michigan", a statewide term it can't win |
| "adhd testing near me" (pos 13.1), "mi adults adhd therapy dearborn" | `/psychological-testing` (menu link "ADHD & Autism Testing") or the FEP ADHD page | Testing / therapy | `/adhd-testing-evaluation` has zero impressions; hub outranks it |
| "adult autism testing near me" (7 clicks @45), adult-autism cluster (281 impr, 16 clicks) | `/psychological-testing` | Adult testing | Content contradiction: `/autism-evaluation` says children only (see P1) |
| "blue cross blue shield of michigan therapists" (pos 17.7), psychologist variants | `/blue-cross-blue-shield-therapy-michigan` | Provider who takes BCBS | Title said "Mental Health" and "Michigan", not "therapists" or a location |
| "does priority health cover therapy" etc. (pos 9.4–10.5) | `/priority-health-therapy-michigan` | Coverage question | Snippet didn't answer the question |
| FEP Blue benefits long tail (pos 8.8) | `/fep-blue-mental-health-benefits-guide` | Benefits explanation | Description promised copays the page does not list |

---

## 4. Keyword cannibalization findings

| Pages | Finding | Ownership decided |
|---|---|---|
| Homepage vs `/federal-employee-therapy-dearborn` | The sitewide footer anchor "Dearborn" pointed at the federal page (T6) | Homepage owns Dearborn/local intent; the federal page owns "federal employee therapist Dearborn" |
| `/couples-therapy` vs `/premarital-counseling-michigan` | Both pages use the heading "Start Your Marriage Strong", and the premarital page drew general marriage and "seminar" queries (pos 78) | Couples owns marriage counseling; premarital owns engaged couples, Dearborn and telehealth |
| `/anxiety-therapy-michigan` vs `/anxiety-therapy-guide` | The guide's title also ended in "Dearborn, MI", and it linked to the homepage instead of the service page | Service page owns therapist intent; guide is informational and now links to it |
| `/psychological-testing` vs `/autism-evaluation` vs `/autism-evaluation-michigan-insurance` vs `/fep-blue-autism-testing-michigan` | The insurance guide's title led with "Autism Evaluation Michigan", the service page's main phrase | Hub owns all-testing and combined autism+ADHD queries; `/autism-evaluation` owns child autism evaluation; the insurance guide owns the coverage question (retitled as one); the FEP page owns federal families |
| `/psychological-testing` vs `/adhd-testing-evaluation` | The hub (title contains "ADHD"; sitewide menu link) collects ADHD testing queries; the dedicated page has no impressions | Dedicated page retitled for local intent and linked from the FEP ADHD page and the guide; check indexing (H6) |
| `/fep-blue-mental-health-benefits-guide` vs `/fep-blue-federal-employee-therapy` | Five "Complete … Coverage Guide" anchors (on `/faq` and four federal pages) pointed at the *service* page; the service page never linked to the guide | Guide owns benefits questions; service page owns "FEP Blue therapist" |
| BCBS vs FEP Blue vs Blue Care Network | Distinct query sets, so not cannibalization; they just weren't linked | BCBS page owns BCBSM and BCN; FEP pages own federal |
| `/telehealth-therapy` vs `/individual-therapy` | No overlap problem | Telehealth owns "online therapy"; individual stays in-person Dearborn |

## 5. URL duplication findings
- **`.php` twins of every page** returned 200 (T2). Now a 301 to the clean URL.
- **`/index.php`, `/index.html` and `/index`** were homepage duplicates or chains (T2, T3). They now 301 to `/` in one hop.
- **Trailing-slash URLs** returned 500 (T1). They now 301 to the slashless URL.
- **`/appointment.html` vs `/appointment`.** The `.html` URL already 301'd to `/appointment`. Its Search Console row is almost certainly the Business Profile appointment link (S2). Its ranking signal is preserved by the 301, and from `http://` or the bare domain it now takes one hop instead of three.
- **`http://` and non-www variants** redirect to `https://www` in one hop (previously two from the bare domain).
- **Old typo URLs** (`/coping-with-postpartum-pepression`, `/is-austim-curable`, `/tiffany-murray`, with or without `.html`) now go straight to the final clean URL instead of chaining through a `.html` hop.
- **`backup-html-originals/`** (42 old page copies, some with the old address and three without a canonical) now returns 404.
- **Fragment rows in Search Console** (`/psychological-testing#detailed-testing`, `#types-of-testing`, `#who-needs-testing`, `#testing-process`, positions 5–6) are Google "jump to" links into the page's sections, not duplicate pages. Keep those section `id`s stable.
- **Case variants** (`/Psychological-Testing`) return 404, which is correct and needs nothing.

## 6. Internal-linking problems
- **Footer anchor:** the sitewide "Dearborn" link pointed to a federal-employee page (T6), and the four federal city pages had no in-content links.
- **FEP cluster islands:**
  - The FEP ADHD and FEP autism pages were linked only from each other.
  - The guide (pos 8.8) was linked from 4 pages, and the FEP service page never linked to it.
  - Guide-labelled anchors pointed at the service page.
- **Insurance hub (`/insurance`):** linked to the main insurers but not to the FEP guide, Blue Care Network explanation, private-pay page or autism insurance guide.
- **Autism and ADHD cluster:**
  - `/autism-evaluation` had 3 inbound links, one with the anchor "Evidence-Based".
  - `/autism-evaluation-michigan-insurance` and `/adhd-guide-adults-children` were linked only from the blog index.
  - The screening tool linked "Insurance Accepted" to `/#hero`.
- **Clinicians invisible from services:**
  - None of the six core service pages, nor the testing, perinatal, family or group pages, named or linked a clinician. Profiles are among the best-converting URLs (Dr. Habhab 13.6% CTR).
  - Profiles in turn linked to no service page.
- **Family and premarital pages** were nearly unlinked in body text (3 pages and 1 page).
- **Telehealth:** no core service page linked to `/telehealth-therapy` in body text.

## 7. Metadata opportunities
Implemented changes are listed with before/after in `SEO-CHANGES.md`. The principle throughout:
- Rewrite only where the page already ranks within reach (positions 8–20) with weak CTR, or where the snippet was inaccurate.
- Lead with the intent the page can win, which is usually a Dearborn provider rather than statewide coverage.
- Never promise coverage.

| Page | Problem | Done? |
|---|---|---|
| BCBS (pos 16.7, 0.36% CTR) | Title didn't say "therapists" or Dearborn | Yes |
| Priority Health (pos 10.2, 0.64%) | Snippet didn't answer "does Priority Health cover therapy?" | Yes |
| FEP benefits guide (pos 8.8, 0.44%) | Description promised copays the page doesn't give | Yes (description only; title kept) |
| Aetna (pos 37.3) | Title targeted national coverage questions (pos 55–80, unwinnable) | Yes, now targets provider intent |
| `/autism-evaluation`, `/adhd-testing-evaluation`, `/autism-screening-tool` | Missing "testing" and "toddler" wording; ADHD description promised telehealth testing the page's own FAQ rules out | Yes |
| `/anxiety-therapy-michigan`, `/premarital-counseling-michigan` | Led with statewide terms; premarital description overstated insurance | Yes |
| Tiffany Murray profile (pos 12.6, 1.57%) | Snippet advertised couples counseling her page never mentions; no specialty or location | Yes |
| Malak Wehbe profile (pos 12.9, 3.69%) | Title said only "Therapist" | Yes |
| Birmingham, Bloomfield Hills | Titles implied a local office | Yes |
| Grosse Pointe, Northville, private pay, 4 specialty pages | Descriptions over 160 characters | Yes |
| Dr. Habhab, Donna Majed, Amal Ayad profiles | Already 4–14% CTR | Deliberately unchanged |
| FEP service page, `/insurance`, `/psychological-testing`, homepage | Earning clicks | Deliberately unchanged |

## 8. Structured-data issues
| Issue | Status |
|---|---|
| Homepage `aggregateRating` (4.8/38) not shown on the page (T9) | Removed |
| Five FAQPage answers had drifted from the visible answers: `/faq` ×3, FEP service ×1, trauma ×1. The `/faq` markup listed United Healthcare, HAP and McLaren, which the visible answer does not | Markup now repeats the visible answers; all 157 Q&As match |
| FEP service page FAQ questions worded differently from the visible headings (4) | Aligned |
| Homepage `medicalSpecialty: "Psychiatry"`: not a valid schema.org MedicalSpecialty value (closest is `Psychiatric`), and the practice doesn't offer psychiatry | Practice to confirm (P11); Google ignores the property, so this is accuracy, not ranking |
| Homepage `availableService` "ADHD Testing … for all ages" and "Comprehensive autism testing for children and adults" | Depends on P1 |
| `is-autism-curable` Article author (Dr. Habhab) vs visible byline (Amal Ayad); `autism-signs` author is "Organization" vs byline Amal Ayad | Practice to confirm authorship (P17) |
| Person schema on profiles has name, jobTitle, url, image, worksFor and knowsAbout | Fine. Optional later: `@id`, `description`, and `hasCredential`/`alumniOf` built only from each page's credentials card |
| FAQPage on 28 pages | Fine to keep for users. Google now shows FAQ rich results only for a small set of authoritative sites, so don't add more expecting stars |
| Service + MedicalBusiness provider blocks on service pages | Consistent; correct current address everywhere |

## 9. Content gaps (no new pages proposed)
- **Clinicians on service pages:** now named, with facts taken only from their profiles.
- **Anxiety page crisis box:** the anxiety page had no crisis resources, unlike the depression page. Added (988 and Crisis Text Line).
- **Per-clinician insurance participation:** the four insurer pages share one template. Only real network data from the practice can make them distinct and more useful. Do not invent it.
- **Adult autism (P1):** the clearest gap between demand (16 clicks) and content. Resolve the contradiction first, then strengthen whichever page is correct.
- **New-office local detail:** drive routes, parking and landmarks on the location pages still describe the old Outer Dr office (P8). Genuine, current local detail is the only thing that will lift those pages out of the doorway pattern.
- **Languages:** add "Arabic" (and `knowsLanguage`) only if a clinician actually provides therapy in Arabic. The query "bilingual therapist arabic michigan" has 59 impressions.
- **Proposed FAQs, after the practice confirms the answers:**
  - "Screening vs. evaluation: what's the difference?" (`/autism-evaluation`)
  - "Do you prescribe medication?" (`/adhd-testing-evaluation`; the FEP ADHD page already says no)
  - "Can autism and ADHD be evaluated together?" (`/psychological-testing`; 178 combined-query impressions)

## 10. Pages that should NOT be changed
- **`/psychological-testing`:** URL, title, H1, Quick Navigation box and section `id`s. 39 clicks, plus the jump-link rows at pos 5–6. Only a one-sentence clinician link was added.
- **Profiles:** Dr. Habhab (13.6% CTR) and Donna Majed (11.3%) titles, descriptions and H1s; Amal Ayad's title until P3 is resolved; all bio text.
- **Homepage title and description.**
- **FEP service page title and description:** best CTR in the insurance cluster (1.22%).
- **`/insurance` title and description:** it earns Medicaid clicks.
- **Couples, individual and family titles and H1s:** they earn clicks, so only links were added.
- **`/telehealth-therapy` copy:** rewritten 2026-09-13; wait 8–12 weeks before judging it.
- **The four location pages launched 2026-09-13** (Novi, Bloomfield Hills, Grosse Pointe, Northville): too new to judge; only accuracy fixes were made.
- **URLs in general.** No merges of the guide/service pairs or the autism pages, whose intents are distinct. No deletions.
- **Don't chase:** "online therapy michigan" (pos 72), Detroit couples terms (pos 43–53), national "does Aetna/BCBS cover therapy" (pos 55–80), and the irrelevant clusters in section 3.

---

## 11. Prioritized recommendations

Status key: **Done** = implemented and verified in this repo, but it only takes effect on the live site once uploaded. **Owner** = needs access to an account or system the audit couldn't see. **Practice** = needs a clinical or business fact confirmed.

### Critical
| # | Recommendation | Why | Status |
|---|---|---|---|
| C0 | **Delete `forms/appointment_debug.log` from the server immediately** (cPanel File Manager), independent of the deploy, then review Raw Access logs for requests to it | A requester's name is publicly readable today (T4) | Owner, now |
| C1 | Upload the new `.htaccess` and `404.php` together with the other changed files | Fixes the trailing-slash 500s, `.php` duplicates, redirect chains, and public exposure of docs, backups, exports and visitor IPs (T1–T5) | Done; needs upload |
| C2 | Business Profile: set Website to `https://www.healingtherapycenter.com/` and Appointment link to `https://www.healingtherapycenter.com/appointment`; confirm the profile shows 835 Mason St STE D160 | Most likely source of the `http://` homepage and `/appointment.html` rows (S1, S2), and the old address in any listing keeps the "22005 Outer Dr" association alive | Owner |
| C3 | Confirm P1 (adult autism), P2 (EMDR provider), P3 (Amal Ayad's "psychologist" wording) and P6 (hours) | YMYL accuracy. Pages currently contradict each other on who is evaluated, what is offered and when, and "psychologist" is a protected title | Practice |
| C4 | In Search Console, check Crawl stats, the robots.txt report, Sitemaps and a URL Inspection live test | Rule out Googlebot ever receiving the host's 200 "One moment, please…" challenge page (S3) | Owner |

### High
| # | Recommendation | Why | Status |
|---|---|---|---|
| H1 | Footer: "Dearborn" → homepage; federal city pages under their own "Federal Employees" heading and linked from the FEP hub | T6 | Done |
| H2 | Insurance cluster: titles/descriptions (BCBS, Priority, Aetna, FEP guide, private pay, autism insurance guide); hub-and-spoke links; FEP islands connected; guide anchors retargeted | Pages already at pos 8–17 with 0.4–0.6% CTR; FEP testing pages linked only from each other | Done |
| H3 | Testing cluster: titles/descriptions/H1s (autism evaluation, ADHD testing, screening tool); topic links; screening explicitly "not a diagnosis" in the snippet | Searches using "testing", "toddler" and "near me" were missing their pages; YMYL clarity | Done |
| H4 | Accuracy fixes made from facts already in the repo: insurer privacy statements (claims carry a diagnosis code), "(Fully Covered)" removed, crisis lines updated to 988, LLMSW credentials removed, team lists sourced from profiles, ADHD telehealth claim corrected, premarital "Insurance accepted" removed, Tiffany's couples claim removed | YMYL; contradictions inside the site | Done |
| H5 | Decide on Troy and Rochester Hills: consolidate into `/telehealth-therapy` with a 301, or rewrite with real local value | 65% and 48% of their text is word-for-word identical to the other location pages; their only unique content is old-office drive routes; 517 impressions and 0 clicks in a full quarter. Doorway pages can weigh on the whole site | **Decided 2026-10-03: keep and improve.** They exist to reach suburban clients for telehealth. Done: titles lead with "{City} Therapist \| Telehealth or Dearborn Office", descriptions say telehealth or the Dearborn office, drive times and parking corrected. Next: genuinely local content with the practice's input |
| H6 | URL Inspection and "Request indexing" for `/adhd-testing-evaluation`, `/is-autism-curable`, `/autism-evaluation-michigan-insurance`, `/united-healthcare-therapy-michigan`, the federal Dearborn/Detroit/Ann Arbor pages, Grosse Pointe and Northville | Zero impressions in 3 months. `/is-autism-curable` returned HTTP 500 from 2025-11-19 until commit `3ab65ca` (2026-06-23) | Owner |
| H7 | Rewrite old-office details on location and service pages: "near I-94", "Free parking", drive times, "Close to Dearborn Post Office" | They describe 22005 Outer Dr W (P8) | Practice (needs real details) |

### Medium
| # | Recommendation | Why | Status |
|---|---|---|---|
| M1 | Accurate sitemap `lastmod` | T8 | Done |
| M2 | Profiles: Tiffany and Malak titles; "Areas of Focus" chips link to the matching service pages; insurance link on every profile | Profiles convert best but linked nowhere; Tiffany's snippet was inaccurate | Done |
| M3 | Name clinicians on testing, perinatal, family, group and anxiety pages, and on the location team lists, with facts only from their profiles | E-E-A-T for YMYL service pages | Done |
| M4 | Review unsourced statistics and prices (P9, P10) | YMYL; numbers without sources undermine trust | Practice |
| M5 | Remove unused heavy originals from the upload: `assets/img/blog2.jpg.original` (11 MB), `blog3.jpg.original` (8.6 MB), `blog-6.jpg.original` (2 MB), plus unreferenced 4–8K-pixel service images (`individual.webp` 7900×5267, `telehealth.webp`, `couple.webp`, `group.webp`, `family.webp`) and `hero-bg.webp`, `therapist-bg.webp`, `faq.webp` | No visitor cost (not referenced) but they bloat the upload and repo. `malak.jpg` (688 KB → 69 KB) is already fixed | Partly done; owner to delete |
| M6 | Keep data files out of the public repo: the four committed CSV crawl exports and the SEO audit PDF; consider making the GitHub repo private | Your rule 7. They are now blocked from the website by `.htaccess`, but remain public on GitHub | Owner decision |
| M7 | Correct authorship and markup to match (P17) | Article schema should name the real author | Practice |

### Low
| # | Recommendation | Why | Status |
|---|---|---|---|
| L1 | Meta descriptions over 160 characters | T11 | Done |
| L2 | Homepage H2 "Trusted Healing Therapy Services Near Me in Dearborn, MI" → "Visit Our Therapy Office in Dearborn, MI" | "Near me" in copy is keyword stuffing; Google uses the searcher's location | Done |
| L3 | Section headings on `is-autism-curable`, `autism-signs` and `adhd-guide-adults-children` use h5/h6; switch to h2/h3 with matching CSS | Semantic structure; minor | Open |
| L4 | `medicalSpecialty` value on the homepage | Invalid enum and probably inaccurate | Practice |
| L5 | `/dr-tiffany-murray` URL implies a doctorate; if she has none, move it to `/tiffany-murray` with a 301. The current typo rule redirects the other way and must be reversed in the same change | Credential accuracy | Practice/owner |
| L6 | `spectersystems.ca` footer credit link refuses connections | Broken sitewide outbound link | Owner |

---

## 12. Facts the practice must confirm before anything else changes

Nothing below was changed, because each needs a clinical or business fact this audit could not verify.

| # | Topic | What conflicts (file) |
|---|---|---|
| P1 | **Adult autism evaluations** | `/autism-evaluation` was changed to "children only" in commit `b63389b` (2026-06-03), but `psychological-testing.php` (meta description, FAQ "Can adults get tested for autism or ADHD? Absolutely.", ADOS-2 copy), `fep-blue-autism-testing-michigan.php` ("for both children and adults") and the homepage schema still offer adults. Adult-autism queries: 281 impressions, 16 clicks, the best non-brand cluster |
| P2 | **EMDR / CPT** | EMDR appears on 16 pages (restored deliberately 2026-04-19 after a 2026-02-12 removal), but no clinician profile lists EMDR training; commit `b479c1a` removed the EMDR certification from Dr. Habhab's profile. Federal pages also cite CPT. Who provides these? |
| P3 | **Amal Ayad's role** | `amal-ayad.php`: "After years as a psychologist", "Life Coach & Therapist"; `therapists.php`: "Owner", listed under licensed therapists; no license stated anywhere. "Psychologist" is a protected title in Michigan |
| P4 | **Credential wording** | "doctoral-level psychologists", "our psychologists" (plural) vs one psychologist (PhD, LP) and two TLLPs; "Fully licensed in Michigan" (`individual-therapy.php`) vs TLLPs |
| P5 | **Tiffany Murray** | URL `dr-tiffany-murray` without a stated doctorate; "PSI Certified in Perinatal Mental Health (2015)" (the formal PMH-C credential started later) |
| P6 | **Hours** | "Monday–Friday 9am–7pm" (`individual-therapy.php`, `fep-blue-federal-employee-therapy.php`, `federal-employee-therapy-dearborn.php`), plus "evening", "early morning" and "weekend" appointment claims on location and insurer pages, vs the published Mon–Fri 9–5, Sat 9–2 (footer, `config.php`, homepage schema) |
| P7 | **Insurers accepted** | United Healthcare on `/insurance` and the UHC page, but missing from other lists; "BCBS Community Blue – Medicaid"; Medicare Advantage (Priority, UHC pages); "UnitedBehavioral Health" (now Optum); which clinicians are in-network for which plan |
| P8 | **Old-office details** | "Dearborn office near I-94. Free parking. Accessible facilities." (`individual-therapy.php`), "near I-94" (`couples-therapy.php`), "Ample free parking" / "Free parking at our office" (federal Dearborn/Livonia), drive times, "Close to Dearborn Post Office", "Easy access from Michigan Ave, Ford Rd, and Telegraph Rd". Also the homepage bus directions (SMART Route 200, ~1 mile) for the new office. **Partly resolved 2026-10-03:** distances and uncongested drive times to 835 Mason St were measured with OpenStreetMap routing. The clearly understated ones were corrected (Troy 25 → 35–50 min, Rochester Hills 35 → 40–55, Northville 25–30 → 25–35, Livonia 10–15 → 15–25, downtown Detroit / Federal Building 15 → 20–25); the others were already within range. "Free parking" became "public parking near our West Dearborn office" (the homepage's own wording). The Dearborn Post Office really is 0.3 mi away. Still to confirm: the "near I-94" lines on the individual and couples pages |
| P9 | **Prices and costs** | `individual-therapy.php` FAQ: "$100–$175 per 50-minute session", sliding scale "as low as $75", copays "$10–$50"; insurer-page copay ranges ($15–$60); "No surprise bills"; "lowest out-of-pocket cost" |
| P10 | **Unsourced statistics** | couples: "70% success rate", "70–75% recover with EFT", "30% higher success rate"; premarital: "up to 30%"; family: "65–75% of families"; anxiety: "over 40 million adults", "60–80%", "full remission"; ADHD medication "70–80%" / "80% respond well"; "Research shows telehealth … equally effective"; FEP "20–52 outpatient visits", "70–80% coverage after deductible"; "6–12 sessions"; "within 1–2 weeks"; "Depression (2x higher…)" |
| P11 | **Services no clinician profile supports** | `autism-screening-tool.php`: "BCBA supervised", "ABA, Speech, OT, Social Groups", "Home-based services available in your neighborhood"; `/insurance`: "Psychiatric medication management" (the FEP ADHD page says the practice does not prescribe); Aetna panel "substance abuse services"; family page substance-use and eating-disorder content; "LGBTQ affirming" (in no profile); couples "Advanced training in EFT, Gottman Method, Imago" (only Gottman documented); homepage `medicalSpecialty: Psychiatry` |
| P12 | **Testing logistics** | ADHD testing "3–5 hours" vs "6–10 hours"; autism evaluation "2–4", "3–6", "4–8" or "8–12 hours"; reports "within 2 weeks"; minimum age "18 months" vs "2–3 years"; autism evaluations "throughout Michigan via telehealth" vs "in-person testing at our Dearborn office" |
| P13 | **Federal/FEP facts** | "two options" (FEP Blue Focus also exists); out-of-network benefits by option; EAP "6–8 sessions"; contractors listed as FEP members ("NIH-funded researchers", "NSF grant recipients", "Federal contractors", "Department of Defense contractors") although contractors generally aren't FEHB-eligible; ADA cited where federal employees are covered by the Rehabilitation Act; security-clearance statements; "The only exceptions are…" (PTSD-LE page); Veterans Crisis Line described as "for VA employees" (it serves veterans, service members and families) |
| P14 | **Case stories** | "Marcus … $20 co-pay" (`federal-employee-stress-management-therapy.php`), "Sarah, a CBP officer" (`shift-work-federal-employee-therapy.php`): real and consented, or illustrative and labelled as such? |
| P15 | **Clinical details to review** | Melatonin "0.5–3mg" (shift page); medication names (PTSD-LE page); "Wellbutrin" listed as an ADHD non-stimulant (off-label); WAIS-IV / Brown ADD Scales editions; whether neuropsychological testing is offered; "obsessive interest" wording (FEP autism) |
| P16 | **M-CHAT-R** | Permission for online use and visible author credit (currently only in a code comment); the comment in `assets/js/screening.js` lists reverse-scored items "2, 5 and 20" while the code (correctly) scores 2, 5 and 12 |
| P17 | **Authorship** | `is-autism-curable.php` byline Amal Ayad vs H1 and schema Dr. Habhab; `autism-signs.php` byline Amal Ayad vs schema "Organization" |
| P18 | **Arabic** | Is therapy offered in Arabic? Add only if true |
| P19 | **Unknown clinician's name** | A query for a named doctor (29 impressions, pos 2.1; see Search Console → Queries) who appears nowhere on the site. Former affiliate, or another practice's listing? |
