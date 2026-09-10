<?php
/**
 * Title: Comparison post
 * Slug: osmium/post-comparison
 * Categories: osmium-starter
 * Post Types: post
 * Block Types: core/post-content
 * Keywords: comparison, versus, vs, compare, alternatives, starter
 * Description: A starting structure for a head-to-head: the answer first, a comparison table, a section on each product, and a clear call on which to choose. Replace each placeholder as you write.
 * Viewport Width: 1200
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Answer the question in the first two sentences: which one you would pick, and for whom. Then say how long you used each one and how you tested them.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"osmium/review-comparison"} /-->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Product A', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Describe what it is like to use day to day, where it beats Product B, and where it falls behind. Use numbers from your testing where you have them.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Product B', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Follow the same order as the section above so readers can compare the two paragraph by paragraph.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Which one to choose', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Choose A if', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><?php echo esc_html__( 'You care most about the thing A does best', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'The higher price is not a problem', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'You already use tools from the same maker', 'osmium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Choose B if', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><?php echo esc_html__( 'You need the feature A does not have', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Price matters more to you than polish', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'You want fewer settings to learn', 'osmium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:pattern {"slug":"osmium/review-best-for"} /-->
