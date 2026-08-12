# Timber/Twig Template Pattern for Plugins

The Marshall University site uses the **Marsha theme**, which is built on [Timber](https://upstatement.com/timber/) (v2.x). Timber replaces WordPress's traditional PHP template system with Twig templates. This means `get_header()` and `get_footer()` **do not work** in plugin templates — they will either error or render nothing, because the theme has no `header.php` / `footer.php` to load.

This document explains how to write plugin templates that integrate correctly with the Marsha theme.

---

## The Problem

A standard WordPress plugin template looks like this:

```php
<?php
get_header();
// ... content ...
get_footer();
```

On a Timber theme, `get_header()` tries to load `header.php` from the theme, which doesn't exist (Timber handles the full page via Twig). The result is a broken page with no nav, no footer, or a fatal error.

---

## The Fix

Plugin templates need to use `Timber::render()` instead, just like the theme's own PHP templates do.

### Step 1 — Register the plugin's templates directory with Timber

In your main plugin file (e.g. `herd-hr-training.php`), add a `timber/locations` filter so Timber can find your Twig files:

```php
add_filter(
    'timber/locations',
    function ( array $dirs ): array {
        $dirs[] = array( plugin_dir_path( __FILE__ ) . 'templates' );
        return $dirs;
    }
);
```

This tells Timber to look in your plugin's `templates/` folder when resolving Twig template names. The theme's `views/` directory is already registered by the theme, so your Twig templates can extend and include theme templates (like `base.twig`) without any extra configuration.

### Step 2 — Rewrite the PHP template

Replace `get_header()` / `get_footer()` with the Timber context + render pattern. Move all PHP logic (queries, date formatting, etc.) into context variables so the Twig template stays logic-free.

```php
<?php
use Timber\Timber;

$context = Timber::context();

// Build your data here and add it to $context...
$context['my_data'] = ...;

Timber::render( 'my-template.twig', $context );
```

Calling `Timber::context()` automatically runs the theme's `timber/context` filter, which means `MarshaTheme::add_to_context()` fires and populates nav, sidebar, hero, alerts, options, etc. — you get the full site context for free.

### Step 3 — Create a Twig template

Put your Twig file in `templates/` inside your plugin. Extend `base.twig` to get the full Marsha chrome (nav, footer, GTM, back-to-top, etc.), then put your content inside `{% block content %}`.

```twig
{% extends 'base.twig' %}

{% block content %}
{% include 'partials/no-hero.twig' %}

<div class="w-full xl:max-w-screen-xl px-6 xl:px-0 xl:mx-auto pt-4 lg:pt-12 pb-16">
    {# your content here #}
</div>
{% endblock %}
```

**Available partials** (from the theme's `views/partials/` directory):

| Partial | What it renders |
|---|---|
| `partials/no-hero.twig` | Site name bar + site nav + breadcrumbs (no image hero) |
| `partials/hero.twig` | Full ACF-driven image hero |
| `partials/old-page-alert.twig` | "This page has moved" alert banner |

**Available context variables** (populated automatically by the theme):

| Variable | Type | Description |
|---|---|---|
| `sidebar` | string (HTML) | Rendered sidebar-1 widget area |
| `hero` | array | Hero ACF fields and derived HTML |
| `options` | array | ACF theme options (`get_fields('option')`) |
| `site` | `Timber\Site` | Site name, URL, description, etc. |
| `current_url` | string | Current page URL |

---

## What NOT to do

- **Don't use `get_header()` / `get_footer()`** — they don't work on Timber themes.
- **Don't use `ob_start()` to capture page output** — resolve PHP into context variables and pass them to Twig instead.
- **Don't require theme template-parts directly** (`require get_template_directory() . '/template-parts/...'`) — use `{% include 'partials/...' %}` in Twig instead.
- **Don't put logic in Twig** — run queries, format dates, and compute values in PHP and pass results as context. Twig should only render.

---

## Example: This Plugin (herd-hr-train)

| File | Role |
|---|---|
| `herd-hr-training.php` | Registers `templates/` with Timber via `timber/locations` filter |
| `templates/taxonomy-mu-training.php` | Queries posts, formats data, calls `Timber::render()` |
| `templates/taxonomy-mu-training.twig` | Extends `base.twig`, renders training session cards |
