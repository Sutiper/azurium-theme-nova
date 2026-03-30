# azurium-theme-nova

A Nova-like Azuriom theme inspired by [MineLite](https://github.com/YuketsuSh/MineLite) and the official Azuriom demo pages.

## Installation

1. Download or clone this repo into `resources/themes/azurium-theme-nova`
2. Go to your Azuriom admin panel → **Appearance** → **Themes**
3. Activate **azurium-theme-nova**
4. Customise via **Appearance** → **Theme settings**

## Structure

```
theme.json         — Theme metadata
config.json        — Customisable settings (admin panel)
config/theme.php   — PHP config helpers
assets/
  css/style.css    — Main stylesheet
  js/app.js        — Main script
  img/             — Place logo.png and hero-bg.jpg here
views/
  layouts/app.blade.php
  partials/navbar.blade.php
  partials/footer.blade.php
  home.blade.php
  page.blade.php
  news/index.blade.php  news/show.blade.php
  forum/index.blade.php forum/show.blade.php  forum/thread.blade.php
  vote/index.blade.php
  shop/index.blade.php  shop/category.blade.php  shop/product.blade.php
  faq/index.blade.php
  wiki/index.blade.php
```

## Credits

- Design inspired by [MineLite](https://github.com/YuketsuSh/MineLite) by YuketsuSh
- Built for [Azuriom](https://azuriom.com)
