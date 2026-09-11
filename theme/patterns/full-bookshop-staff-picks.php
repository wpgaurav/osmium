<?php
/**
 * Title: Bookshop: staff picks
 * Slug: osmium/full-bookshop-staff-picks
 * Categories: osmium-full
 * Post Types: page
 * Block Types: core/post-content
 * Keywords: staff picks, recommendations, bookshop, booksellers, books
 * Description: Recommendations grouped by bookseller, each book with its cover and a short note, ending with a way to have a copy kept aside.
 * Viewport Width: 1400
 *
 * @package Osmium
 * @since 0.4.0
 */

?>
<!-- wp:group {"align":"full","className":"is-style-tinted","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-tinted" style="border-radius:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":1,"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-xxx-large-font-size"><?php echo esc_html__( 'Staff picks', 'osmium' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-contrast-2-color has-text-color has-large-font-size"><?php echo esc_html__( 'Eight books the three of us keep pressing into people\'s hands this fall. Each note was written by whoever picked the book, after reading every page of it, acknowledgments included.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Jump to', 'osmium' ); ?> <a href="#ada"><?php echo esc_html__( 'Ada\'s fiction and poetry', 'osmium' ); ?></a>, <a href="#marcus"><?php echo esc_html__( 'Marcus\'s crime and thrillers', 'osmium' ); ?></a><?php echo esc_html__( ', or', 'osmium' ); ?> <a href="#lin"><?php echo esc_html__( 'Lin\'s children\'s books and kitchen shelf', 'osmium' ); ?></a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"ada","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div id="ada" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"width":"4rem","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portrait-sage.webp" alt="" style="border-radius:9999px;aspect-ratio:1;object-fit:cover;width:4rem;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Ada: fiction and poetry', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Ada runs the fiction and poetry tables. She reads the last page first, and she\'d like you to know that\'s allowed.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:image {"width":"12rem","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-salt-orchard.webp" alt="<?php echo esc_attr__( 'Cover of The Salt Orchard by Maren Holt', 'osmium' ); ?>" style="border-radius:4px;width:12rem;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'The Salt Orchard', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Maren Holt', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Hardcover, 336 pages, $28', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Three sisters inherit an apple orchard on a tidal marsh the year the sea wall fails, and each of them wants to save something different. I read it in two sittings, then made Marcus read the chapter where the salt water reaches the oldest trees. Maren reads here on', 'osmium' ); ?> <a href="#"><?php echo esc_html__( 'October 8', 'osmium' ); ?></a><?php echo esc_html__( ', so bring your copy to get it signed.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#"><?php echo esc_html__( 'Read the review on The Long Shelf', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:image {"width":"12rem","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-salt-stone-kettle.webp" alt="<?php echo esc_attr__( 'Cover of Salt, Stone, Kettle by Aoife Brennan', 'osmium' ); ?>" style="border-radius:4px;width:12rem;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Salt, Stone, Kettle', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Aoife Brennan', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Paperback, 96 pages, $17', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Poems about kitchens, coastlines, and the things that outlast the people who used them: a kettle nobody will throw out, a bread knife worn thin at one end. I\'ve read half of them aloud at the counter by now. It\'s quietly a book about grief, and it never once says so.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#"><?php echo esc_html__( 'Read the review on The Long Shelf', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:image {"width":"12rem","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-orbit-small-things.webp" alt="<?php echo esc_attr__( 'Cover of An Orbit of Small Things by Lena Varga', 'osmium' ); ?>" style="border-radius:4px;width:12rem;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'An Orbit of Small Things', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Lena Varga', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Paperback, 412 pages, $20', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'A mechanic on a repair station at the edge of a dying colony starts getting messages from the parts she fixes. The middle hundred pages drift, and I won\'t pretend they don\'t. Stay for the last act, where a single pressure valve gets the best scene in the book.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#"><?php echo esc_html__( 'Read the review on The Long Shelf', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"marcus","align":"full","className":"is-style-tinted","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div id="marcus" class="wp-block-group alignfull is-style-tinted" style="border-radius:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"width":"4rem","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portrait-mist.webp" alt="" style="border-radius:9999px;aspect-ratio:1;object-fit:cover;width:4rem;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Marcus: crime and thrillers', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Marcus runs crime and thrillers, and he likes a book where the timetable is the plot. That\'s how a history of clocks ended up on his table.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:image {"width":"12rem","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-lighthouse-ledger.webp" alt="<?php echo esc_attr__( 'Cover of The Lighthouse Ledger by Priya Castellan', 'osmium' ); ?>" style="border-radius:4px;width:12rem;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'The Lighthouse Ledger', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Priya Castellan', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Paperback, 368 pages, $19', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'A keeper\'s logbook turns up forty years after the light went dark, with one page torn out. Priya Castellan hides her clues in tide tables, and yes, I checked them against each other, and yes, they hold. The solution is fair, which is rarer than it should be.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#"><?php echo esc_html__( 'Read the review on The Long Shelf', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:image {"width":"12rem","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-quiet-engine.webp" alt="<?php echo esc_attr__( 'Cover of The Quiet Engine by Hal Morrow', 'osmium' ); ?>" style="border-radius:4px;width:12rem;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'The Quiet Engine', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Hal Morrow', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Paperback, 352 pages, $18', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'An engineer finds out that the silent electric ferry she designed runs a second route that isn\'t on any timetable. The chapters are short and the ferry stays eerily calm, which makes every unscheduled stop feel like a threat. Hal and Priya are both here for', 'osmium' ); ?> <a href="#"><?php echo esc_html__( 'crime night on November 5', 'osmium' ); ?></a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:image {"width":"12rem","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-borrowed-hour.webp" alt="<?php echo esc_attr__( 'Cover of The Borrowed Hour by Samuel Okoro', 'osmium' ); ?>" style="border-radius:4px;width:12rem;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'The Borrowed Hour', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Samuel Okoro', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Hardcover, 304 pages, $30', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'My one nonfiction pick, and it reads like a heist: from monastery bells to shift work, Samuel Okoro shows how the clock stopped describing the day and started running it. The chapters on factory whistles are the best thing I read all summer. The final stretch races through the present day and feels thin next to the rest.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#"><?php echo esc_html__( 'Read the review on The Long Shelf', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"lin","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div id="lin" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"width":"4rem","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portrait-rose.webp" alt="" style="border-radius:9999px;aspect-ratio:1;object-fit:cover;width:4rem;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Lin: children\'s books and the kitchen shelf', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Lin runs the children\'s corner and, because somebody had to, the kitchen shelf. Ask about either and you\'ll leave with two books.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:image {"width":"12rem","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-paper-boats.webp" alt="<?php echo esc_attr__( 'Cover of Paper Boats by Tomas Reyes', 'osmium' ); ?>" style="border-radius:4px;width:12rem;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Paper Boats', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Tomas Reyes', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Hardcover, 40 pages, $17', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Two neighbors race paper boats down a rainy street and end up a long way from home. It\'s for ages four to seven, and the rain on every spread is worth slowing down for. I\'m reading it at', 'osmium' ); ?> <a href="#"><?php echo esc_html__( 'Saturday story time on October 17', 'osmium' ); ?></a><?php echo esc_html__( ', and there will be folding afterward.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:image {"width":"12rem","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-winter-kitchen.webp" alt="<?php echo esc_attr__( 'Cover of The Winter Kitchen Almanac by Rosa Delgado', 'osmium' ); ?>" style="border-radius:4px;width:12rem;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'The Winter Kitchen Almanac', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Rosa Delgado', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Hardcover, 256 pages, $32', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Ninety recipes for the cold months, arranged week by week, so you always know what\'s for dinner next Tuesday. The pantry plan is the real reason to buy it: I followed it through February and threw out almost nothing. The soups beat the desserts by a mile.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","className":"is-style-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide is-style-dark" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Want one kept aside for you?', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'Email us the title or tell us at the counter. We\'ll hold your copy for seven days, and you pay when you pick it up.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'How reserving works', 'osmium' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text"} -->
<div class="wp-block-button is-style-text"><a class="wp-block-button__link wp-element-button" href="mailto:shop@lanternandleaf.example?subject=Reserve%20a%20copy"><?php echo esc_html__( 'Email the shop', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
