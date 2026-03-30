# azurium-theme-nova

A clean, modern **Azuriom** theme inspired by the Nova design, built for Minecraft server websites.

![Preview](https://raw.githubusercontent.com/Sutiper/azurium-theme-nova/main/preview.png)

## Features

- 🎨 Dark, immersive design inspired by Nova
- 📱 Fully responsive (mobile-first)
- ⚡ Bootstrap 5 based
- 🔧 Configurable colors and fonts via admin panel
- 📦 Supports: Home, Pages, News, Forum, Vote, Shop, FAQ, Wiki
- 🛡️ Clean Blade templates — easy to customize

## Installation

1. Download or clone this repository into your Azuriom theme folder:
   ```
   resources/themes/azurium-theme-nova/
   ```
2. Go to your Azuriom admin panel → **Appearance** → **Themes**
3. Select **azurium-theme-nova** and click **Enable**
4. Customize colors and settings via **Theme Settings**

## Requirements

- Azuriom `>= 1.2.0`
- PHP `>= 8.1`

## Structure

```
azurium-theme-nova/
├── theme.json          # Theme metadata
├── config.json         # Customizable colors & fonts
├── config/             # Theme PHP config
├── assets/
│   ├── css/
│   │   ├── style.css   # Main stylesheet
│   │   └── components.css
│   └── js/
│       └── script.js   # Main JS
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

## License

MIT License — see [LICENSE](LICENSE)

## Credits

- Inspired by [MineLite](https://github.com/YuketsuSh/MineLite) by YuketsuSh
- Built on [Azuriom](https://azuriom.com)
