<?php
/**
 * Title: Essay post
 * Slug: osmium/post-essay
 * Categories: osmium-starter
 * Post Types: post
 * Block Types: core/post-content
 * Keywords: essay, opinion, long form, column, argument, starter
 * Description: A starting structure for a long-form essay: a strong opening, the setup, a turn, one quotation, and a close that does not summarize. Replace each placeholder as you write.
 * Viewport Width: 1000
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html__( 'Open with the moment or the claim that started this essay. One or two sentences that make the reader want the third.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Use the next few paragraphs to set up the argument. Say what most people believe about the subject, and where you first noticed it did not hold.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Give one concrete example before any abstraction. A date, a place, or a number does more work here than a general point.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Keep paragraphs short enough to read on a phone. One idea each is a good rule for an essay of any length.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'The part that complicates it', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Bring in the strongest case against your own view and take it seriously. An essay earns trust when it argues with itself.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'Quote someone who said it better, or who said the opposite. Keep it short enough to read in one breath.', 'osmium' ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html__( 'Name, and where they said it', 'osmium' ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Explain why the quotation matters to your argument instead of letting it stand alone.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Where that leaves us', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Draw the threads together. Say what changed in your thinking, and what the reader might do differently.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Close on a single sentence that sends the reader back into their day with something to think about, and skip the summary.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->
