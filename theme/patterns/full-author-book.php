<?php
/**
 * Title: Author site: book page
 * Slug: osmium/full-author-book
 * Categories: osmium-full
 * Post Types: page
 * Block Types: core/post-content
 * Keywords: book, novel, author, launch, excerpt, reading group
 * Description: A page for one book: the pitch and cover, the details in a table, the opening page, praise, notes for reading groups, and the author's other books.
 * Viewport Width: 1400
 *
 * @package Osmium
 * @since 0.4.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"34%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:34%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-salt-orchard.webp" alt="<?php echo esc_attr__( 'Cover of The Salt Orchard by Maren Holt', 'osmium' ); ?>" style="border-radius:4px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1,"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-xxx-large-font-size"><?php echo esc_html__( 'The Salt Orchard', 'osmium' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-contrast-2-color has-text-color has-large-font-size"><?php echo esc_html__( 'Three sisters, forty acres of apple trees, and the night the sea came in through the gate.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:table {"hasFixedLayout":false} -->
<figure class="wp-block-table"><table><tbody><tr><th scope="row"><?php echo esc_html__( 'Published', 'osmium' ); ?></th><td><?php echo esc_html__( 'May 12, 2026', 'osmium' ); ?></td></tr><tr><th scope="row"><?php echo esc_html__( 'Publisher', 'osmium' ); ?></th><td><?php echo esc_html__( 'Northfold Press', 'osmium' ); ?></td></tr><tr><th scope="row"><?php echo esc_html__( 'Length', 'osmium' ); ?></th><td><?php echo esc_html__( '336 pages', 'osmium' ); ?></td></tr><tr><th scope="row"><?php echo esc_html__( 'Hardcover', 'osmium' ); ?></th><td>$28</td></tr><tr><th scope="row"><?php echo esc_html__( 'Ebook', 'osmium' ); ?></th><td>$14</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Order from Lantern & Leaf', 'osmium' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text"} -->
<div class="wp-block-button is-style-text"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Read the review', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'About the book', 'osmium' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'When their mother dies in the fall, the Aske sisters inherit forty acres of apple trees on the edge of a tidal marsh, and a sea wall the county has already decided not to mend.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Ruth, the middle sister, never left, and she knows every tree by its lean. Nell, the eldest, surveys land for a living three hundred miles inland and makes a point of not coming home. Kit, the youngest, wants to sell to the conservation trust before the water does the arithmetic for them. Then the wall gives way in a February storm, and the orchard starts to drown from the roots up.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Across one year, from pruning to harvest, the sisters argue over whether to fight the sea, sell, or graft the salt-hardy trees their grandfather planted, a variety nobody else remembers the name of. It is a novel about inheritance in both senses: the land itself, and a family habit of choosing silence over a straight answer.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"opening","align":"full","className":"is-style-tinted","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div id="opening" class="wp-block-group alignfull is-style-tinted" style="border-radius:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Read the opening', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'The first page of chapter one. Ruth, the middle sister, is telling it.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html__( 'The sea came into the orchard on the ninth of February, a little after two in the morning, and it came the way our mother always said it would: not over the wall, but through the gate.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'I heard it before I understood it. A sound like someone running a bath in the next room, patient and unhurried. By the time I had my boots on and the big flashlight down from its hook by the door, the water was past the first row of Pippins and moving between the trunks as if it had been invited.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Nell would say I should have called her then. Kit would say I should have called the county. I didn\'t call anyone. I stood at the top of the yard in my coat and nightgown and watched the beam go out across a field that had been a field for a hundred and forty years, and was now, very calmly, becoming something else.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Our grandfather planted the first trees the spring he came home from the war, on ground his own father had won from the marsh with a spade and forty years of stubbornness. He used to say that salt remembers. He meant the ground: let the sea in once and it will always know the way back. We thought he was talking about apples. He was talking about us.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'At first light I walked the wall. The breach was down by the old sluice, no wider than a farm gate, and its edges were soft as cake. Someone had tied a length of blue baling twine to the fence post beside it, years ago, and it was still there, knotted twice, pointing out to sea like a finger.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'I took a photograph of it for Nell, because she would want the measurements. Then I put the phone back in my pocket and didn\'t send it.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"is-style-accent","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-accent" style="margin-top:0;border-radius:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'What other writers said', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:quote {"style":{"border":{"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"left":"0"}}}} -->
<blockquote class="wp-block-quote" style="border-left-style:none;border-left-width:0px;padding-left:0"><!-- wp:paragraph {"fontSize":"x-large","style":{"typography":{"lineHeight":"1.35"}}} -->
<p class="has-x-large-font-size" style="line-height:1.35"><?php echo esc_html__( 'The breach in the sea wall is no wider than a farm gate, and Holt makes it feel like the end of the world. I still think about that blue twine.', 'osmium' ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html__( 'Samuel Okoro, author of The Borrowed Hour', 'osmium' ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:quote {"style":{"border":{"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"left":"0"}}}} -->
<blockquote class="wp-block-quote" style="border-left-style:none;border-left-width:0px;padding-left:0"><!-- wp:paragraph {"fontSize":"x-large","style":{"typography":{"lineHeight":"1.35"}}} -->
<p class="has-x-large-font-size" style="line-height:1.35"><?php echo esc_html__( 'Funny where families are funny, which is usually at the kitchen table, and devastating everywhere else.', 'osmium' ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html__( 'Lena Varga, author of An Orbit of Small Things', 'osmium' ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"reading-groups","align":"full","className":"is-style-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div id="reading-groups" class="wp-block-group alignfull is-style-dark" style="margin-top:0;border-radius:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'For reading groups', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'Five questions to start the conversation. They give away the middle of the book, but not the ending.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered":true} -->
<ol class="wp-block-list"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Ruth stays, Nell leaves, and Kit wants to sell. Whose choice did you understand best at the start, and had that changed by the harvest?', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Their grandfather says that salt remembers. What else in the novel remembers, and what does the family work hardest to forget?', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Ruth photographs the breach for Nell and doesn\'t send it. Where else do the sisters keep things from each other, and what does it cost them?', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'The conservation trust wants to let the sea back in. Is selling to them a surrender, a gift, or something harder to name?', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'The book asks what a family owes the land. By the last page, what do you think the land has kept?', 'osmium' ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Reading it with a group? I\'m answering questions online on November 12, 2026, at 8 pm.', 'osmium' ); ?> <a href="#"><?php echo esc_html__( 'See the event', 'osmium' ); ?></a><?php echo esc_html__( ', or write to me at', 'osmium' ); ?> <a href="mailto:hello@marenholt.example?subject=Reading%20group"><?php echo esc_html__( 'hello@marenholt.example', 'osmium' ); ?></a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Also by Maren Holt', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-contrast-2-color has-text-color has-large-font-size"><?php echo esc_html__( 'A book of stories and a first novel, both in paperback and ebook.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'See all three books', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-nine-lamps.webp" alt="<?php echo esc_attr__( 'Cover of Nine Lamps on Quarry Lane by Maren Holt', 'osmium' ); ?>" style="border-radius:4px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Nine Lamps on Quarry Lane', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'A novel, 2023', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'A lamplighter\'s apprentice records one street for a year and learns which windows stay dark on purpose.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Available in paperback, $18, and as an ebook, $11.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-low-tide-letters.webp" alt="<?php echo esc_attr__( 'Cover of Low Tide Letters by Maren Holt', 'osmium' ); ?>" style="border-radius:4px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Low Tide Letters', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Stories, 2020', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Eleven stories from one seaside town, told in letters, lists, and lost-and-found notes.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Available in paperback, $16, and as an ebook, $9.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
