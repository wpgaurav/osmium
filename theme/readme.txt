=== Osmium ===

Contributors: gauravtiwari
Requires at least: 7.0
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 0.4.1
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: blog, news, one-column, two-columns, right-sidebar, block-patterns, full-site-editing, style-variations, block-styles, custom-colors, custom-logo, custom-menu, editor-style, featured-images, full-width-template, threaded-comments, translation-ready, wide-blocks

A content-first block theme for writers, publishers, and review sites.

== Description ==

Osmium is built for people who write for a living and sell through what they write.

The design lives in theme.json and the layout lives in patterns, so the theme ships no JavaScript of its own and very little CSS. Reading comes first: the article measure, typography scale, and spacing rhythm got more design time than the homepage.

What you get:

* 22 templates built for long-form reading, with a content width tuned to about 65 characters a line. Six of them can be picked per post or page: a cover header, a split header, a sidebar, a wide page, a landing page, and a blank canvas
* 128 patterns in eleven groups: openers, post lists, content sections, an article kit, a review kit, sidebar blocks, page layouts, full pages from four sample sites, starting layouts for new posts, headers, and footers
* Full pages from four sample sites: an author's home and book page, a book review blog, a bookshop's home and staff picks, and a literary magazine. Pick one when you create a page, then change the words and pictures
* A review kit for product and affiliate sites: verdicts, scores, pros and cons, spec and comparison tables, roundup picks, plan comparisons, and a disclosure note
* Six designs, five extra color palettes, and four type presets. Every one uses the same two fonts and the same spacing, so switching never breaks a layout
* Section and block styles for tinted, dark, accent, outlined, card, and elevated sections, checklists, and pill tags, so patterns stay core blocks only
* Two bundled fonts, Valley Sans and Hedvig Letters Serif, self-hosted and served from your own domain

Osmium registers no post types, no blocks, no shortcodes, and no settings page. Everything you build with it keeps working if you switch themes.

== Installation ==

1. In your WordPress admin, go to Appearance then Themes and click Add New.
2. Search for Osmium, then click Install and Activate.
3. Open Appearance then Editor to set your logo, menu, and style variation.

== Frequently Asked Questions ==

= Does Osmium need a page builder or a block plugin? =

No. Every template, part, and pattern uses core blocks only.

= Why does my front page look like the theme demo? =

Osmium ships a Front Page template, so the front of your site gets a designed layout the moment you activate the theme, with your own newest posts in it. Nothing is created in your database and no settings are changed.

If you would rather use a page you built yourself, open Appearance then Editor, go to Templates, and either edit the Front Page template or delete it. With it gone, WordPress falls back to your own page. You can also start from Patterns and pick "Homepage for a publication" to build a page with the same sections.

= Can I change the fonts? =

Yes. Open the Site Editor, go to Styles then Typography, and pick any font from the Font Library or upload your own.

= Where do the review patterns live? =

Open the block inserter, choose Patterns, and look for the Osmium: Review kit category.

= Can one post use a different layout? =

Yes. In the editor sidebar, open the Template setting. Posts can use Post with cover header, Post with split header, or Post with sidebar. Pages can use Page with sidebar, Wide page, Landing page, Blank canvas, or Page, no title.

= Is there a starting structure for a review or a how-to guide? =

Yes. Create a new post and open the pattern inserter. The Osmium: Post layouts group holds starting structures for a review, a roundup, a how-to guide, a comparison, an interview, a news post, and an essay.

== Changelog ==

= 0.4.0 =
* A new pattern group, Full Pages, with six complete pages from four sample sites: an author's home and book page, a book review blog, a bookshop's home and staff picks, and a literary magazine. That makes 128 patterns. The pages come with ten book covers, three magazine covers, and two shelf images, all bundled with the theme.
* The Theme URI now points to the theme's page at gauravtiwari.org instead of the GitHub repository.

= 0.3.1 =
* Headers, footers, and breadcrumbs now span the wide width, so they line up with wide content instead of sitting inside the reading column. This covers all nine headers and all nine footers. Footer text keeps its readable line length.

= 0.3.0 =
* 85 new patterns, for 122 in total. New groups: Post lists, Article kit, Sidebar, and Post layouts, the last with starting structures for reviews, roundups, how-to guides, comparisons, interviews, news, and essays.
* New templates for categories, tags, date archives, the privacy policy page, and attachments, plus six templates you can pick per post or page.
* Two new dark designs, Graphite and Espresso, five color palettes, and four type presets.
* New styles: checklist and plain lists, framed images, pill tags, a lead paragraph, a text-link button, and accent, outlined, and elevated sections.
* Striped tables now follow the palette, so they stay readable in the dark designs.
* Posts end with an author box and related posts. Breadcrumbs sit at the foot of posts, pages, and archives.
* Every section now opens with its heading. Small labels above headings are gone, and a post's category sits in the meta line under its title.
* The feed link follows the site address, so it works on a subdirectory install.

= 0.2.0 =
* Added 15 patterns and two categories. Headers and footers now have five each, and there is a new Openers group with five ways to start a page.
* New sections: a numbers row, a three-step explainer, a heading-beside-text section, a callout note for inside articles, and a keep-reading block for the end of one.
* Patterns are grouped under Osmium: Openers, Content, Review kit, Pages, Headers, and Footers, so they are findable without hunting.

= 0.1.0 =
* Initial foundation: theme.json design tokens, templates for index, single, and page, header, footer, post meta, sidebar, and comments parts, the first patterns, and the Paper and Signal style variations.

== Copyright ==

Osmium WordPress Theme, (C) 2026 Gaurav Tiwari.
Osmium is distributed under the terms of the GNU General Public License v2 or later.

This theme bundles the following third-party resources:

Valley Sans
Copyright 2026 The Valley Sans Project Authors
Designers: Niklas Ekholm, Lari Moro
License: SIL Open Font License, Version 1.1
License URL: https://scripts.sil.org/OFL
Source: https://github.com/HelsinkiTypeStudio/valley-sans
Bundled license text: assets/fonts/valley-sans-LICENSE.txt

Pattern images
Copyright 2026 Gaurav Tiwari
License: GNU General Public License v2 or later
License URL: http://www.gnu.org/licenses/gpl-2.0.html
Source: generated for Osmium. Every image in assets/images was made for the theme: twelve abstract images, ten book covers, three magazine covers, and two bookshop shelves. The books, people, and publishers on them are fictional.

Hedvig Letters Serif
Copyright 2023 The Hedvig Letters Project Authors
Designers: Kanon Foundry, Alexander Orn, Tor Weibull
License: SIL Open Font License, Version 1.1
License URL: https://scripts.sil.org/OFL
Source: https://github.com/KanonFoundry/HedvigLetters
Bundled license text: assets/fonts/hedvig-letters-serif-LICENSE.txt
