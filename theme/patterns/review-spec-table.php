<?php
/**
 * Title: Spec table
 * Slug: osmium/review-spec-table
 * Categories: osmium-review
 * Keywords: specs, specification, table, details, data
 * Description: The measured facts about one product, in a table a reader can scan in five seconds. Say how you measured in the caption.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:table {"hasFixedLayout":false} -->
<figure class="wp-block-table"><table><thead><tr><th scope="col"><?php echo esc_html__( 'Spec', 'osmium' ); ?></th><th scope="col"><?php echo esc_html__( 'Measured', 'osmium' ); ?></th><th scope="col"><?php echo esc_html__( 'Claimed', 'osmium' ); ?></th></tr></thead><tbody><tr><th scope="row"><?php echo esc_html__( 'Battery, daily use', 'osmium' ); ?></th><td><?php echo esc_html__( '11 days', 'osmium' ); ?></td><td><?php echo esc_html__( '14 days', 'osmium' ); ?></td></tr><tr><th scope="row"><?php echo esc_html__( 'Noise at 30 cm', 'osmium' ); ?></th><td><?php echo esc_html__( '38 dB', 'osmium' ); ?></td><td><?php echo esc_html__( 'Not stated', 'osmium' ); ?></td></tr><tr><th scope="row"><?php echo esc_html__( 'Weight', 'osmium' ); ?></th><td><?php echo esc_html__( '842 g', 'osmium' ); ?></td><td><?php echo esc_html__( '840 g', 'osmium' ); ?></td></tr><tr><th scope="row"><?php echo esc_html__( 'Warranty', 'osmium' ); ?></th><td><?php echo esc_html__( '2 years', 'osmium' ); ?></td><td><?php echo esc_html__( '2 years', 'osmium' ); ?></td></tr></tbody></table><figcaption class="wp-element-caption"><?php echo esc_html__( 'Measured over six weeks on one unit bought at retail. Noise was taken at 30 cm with the same phone in the same room.', 'osmium' ); ?></figcaption></figure>
<!-- /wp:table -->
