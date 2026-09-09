# Osmium

A content-first WordPress block theme for writers, publishers, and review sites.

Osmium is built for people who write for a living and sell through what they write. The design lives in `theme.json` and the layout lives in patterns, so the theme ships no JavaScript of its own and about 7 KB of CSS. Reading comes first: the article measure, the type scale, and the spacing rhythm got more attention than the homepage.

Status: in development, working toward a 1.0 submission to the WordPress.org theme directory.

## Requirements

| | |
|---|---|
| Requires at least | WordPress 7.0 |
| Tested up to | WordPress 7.1 |
| Requires PHP | 7.4 |
| License | GPL-2.0-or-later |

## What is in it

- **Templates** for index, home, single, single with sidebar, page, page without a title, archive, author, search, and 404.
- **Template parts** for the header, footer, post meta, sidebar, and comments.
- **24 patterns**, including a review kit of seven: verdict box, pros and cons, spec table, comparison table, best-for cards, product call to action, and a deal strip.
- **Three style variations.** Editorial is the default. Paper is warm and serif-led for essays. Signal is cool and card-led for review sites.
- **Three section styles**, tinted, dark, and card, so patterns stay core blocks instead of carrying custom CSS.
- **Two bundled fonts**, Valley Sans and Hedvig Letters Serif, self-hosted and served from your own domain.

Osmium registers no post types, no blocks, no shortcodes, and no settings page. Everything you build with it keeps working if you switch themes.

## Design tokens

Patterns speak one vocabulary, so every style variation restyles them for free.

- Colors: `base`, `base-2`, `contrast`, `contrast-2`, `contrast-3`, `primary`, `primary-tint`
- Font sizes: `small`, `medium`, `large`, `x-large`, `xx-large`, `xxx-large`
- Spacing: `20` through `80`
- Font families: `valley-sans`, `hedvig-letters-serif`
- Section styles: `is-style-tinted`, `is-style-dark`, `is-style-card`

## Installing from this repository

The theme is the `theme/` directory. The repository root holds the license and this file.

```bash
git clone https://github.com/wpgaurav/osmium.git
ln -s "$(pwd)/osmium/theme" /path/to/wp-content/themes/osmium
```

To build a zip you can upload through the WordPress admin:

```bash
cd osmium && zip -r ../osmium.zip theme -x "*.DS_Store"
```

## Accessibility

Every template is checked with axe-core against the WCAG 2.0, 2.1, and 2.2 A and AA rule sets plus axe best practices, at desktop and mobile widths, and has to report zero violations. In practice that means a skip link, one `h1` per page, sections labelled by their headings, a visible focus ring on everything focusable, form labels that are really there, current navigation items marked by more than color, and wide tables that scroll inside a focusable, named region.

Text and placeholders sit at 4.5:1 or better against the page. Input borders and icons sit at 3:1 or better. Those hold in all three style variations.

## Credits

Osmium bundles two typefaces under the SIL Open Font License, version 1.1.

- [Valley Sans](https://github.com/HelsinkiTypeStudio/valley-sans), copyright 2026 The Valley Sans Project Authors. Designed by Niklas Ekholm and Lari Moro.
- [Hedvig Letters Serif](https://github.com/KanonFoundry/HedvigLetters), copyright 2023 The Hedvig Letters Project Authors. Designed by Kanon Foundry, Alexander Orn, and Tor Weibull.

Their license text ships alongside the font files in `theme/assets/fonts`.

## License

Osmium is free software under the GNU General Public License, version 2 or later. See [LICENSE](LICENSE).
