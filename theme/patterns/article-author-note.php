<?php
/**
 * Title: Note from the author
 * Slug: osmium/article-author-note
 * Categories: osmium-article
 * Keywords: author, note, editor, signature, personal
 * Description: A short personal note with a small photo and a signature. Good for explaining a change of mind or how a piece came together.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"className":"is-style-tinted","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group is-style-tinted"><!-- wp:image {"width":"4rem","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portrait-mist.webp" alt="" style="border-radius:9999px;aspect-ratio:1;object-fit:cover;width:4rem;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|hedvig-letters-serif"}}} -->
<p style="font-family:var(--wp--preset--font-family--hedvig-letters-serif)"><?php echo esc_html__( 'I rewrote this review twice. The first draft liked the keyboard more than I did by the sixth week, so the score came down half a point.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Maya Reyes, editor', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
