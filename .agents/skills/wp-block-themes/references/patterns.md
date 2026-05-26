# Block Patterns: Registration & Implementation Manual

Block patterns are pre-designed layouts of block markup that users can insert into posts, pages, or templates from the inserter panel. In modern block themes, patterns are created as `.php` files and registered automatically by WordPress.

---

## 1. Directory Structure

Place all block patterns in the `patterns/` directory of the active theme:

```
wp-content/themes/my-theme/
├── theme.json
├── patterns/
│   ├── hero-banner.php
│   ├── custom-footer.php
│   └── text-columns.php
```

---

## 2. File Header Metadata Configuration

WordPress scans the top of every PHP file in the `patterns/` folder for a comment block containing metadata. All values must be specified exactly to ensure proper loading:

```php
<?php
/**
 * Title: Custom Hero Section
 * Slug: my-theme/custom-hero-section
 * Categories: featured, banner
 * Description: A premium, dual-column hero layout with visual media and CTA buttons.
 * Viewport Width: 1200
 * Block Types: core/group
 * Keywords: hero, banner, split, call to action
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
  <!-- Block markup continues... -->
</div>
<!-- /wp:group -->
```

### Key Metadata Properties Explained
- **`Title`**: The human-readable label shown in the editor's inserter.
- **`Slug`**: The unique identifier for the pattern, formatted as `theme-slug/pattern-name`.
- **`Categories`**: Maps the pattern to specific categories. Core categories include: `header`, `footer`, `pages`, `featured`, `query`, `text`, `gallery`, `buttons`, `call-to-action`, `banner`, `services`, `about`, `contact`, `team`, `testimonials`.
- **`Block Types`**: Associates the pattern with specific blocks. For example, setting `Block Types: core/template-part/header` will make the pattern available when replacing a header template part in the Site Editor.
- **`Inserter`**: Set to `false` if the pattern should only be used programmatically (e.g. nested inside another template) and hidden from the user's inserter panel.

---

## 3. Registering Custom Pattern Categories

To map a pattern to a category not included in WordPress Core, you must register the category in the theme's `functions.php` file using `register_block_pattern_category`:

```php
function my_theme_register_pattern_categories() {
    register_block_pattern_category(
        'brand-marketing',
        array( 'label' => __( 'Brand Marketing Layouts', 'my-theme' ) )
    );
}
add_action( 'init', 'my_theme_register_pattern_categories' );
```
Once registered, you can assign it in the file headers:
```php
 * Categories: brand-marketing
```

---

## 4. Incorporating Dynamic and Translated Assets

Unlike HTML templates, filesystem patterns are written in PHP. This enables you to dynamically fetch site assets, translate text strings, and reference paths:

### 1. Referencing Theme Images Dynamic Paths
Do not hardcode URLs in pattern markup. Load theme assets dynamically:

```php
<?php
$image_url = esc_url( get_stylesheet_directory_uri() . '/assets/images/hero-bg.jpg' );
?>
<!-- wp:image {"sizeSlug":"full"} -->
<figure class="wp-block-image size-full">
  <img src="<?php echo $image_url; ?>" alt="<?php esc_attr_e( 'Hero Background', 'my-theme' ); ?>" />
</figure>
<!-- /wp:image -->
```

### 2. Localization and String Translation
Wrap all plain-text user-facing text inside translation functions:

```php
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Discover our range of bespoke services designed to elevate your brand presence.', 'my-theme' ); ?></p>
<!-- /wp:paragraph -->
```

---

## 5. Unregistering Core / Duplicate Patterns

To showcase *only* your custom theme-designed patterns and remove the default templates loaded by WordPress Core:

### Disable Core Patterns completely
Add the following line to your theme's `functions.php` file:

```php
function my_theme_remove_core_patterns() {
    remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'my_theme_remove_core_patterns' );
```
