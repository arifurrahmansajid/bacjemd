# Realome - Real Estate and Realtor Block Theme

Introducing the modern Realome block theme for real estate agencies, and realtors! Realome WordPress block theme designed to help you tell your story and showcase your property best. With its clean and tidy design, this theme will be perfect for any business that needs to look professional and stand out and win everyone’s attention.

Here’s a link if you wish to view the [Realome documentation.](https://energeticthemes.com/docs/realome/)

Realome theme builds around full site editing features. What is full site editing? Full site editing (or FSE for short), is a set of new WordPress features: Block themes, template editing, site blocks, and global styles, that focus on styling blocks and using blocks to build all parts of the website, not only the content area.

The property listing functionality is built using Custom Post Type UI (CPT UI) and Advanced Custom Fields (AFC) plugins which means you can easily customize and extend as much you want.

![Realome showcase](https://energeticthemes.com/realome/wp-content/uploads/sites/93/2022/05/showcase.png)

Key Features:
- Full Site Editing
- Listing Search Filter
- Listing with Google Map
- Portfolio with Filter
- WooCommerce

Ideal for: 
- Real Estate Agencies
- Realtors and Property Brokers
- Rentals Directories
- Blog
- Interior Design and Architecture Studios

Theme Features: 
- SEO friendly
- Mobile ready
- Fresh patterns
- Gutenberg Page Builder
- Compatible with the WooCommerce plugin for eCommerce
- Property Listing block with map
- Property Listing block with map side by side
- Property Listing type
- Listing Taxonomies Locations, Property types, and Amenities. You can add more using CPT UI.
- ACF field block to get field value
- Realome Block Slider
- Accordion Block
- Listing Search Block
- Listings Block
- Portfolio Block
- Testimonials Block
- Blog
- Blog 3 col layout
- and much more

**Sources and Credits**
- Tailwind
- Fonts: Inter | Google Fonts
- Images and graphics content from: unsplash.com
Note: Images are not included in Main Download File.

---

## 🛠️ Developer Guide & Antigravity IDE Documentation

### Recent Custom Block Patterns & Style Updates

1. **Formats Grid Pattern (`inc/patterns/formats-grid.php` & `patterns/03-formats-grid.php`)**
   - **Component**: 3-column responsive format cards grid (`.vhs-formats-grid`).
   - **Dark Exclusive Card (`.vhs-format-card-dark`)**: Represents the "Living Memories" service card. Spans 2 grid columns (`grid-column: span 2 !important; width: 100% !important; max-width: 100% !important;`).
   - **Card Description (`.vhs-card-desc`)**: Set to `max-width: 100% !important;` to ensure full-width text alignment without unwanted line breaks or empty gaps before `.vhs-format-card-dashed` ("See all services").

2. **Hero Dark Pattern (`inc/patterns/hero-dark.php`)**
   - **Component**: Client Homepage Hero Section (`vhs-sections`, `hero`, `featured`).
   - **Structure**: 2-column hero layout with `#16324F` dark navy background, H1 heading, call-to-action buttons, right-side media preview box, and 5 format pills bottom bar.

3. **Living Memories Spotlight Pattern (`inc/patterns/living-memories-spotlight.php` & `patterns/04-living-memories-spotlight.php`)**
   - **Component**: Living Memories Spotlight Section (`vhs-sections`, `featured`).
   - **Headline**: "Turn Your Memories Into a Documentary of Your Life."
   - **Structure**: 2-column dark navy layout (`#16324F`) featuring eyebrow tagline (`ONLY FROM MEMORY CONVERTER`), H2 heading with highlighted word, description paragraph, outline button (`Explore Living Memories`) alongside price tag (`From $1,800`), and right-side striped media container box (`.vhs-spotlight-media-box`).

4. **How It Works Step-by-Step Pattern (`inc/patterns/how-it-works.php` & `patterns/05-how-it-works.php`)**
   - **Component**: 4-Step Process Section (`vhs-sections`, `featured`).
   - **Headline**: "How It Works." with subtitle "Simple orders can be done in 24 hours; the largest projects take about a week."
   - **Structure**: 4-column responsive white card grid (`.vhs-how-grid`) with `#F3F7FC` background. Each card features a circular cyan-bordered SVG icon, step number badge (`01`, `02`, `03`, `04`), title, and description.

5. **Local Coverage & Mail-In Pattern (`inc/patterns/local-coverage.php` & `patterns/06-local-coverage.php`)**
   - **Component**: Serving South Florida & Mail-In Section (`vhs-sections`, `featured`).
   - **Headline**: "Serving South Florida — and Families Nationwide by Mail."
   - **Structure**: 2-column layout on `#FFFFFF` background. Left side features headline, subtitle, and 8 city pill tags (`.vhs-city-pill`). Right side features "Not in South Florida?" mail-in card (`.vhs-mailin-card`) with cyan SVG icon and link.

6. **Wall of Stories Reviews Pattern (`inc/patterns/wall-of-stories.php` & `patterns/07-wall-of-stories.php`)**
   - **Component**: Reviews & Testimonials Section (`vhs-sections`, `featured`).
   - **Headline**: "A Wall of Stories." with 5.0 Google & Yelp rating badge (`.vhs-rating-badge`).
   - **Structure**: 3-column equal-height white review cards (`.vhs-review-card`) on `#F3F7FC` background. Each card features 5 cyan stars (`★★★★★`), customer quote paragraph, and author footer with circular avatar, name, and city location.

7. **FAQ Accordion Pattern (`inc/patterns/faq-accordion.php` & `patterns/08-faq-accordion.php`)**
   - **Component**: Questions Answered FAQ Accordion Section (`vhs-sections`, `featured`).
   - **Headline**: "Questions, Answered." with Hollywood studio phone link (`754-276-1601`).
   - **Structure**: 2-column layout on `#FFFFFF` background. Right column contains 6 expandable FAQ items (`.vhs-faq-item`) with cyan toggle indicators (`+` / `−`) and border dividers (`#E3EBF4`).

8. **Final Conversion CTA Band Pattern (`inc/patterns/final-cta.php` & `patterns/09-final-cta.php`)**
   - **Component**: Conversion Call-to-Action Band Section (`vhs-sections`, `featured`).
   - **Headline**: "Don't Let Your Memories Fade."
   - **Structure**: Centered deep navy section (`#16324F`) featuring scanline radial background texture (`.vhs-cta-band-overlay`), subtitle, primary blue button ("Get a Free Quote"), and outline phone button ("Call 754-276-1601").

9. **Global Custom Styles (`style.css`)**
   - Contains custom CSS rules for `.vhs-format-card`, `.vhs-format-card-dark`, `.vhs-format-card-dashed`, `.vhs-spotlight-section`, `.vhs-how-section`, `.vhs-how-card`, `.vhs-coverage-section`, `.vhs-stories-section`, `.vhs-review-card`, `.vhs-faq-section`, `.vhs-cta-band-section`, `.vhs-cta-btn-primary`, `.vhs-cta-btn-phone`, and responsive `@media` query breakpoints (`992px`, `782px`, `600px`).

