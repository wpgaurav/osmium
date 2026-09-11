<?php
/**
 * Title: Book review blog: home
 * Slug: osmium/full-book-reviews-home
 * Categories: osmium-full
 * Post Types: page
 * Block Types: core/post-content
 * Keywords: book reviews, reviews, blog, ratings, best of, genres
 * Description: The front page of a book review blog: your latest reviews, a best-of list, genres to browse, how the ratings work, an about note, and a signup.
 * Viewport Width: 1400
 *
 * @package Osmium
 * @since 0.4.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"54%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:54%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-xxx-large-font-size"><?php echo esc_html__( 'One honest book review a week, with the flaws left in.', 'osmium' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-contrast-2-color has-text-color has-large-font-size"><?php echo esc_html__( 'I buy every book I review, read it to the last page, and score the story, the prose, the pacing, and the ending on their own. The newest post picks four books for a long weekend.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Read the long weekend list', 'osmium' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text"} -->
<div class="wp-block-button is-style-text"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'How I rate books', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bookshop-shelf.webp" alt="<?php echo esc_attr__( 'Six book covers on a shelf', 'osmium' ); ?>" style="border-radius:12px;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div id="latest" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Latest reviews', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-contrast-2-color has-text-color has-large-font-size"><?php echo esc_html__( 'A new one every Sunday, each with a score, a verdict you can read in ten seconds, and a section on what doesn\'t work.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":11,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","minimumColumnWidth":"20rem"}} -->
<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","style":{"border":{"radius":"8px"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} /-->

<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"large"} /-->

<!-- wp:post-date {"textColor":"contrast-2","fontSize":"small"} /-->

<!-- wp:post-excerpt {"excerptLength":24,"showMoreOnNewLine":false,"textColor":"contrast-2","fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'No reviews here yet. The first one goes up on Sunday.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"is-style-tinted","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div id="best" class="wp-block-group alignfull is-style-tinted" style="border-radius:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"36%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:36%"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Best of 2026 so far', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-contrast-2-color has-text-color has-large-font-size"><?php echo esc_html__( 'Three books from this year I would buy again at full price.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Two of them tied at 4.5, so the order is my call, and each pick says why. Nothing has earned a 5 yet.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"64%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column" style="flex-basis:64%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"28%"} -->
<div class="wp-block-column" style="flex-basis:28%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-salt-orchard.webp" alt="<?php echo esc_attr__( 'Cover of The Salt Orchard by Maren Holt', 'osmium' ); ?>" style="border-radius:4px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"72%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:72%"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><a href="#"><?php echo esc_html__( '1. The Salt Orchard', 'osmium' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontWeight":"600"}}} -->
<p class="has-primary-color has-text-color" style="font-weight:600"><?php echo esc_html__( '4.5 out of 5', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Maren Holt, literary fiction. Three sisters and a drowning orchard, and the only novel this year I finished and started again the same week.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#"><?php echo esc_html__( 'Read the review', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"28%"} -->
<div class="wp-block-column" style="flex-basis:28%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-salt-stone-kettle.webp" alt="<?php echo esc_attr__( 'Cover of Salt, Stone, Kettle by Aoife Brennan', 'osmium' ); ?>" style="border-radius:4px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"72%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:72%"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><a href="#"><?php echo esc_html__( '2. Salt, Stone, Kettle', 'osmium' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontWeight":"600"}}} -->
<p class="has-primary-color has-text-color" style="font-weight:600"><?php echo esc_html__( '4.5 out of 5', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Aoife Brennan, poetry. Tied on score with the Holt, and second only because its 96 pages left me wanting more.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#"><?php echo esc_html__( 'Read the review', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"28%"} -->
<div class="wp-block-column" style="flex-basis:28%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-lighthouse-ledger.webp" alt="<?php echo esc_attr__( 'Cover of The Lighthouse Ledger by Priya Castellan', 'osmium' ); ?>" style="border-radius:4px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"72%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:72%"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><a href="#"><?php echo esc_html__( '3. The Lighthouse Ledger', 'osmium' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontWeight":"600"}}} -->
<p class="has-primary-color has-text-color" style="font-weight:600"><?php echo esc_html__( '4.0 out of 5', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Priya Castellan, mystery. The fairest puzzle of the year.', 'osmium' ); ?> <a href="#"><?php echo esc_html__( 'The Borrowed Hour', 'osmium' ); ?></a> <?php echo esc_html__( 'scored the same, but this one has the better ending.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#"><?php echo esc_html__( 'Read the review', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div id="genres" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Browse by genre', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'Each genre page lists every review on that shelf, newest first.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","minimumColumnWidth":"12rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|contrast","style":"solid","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><a href="#"><?php echo esc_html__( 'Literary fiction', 'osmium' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Novels where the sentences carry as much weight as the plot.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|contrast","style":"solid","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><a href="#"><?php echo esc_html__( 'Mystery', 'osmium' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Puzzles, scored on whether they play fair with the reader.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|contrast","style":"solid","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><a href="#"><?php echo esc_html__( 'Nonfiction', 'osmium' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'History and ideas, judged on whether the argument holds up.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|contrast","style":"solid","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><a href="#"><?php echo esc_html__( 'Science fiction', 'osmium' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Big premises, and whether the book earns its page count.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|contrast","style":"solid","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><a href="#"><?php echo esc_html__( 'Poetry', 'osmium' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Short books that take longer to read than their page count says.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"is-style-accent","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div id="ratings" class="wp-block-group alignfull is-style-accent" style="border-radius:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"36%"} -->
<div class="wp-block-column" style="flex-basis:36%"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'How I rate', 'osmium' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"64%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:64%"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'Out of 5, in half stars. Story, prose, pacing, and the ending are scored separately, and the overall is their plain average, rounded to the nearest half star.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'A 3 means I finished it and wouldn\'t press it on anyone. A 4 means I\'d buy it as a present. A 5 means I\'d reread it straight away, and nothing has earned one this year.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|contrast","style":"solid","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Story', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Does the book know what it\'s about, and does every thread earn its place? For poetry and nonfiction, it\'s the shape of the whole.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|contrast","style":"solid","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Prose', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Would I read these sentences if nothing happened in them? Clear beats clever, and clever has to earn its keep.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|contrast","style":"solid","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Pacing', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Where did I put the book down, and how long did it take me to pick it back up?', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|contrast","style":"solid","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'The ending', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Does the last chapter pay for the first one? I score it without spoiling it.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div id="about" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"36%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:36%"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portrait-mist.webp" alt="" style="border-radius:16px;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"64%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:64%"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'About The Long Shelf', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'I\'m Theo Brandt. I spent eleven years as a copy editor on a newspaper\'s night desk, which mostly taught me to notice when a sentence claims more than it delivers.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'The Long Shelf started as a spreadsheet of every book I finished, with one column for the page where I nearly stopped. That column is still the most useful part of every review.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'How I buy books:', 'osmium' ); ?></strong> <?php echo esc_html__( 'I pay for every book I review, at full price, usually from', 'osmium' ); ?> <a href="#"><?php echo esc_html__( 'Lantern & Leaf', 'osmium' ); ?></a> <?php echo esc_html__( 'on Mill Street. Publishers don\'t send me copies, nobody reads a review before it goes up, and there are no affiliate links here. If that ever changes, the post will say so in its first line.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Letters, arguments, and corrections go to', 'osmium' ); ?> <a href="mailto:letters@thelongshelf.example"><?php echo esc_html__( 'letters@thelongshelf.example', 'osmium' ); ?></a><?php echo esc_html__( '. I read all of them, and I publish every correction.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"is-style-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-dark" style="border-radius:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'One review every Sunday', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'The week\'s review, a note on the book I gave up on and why, and nothing else. Send an email and I\'ll add you by hand.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:letters@thelongshelf.example?subject=Newsletter"><?php echo esc_html__( 'Sign up by email', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
