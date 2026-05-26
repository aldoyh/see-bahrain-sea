# HTML Templates & Template Parts Specification

Block themes represent layouts using flat HTML files with special comment blocks parsed by the WordPress block engine. 

---

## 1. Directory Structure and Placement

- **`templates/`**: Houses page templates. Standard files:
  - `index.html` (Required - Fallback page)
  - `404.html` (Page not found page)
  - `single.html` (Single blog post page)
  - `page.html` (Single standard page page)
  - `archive.html` (Post listing page)
  - `search.html` (Search results page)
- **`parts/`**: Houses layout fragments (reusable sections). Standard files:
  - `header.html`
  - `footer.html`
  - `sidebar.html`

> [!CAUTION]
> **Subdirectory Restriction:** Template parts placed in nested folders inside `parts/` (e.g., `parts/headers/main-header.html`) will fail to register or render. They must exist exactly as flat files under the root `parts/` directory (e.g., `parts/main-header.html`).

---

## 2. Block Comment Syntax Rules

WordPress blocks inside HTML files are represented by opening and closing HTML comments:

### Self-Closing Blocks
Used for blocks without inner blocks or static elements:
```html
<!-- wp:post-title {"level":1,"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->
```

### Wrapping Blocks
Used for layouts or container elements that group other blocks:
```html
<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group">
  <!-- wp:post-content {"layout":{"type":"constrained"}} /-->
</main>
<!-- /wp:group -->
```

> [!IMPORTANT]
> **Class Consistency:** The inner HTML markup must match the wrapping comment configuration. If you configure a block to render as `<main class="wp-block-group">`, the opening comment tag should match (`"tagName":"main"`). WordPress parses this block markup on the fly; if it matches poorly, block-validation errors will appear in the site editor.

---

## 3. Registering Layouts in `theme.json`

To make custom templates and template parts selectable in the Site Editor UI, you must register them in `theme.json`.

### `customTemplates`
Add page-specific custom templates that users can apply to pages or custom post types:

```json
{
  "customTemplates": [
    {
      "name": "full-width-landing",
      "title": "Full Width Landing Page",
      "postTypes": ["page", "post"]
    },
    {
      "name": "portfolio-layout",
      "title": "Portfolio Template",
      "postTypes": ["portfolio"]
    }
  ]
}
```
*Note: The corresponding template file must be placed in `templates/full-width-landing.html`.*

### `templateParts`
Define layout components and associate them with standard editing regions (`header`, `footer`, `sidebar`):

```json
{
  "templateParts": [
    {
      "name": "main-header",
      "title": "Main Site Header",
      "area": "header"
    },
    {
      "name": "footer-navigation",
      "title": "Footer Navigation Links",
      "area": "footer"
    }
  ]
}
```
*Note: The corresponding template part file must be placed in `parts/main-header.html`.*

---

## 4. Referencing Template Parts inside Templates

Embed parts within templates using the `wp:template-part` comment markup:

```html
<!-- wp:template-part {"slug":"main-header","tagName":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group">
  <!-- wp:post-title {"level":1} /-->
  <!-- wp:post-content /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-navigation","tagName":"footer","area":"footer"} /-->
```

---

## 5. Standard Query Loop Block Syntax

The Query Loop is a highly complex block with strict nesting requirements. When outputting post lists, use this standard template block comment structure:

```html
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query">
  <!-- wp:post-template -->
    <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
    <!-- wp:post-title {"isLink":true} /-->
    <!-- wp:post-date /-->
    <!-- wp:post-excerpt /-->
  <!-- /wp:post-template -->

  <!-- wp:query-pagination -->
    <!-- wp:query-pagination-previous /-->
    <!-- wp:query-pagination-next /-->
  <!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
```
