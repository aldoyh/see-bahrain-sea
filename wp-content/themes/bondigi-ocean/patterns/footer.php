<?php
/**
 * Title: footer
 * Slug: bondigi-ocean/footer
 * Inserter: no
 */
?>
<!-- wp:group {"className":"footer-glow ocean-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"}},"color":{"background":"#07101F"},"border":{"top":{"color":"rgba(0,188,212,0.3)","width":"1px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group footer-glow ocean-footer has-background" style="background-color:#07101F;border-top:1px solid rgba(0,188,212,0.3);padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}}} -->
<div class="wp-block-column" style="padding-right:0;padding-left:0;flex-basis:40%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontFamily":"Cinzel, serif"},"elements":{"link":{"color":"#E0F7FA"}}},"textColor":"white","fontSize":"large"} /-->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"14px","lineHeight":"1.8"},"color":{"text":"#B0D4E8"}}} -->
<p class="has-text-align-left" style="color:#B0D4E8;font-size:14px;line-height:1.8;"><?php esc_html_e('Discover the boundless beauty of the ocean. Where ancient currents meet coral reefs, and the mysteries of the deep inspire wonder across every horizon.', 'bondigi-ocean');?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColorValue":"#00BCD4","iconBackgroundColorValue":"transparent","className":"is-style-default"} -->
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
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontFamily":"Cinzel, serif"}},"textColor":"#00BCD4"} -->
<h2 class="wp-block-heading" style="color:#00BCD4;font-family:'Cinzel',serif;"><?php esc_html_e('Explore', 'bondigi-ocean');?></h2>
<!-- /wp:heading -->

<!-- wp:list {"style":{"elements":{"link":{"color":"#B0D4E8"}}},"textColor":"#B0D4E8"} -->
<ul class="wp-block-list" style="color:#B0D4E8;"><!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sCoral Reefs%2$s', 'bondigi-ocean' ), '<a href="' . esc_url( '#reefs' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sDeep Trenches%2$s', 'bondigi-ocean' ), '<a href="' . esc_url( '#tides' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sMarine Life%2$s', 'bondigi-ocean' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sOcean Currents%2$s', 'bondigi-ocean' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontFamily":"Cinzel, serif"}},"textColor":"#00BCD4"} -->
<h2 class="wp-block-heading" style="color:#00BCD4;font-family:'Cinzel',serif;"><?php esc_html_e('Connect', 'bondigi-ocean');?></h2>
<!-- /wp:heading -->

<!-- wp:list {"style":{"elements":{"link":{"color":"#B0D4E8"}}},"textColor":"#B0D4E8"} -->
<ul class="wp-block-list" style="color:#B0D4E8;"><!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sOcean Expeditions%2$s', 'bondigi-ocean' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sMarine Conservation%2$s', 'bondigi-ocean' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sContact Us%2$s', 'bondigi-ocean' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}}} -->
<div class="wp-block-column" style="padding-right:0;padding-left:0;flex-basis:20%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontFamily":"Cinzel, serif"}},"textColor":"#00BCD4"} -->
<h2 class="wp-block-heading" style="color:#00BCD4;font-family:'Cinzel',serif;"><?php esc_html_e('Gallery', 'bondigi-ocean');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">

<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px","color":"rgba(0,188,212,0.3)","width":"1px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bahrain-fort-heritage.png" alt="Ocean Waves" style="border-radius:8px;border-width:1px;border-color:rgba(0,188,212,0.3);aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px","color":"rgba(0,188,212,0.3)","width":"1px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bahrain-pearl-monument.png" alt="Ocean Depths" style="border-radius:8px;border-width:1px;border-color:rgba(0,188,212,0.3);aspect-ratio:3/4;object-fit:cover"/></figure>
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
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","className":"copy","style":{"typography":{"textDecoration":"none","fontSize":"12px","letterSpacing":"2px"},"color":{"text":"rgba(176,212,232,0.6)"}}} -->
<p class="has-text-align-center copy" style="color:rgba(176,212,232,0.6);font-size:12px;letter-spacing:2px;text-decoration:none;text-transform:uppercase;"><?php /* Translators: 1. is the start of a 'mark' HTML element, 2. is the end of a 'mark' HTML element */ 
echo sprintf( esc_html__( '© %1$s Ocean Heritage Project %2$s — All Rights Reserved.', 'bondigi-ocean' ), '<mark style="background-color:rgba(0, 0, 0, 0); color:#00BCD4">', '</mark>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
