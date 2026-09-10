<?php
/**
 * Title: Sidebar signup
 * Slug: osmium/sidebar-newsletter
 * Categories: osmium-sidebar
 * Keywords: sidebar, newsletter, subscribe, email, widget
 * Description: A tinted signup box for the sidebar with one line on what readers get and a button.
 * Viewport Width: 400
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"className":"is-style-accent","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-accent"><!-- wp:heading {"level":2,"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Get the Sunday email', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'One email a week with every new review and one thing I stopped using.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Subscribe', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
