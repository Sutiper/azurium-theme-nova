# azurium-theme-nova

A Nova-like theme for [Azuriom](https://azuriom.com), inspired by [MineLite](https://github.com/YuketsuSh/MineLite) and the official Azuriom demo pages.

## Features

- Dark, modern Nova-inspired design
- Fully responsive (Bootstrap 5)
- Customizable via the Azuriom admin panel (`config.json` settings)
- Views for: Home, Pages, Forum, Vote, Shop, FAQ, Wiki, News

## Installation

1. Download or clone this repository into `resources/themes/azurium-theme-nova`.
2. In your Azuriom admin panel, go to **Appearance > Themes** and activate **azurium-theme-nova**.
3. Configure settings under **Appearance > Theme settings**.

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
    ├── partials/navbar.blade.php
    ├── partials/footer.blade.php
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
