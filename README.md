# Osmium

[![Buy me a coffee](https://img.shields.io/badge/Buy%20me%20a%20coffee-FFDD00?style=flat&logo=buymeacoffee&logoColor=black)](https://buymeacoffee.com/gauravtiwari)

A content-first WordPress block theme for writers, publishers, and review sites.

Osmium is built for people who write for a living and sell through what they write. The design lives in `theme.json` and the layout lives in patterns, so the theme ships no JavaScript of its own and about 8 KB of CSS. Reading comes first: the article measure, the type scale, and the spacing rhythm got more attention than the homepage.

Status: in development, working toward a 1.0 submission to the WordPress.org theme directory.

## Requirements

| | |
|---|---|
| Requires at least | WordPress 7.0 |
| Tested up to | WordPress 7.1 |
| Requires PHP | 7.4 |
| License | GPL-2.0-or-later |

## What is in it

- **22 templates.** The full hierarchy: index, home, front page, single, page, archive, category, tag, date, author, search, 404, privacy policy, and attachment. Plus eight you can pick per post or page: post with sidebar, post with cover header, post with split header, page without a title, page with sidebar, wide page, landing page, and blank canvas.
- **11 template parts.** Default, centered, and minimal headers; default, columns, and minimal footers; post meta, author box, related posts, sidebar, and comments.
- **128 patterns in eleven groups:** Openers, Post lists, Content, Article kit, Review kit, Sidebar, Pages, Full Pages, Post layouts, Headers, and Footers. Full Pages are complete pages from four sample sites: an author, a book review blog, a bookshop, and a literary magazine. Post layouts give a new post a starting structure for a review, a roundup, a how-to guide, a comparison, an interview, a news post, or an essay.
- **A review kit of eighteen:** verdict, score, at a glance, pros and cons, spec table, comparison table, best-for cards, top picks, roundup pick, alternatives, plan comparison, how it was tested, buyer's checklist, deal strip, product call to action, final verdict, disclosure note, and tabbed details.
- **Six designs.** Editorial is the default. Paper is warm and serif-led for essays. Signal is cool and card-led for review sites. Midnight, Graphite, and Espresso are dark and keep dark sections dark. There are also five palettes (Ink, Moss, Plum, Harbor, Rose) and four type presets, all on the same two fonts.
- **Six section styles and six block styles**, so patterns stay core blocks instead of carrying custom CSS.
- **Two bundled fonts**, Valley Sans and Hedvig Letters Serif, self-hosted and served from your own domain.

Osmium registers no post types, no blocks, no shortcodes, and no settings page. Everything you build with it keeps working if you switch themes.

## Design tokens

Patterns speak one vocabulary, so every style variation restyles them for free.

- Colors: `base`, `base-2`, `contrast`, `contrast-2`, `contrast-3`, `primary`, `primary-tint`
- Font sizes: `small`, `medium`, `large`, `x-large`, `xx-large`, `xxx-large`
- Spacing: `20` through `80`
- Font families: `valley-sans`, `hedvig-letters-serif`
- Section styles: `is-style-tinted`, `is-style-dark`, `is-style-card`, `is-style-outlined`, `is-style-accent`, `is-style-elevated`
- Block styles: `is-style-checklist` and `is-style-plain` on lists, `is-style-framed` on images, `is-style-pill` on post terms, `is-style-lead` on paragraphs, `is-style-text` on buttons

## Installing from this repository

The theme is the `theme/` directory. The repository root holds the license and this file.

```bash
git clone https://github.com/wpgaurav/osmium.git
ln -s "$(pwd)/osmium/theme" /path/to/wp-content/themes/osmium
```

To build a zip you can upload through the WordPress admin, run the build script from the repository root. It writes `build/osmium-<version>.zip` with a single `osmium` folder inside and checks the layout:

```bash
cd osmium && ./build.sh
```

Or download the latest zip from [Releases](https://github.com/wpgaurav/osmium/releases).

## Accessibility

Every template is checked with axe-core against the WCAG 2.0, 2.1, and 2.2 A and AA rule sets plus axe best practices, at desktop and mobile widths, and has to report zero violations. In practice that means a skip link, one `h1` per page, sections labelled by their headings, a visible focus ring on everything focusable, form labels that are really there, current navigation items marked by more than color, and wide tables that scroll inside a focusable, named region.

Text and placeholders sit at 4.5:1 or better against the page. Input borders and icons sit at 3:1 or better. Those hold in every design and palette, measured by script.

## Credits

Osmium bundles two typefaces under the SIL Open Font License, version 1.1.

- [Valley Sans](https://github.com/HelsinkiTypeStudio/valley-sans), copyright 2026 The Valley Sans Project Authors. Designed by Niklas Ekholm and Lari Moro.
- [Hedvig Letters Serif](https://github.com/KanonFoundry/HedvigLetters), copyright 2023 The Hedvig Letters Project Authors. Designed by Kanon Foundry, Alexander Orn, and Tor Weibull.

Their license text ships alongside the font files in `theme/assets/fonts`.

The pattern images in `theme/assets/images` were generated for Osmium and are released under the same license as the theme. There are twelve abstract images. For the Full Pages patterns there are also ten book covers, three magazine covers, and two bookshop shelves. The books, people, and publishers on them are fictional.

## Support This Project

Osmium gives writers, publishers and review sites a free and open source block theme with 128 patterns, an 18-piece review kit built from core blocks and no JavaScript of its own. I'm working toward a 1.0 submission to the WordPress.org theme directory and every template has to pass axe-core with zero WCAG A and AA violations at desktop and mobile widths.

If the review kit gave your posts verdicts, scores and comparison tables that keep working after a theme switch, you can buy me a coffee.

<a href="https://buymeacoffee.com/gauravtiwari"><img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" alt="Buy me a coffee" height="50"></a>

Osmium is still in development, so a star on the repo helps and so does an issue for any contrast or keyboard problem, with the template and the design where you found it.

## License

Osmium is free software under the GNU General Public License, version 2 or later. See [LICENSE](LICENSE).
