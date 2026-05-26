---
name: wp-block-themes
description: "Use when developing WordPress block themes: theme.json (global settings/styles), templates and template parts, patterns, style variations, and Site Editor troubleshooting (style hierarchy, overrides, caching)."
compatibility: "Targets WordPress 6.0+ (PHP 7.4+). Filesystem-based agent with bash + Node.js. Requires WP-CLI for database inspection and customization purges."
---

# WP Block Themes: Advanced Developer and Agent Playbook

This skill outlines the strict workflow and technical specifications for developing, editing, and debugging WordPress Block Themes (FSE - Full Site Editing). 

Use this skill whenever you need to modify or create a block theme's `theme.json` configuration, HTML templates (`templates/`), template parts (`parts/`), filesystem patterns (`patterns/`), style variations (`styles/`), or when troubleshooting site editor overriding behavior.

---

## 1. When to Use This Skill

Activate this skill immediately if the user request involves:
1. **Configuring `theme.json`**: Modifying typography, spacing presets, shadow palettes, color palettes, fluid typography settings, layout controls, elements styling, block-specific styles, or custom CSS rules.
2. **Developing Templates & Parts**: Creating or editing physical HTML files in `templates/` or `parts/` (e.g. `index.html`, `single.html`, `header.html`).
3. **Registering Block Patterns**: Writing or modifying theme-specific PHP patterns in `patterns/` with custom headers.
4. **Style Variations**: Creating, editing, or testing JSON skins inside the `styles/` folder.
5. **Site Editor Debugging**: Investigating why edits in `theme.json`, templates, or styles do not apply or render on the frontend due to database-level custom overrides.

---

## 2. Required Context & Pre-requisites

Before taking action on a block theme, verify the following inputs:
- **Repo & Theme Path**: Locate the targeted theme's folder relative to the workspace root. If multiple themes are present in `wp-content/themes/`, identify the active or requested theme.
- **WordPress Core Version**: Check the minimum supported and active WordPress core version. The `theme.json` version (v2 vs v3) and block capabilities drastically differ based on the core version.
- **Environment State**: Verify if WP-CLI is available to query option tables and manage custom overrides.

---

## 3. The 7-Phase Block Theme Workflow

Follow these chronological phases strictly to guarantee high-integrity block theme updates.

### Phase 1: Environment Triage & Diagnostics
1. **Locate and Detect Theme Roots**:
   Run the block theme detection script to locate all themes, parse their `theme.json` configuration structures, and confirm their active structures:
   ```bash
   node .agents/skills/wp-block-themes/scripts/detect_block_themes.mjs
   ```
2. **Identify the Active Theme via WP-CLI**:
   Ensure you are targeting the active stylesheet. Run:
   ```bash
   wp theme list --status=active
   ```
3. **Determine Database Override State**:
   Inspect if global styles, template changes, or template part modifications have been saved to the database (which overrides theme files):
   ```bash
   wp post list --post_type=wp_global_styles --format=ids
   wp post list --post_type=wp_template --format=ids
   wp post list --post_type=wp_template_part --format=ids
   ```

### Phase 2: Design and Schema Alignment
1. **Determine the `theme.json` Schema Version**:
   - **WordPress 6.6+**: Use `version: 3`. Schema v3 introduces support for defining custom CSS classes, font face variations directly, block-level overrides, and revised formatting rules.
   - **WordPress 5.8 to 6.5**: Use `version: 2`.
