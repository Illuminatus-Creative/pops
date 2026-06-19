# Mom & Pops — Brand Reference (Baseline v1)

**Status:** Derived, not client-authored. The client has no brand bible; this document treats the **current live site (lovemomandpops.com) as the baseline brand**, with the **existing logo as canonical**. Corroborating voice/values are drawn from the original `themomandpops.com` content and the founder's Voyage Austin interview (2022).

**Use:** Single reference for Claude Code so all in-scope work (homepage, city pages, social-proof component, forms) stays visually and verbally consistent with what exists.

> **Tokens are now locked** (§2–§4), read from the repo (`css/custom.css`, `style.css`, `/fonts`, `header.php`, and the logo asset) by Claude Code. These are the source of truth for all new UI.

---

## 1. Brand name & naming

The name appears inconsistently across properties — standardize one canonical form.

| Context | Currently seen |
|---|---|
| Domain / IG handle | `lovemomandpops` (lovemomandpops.com, @lovemomandpops) |
| Site title / `og:site_name` | "The Mom And Pops" |
| Google Business Profile | "Mom & Pops All Natural Frozen Pops" |
| Founder/heritage name | "Mom & Pops Frozen Pops" (rebranded 2011) |

**Recommended canonical (confirm with client):**
- **Primary brand name:** **Mom & Pops** (ampersand `&`, not "and").
- **Full descriptive / legal-ish:** **Mom & Pops All Natural Frozen Pops** (use for GBP, schema `name`, footer).
- **Consumer/marketing handle:** **Love Mom & Pops** (matches domain + IG).
- Avoid the inconsistent "The Mom And Pops" in new copy.

---

## 2. Logo (baseline — do not redesign)

The existing logo is the brand baseline. **Do not redraw, recolor, restyle, or replace it.** Use the existing assets as-is.

**Canonical assets (live URLs; confirm exact files in repo `/wp-content/uploads/`):**
- Primary logo (header): `…/wp-content/uploads/2026/03/mompopslogo.webp`
- Footer logo: `…/wp-content/uploads/2026/03/footerlogo.webp`
- Tile / favicon source: `…/wp-content/uploads/2026/04/Layer-2.png`

**Usage rules (standard, apply unless the asset dictates otherwise):**
- Maintain clear space around the logo; don't crowd it with text or graphics.
- Don't distort, rotate, skew, or change its proportions.
- Don't recolor or apply effects (shadows, outlines, gradients).
- **Light backgrounds only.** The logo is a **single full-color asset with no mono/reversed variant** in the repo — placing it on dark or saturated backgrounds breaks contrast. (If a dark band ever needs the logo, commission a reversed variant — out of current scope.)
- **Minimum display width ≥ 160px** so the "ALL-NATURAL FROZEN PALETAS" tagline stays legible (header currently renders it at 222px).

**Logo composition (read from asset — source of truth):** navy-blue wordmark "MOM / POPS" (`#33599c` family), red script "and" (`#d32c2c` family), a multicolor paleta graphic (pink/red/green/yellow), and a navy tagline "ALL-NATURAL FROZEN PALETAS." Runtime canonical = the uploaded `custom_logo` (the `/uploads/` URLs above); the theme `images/mompopslogo.webp` + `images/footerlogo.webp` copies match.

---

## 3. Color palette

**Locked from repo (`css/custom.css`, `style.css`, logo). Source of truth.**

| Role | Hex | Notes / evidence |
|---|---|---|
| Primary brand (logo blue) | **`#33599c`** | logo wordmark; most-used brand color (32× in custom.css). Darker variants in use: `#14213f`, `#0c47a1`, `#3359a9` |
| CTA / primary button | **`#e5b538`** (golden yellow) | `.button-74` background; black border `#000` + blue drop-shadow `#33599c` |
| Secondary / warm accent | **`#cf5523`** (burnt orange) | 12× in CSS; warm tone (`#b85c0c` variant) |
| Red / "strawberry" accent | **`#d32c2c` / `#da4042`** | logo's red script "and"; pinks `#ffeaee`, `#ed8097`, `#fcdbe2` |
| Background / neutral | **`#ffffff`** white; light grey **`#f5f5f5`** | *Correction: base is white, not the "warm cream" earlier inferred.* |
| Body text | **`#000` / `#121212`** (near-black) | dominant text color |

