# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Commands

### CSS
```bash
npm run dev    # Watch and compile Tailwind CSS (development)
npm run build  # Minify Tailwind CSS (production)
```

### PHP Code Quality
```bash
composer lint    # Run PHPCS standards check
composer format  # Auto-fix PHP style issues with PHPCBF
```

A Lefthook pre-commit hook runs `composer lint` automatically before commits.

## Architecture

This is a **WordPress plugin** for Marshall University HR training session management.

### Custom Post Types
- **`mu-session`** — Training session posts (title, date/time, location, capacity, instructor, etc.)
- **`mu-registrations`** — Registration records created when an employee signs up

### Taxonomy
- **`mu-training`** — Top-level training categories; used as the main archive/listing page

### Key Files

| File | Purpose |
|------|---------|
| `mu-hr-training.php` | Plugin entry point; registers post types, taxonomy, Timber loader, enqueues assets |
| `acf-fields.php` | All ACF field group definitions for sessions and registrations |
| `acf-form.php` | Registration form processing, CSRF handling, email notifications |
| `editor.php` | Admin UI: custom columns, meta boxes, admin list customizations |
| `shortcodes.php` | `[mu-hr-register]` frontend form and registration list display |
| `templates/taxonomy-mu-training.php` | Data preparation layer for the training listing page |
| `templates/taxonomy-mu-training.twig` | Twig template for the frontend training listing |

### Data Flow

1. Admin creates a `mu-session` post via WordPress admin (ACF fields)
2. The `mu-training` taxonomy archive queries sessions and renders via Twig
3. A user clicks to register → `[mu-hr-register]` shortcode renders a form (ACF form)
4. On form save, `acf-form.php` creates a `mu-registrations` post and sends confirmation emails
5. Instructors/admins can view registration lists (CAS-authenticated access)

### Templating: Timber/Twig

The plugin uses **Timber 2.x** (Twig templates) because the Marsha theme doesn't support traditional `get_header()`/`get_footer()` calls. Plugin templates must use `Timber::render()` with `Timber::context()`. See `docs/timber-template-pattern.md` for the full pattern.

The plugin registers its template directory with Timber in `mu-hr-training.php`:
```php
add_filter('timber/locations', function($paths) { ... });
```

### CAS Authentication

Registration list access is gated by CAS (auth.marshall.edu). The plugin validates CAS tickets by calling the CAS service URL and parsing the XML response. This appears in `shortcodes.php`.

### CSS

Tailwind source lives in `source/css/mu-hr-train.css`. Compiled output goes to `css/mu-hr-train.css`. The `phpcs.xml.dist` excludes `css/`, `js/`, `source/`, and `vendor/` from linting.

### Email Notifications

`acf-form.php` sends two emails on registration:
1. Confirmation to the registrant
2. Summary to HR (and benefits team for benefits training sessions)

### PHPCS Configuration

Standards: WordPress-Core, WordPress-Docs, WordPress-Extra. Excluded from linting: `acf-fields.php`, `vendor/`, `node_modules/`, `css/`, `js/`, `source/`.
