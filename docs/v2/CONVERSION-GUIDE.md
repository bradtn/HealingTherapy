# V2 Page Conversion Guide

Convert V1 pages (repo root, e.g. `/opt/HealingTherapy/<slug>.php`) into V2 pages at
`/opt/HealingTherapy/v2/<slug>.php`. **Study the exemplar first**: compare
`/opt/HealingTherapy/individual-therapy.php` (V1) with `/opt/HealingTherapy/v2/individual-therapy.php` (V2).

## Non-negotiable SEO parity rules
1. `$page_title`, `$page_description`, `$canonical_url`, `$schema_json`, `$current_service`
   are copied **VERBATIM** from the V1 file. Never edit schema content.
2. Every sentence of visible body text is preserved word-for-word. Never summarize,
   rewrite, shorten, or "improve" copy. Reformat only.
3. Every internal link is preserved — but converted to root-absolute:
   `href="appointment"` → `href="/appointment"`, `href="anxiety-therapy-michigan"` →
   `href="/anxiety-therapy-michigan"`. `tel:`, `mailto:`, `http(s):`, and `#anchors` unchanged.
   Image paths: `src="assets/img/x.jpg"` → `src="/assets/img/x.jpg"` (add `loading="lazy"`,
   keep alt text verbatim, keep width/height if present).
4. Exactly ONE `<h1>` per page — rendered by the page-hero include using the V1 page's real
   `<h1>` text verbatim (NOT the old `topArea` banner div text). Content `h2`/`h3`/`h4`
   hierarchy preserved as-is.
5. `php -l` must pass on every file you write.

## V2 page skeleton
```php
<?php
// vars copied verbatim from V1 …
require_once dirname(__DIR__) . '/includes/config.php';
// $schema_json verbatim from V1 (keep original statement order if schema came before the require)
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>
<body>
<?php include __DIR__ . '/includes/header.php'; ?>
<main id="main">
    <?php
    $hero_eyebrow = '…';           // see per-type notes
    $hero_h1 = '…';                // V1 <h1> verbatim (HTML-escape & as &amp;)
    $hero_lead = "…";              // V1 .lead paragraph verbatim, if one exists; else omit
    include __DIR__ . '/includes/page-hero.php';
    ?>
    <section class="page">
        <div class="shell with-sidebar">      <!-- service pages only; others: <div class="shell"> -->
            <article class="prose"> …content… </article>
            <?php include __DIR__ . '/includes/sidebar-services.php'; ?>   <!-- service pages only -->
        </div>
    </section>
    <?php include __DIR__ . '/includes/cta.php'; ?>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
```
Do NOT include `includes/scripts.php`, Bootstrap, jQuery, AOS, or icon fonts. Drop all
`data-aos*` attributes. Drop inline `style=""` unless it carries meaning that has no class.

## Class mapping (V1 Bootstrap → V2)
| V1 | V2 |
|---|---|
| `card` blocks (`card`+`card-body`) | `<div class="panel">` |
| `alert alert-info` / `alert-light border-*` | `<div class="callout callout--info">` or `callout--soft` |
| `alert alert-success` / plain highlight | `<div class="callout">` |
| `alert alert-primary` (dark CTA block) | `<div class="callout callout--brand">` |
| `row g-3` + `col-md-6` card grids | `<div class="grid-2">` of `.panel` |
| 3-across / 4-across cols | `grid-3` / `grid-4` / `step-row` (for icon+title+line stats) |
| bullet lists with `bi-check-circle` icons | `<ul class="check-list">` (or `check-list--2col`) with the check SVG below |
| FAQ card lists | `<div class="faq-list">` of `<div class="faq-item"><h3>Q</h3><p>A</p></div>` |
| `btn btn-primary` | `class="btn btn--pill btn--primary"` |
| `btn` outline/secondary | `class="btn btn--pill btn--ghost"` |
| `lead` paragraph | goes to `$hero_lead` if first; otherwise `<p class="lead">` |
| `h2 class="mt-5 mb-3"` etc. | plain `<h2>` (spacing handled by `.prose`) |
| card `h3 class="h5/h6"` titles | plain `<h3>` |

## Icons
Icon fonts (`bi bi-*`, `fa`) do not exist in V2. Policy:
- Check bullets → this SVG: `<svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg>`
- Decorative icons inside headings/callouts → simply drop the `<i>` tag.
- `step-row` stat icons → reuse any simple line SVG from the exemplar, or drop.

## Per-type notes
**Service pages** (`$current_service` set): eyebrow `Our Services`; use `with-sidebar` +
`sidebar-services.php` as in the exemplar.

**Landing pages** (anxiety-therapy-michigan, fep-blue-*, therapist-troy-mi, executive-stress…):
eyebrow `Specialized Care` (or `Insurance` for carrier pages, `Locations` for city pages);
NO sidebar — `<div class="shell"><article class="prose">`. These pages' copy is the practice's
highest-value SEO content: be extra literal. If V1 has a "Related Pages" alert, convert to a
`callout` with the same links.

**Therapist bios** (dr-nadia-habhab, …): eyebrow `Our Team`; `$hero_h1` = the V1 h1 (name +
credentials) verbatim; NO sidebar. Portrait: place the V1 `<img>` right after the opening of
`.prose` inside `<div class="panel" style="max-width:320px">` — keep src root-absolute, alt
verbatim. Preserve specialties lists (use `check-list`), bio paragraphs, and any schema.

**therapists.php** (index): eyebrow `Our Team`, no sidebar; render each therapist as a `.panel`
inside `grid-2` with portrait `<img>` (root-absolute), name (`<h2>` if V1 used h2), credentials,
bio text and "View profile" link — all text verbatim.

**Blog posts / guides**: eyebrow `From Our Blog`; `$hero_cta = false;`
`$hero_meta = '<p class="post-meta"><span>AUTHOR</span><span>DATE</span></p>';` using the V1
author/date verbatim (omit if V1 has none). No sidebar. Featured image (if V1 has one at top)
as first element of `.prose`. Preserve ALL article text/headings/links. Skip V1 "recent posts"
sidebar widgets; instead end the article with:
`<p><a href="/all-blogs">← All Articles &amp; Guides</a></p>`.

**all-blogs.php**: eyebrow `Resources`, `$hero_cta = false`; render every post the V1 page lists
as `.post-card`s in `<ul class="post-grid" role="list">` (see homepage v2/index.php blog section
for exact post-card markup) — keep every post link, image, title, excerpt, author, date.

**faq.php**: eyebrow `Resources`; convert Q&A into `.faq-list`/`.faq-item` keeping every Q and A
verbatim (flatten any accordion; everything stays visible). Keep FAQPage schema verbatim.

**insurance.php / suicide-hotline.php**: eyebrow `Resources`; suicide-hotline uses
`$hero_cta = false;` and keep all hotline numbers as prominent `callout--brand` blocks with
`tel:` links intact.

## Do NOT convert
`appointment.php`, `autism-screening-tool.php` (interactive JS — handled separately). If you
encounter a `<form>` or page-specific `<script>` in any other assigned page, flag it in your
report and copy the page WITHOUT that block rather than porting it broken.

## Verify before finishing
For each file: `php -l /opt/HealingTherapy/v2/<slug>.php` passes; grep your output for
`class="bi`, `data-aos`, `bootstrap` — must be zero; title/desc/canonical byte-identical to V1
(diff the var lines). Report: files written, flags/anomalies, anything you could not map.