**Contrast rules (WCAG-verified — non-negotiable):**
- **Yellow `#e5b538` takes black text only** (black ≈ 11:1 ✓; white ≈ 1.9:1 ✗ — never white on yellow).
- **Burnt orange `#cf5523` ≈ 4.2:1 on white → large text / fills only**, never small body text.
- **Strawberry red `#d32c2c` ≈ 5.0:1 → accent/semantic use only**, not body copy.
- Blue `#33599c` on white ≈ 6.9:1 ✓ (links, secondary buttons, headings).
- **Body copy stays dark-on-light; no reverse type** (light text on color) — per both contrast math and Ogilvy.

**Shade discipline (new components only — not a full system):** the repo already carries several near-identical one-off blues; don't add more on the fly. Define a **small fixed scale** — base `#33599c`, one darker for hover/active, one light tint for backgrounds — and reuse it. Add **2–3 greys** (a border grey, a muted-text grey) for cards/forms/dividers rather than inventing per element.

**Accent restraint:** blue + yellow + neutral do the **UI** work (buttons, cards, chrome). **Reserve orange / red / pink for fruit/flavor/illustrative context** (they come from the paletas and the logo). Don't let new sections become a rainbow.

**Button system (P1.3 — formalize two existing styles; zero new colors):**

| Tier | Use | Existing style |
|---|---|---|
| Primary (solid) | #1 Catering CTA | `.button-74` — yellow `#e5b538`, black border/text (loudest) |
| Secondary (outline) | #2 "Order Pops — Ships Nationwide" | `.banner-btn` — white bg, `#33599c` blue border + text |
| Tertiary (link) | #3 "Find Us in Austin" | `#33599c` text link, underline on hover |

> **v2 implementation:** these three tiers are now in `themomandpops-v2/css/v2-components.css` as `.mp-btn-primary` / `.mp-btn-secondary` / `.mp-btn-tertiary`.

---

## 4. Typography

**Locked from repo (self-hosted `/fonts` + Google Fonts in `header.php`). Source of truth.**

| Role | Font | Notes |
|---|---|---|
| Headings (H1–H3) | **Yanone Kaffeesatz**, sans-serif | dominant heading font (14× in CSS); self-hosted ExtraLight→Bold; condensed |
| Display / feature titles | **Paytone One** | rounded bold display; self-hosted; banner/section titles |
| Body / UI | *undefined — system fallback* | no single body stack (Poppins commented out, Neue Haas 1×, Roboto on search input) |

**Rules:**
- Use the existing fonts only — **do not add a web font** for new sections.
- Headings/display: Yanone + Paytone. **Keep Yanone for headings/large display only** — it's condensed and loses legibility at small sizes / light weights.
- Body: **inherit the existing fallback** rather than introducing a font. Body typography is currently **unstandardized** — flag to client as a cheap future cleanup (out of current scope).

---

## 5. Voice & tone

**Personality:** warm, family-run, playful, proudly Austin, Mexican-American heritage, health-conscious without being preachy, inclusive.

