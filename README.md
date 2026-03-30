# azurium-theme-nova

A **Nova-like** Azuriom theme built by [Sutiper](https://github.com/Sutiper), inspired by [MineLite](https://github.com/YuketsuSh/MineLite).

## Features

- Dark, modern design close to the official Nova theme
- Full Bootstrap 5 integration
- Views for: Home, Page, News, Forum, Vote, Shop, FAQ, Wiki
- Easy customization via `config.json` and the Azuriom admin panel

## Installation

1. Clone or download this repository into `resources/themes/azurium-theme-nova`
2. Enable the theme from the Azuriom admin panel
3. Customize settings under **Appearance > Theme settings**

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
    ├── home.blade.php
    ├── page.blade.php
    ├── news/
    ├── forum/
    ├── vote/
    ├── shop/
    ├── faq/
    └── wiki/
```

## License

MIT
