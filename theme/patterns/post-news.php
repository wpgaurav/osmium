<?php
/**
 * Title: News post
 * Slug: osmium/post-news
 * Categories: osmium-starter
 * Post Types: post
 * Block Types: core/post-content
 * Keywords: news, update, announcement, report, sources, starter
 * Description: A starting structure for a news post: the story in the lead, what happened, why it matters, what to do now, and the sources behind it. Replace each placeholder as you write.
 * Viewport Width: 1000
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html__( 'Write the news in one or two sentences: who did what, when, and what it means for the reader. Someone who reads only this paragraph should have the story.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'What happened', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Give the facts in order, with dates, names, and numbers. Attribute anything you did not see yourself.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Why it matters', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Explain who this affects and by how much. Compare it to what came before so the reader can judge the size of the change.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'What to do now', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Tell the reader what, if anything, to do: a setting to change, a deadline to note, or a reason to wait.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"small","style":{"typography":{"fontFamily":"var:preset|font-family|valley-sans","fontWeight":"600","letterSpacing":"0"}}} -->
<h2 class="wp-block-heading has-small-font-size" style="font-family:var(--wp--preset--font-family--valley-sans);font-weight:600;letter-spacing:0"><?php echo esc_html__( 'Sources', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"textColor":"contrast-2","fontSize":"small"} -->
<ul class="wp-block-list has-contrast-2-color has-text-color has-small-font-size"><!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'The original announcement or filing', 'osmium' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Independent confirmation from a second outlet', 'osmium' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Earlier coverage of the story on this site', 'osmium' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
