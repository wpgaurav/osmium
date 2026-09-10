<?php
/**
 * Title: Review post
 * Slug: osmium/post-review
 * Categories: osmium-starter
 * Post Types: post
 * Block Types: core/post-content
 * Keywords: review, product, verdict, starter, structure
 * Description: A starting structure for a product review: the verdict first, then what it is, what works, what does not, who should buy it, the specs, and a link out. Replace each placeholder paragraph as you write.
 * Viewport Width: 1000
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:pattern {"slug":"osmium/review-verdict"} /-->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'What it is', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Say what the product is, who makes it, what it costs, and how long you used it before writing this. Two or three sentences is enough.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'What works', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Name the two or three things that made you keep using it, and put a number or a moment on each: days of battery, a deadline it saved, a task it made faster.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'What does not', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Be as specific here as in the section above. Say what broke or annoyed you, and whether an update or a setting fixed it.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Who should buy it', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Describe the reader this suits in one sentence. Then name the reader who should skip it, and what they should buy instead.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"osmium/review-spec-table"} /-->

<!-- wp:pattern {"slug":"osmium/review-product-cta"} /-->