**Do:**
- Sound like a family business, not a corporation ("we," "our family," "handcrafted").
- Lead with **all-natural / organic / fresh fruit / no artificial anything**.
- Reference **Austin roots since 2008** and the paleta heritage.
- Be inclusive about dietary needs ("vegan, dairy, gluten-/nut-/egg-free"; the brand's own line: **"When we say Y'all, we mean ALL"**).
- Keep a light, friendly wit (the flavor names set the tone).

**Don't:**
- Sound sterile, corporate, or hype-y ("revolutionary," "world-class").
- Over-promise or use clickbait; specifics beat adjectives.
- Bury the family/Austin story's warmth under jargon.

**Brand vocabulary already in use:** *Popsocology* (their coined word for the business philosophy), *paleta(s)*, *Pop Star* (cart attendant), *Keep Austin Weird/Cool*. Use sparingly and consistently.

**Core values (from heritage copy):** *familia* (family), healthy living, environmental stewardship (local sourcing, composting, recycling), and "Keep Austin Cool."

---

## 6. Messaging pillars / positioning

1. **All-natural & organic** — fresh fruit, organic dairy/sugar, no high-fructose corn syrup, artificial colors, or preservatives.
2. **Family-owned, Austin-born since 2008** — Manuel & Laura Flores; made for their own kids first.
3. **Mexican-American paleta heritage** — authentic frozen-pop tradition, elevated.
4. **Events & catering** *(current commercial priority)* — carts, custom labels/graphics, attendants; from intimate parties to large activations.
5. **Inclusive / allergen-aware** — vegan, dairy, and sugarless options; gluten-, nut-, egg-free facility.
6. **Environmentally responsible** — local farmers, composting, recycling.

**Proof points (confirm permission/recency before public use):** prior "Surprise & Delight" clients incl. MTV, Cartoon Network, Reebok, Amazon, Meta, Google, Apple; events from a party of 30 to an SXSW activation of 10,000. Default to capability framing ("Fortune-500 activations; events up to 10,000 guests") unless cleared.

---

## 7. Photography & imagery style

- **Real, colorful paletas** as hero subjects; vibrant fruit tones.
- Bright, fresh, natural lighting; outdoor/event and lifestyle contexts (Austin events, farmers markets, carts).
- Authentic over stock; show the product and real settings.
- Avoid: dark/moody, clinical, or generic stock that reads corporate.
- Existing on-site assets establish the look (e.g. `icebanner.webp`, `cateringbanner.webp`, "green ice" section images) — match their energy for any new imagery.

---

## 8. Flavor naming convention

Flavor names are part of the brand voice: **playful, punny, bilingual (English/Spanish), heritage-nodding.** Keep this style for any new flavors.

Examples in market: *Orange You Dreamy, Cheery Lime, Abuelo's Chocolate, Café Con Leche, El Cucuy, Mango Chile, Pineapple Basil, Just Watermelon, Strawberry Lemonade.*

Convention: descriptive-but-fun, occasional wordplay or Spanish, never clinical ("Watermelon Pop").

---

## 9. Contact / identity (NAP)

Two market contacts exist — keep them consistent **per market** (this also matters for local SEO):

| Market | Phone | Email |
|---|---|---|
| Austin / general / HQ | (512) 775-1353 | info@lovemomandpops.com |
| Dallas (catering, staffed, no storefront) | (469) 866-1417 | mike@lovemomandpops.com |

- **Austin HQ:** 2013 Wells Branch Parkway, Suite 304, Austin, TX 78728 (Mon–Fri 10a–4p).
- **Dallas:** service area only — **do not present a storefront address** (the 1000 Jackson St address is virtual/mailing).
- **Social:** Facebook `/MomAndPopsAllNatural`, Instagram `@lovemomandpops`, Pinterest `themomandpops`, X `@themomandpops`.
- **Web properties:** canonical site `lovemomandpops.com`. Note: legacy `themomandpops.com` + an old Square store still exist — recommend consolidating/redirecting to the canonical domain (out of current scope; flagged separately).

---

## 10. Consistency rules for this project

- **Logo:** use existing assets as-is; never redesign. **Light backgrounds only** (no reversed variant exists — §2).
- **Color:** new UI uses only the locked palette (§3); **buttons** map to the three existing tiers (§3 button system); honor the **contrast rules** (black on yellow; orange large-text only; red sparing; dark-on-light body, no reverse type). For hover/border/grey states, reuse a **small defined scale** — don't spawn new one-off colors. Keep orange/red/pink for flavor/illustrative use, not UI chrome.
- **Type:** existing fonts only (§4) — Yanone/Paytone for headings/display, inherit the fallback for body; add no new web font.
- **Layout:** city pages share one template (consistency = the point); social-proof component is reusable across homepage + city pages.
- **Voice:** apply §5 to all new copy; keep flavor-naming style (§8); lead with all-natural/organic + family/Austin.
- **Name:** standardize per §1; ampersand `&`.
- **Schema/identity:** Austin = `LocalBusiness`/HQ; Dallas = `Service`/`areaServed`, **no address** (matches the header.php schema fix — now in `themomandpops-v2/inc/schema.php`).

---

## 11. Status & remaining cleanups

- **Tokens locked** (§2–§4) from the repo by Claude Code — colors, fonts, and logo facts are now the source of truth for all new UI.
- **Out-of-scope future cleanups to flag to the client:** (a) **body typography is unstandardized** (§4) — pick one body stack later; (b) **no reversed/mono logo variant** (§2) — commission one if dark/colored bands are ever wanted; (c) a small **defined shade scale** (§3) if the site grows beyond this project.
- Keep this file updated if the client later formalizes a full brand bible.
