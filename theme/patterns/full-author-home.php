<?php
/**
 * Title: Author site: home
 * Slug: osmium/full-author-home
 * Categories: osmium-full
 * Post Types: page
 * Block Types: core/post-content
 * Keywords: author, writer, novelist, books, events, newsletter
 * Description: An author's front page: the new book with its cover, praise from other writers, the backlist, an about section, upcoming events, and a newsletter signup.
 * Viewport Width: 1400
 *
 * @package Osmium
 * @since 0.4.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-xxx-large-font-size"><?php echo esc_html__( 'The Salt Orchard', 'osmium' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-contrast-2-color has-text-color has-large-font-size"><?php echo esc_html__( 'Maren Holt\'s new novel, out now from Northfold Press.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Three sisters inherit an apple orchard on a tidal marsh the year the sea wall fails. Ruth wants to fight the water, Kit wants to sell, and Nell wants to be anywhere else. What does a family owe the land, and what does the land keep?', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'About the book', 'osmium' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text"} -->
<div class="wp-block-button is-style-text"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Read the review', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Hardcover, $28. Ebook, $14. 336 pages.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-salt-orchard.webp" alt="<?php echo esc_attr__( 'Cover of The Salt Orchard by Maren Holt', 'osmium' ); ?>" style="border-radius:4px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"is-style-tinted","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-tinted" style="border-radius:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Praise for The Salt Orchard', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:quote {"style":{"border":{"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"left":"0"}}}} -->
<blockquote class="wp-block-quote" style="border-left-style:none;border-left-width:0px;padding-left:0"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'Holt gives each sister her own way of not saying the thing. By the last chapter you can hear all three silences at once.', 'osmium' ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html__( 'Aoife Brennan, author of Salt, Stone, Kettle', 'osmium' ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:quote {"style":{"border":{"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"left":"0"}}}} -->
<blockquote class="wp-block-quote" style="border-left-style:none;border-left-width:0px;padding-left:0"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'I read the flood chapter standing up in my kitchen and burned the toast. She knows exactly what water does to a house, and to the people arguing inside it.', 'osmium' ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html__( 'Priya Castellan, author of The Lighthouse Ledger', 'osmium' ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:quote {"style":{"border":{"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"left":"0"}}}} -->
<blockquote class="wp-block-quote" style="border-left-style:none;border-left-width:0px;padding-left:0"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'A stubborn, generous novel. It made me want to plant a tree I won\'t live to pick from.', 'osmium' ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html__( 'June Park, editor of Tideline Quarterly', 'osmium' ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"books","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div id="books" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Three books so far', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-contrast-2-color has-text-color has-large-font-size"><?php echo esc_html__( 'A book of stories in 2020, then two novels, each one a little longer than the last.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-salt-orchard.webp" alt="<?php echo esc_attr__( 'Cover of The Salt Orchard by Maren Holt', 'osmium' ); ?>" style="border-radius:4px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><a href="#"><?php echo esc_html__( 'The Salt Orchard', 'osmium' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'A novel, 2026', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Three sisters inherit an orchard on a tidal marsh the year the sea wall fails.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Hardcover, $28. Ebook, $14.', 'osmium' ); ?> <a href="#"><?php echo esc_html__( 'Read the first page', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-nine-lamps.webp" alt="<?php echo esc_attr__( 'Cover of Nine Lamps on Quarry Lane by Maren Holt', 'osmium' ); ?>" style="border-radius:4px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Nine Lamps on Quarry Lane', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'A novel, 2023', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'A lamplighter\'s apprentice records one street for a year and learns which windows stay dark on purpose.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Available in paperback, $18, and as an ebook, $11.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-low-tide-letters.webp" alt="<?php echo esc_attr__( 'Cover of Low Tide Letters by Maren Holt', 'osmium' ); ?>" style="border-radius:4px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Low Tide Letters', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Stories, 2020', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Eleven stories from one seaside town, told in letters, lists, and lost-and-found notes.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Available in paperback, $16, and as an ebook, $9.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"about","align":"full","className":"is-style-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div id="about" class="wp-block-group alignfull is-style-dark" style="border-radius:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"34%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:34%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-framed"} -->
<figure class="wp-block-image size-full is-style-framed"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portrait-clay.webp" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'About me', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'I grew up on a salt marsh where the school road flooded twice a month and my father kept the tide table pinned above the stove. For eleven years I wrote funding bids for a coastal land trust, which taught me how to make a case in four hundred words, and how little a sea wall can promise.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Low Tide Letters came out in 2020 and Nine Lamps on Quarry Lane in 2023. The Salt Orchard took five years and three drafts; the first draft had four sisters, and one of them didn\'t survive the second. I live in Northfold now. I write at the kitchen table from six until the kettle goes cold, spend the afternoons in the library calling it research, and answer every letter, slowly.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Read Five Questions for Maren Holt', 'osmium' ); ?></a><?php echo esc_html__( ', my interview with June Park for Tideline Quarterly.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"events","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div id="events" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Where to find me this fall', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-contrast-2-color has-text-color has-large-font-size"><?php echo esc_html__( 'Three evenings, and one of them you can join from your own couch.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'October 8, 2026', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Reading and signing for The Salt Orchard at Lantern & Leaf Books, Mill Street, 7 pm.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'See the shop\'s events', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'October 22, 2026', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'In conversation with Aoife Brennan in the Reading Room at Northfold Library, 6:30 pm.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a href="mailto:hello@marenholt.example?subject=A%20question%20for%20October%2022"><?php echo esc_html__( 'Send a question ahead', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'November 12, 2026', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'A book club Q&A for reading groups, online, 8 pm.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a href="mailto:hello@marenholt.example?subject=Reading%20group%20Q%26A"><?php echo esc_html__( 'Sign up your reading group', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"newsletter","align":"full","className":"is-style-accent","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div id="newsletter" class="wp-block-group alignfull is-style-accent" style="border-radius:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Letters from Northfold', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'First news of readings and new books, a page of whatever I\'m working on, and the best thing I read that season. A few letters a year, never more.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hello@marenholt.example?subject=Newsletter"><?php echo esc_html__( 'Sign up by email', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'The button opens a short email to me. Send it as it is and you\'re on the list.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
