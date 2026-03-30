# azurium-theme-nova

A clean, modern [Azuriom](https://azuriom.com) theme inspired by the Nova design.

## Preview

> Coming soon.

## Installation

1. Download or clone this repository into your Azuriom `resources/themes/` directory:
   ```bash
   git clone https://github.com/Sutiper/azurium-theme-nova resources/themes/nova
   ```
2. Go to your Azuriom admin panel → **Appearance** → **Themes** and activate **Nova**.
3. Customize colors and fonts in the theme settings.

## Structure

```
.
├── theme.json          # Theme metadata
├── config.json         # Customizable color & font settings
├── assets/
│   ├── css/
│   │   ├── style.css       # Main stylesheet
│   │   └── components.css  # Component styles
│   ├── js/
│   │   └── script.js       # Main JS
│   └── img/                # Place your logo.png & background.png here
└── views/
    ├── layouts/
    │   └── app.blade.php   # Main layout
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

- Azuriom 1.x
- PHP 8.1+

## License

[MIT](LICENSE)
