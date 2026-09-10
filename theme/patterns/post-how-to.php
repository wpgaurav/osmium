<?php
/**
 * Title: How-to post
 * Slug: osmium/post-how-to
 * Categories: osmium-starter
 * Post Types: post
 * Block Types: core/post-content
 * Keywords: how to, tutorial, guide, steps, instructions, starter
 * Description: A starting structure for a tutorial: what the reader ends up with, what they need, five numbered steps, and what to try when it fails. Replace each placeholder paragraph as you write.
 * Viewport Width: 1000
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Say what the reader will have working by the end, roughly how long it takes, and anything to do first, such as a backup.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'What you need', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><?php echo esc_html__( 'The software or account, with the version you tested', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Any access the steps assume, such as an admin login', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'About 20 minutes, start to finish', 'osmium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( '1. Name the step as an instruction', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Explain the step in two to four sentences. Name the exact menu, setting, or command, and add a screenshot when the screen is not obvious.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( '2. Keep each step to one action', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'If a step needs two verbs to describe it, split it into two steps. Readers follow along one step at a time and lose their place in long ones.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( '3. Say what the reader should see', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'End each step with the result: the message that appears, the page that loads, or the setting that changes. It tells the reader they did it right.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( '4. Flag the step people get wrong', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Every tutorial has one. Say what the common mistake looks like and how to undo it, before the reader makes it.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( '5. Check that it worked', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Give the reader one test that proves the whole thing works, such as a page to load or a message to send to themselves.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'If it does not work', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'List the two or three failures readers actually report, with the fix for each. If a step breaks on a specific version, name the version.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->
