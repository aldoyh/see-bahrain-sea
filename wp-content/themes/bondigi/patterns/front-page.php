<?php
/**
 * Title: front-page
 * Slug: bondigi/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull">

<!-- ═══════════ HERO SECTION — MANAMA SKYLINE ═══════════ -->
<!-- wp:group {"align":"full","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/manama-skyline-backdrop.png","source":"file","title":"Manama Skyline"},"backgroundSize":"cover","backgroundPosition":"50% 60%"},"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/manama-skyline-backdrop.png);background-size:cover;background-position:50% 60%;position:relative;">

  <!-- Dark overlay for readability -->
  <div style="position:absolute;inset:0;background:linear-gradient(180deg, rgba(13,8,4,0.65) 0%, rgba(26,15,8,0.45) 40%, rgba(13,8,4,0.85) 100%);z-index:1;pointer-events:none;"></div>

  <!-- wp:spacer {"height":"var:preset|spacing|50"} -->
  <div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->

  <!-- wp:group {"tagName":"section","align":"full","className":"hero","style":{"position":{"type":"relative"},"zIndex":2},"layout":{"type":"constrained","contentSize":"1200px"}} -->
  <section class="wp-block-group alignfull hero" style="position:relative;z-index:2;">

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
    <div class="wp-block-columns">

      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:group {"align":"full","className":"hero-content","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"},"color":{"text":"#F5E6C8"}},"layout":{"type":"default"}} -->
        <div class="wp-block-group alignfull hero-content has-text-color" style="color:#F5E6C8;padding-top:0;padding-bottom:0">

          <!-- wp:spacer {"height":"var:preset|spacing|20"} -->
          <div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
          <!-- /wp:spacer -->

          <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
          <div class="wp-block-group">

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

              <!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontSize":"13px","lineHeight":"1.1","fontWeight":"600","fontStyle":"normal","letterSpacing":"4px"},"color":{"text":"#D4943A"}}} -->
              <h1 class="wp-block-heading has-text-align-left" style="font-size:13px;font-style:normal;font-weight:600;letter-spacing:4px;line-height:1.1;color:#D4943A;">
                <?php esc_html_e('مملكة البحرين — KINGDOM OF BAHRAIN', 'bondigi'); ?>
              </h1>
              <!-- /wp:heading -->

              <!-- wp:heading {"textAlign":"left","level":1,"className":"mobile_text","style":{"typography":{"fontSize":"72px","lineHeight":"1.1","letterSpacing":"-1px","fontWeight":"700","fontStyle":"normal"},"color":{"text":"#F5E6C8"}}} -->
              <h1 class="wp-block-heading has-text-align-left mobile_text" style="font-size:72px;font-style:normal;font-weight:700;letter-spacing:-1px;line-height:1.1;color:#F5E6C8;font-family:'Cinzel',serif;">
                <?php echo sprintf(
                  esc_html__( 'Where Ancient %1$sLegacy Meets%2$s the Sea.', 'bondigi' ),
                  '<mark style="background-color:rgba(0,0,0,0);color:#D4943A;" class="has-inline-color">',
                  '</mark>'
                ); ?>
              </h1>
              <!-- /wp:heading -->

            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"17px","lineHeight":"1.8"},"color":{"text":"#C4A882"}}} -->
            <p class="has-text-align-left" style="margin-top:0px;margin-bottom:0px;font-size:17px;line-height:1.8;color:#C4A882;">
              <?php echo sprintf(
                esc_html__( 'Bahrain — the Pearl of the Arabian Gulf. A timeless island civilisation%1$swhere centuries of seafaring heritage and ancient Dilmun culture live on%1$samid gleaming towers and the eternal tides of the Arabian Sea.', 'bondigi' ),
                '<br>'
              ); ?>
            </p>
            <!-- /wp:paragraph -->

          </div>
          <!-- /wp:group -->

          <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
          <div class="wp-block-group">

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons">

              <!-- wp:button {"style":{"color":{"text":"#F5E6C8","background":"linear-gradient(135deg,#C17D3C,#8B5A2B)"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"4px"},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}}} -->
              <div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-custom-font-size wp-element-button" style="border-radius:4px;color:#F5E6C8;background:linear-gradient(135deg,#C17D3C,#8B5A2B);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);font-size:14px;font-style:normal;font-weight:600;letter-spacing:2px;font-family:'Cinzel',serif;text-transform:uppercase;"><?php esc_html_e('Explore Bahrain', 'bondigi'); ?></a></div>
              <!-- /wp:button -->

              <!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#D4943A"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"4px","color":"#D4943A","width":"1px"},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}}} -->
              <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-border-color wp-element-button" style="border-radius:4px;border-color:#D4943A;border-width:1px;color:#D4943A;background:transparent;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);font-size:14px;font-style:normal;font-weight:600;letter-spacing:2px;font-family:'Cinzel',serif;text-transform:uppercase;"><?php esc_html_e('Our Story', 'bondigi'); ?></a></div>
              <!-- /wp:button -->

            </div>
            <!-- /wp:buttons -->

          </div>
          <!-- /wp:group -->

        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"width":"40%"} -->
      <div class="wp-block-column" style="flex-basis:40%"></div>
      <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

  </section>
  <!-- /wp:group -->

  <!-- wp:spacer {"height":"var:preset|spacing|60"} -->
  <div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->

  <!-- ═══ ANCIENT STATS BAR ═══ -->
  <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"-120px"}},"zIndex":3,"position":{"type":"relative"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
  <div id="stats" class="wp-block-group" style="margin-bottom:-120px;position:relative;z-index:3;">

    <!-- wp:group {"style":{"color":{"background":"rgba(13,8,4,0.88)"},"spacing":{"padding":{"right":"var:preset|spacing|70","left":"var:preset|spacing|70","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"},"color":"rgba(212,148,58,0.3)","width":"1px"},"backdropFilter":"blur(20px)"},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-background stats-bar" style="border:1px solid rgba(212,148,58,0.3);border-radius:8px;background:rgba(13,8,4,0.88);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--70);backdrop-filter:blur(20px);-webkit-backdrop-filter:blur(20px);">

      <!-- wp:columns -->
      <div class="wp-block-columns">

        <!-- wp:column {"verticalAlignment":"center","style":{"border":{"right":{"color":"rgba(212,148,58,0.25)","width":"1px"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="border-right:1px solid rgba(212,148,58,0.25)">
          <div class="wp-block-group" style="text-align:center;">
            <h2 class="wp-block-heading" style="color:#D4943A;font-family:'Cinzel',serif;text-align:center;"><?php esc_html_e('4,000+', 'bondigi'); ?></h2>
            <p style="color:#C4A882;text-align:center;font-size:13px;letter-spacing:2px;text-transform:uppercase;"><?php esc_html_e('Years of History', 'bondigi'); ?></p>
          </div>
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"border":{"right":{"color":"rgba(212,148,58,0.25)","width":"1px"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="border-right:1px solid rgba(212,148,58,0.25)">
          <div class="wp-block-group" style="text-align:center;">
            <h2 class="wp-block-heading" style="color:#D4943A;font-family:'Cinzel',serif;text-align:center;"><?php esc_html_e('33', 'bondigi'); ?></h2>
            <p style="color:#C4A882;text-align:center;font-size:13px;letter-spacing:2px;text-transform:uppercase;"><?php esc_html_e('Natural Islands', 'bondigi'); ?></p>
          </div>
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"border":{"right":{"color":"rgba(212,148,58,0.25)","width":"1px"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="border-right:1px solid rgba(212,148,58,0.25)">
          <div class="wp-block-group" style="text-align:center;">
            <h2 class="wp-block-heading" style="color:#D4943A;font-family:'Cinzel',serif;text-align:center;"><?php esc_html_e('UNESCO', 'bondigi'); ?></h2>
            <p style="color:#C4A882;text-align:center;font-size:13px;letter-spacing:2px;text-transform:uppercase;"><?php esc_html_e('World Heritage Site', 'bondigi'); ?></p>
          </div>
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
          <div class="wp-block-group" style="text-align:center;">
            <h2 class="wp-block-heading" style="color:#D4943A;font-family:'Cinzel',serif;text-align:center;"><?php esc_html_e('Dilmun', 'bondigi'); ?></h2>
            <p style="color:#C4A882;text-align:center;font-size:13px;letter-spacing:2px;text-transform:uppercase;"><?php esc_html_e('Ancient Civilisation', 'bondigi'); ?></p>
          </div>
        </div>
        <!-- /wp:column -->

      </div>
      <!-- /wp:columns -->

    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

  <!-- ═══════════ ABOUT SECTION — BAHRAIN FORT ═══════════ -->
  <!-- wp:group {"layout":{"type":"constrained"}} -->
  <div id="heritage" class="wp-block-group">

  <!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group" style="border-radius:12px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns">

      <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"right":"var:preset|spacing|70"}}}} -->
      <div class="wp-block-column is-vertically-aligned-center" style="padding-right:var(--wp--preset--spacing--70)">

        <div class="wp-block-group" style="border-radius:12px;padding:0">

          <!-- Small ancient label -->
          <!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","letterSpacing":"4px","fontWeight":"600"},"color":{"text":"#D4943A"}}} -->
          <p style="font-size:12px;letter-spacing:4px;font-weight:600;color:#D4943A;text-transform:uppercase;font-family:'Cinzel',serif;margin-bottom:8px;">
            <?php esc_html_e('قلعة البحرين — Qal\'at al-Bahrain', 'bondigi'); ?>
          </p>
          <!-- /wp:paragraph -->

          <!-- wp:heading {"textAlign":"left","className":"mobile_text","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"52px"},"color":{"text":"#F5E6C8"}}} -->
          <h2 class="wp-block-heading has-text-align-left mobile_text" style="font-size:52px;color:#F5E6C8;font-family:'Cinzel',serif;">
            <?php echo sprintf(
              esc_html__( 'Heir to the %1$sAncient Dilmun%2$s Civilisation', 'bondigi' ),
              '<mark style="background-color:rgba(0,0,0,0);color:#D4943A;">',
              '</mark>'
            ); ?>
          </h2>
          <!-- /wp:heading -->

          <!-- Ornamental divider -->
          <div style="display:flex;align-items:center;gap:12px;margin:16px 0;">
            <div style="height:1px;width:60px;background:linear-gradient(90deg,#D4943A,transparent);"></div>
            <span style="color:#D4943A;font-size:14px;">◆</span>
            <div style="height:1px;flex:1;background:linear-gradient(90deg,transparent,rgba(212,148,58,0.3));"></div>
          </div>

          <!-- wp:paragraph {"align":"left","style":{"color":{"text":"#C4A882"},"typography":{"lineHeight":"1.9"}}} -->
          <p class="has-text-align-left" style="color:#C4A882;line-height:1.9;">
            <?php esc_html_e('Rising from the sands beside the Arabian Gulf, the ancient Fort of Bahrain — Qal\'at al-Bahrain — bears silent witness to over four millennia of human civilisation. Once the capital of the great Dilmun empire, these sacred shores have seen Phoenician traders, Persian conquerors, and Arab seafarers.', 'bondigi'); ?>
          </p>
          <!-- /wp:paragraph -->

          <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
          <div class="wp-block-group" style="gap:16px;margin-top:8px;">

            <!-- Stat card 1 -->
            <div class="wp-block-group ancient-stat-card" style="background:linear-gradient(135deg,rgba(193,125,60,0.12),rgba(13,8,4,0.92));border:1px solid rgba(212,148,58,0.3);border-radius:10px;padding:20px 28px;flex:1;position:relative;overflow:hidden;">
              <div style="position:absolute;top:0;left:0;right:0;height:1px;background:linear-gradient(90deg,transparent,#D4943A,transparent);"></div>
              <h2 class="wp-block-heading" style="color:#D4943A;font-family:'Cinzel',serif;"><?php esc_html_e('2300 BC', 'bondigi'); ?></h2>
              <p style="color:#C4A882;font-size:13px;letter-spacing:1px;margin:0;"><?php esc_html_e('Dilmun Origins', 'bondigi'); ?></p>
            </div>

            <!-- Stat card 2 -->
            <div class="wp-block-group ancient-stat-card" style="background:linear-gradient(135deg,rgba(193,125,60,0.12),rgba(13,8,4,0.92));border:1px solid rgba(212,148,58,0.3);border-radius:10px;padding:20px 28px;flex:1;position:relative;overflow:hidden;">
              <div style="position:absolute;top:0;left:0;right:0;height:1px;background:linear-gradient(90deg,transparent,#D4943A,transparent);"></div>
              <h2 class="wp-block-heading" style="color:#D4943A;font-family:'Cinzel',serif;"><?php esc_html_e('UNESCO', 'bondigi'); ?></h2>
              <p style="color:#C4A882;font-size:13px;letter-spacing:1px;margin:0;"><?php esc_html_e('Heritage Listed', 'bondigi'); ?></p>
            </div>

          </div>
          <!-- /wp:group -->

          <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
          <div class="wp-block-buttons" style="margin-top:24px;">

            <!-- wp:button {"style":{"color":{"text":"#F5E6C8","background":"linear-gradient(135deg,#C17D3C,#8B5A2B)"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"4px"},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}}} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-radius:4px;color:#F5E6C8;background:linear-gradient(135deg,#C17D3C,#8B5A2B);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);font-size:14px;font-weight:600;letter-spacing:2px;font-family:'Cinzel',serif;text-transform:uppercase;"><?php esc_html_e('Discover Heritage', 'bondigi'); ?></a></div>
            <!-- /wp:button -->

          </div>
          <!-- /wp:buttons -->

        </div>

      </div>
      <!-- /wp:column -->

      <!-- Image column -->
      <!-- wp:column {"verticalAlignment":"center"} -->
      <div class="wp-block-column is-vertically-aligned-center">

        <!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
        <figure class="wp-block-image size-full has-custom-border" style="position:relative;">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bahrain-fort-heritage.png" alt="Bahrain Fort - Qal'at al-Bahrain at sunset" style="border-radius:12px;aspect-ratio:4/3;object-fit:cover;width:100%;box-shadow:0 20px 60px rgba(0,0,0,0.6);" />
          <!-- Decorative frame -->
          <div style="position:absolute;inset:12px;border:1px solid rgba(212,148,58,0.25);border-radius:8px;pointer-events:none;"></div>
        </figure>
        <!-- /wp:image -->

      </div>
      <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- ═══════════ CTA SECTION — PEARL MONUMENT ═══════════ -->
<!-- wp:group {"style":{"color":{"background":"#0D0804"},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bahrain-pearl-monument.png","source":"file","title":"Bahrain Pearl Monument"},"backgroundSize":"cover","backgroundPosition":"50% 50%","backgroundAttachment":"fixed"}},"layout":{"type":"constrained"}} -->
<div id="pearl" class="wp-block-group has-background cta-ancient" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bahrain-pearl-monument.png);background-size:cover;background-position:50% 50%;background-attachment:fixed;background-color:#0D0804;position:relative;">

  <!-- Dark overlay -->
  <div style="position:absolute;inset:0;background:rgba(13,8,4,0.78);z-index:0;pointer-events:none;"></div>

  <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"position":{"type":"relative"},"zIndex":1},"layout":{"type":"default"}} -->
  <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70);position:relative;z-index:1;">

    <!-- Ancient label -->
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px","letterSpacing":"5px","fontWeight":"600"},"color":{"text":"#D4943A"}}} -->
    <p style="font-size:12px;letter-spacing:5px;font-weight:600;color:#D4943A;text-transform:uppercase;font-family:'Cinzel',serif;text-align:center;margin-bottom:16px;">
      <?php esc_html_e('لؤلؤة الخليج العربي', 'bondigi'); ?>
    </p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","className":"mobile_text","style":{"color":{"text":"#F5E6C8"},"typography":{"fontSize":"52px"}}} -->
    <h2 class="wp-block-heading has-text-align-center mobile_text" style="color:#F5E6C8;font-size:52px;font-family:'Cinzel',serif;">
      <?php echo sprintf(
        esc_html__( 'Pearl of the%1$s%2$sArabian Gulf%3$s', 'bondigi' ),
        '<br>',
        '<mark style="background-color:rgba(0,0,0,0);color:#D4943A;">',
        '</mark>'
      ); ?>
    </h2>
    <!-- /wp:heading -->

    <!-- Ornamental divider -->
    <div style="display:flex;align-items:center;justify-content:center;gap:16px;margin:20px 0;">
      <div style="height:1px;width:80px;background:linear-gradient(90deg,transparent,#D4943A);"></div>
      <span style="color:#D4943A;font-size:18px;">◈</span>
      <div style="height:1px;width:80px;background:linear-gradient(90deg,#D4943A,transparent);"></div>
    </div>

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
    <div class="wp-block-group">

      <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#C4A882"},"typography":{"lineHeight":"1.9","fontSize":"17px"}}} -->
      <p class="has-text-align-center" style="color:#C4A882;line-height:1.9;font-size:17px;">
        <?php esc_html_e('For centuries, Bahrain\'s famed pearl divers plunged into the turquoise depths of the Arabian Gulf, retrieving the rarest gems traded across the ancient world. The Pearl Monument stands eternal — a tribute to those who shaped the soul of this island kingdom.', 'bondigi'); ?>
      </p>
      <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"32px"}}}} -->
    <div class="wp-block-buttons" style="margin-top:32px;">

      <!-- wp:button {"textAlign":"center","style":{"color":{"text":"#F5E6C8","background":"linear-gradient(135deg,#C17D3C,#8B5A2B)"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"4px"},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}}} -->
      <div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-text-align-center wp-element-button" style="border-radius:4px;color:#F5E6C8;background:linear-gradient(135deg,#C17D3C,#8B5A2B);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);font-size:14px;font-weight:600;letter-spacing:2px;font-family:'Cinzel',serif;text-transform:uppercase;box-shadow:0 6px 24px rgba(193,125,60,0.4);"><?php esc_html_e('Begin Your Journey', 'bondigi'); ?></a></div>
      <!-- /wp:button -->

    </div>
    <!-- /wp:buttons -->

  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->