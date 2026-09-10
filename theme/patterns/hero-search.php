<?php
/**
 * Title: Opener with search
 * Slug: osmium/hero-search
 * Categories: osmium-hero, banner
 * Keywords: hero, search, opener, topics, categories, archive
 * Description: A centered headline, one line of support, a search field, and the most used categories below it. For an archive large enough that readers arrive looking for something specific.
 * Viewport Width: 1000
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center"}},"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-xxx-large-font-size"><?php echo esc_html__( 'Search eleven years of reviews', 'osmium' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-large-font-size"><?php echo esc_html__( 'More than 600 reviews and buying guides. Search by product, by brand, or by the problem you are trying to solve.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_attr__( 'Search the archive', 'osmium' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Try standing desk or USB microphone', 'osmium' ); ?>","buttonText":"<?php echo esc_attr__( 'Search', 'osmium' ); ?>","buttonPosition":"button-inside"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"textColor":"contrast-2","fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group has-contrast-2-color has-text-color has-small-font-size"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'Popular topics:', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:terms-query {"termQuery":{"perPage":5,"taxonomy":"category","order":"desc","orderBy":"count","include":[],"hideEmpty":true,"showNested":false,"inherit":false}} -->
<div class="wp-block-terms-query"><!-- wp:term-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<!-- wp:term-name {"isLink":true,"style":{"typography":{"fontWeight":"500"}}} /-->
<!-- /wp:term-template --></div>
<!-- /wp:terms-query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
