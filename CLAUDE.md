# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Commands

```bash
# Full dev environment (Laravel server + queue + Pail logs + Vite, all concurrent)
composer dev

# Frontend only
npm run dev       # Vite dev server with HMR
npm run build     # Production build → public/build/

# Backend only
php artisan serve

# Tests
php artisan test
```

## Architecture

**Stack**: Laravel 12 (PHP 8.2+) · Blade templates · Tailwind CSS 4.0 · Vite 6 · Axios

This is a single-page marketing site for PT Micro Fibertech Indonesia (BarChip synthetic fiber product line). All content is static — no database queries in views.

- **Single route**: `GET /` → `resources/views/welcome.blade.php`
- **Blade components**: `resources/views/components/` — composed via `<x-component-name />` syntax in `welcome.blade.php`
- **Images**: `public/images/` — referenced with `asset('images/...')` helper
- **Deployment**: GitHub Actions (`.github/workflows/deploy.yml`) builds Vite assets and deploys to Hostinger via SSH on push to `main`

## Styling

Tailwind CSS 4.0 with a custom `@theme` block in `resources/css/app.css`. Design tokens:

| Token | Value | Usage |
|-------|-------|-------|
| `--color-brand` | `#ff6a00` | Primary orange |
| `--color-brand-light` | `#ffe5e1` | Orange tint backgrounds |
| `--color-surface` | `#f8fafc` | Section backgrounds |
| `--color-ink` | `#0a0a0a` | Body text |
| `--color-muted` | `#616161` | Secondary text |
| `--color-border` | `#ededed` | Dividers |

Font: IBM Plex Sans (400/500/600/700), loaded via Google Fonts in the layout.

Use `bg-brand`, `text-brand`, etc. (Tailwind maps CSS vars to utility classes via the `@theme` block).
