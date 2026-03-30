# Azurium Theme Nova

A clean, modern [Azuriom](https://azuriom.com) theme inspired by the **Nova** design — dark-first, Bootstrap 5-powered, and fully compatible with Azuriom plugins (Forum, Shop, Vote, FAQ, Wiki, Support).

## Features

- Dark-first design with Bootstrap 5
- Responsive (mobile-first)
- Compatible with Azuriom plugins: Forum, Shop, Vote, FAQ, Wiki, Support Tickets
- Fully customizable colors via `config.json`
- Hero section with server IP copy buttons
- Stats bar (connected players, registered players, record)
- News section, video embed, feature highlights

## Installation

1. Download or clone this repository.
2. Place the folder inside `resources/views/themes/` and rename it to `azurium-theme-nova` (or the ID in `theme.json`).
3. Place assets inside `public/themes/azurium-theme-nova/`.
4. In your Azuriom admin panel, go to **Appearance > Themes** and activate **Nova**.

## Structure

```
azurium-theme-nova/
├── theme.json
├── config.json
├── README.md
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
    │   ├── index.blade.php
    │   └── show.blade.php
    ├── forum/
    │   ├── index.blade.php
    │   └── show.blade.php
    ├── vote/
    │   └── index.blade.php
    ├── shop/
    │   ├── index.blade.php
    │   └── category.blade.php
    ├── faq/
    │   └── index.blade.php
    └── wiki/
        └── index.blade.php
```

## Credits

- Inspired by [MineLite](https://github.com/YuketsuSh/MineLite) by YuketsuSh
- Built for [Azuriom](https://azuriom.com)

## License

MIT License — see [LICENSE](LICENSE)
