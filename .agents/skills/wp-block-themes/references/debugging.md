# Advanced Debugging & Troubleshooting Playbook

When developing block themes, issues like styles not applying, templates failing to load, or theme configurations being ignored are usually caused by syntax errors, database-level customization records, caching, or CSS specificity issues. 

---

## 1. Quick Diagnostic Checklist

When changes in your local workspace files are ignored by WordPress, follow these checklist steps in sequence:

```
[Step 1: Validate JSON Syntax] ──► [Step 2: Check Active Theme] ──► [Step 3: Clear DB Overrides] ──► [Step 4: Flush Cache]
```

1. **Is `theme.json` valid JSON?** Check for typos, syntax errors, or trailing commas.
2. **Is your targeted theme the active theme?** Verify with WP-CLI option check.
3. **Are there user customizations in the database?** Delete custom post types to force fallback to local files.
4. **Is the browser or server caching the old stylesheets?** Flush all caches and use hard-refresh.

---

## 2. Step 1: Validating `theme.json` Syntax

WordPress silently ignores `theme.json` if it contains any formatting errors. To validate the file locally, run this Node.js snippet from your shell:

```bash
node -e "try { JSON.parse(require('fs').readFileSync('theme.json', 'utf8')); console.log('✔ theme.json syntax is valid!'); } catch(e) { console.error('✘ Invalid JSON syntax:', e.message); process.exit(1); }"
```

Common syntax pitfalls:
- Trailing commas at the end of lists/dictionaries (e.g., `["px", "rem",]`).
- Missing double-quotes around keys or string values.
- Unescaped forward-slashes or control characters.

---

## 3. Step 2: Verifying the Active Theme

Confirm that the directory you are modifying is the active stylesheet option in the database:

```bash
# Check the stylesheet option name
wp option get stylesheet

# Check the active theme template name
wp option get template
```
Ensure this matches the exact folder name of your theme (e.g. `my-wordpress-theme`).

---

## 4. Step 3: Purging Database-Level Overrides (FSE Overrides)

When users modify layouts or styles using the Site Editor, WordPress saves these as custom posts in the database:
- **`wp_global_styles`**: Stores custom global styling presets.
- **`wp_template`**: Stores customized templates (e.g. a modified `single.html`).
- **`wp_template_part`**: Stores customized template parts (e.g. a modified `header.html`).

Database records **always override** filesystem files. To restore local filesystem development, purge these records:

### 1. Check for overrides in the DB
```bash
# List custom templates in DB
wp post list --post_type=wp_template --post_status=publish

# List custom template parts in DB
wp post list --post_type=wp_template_part --post_status=publish

# List global styles overrides
wp post list --post_type=wp_global_styles --post_status=any
```

### 2. Wipe overrides from the DB
Run these commands to delete custom database entries and force WordPress to fallback to local filesystem files:

```bash
# Wipe global styles custom overrides
wp post delete $(wp post list --post_type=wp_global_styles --format=ids) --force

# Wipe customized page templates overrides
wp post delete $(wp post list --post_type=wp_template --format=ids) --force

# Wipe customized template parts overrides
wp post delete $(wp post list --post_type=wp_template_part --format=ids) --force
```

---

## 5. Step 4: Flushing Caches and Transients

WordPress caches block editor definitions and compiled CSS. Flush these caches after editing filesystem configurations:

```bash
# Clear temporary site transients
wp transient delete --all

# Clear object cache
wp cache flush
```

---

## 6. Specificity & Theme CSS Conflicts

If styles still fail to apply, inspect the element using Browser Developer Tools:

### Preset Variable Mismatches
Verify that the selector output matches the variable reference:
- Presets are transformed: `settings.color.palette[x].slug: "primary"` becomes `--wp--preset--color--primary` in CSS.
- If you use `var(--wp--preset--color--primary)` in a custom stylesheet, ensure the variable exists in the compiled stylesheet injected into the page body.

### Theme.json Highly Specific Compiled CSS
WordPress compiles `theme.json` styles into highly specific rules (e.g., `body .is-layout-constrained > .alignleft`). Standard custom CSS class selectors may fail to override these default rules due to lower specificity.
**Solution:** Define custom selectors inside `styles.css` directly within `theme.json`, or increase specificity in your custom stylesheet.
