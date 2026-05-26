<?php
/**
 * Title: footer
 * Slug: bondigi/footer
 * Inserter: no
 */
?>
<!-- wp:group {"className":"footer-glow ancient-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"}},"color":{"background":"#090604"},"border":{"top":{"color":"rgba(212,148,58,0.3)","width":"1px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group footer-glow ancient-footer has-background" style="background-color:#090604;border-top:1px solid rgba(212,148,58,0.3);padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}}} -->
<div class="wp-block-column" style="padding-right:0;padding-left:0;flex-basis:40%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontFamily":"Cinzel, serif"},"elements":{"link":{"color":{"text":"#F5E6C8"}}}},"textColor":"white","fontSize":"large"} /-->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"14px","lineHeight":"1.8"},"color":{"text":"#C4A882"}}} -->
<p class="has-text-align-left" style="color:#C4A882;font-size:14px;line-height:1.8;"><?php esc_html_e('Discover the rich legacy of Bahrain. From ancient Dilmun traders to the legendary pearl divers of the Arabian Gulf, embark on a journey through four millennia of heritage.', 'bondigi');?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColorValue":"#D4943A","iconBackgroundColorValue":"transparent","className":"is-style-default"} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontFamily":"Cinzel, serif"}},"textColor":"#D4943A"} -->
<h2 class="wp-block-heading" style="color:#D4943A;font-family:'Cinzel',serif;"><?php esc_html_e('Explore', 'bondigi');?></h2>
<!-- /wp:heading -->

<!-- wp:list {"style":{"elements":{"link":{"color":{"text":"#C4A882"}}}},"textColor":"#C4A882"} -->
<ul class="wp-block-list" style="color:#C4A882;"><!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sQal\'at al-Bahrain%2$s', 'bondigi' ), '<a href="' . esc_url( '#heritage' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sThe Pearling Path%2$s', 'bondigi' ), '<a href="' . esc_url( '#pearl' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sDilmun Burial Mounds%2$s', 'bondigi' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sBahrain National Museum%2$s', 'bondigi' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontFamily":"Cinzel, serif"}},"textColor":"#D4943A"} -->
<h2 class="wp-block-heading" style="color:#D4943A;font-family:'Cinzel',serif;"><?php esc_html_e('Connect', 'bondigi');?></h2>
<!-- /wp:heading -->

<!-- wp:list {"style":{"elements":{"link":{"color":{"text":"#C4A882"}}}},"textColor":"#C4A882"} -->
<ul class="wp-block-list" style="color:#C4A882;"><!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sPlan Your Visit%2$s', 'bondigi' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sHeritage Tours%2$s', 'bondigi' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sContact Authority%2$s', 'bondigi' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}}} -->
<div class="wp-block-column" style="padding-right:0;padding-left:0;flex-basis:20%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontFamily":"Cinzel, serif"}},"textColor":"#D4943A"} -->
<h2 class="wp-block-heading" style="color:#D4943A;font-family:'Cinzel',serif;"><?php esc_html_e('Gallery', 'bondigi');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">

<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px","color":"rgba(212,148,58,0.3)","width":"1px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bahrain-fort-heritage.png" alt="Bahrain Fort" style="border-radius:8px;border-width:1px;border-color:rgba(212,148,58,0.3);aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px","color":"rgba(212,148,58,0.3)","width":"1px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bahrain-pearl-monument.png" alt="Pearl Monument" style="border-radius:8px;border-width:1px;border-color:rgba(212,148,58,0.3);aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","className":"copy","style":{"typography":{"textDecoration":"none","fontSize":"12px","letterSpacing":"2px"},"color":{"text":"rgba(196,168,130,0.6)"}}} -->
<p class="has-text-align-center copy" style="color:rgba(196,168,130,0.6);font-size:12px;letter-spacing:2px;text-decoration:none;text-transform:uppercase;"><?php /* Translators: 1. is the start of a 'mark' HTML element, 2. is the end of a 'mark' HTML element */ 
echo sprintf( esc_html__( '© %1$s Heritage of Bahrain Project %2$s — All Rights Reserved.', 'bondigi' ), '<mark style="background-color:rgba(0, 0, 0, 0); color:#D4943A">', '</mark>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->