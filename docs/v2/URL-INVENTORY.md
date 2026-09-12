# V2 Redesign — URL & SEO Inventory

Date: 2026-09-11. Source: sitemap.xml (63 URLs), repo audit, includes/config.php.
All URLs are extensionless (`.htaccess` rewrites `/slug` → `/slug.php`). **The flat URL
structure is a hard constraint: V2 must NOT move pages into /services/, /team/, /blog/
subdirectories — that would change every indexed URL.** V2 reorganizes code, not URLs.

Default action for every URL: **KEEP URL + REDESIGN PRESENTATION, PRESERVE COPY.**
No URL changes, no redirects needed in phase 1. No page may be deleted/merged without review.

## Core pages
| URL | Type | Action |
|---|---|---|
| / | Homepage (MedicalBusiness schema, FAQ links, conditions link hub, map + directions, GBP-consistent NAP) | REDESIGN (V2 homepage built) |
| /appointment | Conversion page + form (forms/appointment.php, CSRF) | KEEP + REDESIGN (phase 2 — form JS must be ported carefully) |
| /therapists | Team index | KEEP + REDESIGN |
| /faq | FAQ (likely FAQPage schema) | KEEP + REDESIGN |
| /all-blogs | Blog index | KEEP + REDESIGN (presentation only) |
| /insurance | Insurance hub (footer-linked sitewide) | KEEP + REDESIGN |
| /suicide-hotline | Crisis resource (nav Resources) | KEEP + REDESIGN |

## Service pages (7) — sidebar-services.php cross-links all of them
individual-therapy, couples-therapy, family-therapy, group-therapy,
psychological-testing, telehealth-therapy, perinatal-therapy
→ all KEEP + REDESIGN. Keep the related-services sidebar pattern (internal linking).

## Therapist pages (5) — real people, Person schema candidates
dr-nadia-habhab (PhD, LP), dr-tiffany-murray (LMSW — note URL says "dr", title does not;
DO NOT "fix" the slug, it is indexed), malak-wehbe (LLMSW), amal-ayad (LLMSW), donna-majed (TLLP)
→ KEEP + REDESIGN. Never fabricate credentials; config.php $team_members is source of truth.

## SEO landing pages (high value — the executive page converts)
- Condition × state: anxiety-therapy-michigan, depression-counseling-michigan,
  burnout-stress-therapy-michigan, trauma-ptsd-treatment, adhd-testing-evaluation,
  autism-evaluation, autism-evaluation-michigan-insurance, autism-screening-tool (interactive),
  postpartum-depression-therapy-michigan, womens-mental-health-therapy-michigan,
  premarital-counseling-michigan
- Audience niche: executive-stress-therapy-michigan (**top converter — do not touch copy**),
  physician-burnout-therapy-michigan, fep-blue-federal-employee-therapy,
  fep-blue-mental-health-benefits-guide, fep-blue-autism-testing-michigan,
  fep-blue-adhd-assessment-michigan, federal-employee-stress-management-therapy,
  ptsd-therapy-federal-law-enforcement, shift-work-federal-employee-therapy
- City pages: federal-employee-therapy-{dearborn,detroit,livonia,ann-arbor},
  therapist-{troy,birmingham,rochester-hills}-mi
- Insurance carriers: blue-cross-blue-shield-therapy-michigan, priority-health-therapy-michigan,
  aetna-therapy-michigan, united-healthcare-therapy-michigan
→ all KEEP + REDESIGN LAST (lowest priority; highest risk if copy is disturbed).

## Blog/guide posts (root-level slugs — no /blog/ prefix exists; keep it that way)
autism-signs, is-autism-curable, breaking-stigma, coping-with-postpartum-depression,
how-to-find-the-right-therapist, parenting-child, understanding-depression,
person-first-approach, adhd-guide-adults-children, anxiety-therapy-guide,
grief-loss-counseling-guide, ptsd-trauma-therapy-guide, teen-mental-health-guide
→ KEEP + REDESIGN template only. Preserve text, authors, dates, slugs, internal links.

## Infrastructure to preserve
- includes/head.php already outputs title/description/canonical/OG/JSON-LD — V2 keeps this contract ($page_title, $page_description, $canonical_url, $schema_json).
- robots.txt, sitemap.xml, google9551257daa769288.html, llms.txt — unchanged.
- forms/ (contact, appointment, csrf_token) — reuse as-is.
- GA: G-TSBF8KK4BW.
- Footer SEO links (insurance pages, city pages, federal pages, specialty pages) — ALL replicated in V2 footer.
- Redirects: none needed for phase 1 (zero URL changes).

## Known gaps / flags for review
1. **No /about page exists.** The design brief's nav lists "About" — V2 does not invent one; nav uses existing pages. Flagged for a content decision later.
2. **No real testimonials exist** anywhere in the codebase (assets/img/testimonials/ is unused template stock). Testimonials section is OMITTED until the practice supplies approved quotes.
3. Homepage contact form depends on jQuery + vendor scripts; V2 homepage links to /appointment instead (form pages get a proper vanilla port in phase 2). Flagged.
4. about.jpg, gallery/*, hero-carousel/*, departments-*, features.jpg are unrelated medical stock (hospital buildings, surgery, dental) — excluded from V2. Site needs real office photography eventually.
5. /v2/ preview pages carry `noindex,nofollow` and canonical to production URLs so the preview can be uploaded safely without duplicate-content risk. /v2/ is NOT added to sitemap.xml.
