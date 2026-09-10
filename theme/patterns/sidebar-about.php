<?php
/**
 * Title: Sidebar about card
 * Slug: osmium/sidebar-about
 * Categories: osmium-sidebar
 * Keywords: sidebar, about, author, bio, widget
 * Description: A small photo, a line about who runs the site, and a link to the full about page.
 * Viewport Width: 400
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"5rem","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portrait-mist.webp" alt="" style="border-radius:12px;aspect-ratio:1;object-fit:cover;width:5rem;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":2,"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'About this site', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'One person, one desk, and a rule that nothing gets reviewed before a month of daily use.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#"><?php echo esc_html__( 'Read how the site works', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
