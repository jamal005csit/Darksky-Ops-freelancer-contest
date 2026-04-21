# DARKSKY OPS — Complete System Documentation
**Version 1.0.0 | Confidential**

---

## 1. BRAND DIRECTION

### Emotional Architecture
The brand operates on three psychological layers:
- **Fear** (secondary): The visitor understands what exposure looks like.
- **Trust** (primary): Competence is demonstrated, never claimed.
- **Control** (tertiary): Every design choice signals that someone deliberate made it.

The visual language draws from military-grade documentation, classified report aesthetics, and precision instrument design — not consumer cybersecurity marketing.

### Color Palette

| Name         | Hex       | Usage                                        |
|--------------|-----------|----------------------------------------------|
| Void         | `#050507` | Primary background — deepest dark            |
| Deep         | `#0a0a0f` | Section backgrounds (mission, contact)       |
| Surface      | `#0f0f16` | Card/component backgrounds                  |
| Layer        | `#16161f` | Elevated surfaces, hover states             |
| Signal       | `#4af0b0` | **Single accent** — all interactive + brand |
| Ink          | `#e8e8f0` | Primary text                                 |
| Ink Dim      | `#7a7a90` | Secondary text, descriptions                 |
| Ink Ghost    | `#3a3a50` | Tertiary text, borders, labels              |
| Border       | `rgba(255,255,255,0.06)` | Subtle separators          |
| Border Mid   | `rgba(255,255,255,0.12)` | Slightly visible borders   |

**Why `#4af0b0`?**
Cold teal — not blue (too corporate), not green (too playful). It reads as night-vision equipment, terminal output, encrypted channels. One accent only. Restraint IS the message.

### Typography

| Role     | Font                  | Weight    | Notes                            |
|----------|-----------------------|-----------|----------------------------------|
| Display  | Syne                  | 700, 800  | Tighter tracking, strong headings |
| Mono     | DM Mono               | 300, 400  | All body copy, labels, UI text   |

**Why these?**
- Syne has a geometric, slightly mechanical edge. It looks designed, not chosen.
- DM Mono signals precision, terminal culture, technical authority — without the cliché of Courier.
- Neither is "default AI design" (no Space Grotesk, no Inter).

### Visual Principles

1. **One signal color, used sparingly.** Every instance of `#4af0b0` carries meaning.
2. **Grid-based background tension.** The hero grid exists to be masked — the negative space is the design.
3. **Noise layer always present.** Prevents the dark from feeling "digital generic." Adds material texture.
4. **Scan line animation.** Subtle. 8-second loop. Some visitors won't notice. That's the point.
5. **Reveal animations on scroll.** Not decorative — they create the sense that information is being disclosed, not broadcasted.
6. **No gradients on UI elements.** Only background gradients (radial depth). Buttons are flat signal color.

---

## 2. WEBSITE UI COPY (FINAL — NO PLACEHOLDERS)

### Hero Section
**Headline:**
```
What you can't
see controls
everything.
```

**Subtext:**
```
We operate in the gap between what attackers know and what they don't.
Penetration testing, infrastructure hardening, and classified-grade
security operations — for institutions that cannot afford a second chance.
```

**CTAs:**
- Primary: `Initiate Contact`
- Secondary: `View Operations`

**Eyebrow tag:** `Operational Security · Est. 2019`

---

### Mission Section

**Headline:**
```
We don't sell
peace of mind.
We eliminate the
need for it.
```

**Principles:**
1. **Silence Over Signal** — Our engagements leave no trace in your systems beyond the report. No residual footprint. No escalating retainer.
2. **Threat-First Thinking** — We map attack surfaces the way adversaries do — before they find them. Every assessment assumes breach is already in progress.
3. **Deliverables, Not Decks** — Reports are classified-format, actionable within 48 hours. No vendor pitch embedded. No upsell. Just findings and remediation paths.

---

### Services Section

**Heading:** `Three disciplines. No overlap.`
**Note:** "Each operation is scoped, contained, and reported to a single authorized contact. No third-party subcontracting."

**OPS-01: Network Penetration Testing**
Full-spectrum adversarial simulation against your network perimeter, internal segments, and cloud boundaries. Red-team methodology adapted from nation-state TTPs. We find what automated scanners cannot.
_Tags: External Perimeter, Internal Pivoting, Zero-Day Surface, Cloud Boundaries_

