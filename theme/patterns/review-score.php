<?php
/**
 * Title: Review score
 * Slug: osmium/review-score
 * Categories: osmium-review
 * Keywords: score, rating, review, sub-scores, verdict
 * Description: The score box for a single-product review. One overall number, one sentence on what it means, and the sub-scores it was built from.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card"><!-- wp:heading {"level":2,"fontSize":"small","textColor":"contrast-2","style":{"typography":{"fontFamily":"var:preset|font-family|valley-sans","fontWeight":"600","letterSpacing":"0"}}} -->
<h2 class="wp-block-heading has-contrast-2-color has-text-color has-small-font-size" style="font-family:var(--wp--preset--font-family--valley-sans);font-weight:600;letter-spacing:0"><?php echo esc_html__( 'Our score', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"xx-large","style":{"typography":{"fontFamily":"var:preset|font-family|hedvig-letters-serif","lineHeight":"1.1"}}} -->
<p class="has-xx-large-font-size" style="font-family:var(--wp--preset--font-family--hedvig-letters-serif);line-height:1.1"><?php echo esc_html__( '8.6 out of 10', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'The best keyboard I have tested for long sessions in a shared room, held back by the missing numpad.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:table {"hasFixedLayout":false} -->
<figure class="wp-block-table"><table><thead><tr><th scope="col"><?php echo esc_html__( 'Category', 'osmium' ); ?></th><th scope="col"><?php echo esc_html__( 'Score', 'osmium' ); ?></th></tr></thead><tbody><tr><th scope="row"><?php echo esc_html__( 'Build', 'osmium' ); ?></th><td><?php echo esc_html__( '9.0', 'osmium' ); ?></td></tr><tr><th scope="row"><?php echo esc_html__( 'Typing feel', 'osmium' ); ?></th><td><?php echo esc_html__( '8.8', 'osmium' ); ?></td></tr><tr><th scope="row"><?php echo esc_html__( 'Battery', 'osmium' ); ?></th><td><?php echo esc_html__( '8.4', 'osmium' ); ?></td></tr><tr><th scope="row"><?php echo esc_html__( 'Value', 'osmium' ); ?></th><td><?php echo esc_html__( '8.2', 'osmium' ); ?></td></tr></tbody></table><figcaption class="wp-element-caption"><?php echo esc_html__( 'Each sub-score is out of 10. The overall score is their plain average, with no hidden weighting.', 'osmium' ); ?></figcaption></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->
