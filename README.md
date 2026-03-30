# azurium-theme-nova

A clean, modern Azuriom theme inspired by the official **Nova** design.

Built with **Bootstrap 5** and **Bootstrap Icons**, this theme provides a full set of views for all standard Azuriom pages (Home, Forum, Vote, Shop, FAQ, Wiki, News, etc.) as well as an admin panel override.

## Preview

> Screenshots coming soon.

## Installation

1. Download or clone this repository into your Azuriom themes directory:
   ```
   resources/themes/azurium-theme-nova
   ```
2. Go to **Admin Panel → Appearance → Themes** and activate **Nova**.
3. Customize colors, fonts and images in the theme settings.

## Structure

```
azurium-theme-nova/
├── theme.json          # Theme metadata
├── config.json         # Color / font / image settings
├── assets/
│   ├── css/
│   │   ├── style.css       # Main theme styles
│   │   └── components.css  # Component-specific styles
│   └── js/
│       ├── script.js       # Main theme scripts
│       └── components.js   # Component scripts
└── views/
    ├── layouts/
    │   └── app.blade.php       # Main layout
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

- Inspired by [YuketsuSh/MineLite](https://github.com/YuketsuSh/MineLite)
- Built on [Azuriom](https://azuriom.com)

## License

MIT
