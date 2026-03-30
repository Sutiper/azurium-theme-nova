# azurium-theme-nova

A Nova-like theme for [Azuriom](https://azuriom.com), inspired by [MineLite](https://github.com/YuketsuSh/MineLite) and the official Azuriom demo.

## Features

- Dark, modern design inspired by the Nova theme
- Fully customizable via the Azuriom theme admin panel
- Bootstrap 5 based layout
- Pages: Home, Page, News, Forum, Vote, Shop, FAQ, Wiki
- Responsive (mobile-first)

## Installation

1. Download or clone this repository
2. Place the folder in `resources/themes/` of your Azuriom installation
3. Activate the theme in your Azuriom admin panel
4. Configure the theme settings (server name, hero, IPs, links...)

## Structure

```
azurium-theme-nova/
├── theme.json
├── config.json
├── config/theme.php
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

- [Azuriom](https://azuriom.com)
- [MineLite by YuketsuSh](https://github.com/YuketsuSh/MineLite)
- Theme developed by [Sutiper](https://github.com/Sutiper)

## License

MIT
