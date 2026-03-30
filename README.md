# Azurium Nova — Azuriom Theme

A clean, modern dark Minecraft theme for [Azuriom](https://azuriom.com), inspired by the Nova aesthetic and [MineLite](https://github.com/YuketsuSh/MineLite).

## Preview

> *Screenshots coming soon.*

## Features

- 🌑 Full dark mode design with customizable accent color
- 🎨 Nova-inspired layout (hero, stats, features sections)
- 📱 Mobile-first responsive layout
- 🧩 Blade templates for all core Azuriom pages
- 🏪 Shop, Forum, Vote, FAQ, Wiki pages included
- ⚙️ Easy configuration via `config.json`
- ✨ Smooth CSS animations & transitions

## Installation

1. Download or clone this repository into `public/themes/azurium-theme-nova`
2. Activate the theme in your Azuriom admin panel under **Appearance → Themes**
3. Customize colors, fonts and settings in `config.json` or directly from the admin panel

## Structure

```
azurium-theme-nova/
├── theme.json              # Theme metadata
├── config.json             # Default configuration
├── assets/
│   ├── css/
│   │   ├── style.css       # Main stylesheet
│   │   └── animations.css  # CSS animations
│   └── js/
│       └── script.js       # Theme JavaScript
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

## Configuration

Edit `config.json` to set your server IP, social links, colors and more.

## Credits

- Built for [Azuriom](https://azuriom.com)
- Inspired by [MineLite](https://github.com/YuketsuSh/MineLite) by YuketsuSh
- Bootstrap 5 & Bootstrap Icons

## License

MIT License — see [LICENSE](LICENSE)
