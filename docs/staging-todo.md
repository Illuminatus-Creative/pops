# Mom & Pops v2 — Staging / wp-admin / ACF To-Do

Running tracker of everything that lives **outside the theme code** (wp-admin,
ACF field setup, plugins, content). Code is on branch `claude/gifted-ritchie-fmh1cg`;
these are the steps needed to make it render + go live on staging.

Legend: ⬜ not started · ✅ done

---

## A. Theme activation (do first on staging)
- ⬜ Activate **Mom & Pops v2** (`themomandpops-v2`); keep original `themomandpops` installed as rollback.
- ⬜ Re-apply per-theme `theme_mods` after the switch: **custom logo** (Customizer) and **menu location assignments** (Appearance → Menus). Or copy DB option `theme_mods_themomandpops` → `theme_mods_themomandpops-v2`.
- ⬜ Smoke-test header/footer/menus/logo/WooCommerce render.
- ⬜ **Purge Seraphinite cache** after any change below, or edits won't appear.

---

## B. ACF fields to create (Classic editor + ACF PRO)

### B1. Dallas catering page (Project 3)
- ⬜ Add a **location rule** to the existing catering ACF field group: *Page Template is equal to `dallas-paleta-catering`* — so the Dallas page exposes the same fields `catering.php` uses (`details_title`, `our_content`, `perfect_title`, `perfect_list_rep`, `catering_first_btn`(+`_link`), `catering_second_btn`(+`_link`), `details_first_image`, `details_second_image`, `where_title`, `location_rep` → `loction_title`/`address`/`address_link`, `now_title`, `we_are_content`, `contact_heading`, `now_no`(+`_link`), `now_email_id`). *Without this the Dallas sections render empty.*

### B2. Homepage hero — third buyer path (Project 1 / P1.3)
- ⬜ `banner_third_btn` (Text) — tertiary CTA label (default in code: "Find Us in Austin").
- ⬜ `banner_third_btn_link` (Text/URL) — tertiary CTA link (default: `/find-us/`).
- ⬜ Confirm hero CTA copy/links once approved (input A):
  - Primary → `/catering/` (Austin) · Secondary "Order Pops — Ships Nationwide" → confirm shop URL (code default `/shop/`) · Tertiary "Find Us in Austin" → confirm URL.

### B3. Homepage About pull-quote (Project 1 / P1.5, decision D5)
- ⬜ `home_testimonial_quote` (Textarea) — renders an emphasized pull-quote in the About section only if filled.
- ⬜ `home_testimonial_attribution` (Text) — quote attribution.

### B4. Social-proof component (§1A) — on an ACF **Options** page (shared across home + city pages)
- ⬜ `social_proof_heading` (Text) — default "What our customers say".
- ⬜ `social_proof_google_url` (URL) — the **GMB dashboard share link** (interim default = the Maps place URL).
- ⬜ `social_proof_reviews` (Repeater) with subfields:
  - `reviewer_name` (Text)
  - `rating` (Number, 1–5)
  - `review_text` (Textarea)
  - `review_date` (Text or Date, optional)
  - `source_url` (URL, optional — link to the specific Google review)
- ⬜ Transcribe the 3 chosen reviews (input F2). Do **not** alter review wording.

---

## C. Pages, redirects, navigation (Project 3)
- ⬜ Create page **/dallas-paleta-catering/**, assign Template = `dallas-paleta-catering`, fill ACF + Yoast meta (title/description), set featured image.
- ⬜ Confirm Dallas **service-area cities/ZIPs** (input B); update `inc/schema.php` `areaServed` (currently a DFW placeholder) and page copy.
- ⬜ **301** `/catering-in-dallas/` → `/dallas-paleta-catering/` in the **Redirection** plugin.
- ⬜ **Retire** the old `/catering-in-dallas/` page (trash) so it stops sharing `catering.php`.
- ⬜ Austin `/catering/`: Yoast meta + Austin-focused copy; cross-link to Dallas. *(Code side P3.3 still to do.)*
- ⬜ Add **Dallas** to nav alongside Catering (Appearance → Menus); verify mobile (Responsive Menu); repoint nav + footer Quick Links to final URLs (no bounce through the 301 — D3).

---

## D. Project 2A — Gravity Forms (later phase)
- ⬜ Install/activate Gravity Forms (client license).
- ⬜ Build quote form (minimal required + optional fields); conditional notification routing (Austin info@/512, Dallas mike@/469); visitor confirmation; spam protection. Delivery via FluentSMTP.
- ⬜ Place the form's shortcode where the embed should appear; the catering templates will reference it. Style is handled in `css/v2-components.css`.

---

## E. QA before launch
- ⬜ Desktop + mobile pass on homepage, Austin, Dallas.
- ⬜ Google **Rich Results Test** on Austin (LocalBusiness) and Dallas (Service) — confirm valid, Dallas has **no** street address.
- ⬜ Confirm **no internal links** still point to `/catering-in-dallas/`.
- ⬜ Confirm `/catering/` (Austin) and `/dallas-paleta-catering/` are unique (no duplicate content).
- ⬜ Logo on light backgrounds only (no reversed variant exists).
