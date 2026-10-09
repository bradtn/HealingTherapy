# Healing Therapy Center website

## What it is
Practice website for Healing Therapy Center, a therapy practice in Dearborn, Michigan, offering
in-person care in Dearborn and telehealth across Michigan. Live at https://www.healingtherapycenter.com.

## Stack
- Plain PHP (no framework, no build step, no package manager). Pages are top-level `*.php` files
  served with clean URLs (`/kalee-lapointe` → `kalee-lapointe.php`) via `.htaccess`.
- Shared pieces live in `includes/`: `config.php` (team, services, insurance; single source of truth),
  `head.php`, `header.php`, `footer.php`, `scripts.php`, and templates such as `therapist-profile.php`.
- Forms post to `forms/` (e.g. `forms/appointment.php`, which validates against an allow-list).

## Hosting and deploy
- Production runs on a PHP 8.2 / Apache host.
- **A push to GitHub does NOT go live.** Deploy by uploading the changed files into the host's
  `public_html`, keeping folder paths, then extracting and overwriting. A zip of just the changed files
  (`git diff --name-only <from> HEAD`) is the usual hand-off.
- After deploying, check the new or changed URLs return 200 on the live site.

## Local dev
`php -S 0.0.0.0:<port> router.php` from the repo root. `router.php` emulates the clean-URL rewrites.
If PHP isn't installed, run it in a `php:8.3-cli` container with the repo mounted at `/app`.

## Content conventions
### Adding a therapist (all of these change together)
1. `assets/img/<firstname>.jpg`: portrait cropped to 4:5, about 704x880, JPEG, around 50 KB.
2. `<first>-<last>.php`: copy an existing profile (e.g. `donna-majed.php`). Set the page title (under
   60 characters), meta description (under 160), canonical, `og_image`, Person schema, and the `$tp_*`
   template variables documented at the top of `includes/therapist-profile.php`. Quick-info strip icons
   (`$tp_icons`): licensed, experience, community, care, inperson, telehealth. Approach-card icons
   (`$tp_method_icons`): thought, compass, growth, care, connect, community, emotion, shield. A key
   from the wrong set renders as an empty circle.
3. `includes/config.php`: add to `$team_members`. The header menu and contact form read this.
4. `includes/head.php` and `includes/scripts.php`: add the slug to the therapist page-type detection.
5. `appointment.php` (Preferred Therapist `<option>`) and `forms/appointment.php` (`$allowedDoctors`).
6. `therapists.php`: `$team_display` entry (title + 3 short specialties) and `$team_order`.
7. `index.php`: homepage team strip `$team_order`.
8. The seven city pages `therapist-*-mi.php`: add a line to the team list.
9. `llms.txt` (Team section) and `sitemap.xml` (new `<url>` with today's `lastmod`).

### Other
- Specialty chips on a profile can link to service pages via `$tp_specialty_links`.
- SEO notes and audits live in `docs/`.

## Gotchas
- `includes/config.php`, `includes/scripts.php` and `forms/appointment.php` use **Windows (CRLF)
  line endings**. Preserve them when editing, or the diff shows every line as changed.
- This repo is **public**. Never commit exports (CSV, XLSX, PDF reports), personal data, keys or server
  details. `.gitignore` blocks `*.csv`, `*.xlsx`, `*.har`.
- Commit messages: plain descriptions only. Never mention Claude Code or any AI tool.
