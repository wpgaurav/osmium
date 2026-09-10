<?php
/**
 * Title: Code sample
 * Slug: osmium/article-code
 * Categories: osmium-article
 * Keywords: code, snippet, command, wp-cli, terminal
 * Description: A few terminal commands with one line of setup before them and a short note on what they do after.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'If you manage the site from a terminal, these three commands take a fresh install to the setup this guide uses.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code><?php echo esc_html( "wp theme install osmium --activate\nwp rewrite structure /%postname%/ --hard\nwp option update posts_per_page 12" ); ?></code></pre>
<!-- /wp:code -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Run them from the site root. The last line sets 12 posts per page, which fills a three-column grid with no gap at the end.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->
