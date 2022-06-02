<p align="center">
  <a href="https://moveo.io/group">
    <img alt="Moveo" src="./screenshot.png" height="100">
  </a>
</p>

<p align="center">
  <a href="LICENSE.md">
    <img alt="MIT License" src="https://img.shields.io/github/license/roots/sage?color=%23525ddc&style=flat-square" />
  </a>
</p>

<p align="center">
  <strong>WordPress minimal starter theme with Laravel Blade components and templates, SCSS, and a modern development workflow based on the <a href="https://roots.io/sage/"><strong>Root's Sage theme</strong></a> </strong>
</p>

<p align="center">
 <a href="https://docs.roots.io/sage/10.x/installation/"><strong><code>Documentation</code></strong></a> &nbsp;&nbsp; <a href="https://github.com/roots/sage/releases"><strong><code>Releases</code></strong></a> &nbsp;&nbsp; <a href="https://discourse.roots.io/"><strong><code>Support</code></strong></a>
</p>

## Features

- Harness the power of [Laravel](https://laravel.com) and its available packages thanks to [Acorn](https://github.com/roots/acorn).
- Clean, efficient theme templating utilizing [Laravel Blade](https://laravel.com/docs/master/blade).
- Lightning fast frontend development workflow powered by [Bud](https://bud.js.org/).
- Support for SCSS.
- Develop Wordpress Gutenberg blocks using [Advanced Custom Fields](https://www.advancedcustomfields.com/) (minimal example provided: [blade template](./resources/views/blocks/testimonial.blade.php) & [styling template](./resources/styles/blocks/testimonial.scss))

## Requirements

Make sure all dependencies have been installed before moving on:

- [Acorn](https://docs.roots.io/acorn/2.x/installation/) v2
- [WordPress](https://wordpress.org/) >= 5.9
- [PHP](https://secure.php.net/manual/en/install.php) >= 7.4.0 (with [`php-mbstring`](https://secure.php.net/manual/en/book.mbstring.php) enabled)
- [Composer](https://getcomposer.org/download/)
- [Node.js](http://nodejs.org/) >= 16
- [Yarn](https://yarnpkg.com/en/docs/install)
- [Advanced Custom Fields PRO](https://www.advancedcustomfields.com/pro/) (for block development for WordPress Gutenberg editor)

## Theme installation

1. Clone the repository
2. From `themes/YOUR_THEME_NAME` directory run:
   1. `composer install`
   1. `yarn`
3. Update `bud.config.js` with your local dev URL
4. Make sure that you continue with the [setup](#theme-setup)

## Theme structure

```sh
themes/your-theme-name/   # → Root of your Sage based theme
├── app/                  # → Theme PHP
│   ├── Providers/        # → Service providers
│   ├── View/             # → View models
│   ├── filters.php       # → Theme filters
│   └── setup.php         # → Theme setup
├── composer.json         # → Autoloading for `app/` files
├── public/               # → Built theme assets (never edit)
├── functions.php         # → Theme bootloader
├── index.php             # → Theme template wrapper
├── node_modules/         # → Node.js packages (never edit)
├── package.json          # → Node.js dependencies and scripts
├── resources/            # → Theme assets and templates
│   ├── fonts/            # → Theme fonts
│   ├── images/           # → Theme images
│   ├── scripts/          # → Theme javascript
│   ├── styles/           # → Theme stylesheets
│   └── views/            # → Theme templates
│       ├── components/   # → Component templates
│       ├── forms/        # → Form templates
│       ├── layouts/      # → Base templates
│       ├── partials/     # → Partial templates
        └── sections/     # → Section templates
├── screenshot.png        # → Theme screenshot for WP admin
├── style.css             # → Theme meta information
├── vendor/               # → Composer packages (never edit)
└── bud.config.js         # → Bud configuration
```

```sh
themes/your-theme-name/ # → Root of your theme
├── bud.config.js       # → Bud configuration
├── composer.json       # → Autoloading for `app/` files
├── functions.php       # → Theme bootloader
├── index.php           # → Theme template wrapper
├── package.json        # → Node.js dependencies and scripts
├── screenshot.png      # → Theme screenshot for WP admin
├── style.css           # → Theme meta information
├── app/                # → Theme PHP
│   ├── filters.php     # → Theme filters
│   ├── setup.php       # → Theme setup
│   ├── Providers/      # → Service providers
│   └── View/           # → View models
├── node_modules/       # → Node.js packages (never edit)
├── vendor/             # → Composer packages (never edit)
├── public/             # → Built theme assets (never edit)
├── resources/          # → Theme assets and templates
│   ├── fonts/          # → Theme fonts
│   ├── images/         # → Theme images
│   ├── scripts/        # → Theme javascript
│   ├── styles/         # → Theme stylesheets
│   │   ├── blocks/     # → Blocks stylesheets
│   │   ├── components/ # → Component stylesheets
│   │   ├── forms/      # → Forms stylesheets
│   │   ├── layouts/    # → Layouts stylesheets
│   │   ├── partials/   # → Partials stylesheets
│   │   └── sections/   # → Sections stylesheets
│   └─── views/          # → Theme templates
│       ├── blocks/     # → Blocks templates
│       ├── components/ # → Component templates
│       ├── forms/      # → Forms templates
│       ├── layouts/    # → Layouts templates
│       ├── partials/   # → Partials templates
│       └── sections/   # → Sections templates
```

## Theme setup

Edit `app/setup.php` to enable or disable theme features, setup navigation menus, post thumbnail sizes, and sidebars.

### Build commands

- `yarn dev` — Compile assets when file changes are made, start Browsersync session
- `yarn build` — Compile assets for production
