<?php
/**
 * Title: Tabbed details
 * Slug: osmium/tabs-details
 * Categories: osmium-content, osmium-review
 * Keywords: tabs, details, specs, pricing, overview, product
 * Description: Overview, specs, and pricing behind three tabs on the core Tabs block. Keyboard and screen reader behaviour comes from core, so the theme adds no script.
 * Viewport Width: 1000
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'The details', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:tabs -->
<div class="wp-block-tabs"><!-- wp:tab-list -->
<div role="tablist" class="wp-block-tab-list"><button type="button" role="tab"><?php echo esc_html__( 'Overview', 'osmium' ); ?></button><button type="button" role="tab"><?php echo esc_html__( 'Specs', 'osmium' ); ?></button><button type="button" role="tab"><?php echo esc_html__( 'Pricing', 'osmium' ); ?></button></div>
<!-- /wp:tab-list -->

<!-- wp:tab-panels -->
<div class="wp-block-tab-panels"><!-- wp:tab-panel {"label":"<?php echo esc_attr__( 'Overview', 'osmium' ); ?>"} -->
<section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'A low-profile wireless keyboard built for long drafting sessions. It pairs with three devices and switches between them with one key.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:tab-panel -->

<!-- wp:tab-panel {"label":"<?php echo esc_attr__( 'Specs', 'osmium' ); ?>"} -->
<section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:list {"className":"is-style-checklist"} -->
<ul class="wp-block-list is-style-checklist"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Eleven days of battery in daily use', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Bluetooth and a USB-C cable, both included', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( '842 grams, measured on a kitchen scale', 'osmium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></section>
<!-- /wp:tab-panel -->

<!-- wp:tab-panel {"label":"<?php echo esc_attr__( 'Pricing', 'osmium' ); ?>"} -->
<section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'Around 99 dollars at full price. It drops by about a fifth twice a year, so there is rarely a reason to pay the full amount.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:tab-panel --></div>
<!-- /wp:tab-panels --></div>
<!-- /wp:tabs --></div>
<!-- /wp:group -->