2. **Consult Reference Materials**:
   Review the detailed specifications matching your current task:
   - For structural settings/styles: Read [theme-json.md](file:///Users/aldoyh/Studio/my-wordpress-website/.agents/skills/wp-block-themes/references/theme-json.md)
   - For layout design: Read [templates-and-parts.md](file:///Users/aldoyh/Studio/my-wordpress-website/.agents/skills/wp-block-themes/references/templates-and-parts.md)
   - For inserter layouts: Read [patterns.md](file:///Users/aldoyh/Studio/my-wordpress-website/.agents/skills/wp-block-themes/references/patterns.md)
   - For global skins: Read [style-variations.md](file:///Users/aldoyh/Studio/my-wordpress-website/.agents/skills/wp-block-themes/references/style-variations.md)

### Phase 3: Safe `theme.json` Configuration
When updating `theme.json`, always conform to the following schema:
- **`settings`**: Configures the site editor UI controls, registers color palettes, defines typography scales, configures fluid typography boundaries, enables layout settings, and sets up custom sizing units.
- **`styles`**: Appiles CSS values globally to the document (e.g. body backgrounds), specific elements (e.g., links, buttons, headings, text inputs), or specific blocks (e.g., `core/group`, `core/paragraph`).
- **`customTemplates` / `templateParts`**: Formally maps template/part slugs to human-readable titles and assigns template parts to post types or specific theme areas.

*Always validate JSON formatting before writing. Typos will silently break block editor rendering.*

### Phase 4: HTML Template/Part Engineering
Templates (`templates/`) and template parts (`parts/`) in block themes are written in pure HTML, utilizing block-syntax comments:
- **Nesting Structure**: Ensure template markup is structured using core blocks (e.g. `core/group`, `core/columns`, `core/column`).
- **Template Parts References**: Refer to template parts inside template files using the standard self-closing template part block comment:
  ```html
  <!-- wp:template-part {"slug":"header","tagName":"header","area":"header"} /-->
  ```
- **Nesting Restrictions**: Template parts must live directly inside the `parts/` folder. They **cannot** be nested in nested directories (e.g., `parts/headers/main.html` is invalid; it must be `parts/main-header.html`).

### Phase 5: Dynamic Pattern & Variation Construction
1. **Theme Block Patterns (`patterns/*.php`)**:
   Register custom, reusable layouts in PHP files inside the `patterns/` folder. Always supply an explicit documentation header matching WordPress pattern specs:
   ```php
   <?php
   /**
    * Title: [Pattern Title]
    * Slug: [theme-slug]/[pattern-slug]
    * Categories: header, footer, featured, query, call-to-action
    * Block Types: core/template-part/header, core/query
    * Description: A comprehensive description of the pattern layout
    * Inserter: true
    */
   ?>
   <!-- Block HTML Markup Here -->
   ```
2. **Style Variations (`styles/*.json`)**:
   Create beautiful, switchable skins that modify colors, layouts, and typography. Be aware that changing variation files will **not** automatically update existing instances if the user has selected and saved the style in the database.

### Phase 6: Deep Diagnostics & Troubleshooting
If custom styles or template structural changes are ignored by WordPress:
1. **Identify Conflict Source**:
   Check if user-customized database instances override filesystem assets.
2. **Wipe Database Overrides (Safe Developer Environments Only)**:
   Purge global styles, template modifications, and template part customizations from the DB to force WordPress to fall back to the theme files.
   Read the detailed CLI and manual commands in [debugging.md](file:///Users/aldoyh/Studio/my-wordpress-website/.agents/skills/wp-block-themes/references/debugging.md).
3. **Flush Server & Block Caches**:
   Clear the local transients and block-editor caches via WP-CLI:
   ```bash
   wp transient delete --all
   wp cache flush
   ```

### Phase 7: Comprehensive Verification
- **Editor Consistency**: Open the Site Editor and confirm that custom presets (colors, font sizes), layouts, and patterns appear correctly in the inserter panel.
- **Frontend Consistency**: Verify the layout output on the frontend using browser devtools to ensure correct theme-generated CSS variables (e.g., `--wp--preset--color--primary`) are injected.
- **Console Inspection**: Confirm there are no React errors or block validation console warnings in the browser console when opening the Site Editor.

---

## 4. Common Failure Modes & Quick Fixes

| Failure | Root Cause | Workaround / Resolution |
| :--- | :--- | :--- |
| **`theme.json` changes have no effect** | Database styles override filesystem config; OR syntax error in JSON file. | 1. Validate JSON syntax.<br>2. Run WP-CLI purge to remove `wp_global_styles` post records.<br>3. Force reload. |
| **Template part not rendering** | File is placed in a subdirectory (e.g. `parts/header/nav.html`). | Move the file to `parts/nav.html` and update block comment reference in the parent template. |
| **Custom block patterns do not show up in the inserter** | Incorrect header syntax, or `Inserter: false` is defined in pattern PHP file. | Check header attributes; confirm `Slug` begins with the active theme's folder name. |
| **Fluid typography sizes are ignored** | Typography fluid settings are declared without defining `min` and `max` limits, or `fluid` is set to false globally. | Enable global fluid typography in `settings.typography.fluid` and configure specific boundaries on font-size elements. |

---

## 5. Escalation Path

If upstream styling behaviors remain inconsistent:
- Check the official [WordPress Theme Developer Handbook](https://developer.wordpress.org/themes/) for canonical block layouts.
- Read the [Block Editor Reference Guides](https://developer.wordpress.org/block-editor/reference-guides/) for specific Gutenberg block support features and attribute formats.
