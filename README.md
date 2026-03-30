# azurium-theme-nova

A Nova-like theme for [Azuriom](https://azuriom.com), inspired by [MineLite](https://github.com/YuketsuSh/MineLite).

## Installation

1. Download or clone this repository into `resources/themes/azurium-theme-nova`
2. Go to your Azuriom admin panel → Appearance → Themes
3. Activate **azurium-theme-nova**
4. Customize settings via Appearance → Theme settings

## Structure

```
azurium-theme-nova/
├── theme.json          # Theme metadata
├── config.json         # Editable theme settings
├── config/
│   └── theme.php       # PHP config values
├── assets/
│   ├── css/style.css   # Main stylesheet
│   ├── js/app.js       # Main JS
│   └── img/            # Images (logo, backgrounds)
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

## License

MIT
