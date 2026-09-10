<?php
/**
 * Title: Affiliate disclosure page
 * Slug: osmium/page-disclosure
 * Categories: osmium-pages
 * Post Types: page
 * Block Types: core/post-content
 * Keywords: disclosure, affiliate, ethics, policy, transparency, ftc
 * Description: A plain statement of how the site makes money and what that money does not touch. Link it from every review and from the footer.
 * Viewport Width: 1000
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"level":1,"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-xxx-large-font-size"><?php echo esc_html__( 'Affiliate disclosure', 'osmium' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'How this site earns money', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'The site pays for itself in three ways:', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Affiliate commissions when you buy through a link in a review or guide', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'One sponsor per newsletter issue, always labeled as a sponsor', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Paid memberships from readers who want the archive', 'osmium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'When you buy through an affiliate link, you pay the same price. The retailer pays me a share of the sale, usually between 1 and 8 percent.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'What that does not change', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'A commission never changes a verdict. The section on what does not work is never shortened, and a product that pays more is never ranked above one that works better. Sponsors do not see reviews before they are published.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'How products are chosen', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Most of what I review is bought at retail with my own money. Nothing gets written up until it has been in daily use for at least a month. If a company sent the product for free, the review says so in its first paragraph.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Questions', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'If a link or a review looks off, write to me and I will explain how it was handled. Corrections are dated and noted at the end of the post they fix.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
