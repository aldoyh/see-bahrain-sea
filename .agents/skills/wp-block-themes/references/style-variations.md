# Style Variations: Settings & Customization Guide

Style Variations allow developers to create alternative design systems (skins) within a single theme. They are stored as separate JSON files and allow users to instantly change the entire color scheme, typography, and styling presets with a single click in the Site Editor.

---

## 1. Directory Structure and Registration

Place style variation files in the `styles/` folder in the root of your block theme:

```
wp-content/themes/my-theme/
├── theme.json
└── styles/
    ├── dark.json
    ├── neon.json
    └── minimalist.json
```

WordPress automatically registers any valid JSON file in the `styles/` directory as a theme variation.

---

## 2. Structure of a Style Variation File

A style variation file follows the exact same schema structure as the main `theme.json` file. It must define a `version` field (matching the main `theme.json` version) and a `title` field for the editor UI:

```json
{
  "version": 3,
  "title": "Midnight Dark Mode",
  "settings": {
    "color": {
      "palette": [
        {
          "name": "Primary",
          "slug": "primary",
          "color": "#6366f1"
        },
        {
          "name": "Secondary",
          "slug": "secondary",
          "color": "#f43f5e"
        },
        {
          "name": "Background",
          "slug": "background",
          "color": "#0f172a"
        },
        {
          "name": "Foreground",
          "slug": "foreground",
          "color": "#f8fafc"
        }
      ]
    }
  },
  "styles": {
    "color": {
      "background": "var(--wp--preset--color--background)",
      "text": "var(--wp--preset--color--foreground)"
    },
    "elements": {
      "button": {
        "color": {
          "background": "var(--wp--preset--color--primary)",
          "text": "#ffffff"
        }
      }
    }
  }
}
```

---

## 3. How Variations Inherit and Override

Style variations are **partial overrides**. Any settings, presets, or styles not declared in the variation file will automatically fall back to the defaults declared in the main `theme.json` file.

### Cascading Rules:
1. **Core WordPress Defaults**: Initial styles loaded for all block sites.
2. **Main `theme.json`**: Establishes global base styles.
3. **Selected Style Variation (`styles/*.json`)**: Overlays settings and styles, replacing matching tokens.
4. **User Customizations (Database)**: Custom styles defined by a user via the Site Editor. These override the filesystem variation styles.

---

## 4. The Database Customization Lock-Out (Crucial Warning)

When a user selects a style variation in the Site Editor and saves changes, WordPress writes the full computed global styles output to the database under a `wp_global_styles` custom post type.

> [!WARNING]
> **Database Overriding Filesystem:** Once a user saves global styles customizations in the database, subsequent changes you make to the physical `styles/` JSON files **will be ignored on the frontend** for that user. WordPress reads the customized database record rather than the updated stylesheet on the server.

### Re-synchronizing Filesystem Updates
To force WordPress to reflect changes made directly to variation files during active development, you must flush database-level overrides. 

#### Method A: Reset via WP Site Editor
1. In the WordPress admin, go to **Appearance > Editor**.
2. Click **Styles** (the half-filled circle icon).
3. Click the three dots icon next to the Styles panel.
4. Click **Reset to defaults**. This purges the database overrides and falls back to your filesystem theme files.

#### Method B: Reset via WP-CLI
Run the following commands in your shell to delete database global styles records:
```bash
wp post delete $(wp post list --post_type=wp_global_styles --format=ids) --force
```
This instantly clears the database lock-out and forces WordPress to parse the updated JSON files.
