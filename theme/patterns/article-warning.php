<?php
/**
 * Title: Warning
 * Slug: osmium/article-warning
 * Categories: osmium-article
 * Keywords: warning, caution, callout, alert, important
 * Description: An outlined box with a heavier left rule for something the reader should do before going further.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"className":"is-style-outlined","style":{"border":{"left":{"color":"var:preset|color|contrast","style":"solid","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-outlined" style="border-left-color:var(--wp--preset--color--contrast);border-left-style:solid;border-left-width:2px"><!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'Before you start:', 'osmium' ); ?></strong> <?php echo esc_html__( 'Back up the site. Switching themes keeps your posts and pages, but widgets and menu placements from the old theme may not carry over.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
