# Azurium Nova Theme

> A clean, dark, modern Azuriom theme inspired by the Nova design.

![Azuriom](https://azuriom.com/assets/svg/logo-title.svg)

## Features

- 🎨 Fully customizable colors via the Azuriom admin panel
- 📱 Fully responsive (mobile-first)
- 🌙 Dark theme by default
- 🏠 Custom home page with hero, features, stats & news
- 💬 Forum, Vote, Shop, FAQ, Wiki pages
- ⚡ Bootstrap 5 + Bootstrap Icons

## Installation

1. Download or clone this repo
2. Place the folder in `resources/themes/azurium-theme-nova`
3. Go to Azuriom Admin → Appearance → Themes
4. Activate **Azurium Nova**
5. Customize colors in the theme settings

## Requirements

- Azuriom >= 1.0
- PHP >= 8.0

## Structure

```
azurium-theme-nova/
├── theme.json           # Theme metadata
├── config.json          # Customizable settings
├── assets/
│   ├── css/
│   │   └── style.css    # Main stylesheet
│   └── js/
│       └── script.js    # Main scripts
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

- Inspired by [MineLite](https://github.com/YuketsuSh/MineLite) by YuketsuSh
- Built for [Azuriom](https://azuriom.com)

## License

MIT License — see [LICENSE](LICENSE)
