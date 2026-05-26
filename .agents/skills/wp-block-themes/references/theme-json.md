# Comprehensive `theme.json` Architecture and Configuration Manual

The `theme.json` file is the master configuration file for WordPress block themes. It defines the global settings (what controls are available to the user in the Site Editor) and global styles (the default CSS styling of the site, elements, and individual blocks).

---

## 1. Schema Versions: v2 vs. v3

The `version` field at the root level determines how WordPress parses and interprets your configuration.

| Schema Version | Min WordPress Core | Main Features & Target Use Cases |
| :--- | :--- | :--- |
| **`version: 2`** | WordPress 5.8 | Standard for sites prior to Core 6.6. Reliable, compatible, but lacks newer formatting options. |
| **`version: 3`** | WordPress 6.6 | Added fluid typography control improvements, custom block-level CSS extensions, direct nested elements styling, and `fontFaces` optimizations. |

> [!NOTE]
> If your site runs on **WordPress 6.6+**, you should use **`version: 3`**. To upgrade from v2 to v3, simply change the root `"version": 3` field. Core will handle standard transformations, but ensure block-level custom CSS rules follow the v3 syntax rules.

---

## 2. Setting Presets (`settings`)

The `settings` section defines the design system tokens (colors, margins, font sizes, shadow palettes) and enables or disables UI controls in the editor.

### Color Presets & Controls
Define primary palettes so that custom CSS variables are generated automatically (e.g. `--wp--preset--color--primary`):

```json
{
  "settings": {
    "color": {
      "custom": false,
      "customGradient": false,
      "link": true,
      "text": true,
      "background": true,
      "palette": [
        {
          "name": "Primary",
          "slug": "primary",
          "color": "#1a365d"
        },
        {
          "name": "Secondary",
          "slug": "secondary",
          "color": "#7b341e"
        },
        {
          "name": "Light Background",
          "slug": "light-bg",
          "color": "#f7fafc"
        }
      ]
    }
  }
}
```

### Typography and Fluid Typography (WordPress 6.x+)
Fluid typography automatically scales font sizes smoothly between a minimum and maximum screen width based on CSS `clamp()`.

```json
{
  "settings": {
    "typography": {
      "fluid": true,
      "fontSizes": [
        {
          "name": "Body Text",
          "slug": "body",
          "size": "1rem",
          "fluid": {
            "min": "0.95rem",
            "max": "1.1rem"
          }
        },
        {
          "name": "Main Heading",
          "slug": "heading-large",
          "size": "2.5rem",
          "fluid": {
            "min": "1.8rem",
            "max": "3.5rem"
          }
        }
      ]
    }
  }
}
```

### Spacing & Spacing Presets
Standardize layouts with custom spacing presets (`--wp--preset--spacing--small`, etc.):

```json
{
  "settings": {
    "spacing": {
      "customPadding": true,
      "customMargin": true,
      "units": ["px", "em", "rem", "vh", "vw"],
      "spacingSizes": [
        { "name": "Small", "slug": "small", "size": "1rem" },
        { "name": "Medium", "slug": "medium", "size": "2rem" },
        { "name": "Large", "slug": "large", "size": "4rem" }
      ]
    }
  }
}
```

### Layout Properties
Define the bounding width of structural blocks (like Group blocks with constrained layouts):

```json
{
  "settings": {
    "layout": {
      "contentSize": "680px",
      "wideSize": "1200px"
    }
  }
}
```

---

## 3. Global Styles (`styles`)

The `styles` section applies the tokens defined in `settings` (or raw CSS values) to elements, blocks, or the entire body.

### Top-level Global Styles (Body)
```json
{
  "styles": {
    "color": {
      "background": "var(--wp--preset--color--light-bg)",
      "text": "#2d3748"
    },
    "typography": {
      "fontFamily": "var(--wp--preset--font-family--body)",
      "lineHeight": "1.6"
    }
  }
}
```

### Elements Styling
Apply styling to standard HTML elements. Common selectors: `link`, `button`, `heading` (and individual tags `h1` through `h6`), and input controls.

```json
{
  "styles": {
    "elements": {
      "link": {
        "color": {
          "text": "var(--wp--preset--color--secondary)"
        },
        "typography": {
          "textDecoration": "underline"
        },
        ":hover": {
          "color": {
            "text": "var(--wp--preset--color--primary)"
          }
        }
      },
      "button": {
        "color": {
          "background": "var(--wp--preset--color--primary)",
          "text": "#ffffff"
        },
        "spacing": {
          "padding": {
            "top": "0.75rem",
            "bottom": "0.75rem",
            "left": "1.5rem",
            "right": "1.5rem"
          }
        },
        "border": {
          "radius": "8px"
        },
        ":hover": {
          "color": {
            "background": "var(--wp--preset--color--secondary)"
          }
        }
      }
    }
  }
}
```

### Form Input Customizations (WordPress 6.9+)
In WordPress 6.9, form input controls (like textareas, inputs, and selects) receive explicit styling properties inside `styles.elements`:

```json
{
  "styles": {
    "elements": {
      "input": {
        "border": {
          "color": "#cbd5e0",
          "width": "1px",
          "style": "solid",
          "radius": "4px"
        },
        "spacing": {
          "padding": "0.5rem"
        }
      },
      "select": {
        "border": {
          "color": "#cbd5e0",
          "width": "1px",
          "style": "solid"
        }
      }
    }
  }
}
```

---

## 4. Block-Specific Customizations

You can limit custom configurations or styles strictly to specific core blocks.

```json
{
  "styles": {
    "blocks": {
      "core/pullquote": {
        "border": {
          "top": {
            "width": "4px",
            "color": "var(--wp--preset--color--primary)",
            "style": "solid"
          }
        },
        "typography": {
          "fontSize": "1.5rem",
          "fontStyle": "italic"
        }
      },
      "core/code": {
        "color": {
          "background": "#2d3748",
          "text": "#a0aec0"
        },
        "spacing": {
          "padding": "1rem"
        }
      }
    }
  }
}
```

---

## 5. Custom CSS Block Injection

For styling complex scenarios that aren't supported natively by JSON schemas, you can inject custom CSS directly within `theme.json`.

### Global Custom CSS (v3 Syntax)
Allows target elements to receive custom rules without creating standard external CSS files:

```json
{
  "styles": {
    "css": "body { scroll-behavior: smooth; } .custom-hero-grid { grid-template-rows: auto 1fr; }"
  }
}
```

### Block-Level Custom CSS
Apply custom states directly under the target block utilizing `&` to reference the current block wrapper:

```json
{
  "styles": {
    "blocks": {
      "core/navigation": {
        "css": "& .wp-block-navigation-item:after { content: ' • '; margin-left: 5px; } & .wp-block-navigation-item:last-child:after { content: ''; }"
      }
    }
  }
}
```

---

## 6. Structural Validation Checklist

Before saving changes to `theme.json`, verify:
1. **JSON Formatting**: Check for missing commas, trailing commas, or quotes. Invalid JSON will cause the entire design layout to crash.
2. **Preset References**: Ensure all variables match exactly, including double-dashes (e.g. `"var(--wp--preset--color--primary)"`).
3. **Responsive Limits**: If using `fluid` typography, always define the `fluid` block with `min` and `max` values to prevent core rendering fallbacks.