**OPS-02: Infrastructure Hardening**
Systematic elimination of attack surface across physical, virtual, and hybrid environments. Firewall re-architecture, identity segmentation, protocol enforcement. We rebuild what should not have been built the first time.
_Tags: Firewall Architecture, Identity Segmentation, Zero Trust Posture, Hybrid Environments_

**OPS-03: Security Operations Support**
Classified-level advisory engagements for government bodies, critical infrastructure operators, and high-value private entities. Threat intelligence integration, incident response posture, and pre-breach protocol design.
_Tags: Gov / Critical Infra, Threat Intel, IR Posture, Classified Engagements_

---

### Statistics Bar
- `340+` Engagements Completed
- `0` Client Breaches Post-Engagement
- `48h` Report Delivery SLA
- `100%` NDA-Bound Operations

---

### Contact Section

**Headline:**
```
If you're here,
you already know
what you need.
```

**Subtext:**
```
First contact is encrypted. Responses are signed.
Expect a reply within one business day — or a confirmation
that we cannot engage.
```

**Email:** `contact@darkskyops.com`

**Protocol note:** `PGP Key available on request · No unsolicited proposals · NDAs precede all scoping`

---

## 3. LOGO SYSTEM

### Files Delivered
```
logo/
├── darksky-ops-logo-dark.svg    (Full logo, dark variant — primary)
├── darksky-ops-logo-light.svg   (Full logo, light variant — on white)
└── darksky-ops-mark.svg         (Mark only — favicon, app icon, embossing)
```

### Concept Explanation

**The Hexagonal Sight**

Three nested regular hexagons + crosshair + center point.

**Why it works psychologically:**
- The hexagon is a shape of natural efficiency (honeycombs, crystal lattices) — it reads as intelligent, not arbitrary.
- Three layers of hexagons suggest depth, layers of security, or concentric rings of defense.
- The crosshair adds targeting precision — a subtle reference to offensive capability (pen testing) without becoming aggressive.
- The center dot is a "lock" — confirmation that the target is acquired, secured.
- The whole mark looks like an instrument sight, a classified document watermark, or a sensor array. Never a padlock. Never a shield.

**Construction logic:**
- All geometry derived from a single unit grid (160×160 viewBox).
- Center: `(80, 80)`
- Outer hex: radius `70` — outer boundary awareness
- Middle hex: radius `50` — primary brand identity mark
- Inner hex: radius `28` — precision layer
- Crosshair endpoints land on middle hex vertices
- All stroke-widths: 1, 1.5 only — no heavy fills, no decorative weight

### PNG Export Guidance

Export using Inkscape (free) or Figma:

| Use            | Size    | Background           | Filename                       |
|----------------|---------|----------------------|--------------------------------|
| Favicon        | 32×32   | Transparent          | favicon.png                    |
| App icon       | 512×512 | `#050507` fill       | icon-512.png                   |
| Email header   | 200×80  | Transparent          | darksky-ops-email.png          |
| Full logo dark | 800×320 | `#050507` fill       | darksky-ops-logo-dark.png      |
| Full logo light| 800×320 | `#ffffff` fill       | darksky-ops-logo-light.png     |

For favicon from `darksky-ops-mark.svg`: crop to 160×160, export at 32×32 and 64×64.

---

## 4. WORDPRESS DEPLOYMENT INSTRUCTIONS

### Files Structure
```
wordpress-theme/
├── style.css          (Theme header + all CSS)
├── index.php          (Main template — all HTML content)
├── header.php         (Opening HTML, head, site header)
├── footer.php         (Footer, wp_footer call, closing tags)
├── functions.php      (Theme setup, enqueue, security)
└── assets/
    └── main.js        (Cursor, scroll, reveal observer)
```

### Step-by-Step Deployment

#### Step 1 — Prepare the Theme
1. Create a folder named `darksky-ops`
2. Place all theme files into it (preserving the `assets/` subfolder)
3. Compress the folder to `darksky-ops.zip`

#### Step 2 — Upload to WordPress
1. Log into WordPress Admin → **Appearance → Themes**
2. Click **Add New → Upload Theme**
3. Select `darksky-ops.zip` and click **Install Now**
4. Click **Activate** once installation completes

#### Step 3 — Set the Homepage
1. Go to **Settings → Reading**
2. Set "Your homepage displays" to **A static page**
3. Under "Homepage", create a new blank page titled `Home` (if not existing)
4. Select it as the homepage

