# azurium-theme-nova

A clean, dark Minecraft server theme for [Azuriom](https://azuriom.com), inspired by the Nova theme.

## Features

- Dark, sleek design inspired by Nova
- Responsive (mobile-first)
- Bootstrap 5 based
- Full support: Home, Forum, Vote, Shop, FAQ, Wiki, News
- Customizable colors via `config.json`

## Installation

1. Download or clone this repository into `resources/views/themes/azurium-theme-nova`
2. Copy the `assets/` folder content into `public/themes/azurium-theme-nova/`
3. Go to your Azuriom admin panel → Appearance → Themes
4. Activate **azurium-theme-nova**

## Structure

```
azurium-theme-nova/
├── theme.json
├── config.json
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── script.js
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

## Credits

- Based on [MineLite](https://github.com/YuketsuSh/MineLite) structure by YuketsuSh
- Built for [Azuriom](https://azuriom.com)

## License

MIT
