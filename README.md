# Azurium Nova Theme

A modern, dark Minecraft server theme for [Azuriom](https://azuriom.com), inspired by the Nova aesthetic.

## Features

- Dark, immersive design tailored for Minecraft servers
- Fully responsive (mobile-first)
- Bootstrap 5 based layout
- Bootstrap Icons
- Supports: Home, Forum, Shop, Vote, FAQ, Wiki, News pages
- Configurable server IPs, social links, background image
- Player stats footer block

## Installation

1. Download or clone this repository into `resources/themes/azurium-theme-nova`
2. In your Azuriom admin panel, go to **Appearance > Themes** and activate **Azurium Nova**
3. Customize the theme settings (server IPs, colors, social links, background image)

## Structure

```
azurium-theme-nova/
├── theme.json          # Theme metadata
├── config.json         # Theme settings definition
├── assets/
│   ├── css/
│   │   ├── style.css   # Main stylesheet
│   │   └── components.css
│   └── js/
│       └── script.js   # Theme JS
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

- Built for [Azuriom](https://azuriom.com)
- Inspired by [MineLite](https://github.com/YuketsuSh/MineLite)
- Author: Sutiper

## License

MIT
