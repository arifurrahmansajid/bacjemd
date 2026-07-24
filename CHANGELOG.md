# Changelog

## [1.7.2] - 2026-07-24

### Fixed
- **Full-Bleed Viewport Background Stretch (`style.css`)**:
  - Applied `width: 100vw !important`, `max-width: 100vw !important`, and `margin-left: calc(50% - 50vw) !important`, `margin-right: calc(50% - 50vw) !important` to `.alignfull` and `.vhs-cta-band-section`, completely removing white background margins/gaps on the right and left screen edges.

## [1.7.1] - 2026-07-24

### Fixed
- **CTA Band Background Texture & Header Centering (`style.css`, `inc/patterns/final-cta.php`, `patterns/09-final-cta.php`)**:
  - Moved radial scanline background texture directly onto full-width container `.vhs-cta-band-section` (`width: 100%`), eliminating background color seam/overlap boundary on wide screens.
  - Enforced strict center alignment (`text-align: center !important`, `text-align-last: center !important`, `align-items: center !important`) for header title, description, and action button group.

## [1.7.0] - 2026-07-24

### Added
- **Final Conversion CTA Band Pattern (`inc/patterns/final-cta.php`, `patterns/09-final-cta.php`)**:
  - Updated "Don't Let Your Memories Fade." CTA section with deep navy background (`#16324F`), radial scanline texture overlay (`.vhs-cta-band-overlay`), primary action button ("Get a Free Quote"), and phone call button ("Call 754-276-1601").
  - Added CSS rules for `.vhs-cta-band-section`, `.vhs-cta-band-overlay`, `.vhs-cta-btn-primary`, and `.vhs-cta-btn-phone` in `style.css`.

## [1.6.0] - 2026-07-24

### Added
- **FAQ Accordion Section Pattern (`inc/patterns/faq-accordion.php`, `patterns/08-faq-accordion.php`)**:
  - Updated "Questions, Answered." FAQ accordion block pattern with 2-column layout, studio call link (754-276-1601), and 6 expandable items ("What formats do you accept?", "How long does it take?", "Is my media safe with you?", "Do you outsource any work overseas?", "What files do I get back?", "What does it cost?").
  - Added CSS rules for `.vhs-faq-section`, `.vhs-faq-phone`, `.vhs-faq-wrap`, `.vhs-faq-item`, `.vhs-faq-head`, and `.vhs-faq-toggle` in `style.css`.

## [1.5.0] - 2026-07-24

### Added
- **Wall of Stories Reviews Pattern (`inc/patterns/wall-of-stories.php`, `patterns/07-wall-of-stories.php`)**:
  - Updated "A Wall of Stories" reviews block pattern with 5.0 Google & Yelp rating badge and 3 equal-height testimonial cards (Marisol G. / Coral Gables, David R. / Boca Raton, Rachel S. / Hollywood).
  - Added CSS rules for `.vhs-stories-section`, `.vhs-rating-badge`, `.vhs-stories-grid`, `.vhs-review-card`, and `.vhs-author-avatar` in `style.css`.

## [1.4.0] - 2026-07-24

### Added
- **Local Coverage & Mail-In Pattern (`inc/patterns/local-coverage.php`, `patterns/06-local-coverage.php`)**:
  - Updated "Serving South Florida" block pattern matching the 2-column layout with 8 city pills (Hollywood, Fort Lauderdale, Miami, Boca Raton, Pompano Beach, Coral Gables, Aventura, West Palm Beach).
  - Added "Not in South Florida?" mail-in card on the right side.
  - Added CSS rules for `.vhs-coverage-section`, `.vhs-city-pill`, `.vhs-mailin-card`, `.vhs-mailin-icon`, and `.vhs-mailin-link` in `style.css`.

## [1.3.2] - 2026-07-24

### Fixed
- **How It Works Cards Top Alignment (`style.css`)**:
  - Added `margin-top: 0 !important` and `margin-block-start: 0 !important` to `.vhs-how-grid > *` and `.vhs-how-card` to override Gutenberg's default sibling block top margin, ensuring all 4 cards align pixel-perfectly along the top edge.

## [1.3.1] - 2026-07-24

### Fixed
- **How It Works Cards Grid Height (`style.css`)**:
  - Added `align-items: stretch !important`, `height: 100% !important`, and `flex: 1 1 auto !important` to `.vhs-how-grid` and `.vhs-how-card` so that all 4 cards automatically match 100% equal height regardless of text length.

## [1.3.0] - 2026-07-24

### Added
- **How It Works 4-Step Pattern (`inc/patterns/how-it-works.php`, `patterns/05-how-it-works.php`)**:
  - Updated "How It Works" pattern to match the 4-card pixel perfect layout ("Get your free quote", "Digitized by hand", "Review online", "Everything returned").
  - Added CSS styling rules for `.vhs-how-section`, `.vhs-how-header`, `.vhs-how-grid`, `.vhs-how-card`, `.vhs-how-icon-circle`, and `.vhs-how-number` in `style.css`.

## [1.2.1] - 2026-07-24

### Fixed
- **Living Memories Spotlight Background Overlay (`style.css`, `inc/patterns/living-memories-spotlight.php`)**:
  - Moved background gradient and line texture directly to full-width container (`.vhs-spotlight-section`), resolving vertical line seam/break at 1350px container boundary on wide screens.

## [1.2.0] - 2026-07-24

### Added
- **Living Memories Spotlight Pattern (`inc/patterns/living-memories-spotlight.php`, `patterns/04-living-memories-spotlight.php`)**:
  - Added new 2-column spotlight block pattern ("Turn Your Memories Into a Documentary of Your Life").
  - Added CSS styling rules for `.vhs-spotlight-section`, `.vhs-spotlight-overlay`, `.vhs-spotlight-title`, `.vhs-spotlight-btn-wrap`, and `.vhs-spotlight-media-box` in `style.css`.
  - Registered `'living-memories-spotlight'` in `inc/block-patterns.php`.

## [1.1.0] - 2026-07-24

### Changed
- **Formats Grid Pattern Layout (`style.css`, `inc/patterns/formats-grid.php`)**:
  - Updated `.vhs-format-card-dark` (Living Memories Exclusive Card) to expand full width across 2 grid columns (`width: 100% !important`, `max-width: 100% !important`, `grid-column: span 2 !important`).
  - Updated `.vhs-card-desc` within dark card to `max-width: 100% !important` to ensure description text flows naturally across the full card width without leaving empty gap before the "See all services" card.




### ⚠ BREAKING CHANGES

* initial release

### Features

* initial release ([1df41a9](https://github.com/amjadr360/realome/commit/1df41a98aed5442f72b31330f6ccfb7b2173aafc))

## [0.2.0](https://github.com/amjadr360/realome/compare/v0.1.2...v0.2.0) (2022-05-24)


### Features

* initial release ([024e490](https://github.com/amjadr360/realome/commit/024e49009b24f256fa1439d5af55dd32f039f29d))

## [0.1.1-1] - 2022-05-18

### Added
