<?php
/**
 * Title: Plan comparison
 * Slug: osmium/review-pricing-plans
 * Categories: osmium-review
 * Keywords: pricing, plans, tiers, comparison, table
 * Description: Free, Pro, and Team plans side by side across the features that decide which one to buy. Put the prices and the date you checked them in the caption.
 * Viewport Width: 1000
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'How the plans compare', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:table {"hasFixedLayout":false} -->
<figure class="wp-block-table"><table><thead><tr><th scope="col"><?php echo esc_html__( 'Feature', 'osmium' ); ?></th><th scope="col"><?php echo esc_html__( 'Free', 'osmium' ); ?></th><th scope="col"><?php echo esc_html__( 'Pro', 'osmium' ); ?></th><th scope="col"><?php echo esc_html__( 'Team', 'osmium' ); ?></th></tr></thead><tbody><tr><th scope="row"><?php echo esc_html__( 'Seats', 'osmium' ); ?></th><td><?php echo esc_html__( '1 seat', 'osmium' ); ?></td><td><?php echo esc_html__( '1 seat', 'osmium' ); ?></td><td><?php echo esc_html__( '5 seats', 'osmium' ); ?></td></tr><tr><th scope="row"><?php echo esc_html__( 'Custom domain', 'osmium' ); ?></th><td><?php echo esc_html__( 'No', 'osmium' ); ?></td><td><?php echo esc_html__( 'Yes', 'osmium' ); ?></td><td><?php echo esc_html__( 'Yes', 'osmium' ); ?></td></tr><tr><th scope="row"><?php echo esc_html__( 'Paid subscriptions', 'osmium' ); ?></th><td><?php echo esc_html__( 'No', 'osmium' ); ?></td><td><?php echo esc_html__( 'Yes', 'osmium' ); ?></td><td><?php echo esc_html__( 'Yes', 'osmium' ); ?></td></tr><tr><th scope="row"><?php echo esc_html__( 'Subscriber export', 'osmium' ); ?></th><td><?php echo esc_html__( 'Yes', 'osmium' ); ?></td><td><?php echo esc_html__( 'Yes', 'osmium' ); ?></td><td><?php echo esc_html__( 'Yes', 'osmium' ); ?></td></tr><tr><th scope="row"><?php echo esc_html__( 'Shared drafts', 'osmium' ); ?></th><td><?php echo esc_html__( 'No', 'osmium' ); ?></td><td><?php echo esc_html__( 'No', 'osmium' ); ?></td><td><?php echo esc_html__( 'Yes', 'osmium' ); ?></td></tr></tbody></table><figcaption class="wp-element-caption"><?php echo esc_html__( 'Pro is $12 a month and Team is $40 a month, both billed yearly. Checked against the pricing page on the day this was published.', 'osmium' ); ?></figcaption></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->
