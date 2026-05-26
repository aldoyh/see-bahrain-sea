# Creating & Scaffolding a New Block Theme

When bootstrapping a new WordPress block theme or converting a classic theme, you must supply a precise structural layout and explicit header metadata to enable Full Site Editing (FSE) features.

---

## 1. Minimal Filesystem Structure

A modern block theme requires very few files to be recognized by WordPress. Here is the minimum viable structure:

```
my-block-theme/
├── style.css              # Required: Contains theme metadata headers
├── theme.json             # Required: Master layout, settings, and styles config
├── templates/
│   └── index.html         # Required: The core fallback page template
└── parts/                 # Highly Recommended: Holds layout fragments
    ├── header.html
    └── footer.html
```

---

## 2. Setting Up Theme Headers (`style.css`)

The `style.css` file is parsed by WordPress to register the theme name, version, licensing, and capabilities. For block themes, you **must** include specific tags in the metadata block:

```css
/*
Theme Name:        Sleek Horizon
Theme URI:         https://example.com/sleek-horizon
Author:            Design Studio
Author URI:        https://example.com
Description:       A premium, high-performance minimal block theme for creative portfolios.
Version:           1.0.0
Requires at least: 6.6
Requires PHP:      7.4
License:           GNU General Public License v2 or later
License URI:       http://www.gnu.org/licenses/gpl-2.0.html
Text Domain:       sleek-horizon
Tags:              full-site-editing, block-themes, portfolio, photography, dark, custom-colors
*/

/* Custom CSS styling remains blank or holds fallback utility classes. Global styling is declared in theme.json. */
```

> [!IMPORTANT]
> **FSE Tag Requirement:** To ensure the WordPress admin menu unlocks **Appearance > Editor** (Site Editor) instead of the legacy Customizer, you **must** include either the `full-site-editing` or `block-themes` tag in the `Tags:` list of your `style.css` header.

---

## 3. Creating the Minimal Fallback Template (`templates/index.html`)

The `templates/index.html` file serves as the universal template fallback. If WordPress cannot find a specific template (like `single.html` or `category.html`), it renders this file. 

Create a robust layout that handles headers, content loops, and footers:

```html
<!-- wp:template-part {"slug":"header","tagName":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
  
  <!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true}} -->
  <div class="wp-block-query">
    <!-- wp:post-template -->
      <!-- wp:post-title {"isLink":true,"tagName":"h2"} /-->
      <!-- wp:post-featured-image {"isLink":true} /-->
      <!-- wp:post-excerpt /-->
      <!-- wp:post-date /-->
    <!-- /wp:post-template -->

    <!-- wp:query-pagination -->
      <!-- wp:query-pagination-previous /-->
      <!-- wp:query-pagination-next /-->
    <!-- /wp:query-pagination -->
  </div>
  <!-- /wp:query -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /-->
```

---

## 4. Minimal Template Parts (`parts/`)

Create simple template parts so that the index template parses without warnings:

### `parts/header.html`
```html
<!-- wp:group {"tagName":"div","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group">
  <!-- wp:site-title /-->
  <!-- wp:navigation /-->
</div>
<!-- /wp:group -->
```

### `parts/footer.html`
```html
<!-- wp:group {"tagName":"div","layout":{"type":"constrained"}} -->
<div class="wp-block-group">
  <!-- wp:paragraph {"align":"center"} -->
  <p class="has-text-align-center">© <?php echo date('Y'); ?> Sleek Horizon. Built with Block Themes.</p>
  <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

## 5. Structural Validation Checklist

Once you have scaffolded your theme, run these quick validation checks:
1. **Directory Tree Integrity**: Confirm `templates/` and `parts/` are lowercase.
2. **Metadata tags**: Check that `style.css` contains `block-themes` in the Tags list.
3. **Theme activation**: Run `wp theme activate sleek-horizon` to ensure WordPress successfully registers the theme without errors.
4. **Site Editor unlock**: Go to the WordPress dashboard and verify **Appearance > Editor** is visible.
