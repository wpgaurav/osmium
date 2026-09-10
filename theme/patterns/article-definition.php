<?php
/**
 * Title: Definition
 * Slug: osmium/article-definition
 * Categories: osmium-article
 * Keywords: definition, glossary, term, explainer, example
 * Description: An outlined box that defines a term in one paragraph and then shows it working in a short example.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"className":"is-style-outlined","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-outlined"><!-- wp:heading {"level":2,"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'What expected value means', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Expected value is the average result of a choice if you could make it many times over: each possible outcome multiplied by its chance, then added together.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'Example:', 'osmium' ); ?></strong> <?php echo esc_html__( 'A $5 raffle ticket with a 1 in 100 chance at $300 has an expected payout of $3. On average, each ticket loses $2.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
