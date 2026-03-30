# azurium-theme-nova

A **Nova-like dark theme** for [Azuriom](https://azuriom.com), inspired by [MineLite](https://github.com/YuketsuSh/MineLite).

## Features

- Dark modern design inspired by the official Nova theme
- Full Bootstrap 5 integration
- Covers: Home, Pages, News, Forum, Vote, Shop, FAQ, Wiki
- Responsive (mobile-first)
- Easy config via `config.json` (server name, hero title, background image, ...)

## Installation

1. Clone or download this repository
2. Place it in `resources/themes/azurium-theme-nova` in your Azuriom installation
3. Go to Azuriom Admin Panel → Appearance → Themes → Activate `azurium-theme-nova`
4. Customize via Admin Panel → Appearance → Theme Configuration

## Assets

Place your images in `assets/img/`:
- `logo.png` — server logo (200×200px recommended)
- `hero-bg.jpg` — hero background (1920×1080px recommended)

## Structure

```
azurium-theme-nova/
├── theme.json
├── config.json
├── config/
│   └── theme.php
├── assets/
│   ├── css/style.css
│   ├── js/app.js
│   └── img/
└── views/
    ├── layouts/app.blade.php
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

## Credits

- Inspired by [MineLite](https://github.com/YuketsuSh/MineLite) by YuketsuSh
- Built for [Azuriom](https://azuriom.com)

## License

MIT
