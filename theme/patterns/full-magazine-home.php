<?php
/**
 * Title: Literary magazine: home
 * Slug: osmium/full-magazine-home
 * Categories: osmium-full
 * Post Types: page
 * Block Types: core/post-content
 * Keywords: magazine, literary, journal, issue, submissions, masthead
 * Description: A literary magazine's front page: the current issue, pieces from your posts, past issues, a submissions call, the masthead, and two subscription plans.
 * Viewport Width: 1400
 *
 * @package Osmium
 * @since 0.4.0
 */

?>
<!-- wp:group {"anchor":"issue","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div id="issue" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"38%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:38%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/magazine-issue-12.webp" alt="<?php echo esc_attr__( 'Cover of Tideline Quarterly, Issue 12', 'osmium' ); ?>" style="border-radius:4px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"62%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:62%"><!-- wp:heading {"level":1,"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-xxx-large-font-size"><?php echo esc_html__( 'What we keep', 'osmium' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-contrast-2-color has-text-color has-large-font-size"><?php echo esc_html__( 'Issue 12, Summer 2026', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Every piece in this issue began with someone refusing to let something go: a beach that ran out of glass, a landlord\'s list, a notebook of other people\'s sentences, an orchard the sea wants back. We didn\'t plan a theme, but the submissions pile kept handing us this one until we gave in. Read the story and the poem together if you can; we accepted them a week apart and haven\'t been able to separate them since.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'June Park, Editor', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|40"}},"border":{"bottom":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast-3);border-bottom-style:solid;border-bottom-width:1px;margin-top:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|20"},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"fontSize":"large","fontFamily":"hedvig-letters-serif"} -->
<p class="has-hedvig-letters-serif-font-family has-large-font-size"><a href="#"><?php echo esc_html__( 'The Glass Harvest', 'osmium' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Fiction by Noor Haddad', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|20"},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"fontSize":"large","fontFamily":"hedvig-letters-serif"} -->
<p class="has-hedvig-letters-serif-font-family has-large-font-size"><a href="#"><?php echo esc_html__( 'Inventory for a Rented Room', 'osmium' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Poetry by Aoife Brennan', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|20"},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"fontSize":"large","fontFamily":"hedvig-letters-serif"} -->
<p class="has-hedvig-letters-serif-font-family has-large-font-size"><a href="#"><?php echo esc_html__( 'On Keeping a Commonplace Book', 'osmium' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Essay by Samuel Okoro', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|20"},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"fontSize":"large","fontFamily":"hedvig-letters-serif"} -->
<p class="has-hedvig-letters-serif-font-family has-large-font-size"><a href="#"><?php echo esc_html__( 'Five Questions for Maren Holt', 'osmium' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Interview by June Park', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"is-style-tinted","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-tinted" style="border-radius:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'In this issue', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'One story, one poem, one essay, and one interview. Start anywhere, though the editors would start with the story.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":41,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","minimumColumnWidth":"24rem"}} -->
<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","style":{"border":{"radius":"8px"}}} --><!-- /wp:post-featured-image -->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"x-large"} --><!-- /wp:post-title -->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":30,"textColor":"contrast-2"} --><!-- /wp:post-excerpt --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'The Issue 12 pieces will appear here once they\'re published.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"36%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:36%"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Past issues', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'We print each issue once, and both of these are sold out on paper. Digital subscribers can still read every piece in the archive.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/magazine-issue-11.webp" alt="<?php echo esc_attr__( 'Cover of Tideline Quarterly, Issue 11', 'osmium' ); ?>" style="border-radius:4px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Issue 11, Spring 2026', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'The weather issue, with a story told entirely in marine forecasts and six poems written during one flood.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/magazine-issue-10.webp" alt="<?php echo esc_attr__( 'Cover of Tideline Quarterly, Issue 10', 'osmium' ); ?>" style="border-radius:4px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Issue 10, Winter 2026', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'The letters issue: fiction written as letters, and an essay on the last post office on the coast.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"submit","align":"full","className":"is-style-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div id="submit" class="wp-block-group alignfull is-style-dark" style="border-radius:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"45%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Submissions open in October', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'The window for Issue 14 runs from October 1 to 31, 2026. We read everything that arrives in those 31 days, and nothing that arrives outside them.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checklist"} -->
<ul class="wp-block-list is-style-checklist"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Fiction up to 5,000 words', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Up to five poems', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Essays up to 4,000 words', 'osmium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:editors@tideline.example?subject=Submission"><?php echo esc_html__( 'Send your work', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'What we look for', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Work that knows what it\'s about by the last line. We want stories with weather in them, poems only one person could have written, and essays that argue with a book instead of summarizing it. We\'re tired of endings that turn out to be dreams, and of final stanzas that explain the poem.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'How to send', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Email', 'osmium' ); ?> <a href="mailto:editors@tideline.example"><?php echo esc_html__( 'editors@tideline.example', 'osmium' ); ?></a> <?php echo esc_html__( 'with one file attached and the kind in the subject line: fiction, poetry, or essay. Put your name on the file and two lines about yourself in the email. Sending the same piece elsewhere is fine; tell us the day someone says yes.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'When you\'ll hear back', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Hanna Lind reads the fiction, Idris Bello reads the poems, and June Park reads the essays and every second round. You\'ll have an answer within eight weeks of the window closing, and every no is written by one of us.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"masthead","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div id="masthead" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Masthead', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Four people read everything. There are no interns and no first readers, which is why the window is only a month long.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"12rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portrait-rose.webp" alt="" style="border-radius:16px;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'June Park', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Editor. Reads every essay and every second round.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portrait-sage.webp" alt="" style="border-radius:16px;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Hanna Lind', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Fiction editor. Reads every story to the last page.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portrait-mist.webp" alt="" style="border-radius:16px;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Idris Bello', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Poetry editor. Reads every poem aloud at least once.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portrait-clay.webp" alt="" style="border-radius:16px;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Oskar Fenn', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Design. Sets every page and makes the covers.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"subscribe","align":"full","className":"is-style-tinted","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div id="subscribe" class="wp-block-group alignfull is-style-tinted" style="border-radius:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Two ways to read Tideline', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html__( 'Subscriptions pay the contributors. Every piece is paid for on acceptance, and a poem earns the same fee as a story.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"18rem"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Digital', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1"}},"fontSize":"xx-large","fontFamily":"hedvig-letters-serif"} -->
<p class="has-hedvig-letters-serif-font-family has-xx-large-font-size" style="line-height:1.1">$24</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'a year', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"is-style-checklist"} -->
<ul class="wp-block-list is-style-checklist"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Four issues a year, on the day each one comes out', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Every piece in the archive, back to Issue 1', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Reads well on a phone, a tablet, or a laptop', 'osmium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:editors@tideline.example?subject=Digital%20subscription"><?php echo esc_html__( 'Subscribe to digital', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Print and digital', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1"}},"fontSize":"xx-large","fontFamily":"hedvig-letters-serif"} -->
<p class="has-hedvig-letters-serif-font-family has-xx-large-font-size" style="line-height:1.1">$48</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'a year', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"is-style-checklist"} -->
<ul class="wp-block-list is-style-checklist"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Everything in Digital', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'A printed copy of each issue, mailed the week it comes out', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Four issues on your shelf by this time next year', 'osmium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:editors@tideline.example?subject=Print%20and%20digital%20subscription"><?php echo esc_html__( 'Subscribe to print and digital', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
