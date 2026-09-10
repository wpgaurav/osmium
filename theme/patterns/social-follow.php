<?php
/**
 * Title: Follow along
 * Slug: osmium/social-follow
 * Categories: osmium-content
 * Keywords: social, follow, links, profiles, feed
 * Description: A centered heading, one line on what people will get, and links to four social profiles.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Follow along', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color"><?php echo esc_html__( 'New reviews go out here the morning they publish. Nothing automated, nothing reposted.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"showLabels":false,"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links"><!-- wp:social-link {"url":"#","service":"bluesky"} /-->

<!-- wp:social-link {"url":"#","service":"mastodon"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"feed"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->
