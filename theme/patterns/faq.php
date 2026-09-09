<?php
/**
 * Title: FAQ
 * Slug: osmium/faq
 * Categories: osmium-content
 * Keywords: faq, questions, answers, accordion, support
 * Description: Questions and answers on the core Accordion block. Keyboard and screen reader behaviour comes from core, so there is nothing to wire up.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Questions people ask', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:accordion {"iconPosition":"right"} -->
<div role="group" class="wp-block-accordion"><!-- wp:accordion-item -->
<div class="wp-block-accordion-item"><!-- wp:accordion-heading {"fontSize":"large"} -->
<h3 class="wp-block-accordion-heading has-icon has-icon-right has-large-font-size"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php echo esc_html__( 'How do you decide what to review?', 'osmium' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel -->
<div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'Something has to be in daily use for at least a month before it gets written up. If it leaves the desk before then, that becomes the review.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item -->

<!-- wp:accordion-item -->
<div class="wp-block-accordion-item"><!-- wp:accordion-heading {"fontSize":"large"} -->
<h3 class="wp-block-accordion-heading has-icon has-icon-right has-large-font-size"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php echo esc_html__( 'Do you get paid for recommendations?', 'osmium' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel -->
<div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'Some links earn a commission. None of them change a verdict, and the section on what does not work is never shortened for a sponsor.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item -->

<!-- wp:accordion-item -->
<div class="wp-block-accordion-item"><!-- wp:accordion-heading {"fontSize":"large"} -->
<h3 class="wp-block-accordion-heading has-icon has-icon-right has-large-font-size"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php echo esc_html__( 'Can I suggest something to test?', 'osmium' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel -->
<div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'Yes. Reader suggestions decide roughly half of what gets covered here.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item --></div>
<!-- /wp:accordion --></div>
<!-- /wp:group -->
