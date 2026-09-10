<?php
/**
 * Title: Roundup post
 * Slug: osmium/post-roundup
 * Categories: osmium-starter
 * Post Types: post
 * Block Types: core/post-content
 * Keywords: roundup, best, list, picks, buying guide, starter
 * Description: A starting structure for a best-of roundup: the answer up front, a comparison table, one section per pick with a button, and the questions buyers ask. Replace each placeholder paragraph as you write.
 * Viewport Width: 1200
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Open with the answer: the pick most readers should buy and the one reason why. Then say how many products you tested, for how long, and how you tested them.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"osmium/review-comparison"} /-->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( '1. Best overall: Product name', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Say why this one wins for most people, then the one thing that would make a reader choose something else.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Check the current price', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( '2. Best on a budget: Product name', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Say what it gives up to cost less, and why that trade is fine for most readers.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Check the current price', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( '3. Best for a specific need: Product name', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Put the need in the heading, then explain what this pick does that the other two cannot.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Check the current price', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"osmium/faq"} /-->
