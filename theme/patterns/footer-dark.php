<?php
/**
 * Title: Footer, dark
 * Slug: osmium/footer-dark
 * Categories: footer, osmium-footers
 * Block Types: core/template-part/footer
 * Description: A dark band to close the page, with the site name, two link columns, and a credit line. Follows whichever palette is active, so it stays dark rather than turning white.
 * Viewport Width: 1400
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:group {"align":"full","className":"is-style-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-dark" style="border-radius:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"48%"} -->
<div class="wp-block-column" style="flex-basis:48%"><!-- wp:site-title {"level":0,"fontSize":"x-large"} /-->

<!-- wp:site-tagline {"fontSize":"small"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":2,"fontSize":"small","style":{"typography":{"fontFamily":"var:preset|font-family|valley-sans","fontWeight":"600","letterSpacing":"0"}}} -->
<h2 class="wp-block-heading has-small-font-size" style="font-family:var(--wp--preset--font-family--valley-sans);font-weight:600;letter-spacing:0"><?php echo esc_html__( 'Read', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"ariaLabel":"Read","overlayMenu":"never","fontSize":"small","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":2,"fontSize":"small","style":{"typography":{"fontFamily":"var:preset|font-family|valley-sans","fontWeight":"600","letterSpacing":"0"}}} -->
<h2 class="wp-block-heading has-small-font-size" style="font-family:var(--wp--preset--font-family--valley-sans);font-weight:600;letter-spacing:0"><?php echo esc_html__( 'Topics', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:categories {"showEmpty":false,"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Built on WordPress with the Osmium block theme.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
