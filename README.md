# azurium-theme-nova

A Nova-like Azuriom theme inspired by [MineLite](https://github.com/YuketsuSh/MineLite) and the official Azuriom demo pages.

## Features

- Dark, modern design inspired by the Nova theme
- Fully responsive (Bootstrap 5)
- Pages: Home, Page, News, Forum, Vote, Shop, FAQ, Wiki
- Easy theme configuration via the Azuriom admin panel
- Custom hero section with background image, title, subtitle and CTA
- Social links (Discord, Twitter, YouTube, GitHub)
- Copy-to-clipboard server IP button

## Installation

1. Download or clone this repository into `resources/themes/azurium-theme-nova`
2. Go to your Azuriom admin panel → **Appearance → Themes**
3. Activate the **azurium-theme-nova** theme
4. Configure the theme settings as needed

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
├── views/
│   ├── layouts/app.blade.php
│   ├── partials/navbar.blade.php
│   ├── partials/footer.blade.php
│   ├── home.blade.php
│   ├── page.blade.php
│   ├── news/
│   ├── forum/
│   ├── vote/
│   ├── shop/
│   ├── faq/
│   └── wiki/
```

## Credits

- Inspired by [MineLite](https://github.com/YuketsuSh/MineLite) by YuketsuSh
- Built for [Azuriom](https://azuriom.com)

## License

MIT License
