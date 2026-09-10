<?php
/**
 * Title: Newsletter signup in an article
 * Slug: osmium/article-inline-newsletter
 * Categories: osmium-article
 * Keywords: newsletter, subscribe, email, signup, call to action
 * Description: A newsletter prompt that sits between paragraphs of an article without taking over the page. Point the button at your signup form.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card"><!-- wp:heading {"level":2,"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Get the next review by email', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'One email on Sunday with what I tested that week and what I sent back.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Subscribe', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'No tracking pixels. Every email has a one-click unsubscribe.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
