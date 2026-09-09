<?php
/**
 * Title: Newsletter landing page
 * Slug: osmium/page-newsletter
 * Categories: osmium-pages
 * Post Types: page
 * Keywords: newsletter, subscribe, email, signup, landing
 * Description: A page with one job. Replace the button in the hero with your form plugin's block to collect addresses without leaving the page.
 * Viewport Width: 1400
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:pattern {"slug":"osmium/hero-newsletter"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'What lands in your inbox', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"textColor":"contrast-2","fontSize":"large"} -->
<ul class="wp-block-list has-contrast-2-color has-text-color has-large-font-size"><!-- wp:list-item -->
<li><?php echo esc_html__( 'One thing I bought or tried, and whether it stayed', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'A short note on something that broke and how it got fixed', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Links worth your time, with a sentence on why', 'osmium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"osmium/testimonials"} /-->

<!-- wp:pattern {"slug":"osmium/faq"} /-->