> **Note:** The theme renders all content from `index.php` directly. The WordPress page content from the editor is not used. This is intentional — maximum performance, minimum overhead.

#### Step 4 — Set Contact Email
1. Go to **Appearance → Customize**
2. Open **Contact Settings**
3. Enter your operational contact email
4. Click **Publish**

#### Step 5 — Disable Unnecessary WordPress Features
Via `wp-config.php`, add:
```php
define('DISALLOW_FILE_EDIT', true);     // Disable theme editor
define('DISABLE_WP_CRON', true);        // Use server cron instead
define('WP_POST_REVISIONS', false);     // No revision bloat
```

#### Step 6 — Performance (Recommended)
Install only these plugins if needed:
- **WP Super Cache** or **W3 Total Cache** — page caching
- **Autoptimize** — CSS/JS minification (inline JS only)
- **Smush** — if you add images later

The theme already:
- Removes wp-emoji
- Removes RSD/WLW links from head
- Disables XML-RPC
- Disables comments
- Adds security headers
- Loads fonts via `display=swap` for non-blocking render

#### Step 7 — SSL
Ensure HTTPS is active. The contact email link is the only external interaction. Force HTTPS in `wp-config.php`:
```php
define('FORCE_SSL_ADMIN', true);
```

---

## 5. MICRO-INTERACTIONS & POLISH

| Element | Interaction | Implementation |
|---|---|---|
| Custom cursor | Dot follows mouse instantly; ring follows with lag (12% per frame) | Pure JS RAF loop |
| Ring on hover | Expands from 32px → 52px on links/buttons | CSS transition |
| Hero elements | Staggered fade+rise on load | CSS `animation` + `animation-delay` |
| Scroll reveals | `IntersectionObserver` → `.visible` class | ~20 lines JS |
| Scan line | Single pixel gradient drifts top→bottom | CSS `@keyframes scan` 8s loop |
| Pulse dot | Status indicator breathing loop | CSS `@keyframes pulse` |
| Service cards | Top border sweeps in from left on hover | `scaleX(0→1)` transform |
| Header | Gains glass blur + border after 60px scroll | `classList.toggle` on scroll |
| Contact email | Bottom border + text glow on hover | `text-shadow` transition |
| Button | Lifts 2px + signal glow on hover | `translateY(-2px)` + `box-shadow` |

---

## 6. ACCESSIBILITY NOTES

- All decorative elements use `aria-hidden="true"`
- Semantic `<section>`, `<article>`, `<header>`, `<footer>`, `<main>` throughout
- All sections have `aria-labelledby` pointing to heading IDs
- Custom cursor is hidden on touch/coarse pointer devices via `@media (pointer: fine)` check in JS
- `body { cursor: auto }` restored at ≤800px breakpoint
- Focus states: native browser focus rings are not suppressed (no `outline: none` anywhere)
- Color contrast: Ink (`#e8e8f0`) on Void (`#050507`) = 17.5:1 ✓ (WCAG AAA)
- Signal on Void = 10.5:1 ✓ (WCAG AAA)
- `::selection` uses signal on void — both readable
- `prefers-reduced-motion` — recommended addition:
  ```css
  @media (prefers-reduced-motion: reduce) {
    *, *::before, *::after {
      animation-duration: 0.001ms !important;
      transition-duration: 0.001ms !important;
    }
  }
  ```

---

## 7. PERFORMANCE NOTES

**Expected Lighthouse Scores (production):**
- Performance: 95–100
- Accessibility: 95+
- Best Practices: 100
- SEO: 90+ (robots noindex set intentionally)

**Why it's fast:**
- Zero CSS frameworks loaded
- Zero JS frameworks
- Total JS < 2KB (unminified)
- Single CSS file (no @imports chain)
- Google Fonts with `display=swap` — no render blocking
- SVG icons inline — zero HTTP requests for iconography
- No hero image — pure CSS/SVG background
- No video, no background-video
- No lazy-loaded images (no images at all by default)
- `IntersectionObserver` used (native, no polyfill needed for modern browsers)
- `passive: true` on scroll listener
- `requestAnimationFrame` for cursor ring animation

---

*Document classification: INTERNAL — DESIGN SYSTEM*
*Darksky Ops · All rights reserved · contact@darkskyops.com*
