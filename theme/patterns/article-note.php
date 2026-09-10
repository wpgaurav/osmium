<?php
/**
 * Title: Note
 * Slug: osmium/article-note
 * Categories: osmium-article
 * Keywords: note, callout, aside, info, tip
 * Description: A highlighted aside for a detail the reader should not miss but that does not need its own section.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"className":"is-style-accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-accent"><!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'Note:', 'osmium' ); ?></strong> <?php echo esc_html__( 'Every battery figure on this page was measured with the backlight off. With it on, expect roughly half.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
