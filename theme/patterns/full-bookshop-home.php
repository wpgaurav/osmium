<?php
/**
 * Title: Bookshop: home
 * Slug: osmium/full-bookshop-home
 * Categories: osmium-full
 * Post Types: page
 * Block Types: core/post-content
 * Keywords: bookshop, bookstore, shop, book club, events, opening hours
 * Description: An independent bookshop's front page: a cover-image opener, staff picks, a book club on three plans, events, opening hours and directions, and a signup.
 * Viewport Width: 1400
 *
 * @package Osmium
 * @since 0.4.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bookshop-shelf-soft.webp","alt":"<?php echo esc_attr__( 'Six book covers standing on a wooden shelf', 'osmium' ); ?>","dimRatio":60,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":70,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|40"}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-base-color has-text-color" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:70vh"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr__( 'Six book covers standing on a wooden shelf', 'osmium' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bookshop-shelf-soft.webp" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"textColor":"base","fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-base-color has-text-color has-xxx-large-font-size"><?php echo esc_html__( 'Your next favorite book is already on Mill Street', 'osmium' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'We\'re a small independent bookshop at 14 Mill Street. The three of us read the new arrivals before they reach the front table, and we\'ll tell you honestly which ones to skip.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'See the staff picks', 'osmium' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"base","className":"is-style-outline","style":{"border":{"color":"var:preset|color|base"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color has-border-color wp-element-button" href="#visit" style="border-color:var(--wp--preset--color--base)"><?php echo esc_html__( 'Plan your visit', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"anchor":"picks","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div id="picks" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Staff picks this month', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-contrast-2-color has-text-color has-large-font-size"><?php echo esc_html__( 'Four books we can\'t stop recommending this September. They\'re on the front table by the door, each with a note from whoever picked it.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-salt-orchard.webp" alt="<?php echo esc_attr__( 'Cover of The Salt Orchard by Maren Holt', 'osmium' ); ?>" style="border-radius:4px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'The Salt Orchard', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Maren Holt', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Three sisters, one flooding orchard, and the best family argument I\'ve read all year.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Hardcover, $28. Picked by Ada.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text"} -->
<div class="wp-block-button is-style-text"><a class="wp-block-button__link wp-element-button" href="#visit"><?php echo esc_html__( 'Reserve a copy', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-quiet-engine.webp" alt="<?php echo esc_attr__( 'Cover of The Quiet Engine by Hal Morrow', 'osmium' ); ?>" style="border-radius:4px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'The Quiet Engine', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Hal Morrow', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'A silent ferry, a route nobody listed, and chapters so short I missed my bus stop twice.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Paperback, $18. Picked by Marcus.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text"} -->
<div class="wp-block-button is-style-text"><a class="wp-block-button__link wp-element-button" href="#visit"><?php echo esc_html__( 'Reserve a copy', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-paper-boats.webp" alt="<?php echo esc_attr__( 'Cover of Paper Boats by Tomas Reyes', 'osmium' ); ?>" style="border-radius:4px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Paper Boats', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Tomas Reyes', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Two neighbors, one rainy street, and a boat race that goes much farther than anyone planned.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Hardcover, $17. Picked by Lin.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text"} -->
<div class="wp-block-button is-style-text"><a class="wp-block-button__link wp-element-button" href="#visit"><?php echo esc_html__( 'Reserve a copy', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-winter-kitchen.webp" alt="<?php echo esc_attr__( 'Cover of The Winter Kitchen Almanac by Rosa Delgado', 'osmium' ); ?>" style="border-radius:4px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'The Winter Kitchen Almanac', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Rosa Delgado', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Ninety cold-weather recipes, week by week, and a pantry plan that means you throw out almost nothing.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Hardcover, $32. Picked by Lin.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text"} -->
<div class="wp-block-button is-style-text"><a class="wp-block-button__link wp-element-button" href="#visit"><?php echo esc_html__( 'Reserve a copy', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'See all eight staff picks', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"club","align":"full","className":"is-style-tinted","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div id="club" class="wp-block-group alignfull is-style-tinted" style="border-radius:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Join the book club', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html__( 'Tell us two books you loved and one you gave up on. Every month one of us picks a new book with you in mind and tucks a note inside saying why.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Paperback club', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1"}},"fontSize":"xx-large"} -->
<p class="has-xx-large-font-size" style="line-height:1.1">$18</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'a month', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"is-style-checklist"} -->
<ul class="wp-block-list is-style-checklist"><!-- wp:list-item -->
<li><?php echo esc_html__( 'One new paperback a month, chosen by the staff', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'A handwritten note on why we picked it for you', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Kept behind the counter until you come in', 'osmium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#visit"><?php echo esc_html__( 'Join at the counter', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-dark","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-dark"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Hardback club', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1"}},"fontSize":"xx-large"} -->
<p class="has-xx-large-font-size" style="line-height:1.1">$30</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'a month', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"is-style-checklist"} -->
<ul class="wp-block-list is-style-checklist"><!-- wp:list-item -->
<li><?php echo esc_html__( 'One new hardback a month', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Often a signed copy', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'The same handwritten note on why it\'s yours', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Kept behind the counter until you come in', 'osmium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#visit"><?php echo esc_html__( 'Join at the counter', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Gift, three months', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1"}},"fontSize":"xx-large"} -->
<p class="has-xx-large-font-size" style="line-height:1.1">$54</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'once, for three months', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"is-style-checklist"} -->
<ul class="wp-block-list is-style-checklist"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Three paperbacks, posted monthly', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'A card with your message, written out by hand', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Paid once, so there\'s nothing to cancel', 'osmium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#visit"><?php echo esc_html__( 'Join at the counter', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"events","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div id="events" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Events at the shop', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html__( 'Two evenings and a Saturday morning this fall. Seats are limited to the chairs we can fit between the shelves, so email us to save one.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Maren Holt reads from The Salt Orchard', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Thursday, October 8, 2026, at 7 pm. Maren reads from', 'osmium' ); ?> <a href="#"><?php echo esc_html__( 'her new novel', 'osmium' ); ?></a> <?php echo esc_html__( 'about three sisters and a failing sea wall, then signs copies.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a href="mailto:shop@lanternandleaf.example?subject=Seats%20for%20October%208"><?php echo esc_html__( 'Save a seat for October 8', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Saturday story time with Paper Boats', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Saturday, October 17, 2026, at 10:30 am. Lin reads Tomas Reyes\'s picture book, then everyone folds a boat to take home. For ages four to seven.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a href="mailto:shop@lanternandleaf.example?subject=Story%20time%20on%20October%2017"><?php echo esc_html__( 'Save a spot on the rug', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Crime night: Priya Castellan and Hal Morrow', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Thursday, November 5, 2026, at 7 pm. Marcus asks the authors of The Lighthouse Ledger and The Quiet Engine how you hide a clue in plain sight.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a href="mailto:shop@lanternandleaf.example?subject=Seats%20for%20November%205"><?php echo esc_html__( 'Save a seat for November 5', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"visit","align":"full","className":"is-style-accent","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div id="visit" class="wp-block-group alignfull is-style-accent" style="border-radius:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Visit the shop', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html__( 'We\'re at 14 Mill Street and open every day. Coming in for one particular book? Reserve it first and it\'ll be waiting behind the counter with your name on it.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Find us', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( '14 Mill Street', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Look for the lantern over the door and the chalkboard that\'s usually wrong about the weather.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Opening hours', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:table {"hasFixedLayout":false} -->
<figure class="wp-block-table"><table><thead><tr><th scope="col"><?php echo esc_html__( 'Days', 'osmium' ); ?></th><th scope="col"><?php echo esc_html__( 'Hours', 'osmium' ); ?></th></tr></thead><tbody><tr><th scope="row"><?php echo esc_html__( 'Monday to Saturday', 'osmium' ); ?></th><td><?php echo esc_html__( '9 am to 7 pm', 'osmium' ); ?></td></tr><tr><th scope="row"><?php echo esc_html__( 'Sunday', 'osmium' ); ?></th><td><?php echo esc_html__( '11 am to 5 pm', 'osmium' ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Write to us', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="mailto:shop@lanternandleaf.example"><?php echo esc_html__( 'shop@lanternandleaf.example', 'osmium' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Send us a title, a half-remembered cover, or the plot as best you can recall it. We\'re good at this.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'How reserving works', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true} -->
<ol class="wp-block-list"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Email us the title, or ask at the counter.', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'We put your copy behind the counter with your name on it and hold it for seven days.', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'You pay when you pick it up, at the counter. There\'s nothing to pay online and no deposit.', 'osmium' ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:shop@lanternandleaf.example?subject=Reserve%20a%20copy"><?php echo esc_html__( 'Email us to reserve', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"newsletter","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div id="newsletter" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'New arrivals every Friday', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'One short email on Friday morning: what came off the delivery van that week, which of us has already claimed it, and which event seats are still open.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:shop@lanternandleaf.example?subject=Friday%20new%20arrivals"><?php echo esc_html__( 'Send me the Friday email', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Fridays only. Reply "stop" anytime and we\'ll take you off the list by hand.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
