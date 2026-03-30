# azurium-theme-nova

A clean, modern **dark theme** for [Azuriom](https://azuriom.com), inspired by the Nova design.

## Preview

> Screenshots coming soon.

## Installation

1. Download the theme from the [Azuriom Market](https://market.azuriom.com) or clone this repository into `resources/themes/nova`.
2. In your Azuriom admin panel, go to **Appearance > Themes** and activate **Nova**.
3. Customize colors and options in the theme settings.

## Features

- 🌑 Full dark UI with customizable accent color
- 📱 Fully responsive (mobile-first)
- 🎮 Supports all core Azuriom plugins: Forum, Shop, Vote, FAQ, Wiki, Support
- ⚙️ Configurable colors, fonts, and social links via admin panel
- 🔒 Auth pages (login, register, 2FA) styled to match
- 🛡️ Admin panel overrides for a consistent experience

## Structure

```
azurium-theme-nova/
├── theme.json          # Theme metadata
├── config.json         # Theme configuration (colors, fonts, options)
├── assets/
│   ├── css/
│   │   ├── style.css   # Main theme styles
│   │   └── admin.css   # Admin panel overrides
│   └── js/
│       └── script.js   # Theme JavaScript
└── views/
    ├── layouts/
    │   └── app.blade.php
    ├── partials/
    │   ├── navbar.blade.php
    │   └── footer.blade.php
    ├── home.blade.php
    ├── page.blade.php
    ├── news/
    ├── forum/
    ├── vote/
    ├── shop/
    ├── faq/
    └── wiki/
```

## Requirements

- Azuriom >= 1.0
- PHP >= 8.0

## License

MIT License — see [LICENSE](LICENSE).
