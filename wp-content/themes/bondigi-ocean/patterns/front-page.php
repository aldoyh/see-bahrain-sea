<?php
/**
 * Title: front-page
 * Slug: bondigi-ocean/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull">

<!-- ═══════════ HERO SECTION — OCEAN DEPTHS ═══════════ -->
<!-- wp:group {"align":"full","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/manama-skyline-backdrop.png","source":"file","title":"Ocean Depths"},"backgroundSize":"cover","backgroundPosition":"50% 60%"},"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/manama-skyline-backdrop.png);background-size:cover;background-position:50% 60%;position:relative;">

  <!-- Deep ocean overlay -->
  <div style="position:absolute;inset:0;background:linear-gradient(180deg, rgba(10,22,40,0.75) 0%, rgba(15,43,76,0.45) 40%, rgba(10,22,40,0.85) 100%);z-index:1;pointer-events:none;"></div>

  <!-- wp:spacer {"height":"var:preset|spacing|50"} -->
  <div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->

  <!-- wp:group {"tagName":"section","align":"full","className":"hero","style":{"position":{"type":"relative"},"zIndex":2},"layout":{"type":"constrained","contentSize":"1200px"}} -->
  <section class="wp-block-group alignfull hero" style="position:relative;z-index:2;">

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
    <div class="wp-block-columns">

      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:group {"align":"full","className":"hero-content","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"},"color":{"text":"#E0F7FA"}},"layout":{"type":"default"}} -->
        <div class="wp-block-group alignfull hero-content has-text-color" style="color:#E0F7FA;padding-top:0;padding-bottom:0">

          <!-- wp:spacer {"height":"var:preset|spacing|20"} -->
          <div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
          <!-- /wp:spacer -->

          <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
          <div class="wp-block-group">

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

              <!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontSize":"13px","lineHeight":"1.1","fontWeight":"600","fontStyle":"normal","letterSpacing":"4px"},"color":{"text":"#FF6B6B"}}} -->
              <h1 class="wp-block-heading has-text-align-left" style="font-size:13px;font-style:normal;font-weight:600;letter-spacing:4px;line-height:1.1;color:#FF6B6B;">
                <?php esc_html_e('THE ENDLESS BLUE — OCEAN REALM', 'bondigi-ocean'); ?>
              </h1>
              <!-- /wp:heading -->

              <!-- wp:heading {"textAlign":"left","level":1,"className":"mobile_text","style":{"typography":{"fontSize":"72px","lineHeight":"1.1","letterSpacing":"-1px","fontWeight":"700","fontStyle":"normal"},"color":{"text":"#E0F7FA"}}} -->
              <h1 class="wp-block-heading has-text-align-left mobile_text" style="font-size:72px;font-style:normal;font-weight:700;letter-spacing:-1px;line-height:1.1;color:#E0F7FA;font-family:'Cinzel',serif;">
                <?php echo sprintf(
                  esc_html__( 'Where the %1$sDeep%2$s Meets the Sky.', 'bondigi-ocean' ),
                  '<mark style="background-color:rgba(0,0,0,0);color:#00BCD4;" class="has-inline-color">',
                  '</mark>'
                ); ?>
              </h1>
              <!-- /wp:heading -->

            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"17px","lineHeight":"1.8"},"color":{"text":"#B0D4E8"}}} -->
            <p class="has-text-align-left" style="margin-top:0px;margin-bottom:0px;font-size:17px;line-height:1.8;color:#B0D4E8;">
              <?php echo sprintf(
                esc_html__( 'The ocean — Earth\'s last great wilderness. A world of ancient currents,%1$scoral cities, and abyssal plains stretching to the horizon.%1$sWhere every wave carries the story of our living planet.', 'bondigi-ocean' ),
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

              <!-- wp:button {"style":{"color":{"text":"#E0F7FA","background":"linear-gradient(135deg,#1565C0,#1A5276)"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"4px"},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}}} -->
              <div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-custom-font-size wp-element-button" style="border-radius:4px;color:#E0F7FA;background:linear-gradient(135deg,#1565C0,#1A5276);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);font-size:14px;font-style:normal;font-weight:600;letter-spacing:2px;font-family:'Cinzel',serif;text-transform:uppercase;"><?php esc_html_e('Explore the Deep', 'bondigi-ocean'); ?></a></div>
              <!-- /wp:button -->

              <!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#00BCD4"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"4px","color":"#00BCD4","width":"1px"},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}}} -->
              <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-border-color wp-element-button" style="border-radius:4px;border-color:#00BCD4;border-width:1px;color:#00BCD4;background:transparent;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);font-size:14px;font-style:normal;font-weight:600;letter-spacing:2px;font-family:'Cinzel',serif;text-transform:uppercase;"><?php esc_html_e('Our Story', 'bondigi-ocean'); ?></a></div>
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

  <!-- ═══ OCEAN STATS BAR ═══ -->
  <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"-120px"}},"zIndex":3,"position":{"type":"relative"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
  <div id="stats" class="wp-block-group" style="margin-bottom:-120px;position:relative;z-index:3;">

    <!-- wp:group {"style":{"color":{"background":"rgba(10,22,40,0.88)"},"spacing":{"padding":{"right":"var:preset|spacing|70","left":"var:preset|spacing|70","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"},"color":"rgba(0,188,212,0.3)","width":"1px"},"backdropFilter":"blur(20px)"},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-background stats-bar" style="border:1px solid rgba(0,188,212,0.3);border-radius:8px;background:rgba(10,22,40,0.88);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--70);backdrop-filter:blur(20px);-webkit-backdrop-filter:blur(20px);">

      <!-- wp:columns -->
      <div class="wp-block-columns">

        <!-- wp:column {"verticalAlignment":"center","style":{"border":{"right":{"color":"rgba(0,188,212,0.25)","width":"1px"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="border-right:1px solid rgba(0,188,212,0.25)">
          <div class="wp-block-group" style="text-align:center;">
            <h2 class="wp-block-heading" style="color:#00BCD4;font-family:'Cinzel',serif;text-align:center;"><?php esc_html_e('71%', 'bondigi-ocean'); ?></h2>
            <p style="color:#B0D4E8;text-align:center;font-size:13px;letter-spacing:2px;text-transform:uppercase;"><?php esc_html_e('of Earth is Ocean', 'bondigi-ocean'); ?></p>
          </div>
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"border":{"right":{"color":"rgba(0,188,212,0.25)","width":"1px"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="border-right:1px solid rgba(0,188,212,0.25)">
          <div class="wp-block-group" style="text-align:center;">
            <h2 class="wp-block-heading" style="color:#00BCD4;font-family:'Cinzel',serif;text-align:center;"><?php esc_html_e('11km', 'bondigi-ocean'); ?></h2>
            <p style="color:#B0D4E8;text-align:center;font-size:13px;letter-spacing:2px;text-transform:uppercase;"><?php esc_html_e('Deepest Point', 'bondigi-ocean'); ?></p>
          </div>
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"border":{"right":{"color":"rgba(0,188,212,0.25)","width":"1px"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="border-right:1px solid rgba(0,188,212,0.25)">
          <div class="wp-block-group" style="text-align:center;">
            <h2 class="wp-block-heading" style="color:#00BCD4;font-family:'Cinzel',serif;text-align:center;"><?php esc_html_e('230K+', 'bondigi-ocean'); ?></h2>
            <p style="color:#B0D4E8;text-align:center;font-size:13px;letter-spacing:2px;text-transform:uppercase;"><?php esc_html_e('Marine Species', 'bondigi-ocean'); ?></p>
          </div>
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
          <div class="wp-block-group" style="text-align:center;">
            <h2 class="wp-block-heading" style="color:#00BCD4;font-family:'Cinzel',serif;text-align:center;"><?php esc_html_e('80%', 'bondigi-ocean'); ?></h2>
            <p style="color:#B0D4E8;text-align:center;font-size:13px;letter-spacing:2px;text-transform:uppercase;"><?php esc_html_e('Unexplored', 'bondigi-ocean'); ?></p>
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

  <!-- ═══════════ ABOUT SECTION — CORAL REEFS ═══════════ -->
  <!-- wp:group {"layout":{"type":"constrained"}} -->
  <div id="explore" class="wp-block-group">

  <!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group" style="border-radius:12px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns">

      <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"right":"var:preset|spacing|70"}}}} -->
      <div class="wp-block-column is-vertically-aligned-center" style="padding-right:var(--wp--preset--spacing--70)">

        <div class="wp-block-group" style="border-radius:12px;padding:0">

          <!-- Small label -->
          <!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","letterSpacing":"4px","fontWeight":"600"},"color":{"text":"#FF6B6B"}}} -->
          <p style="font-size:12px;letter-spacing:4px;font-weight:600;color:#FF6B6B;text-transform:uppercase;font-family:'Cinzel',serif;margin-bottom:8px;">
            <?php esc_html_e('CORAL REEFS — Cities of the Sea', 'bondigi-ocean'); ?>
          </p>
          <!-- /wp:paragraph -->

          <!-- wp:heading {"textAlign":"left","className":"mobile_text","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"52px"},"color":{"text":"#E0F7FA"}}} -->
          <h2 class="wp-block-heading has-text-align-left mobile_text" style="font-size:52px;color:#E0F7FA;font-family:'Cinzel',serif;">
            <?php echo sprintf(
              esc_html__( 'Rainforests of the %1$sDeep Blue%2$s', 'bondigi-ocean' ),
              '<mark style="background-color:rgba(0,0,0,0);color:#00BCD4;">',
              '</mark>'
            ); ?>
          </h2>
          <!-- /wp:heading -->

          <!-- Ocean divider -->
          <div style="display:flex;align-items:center;gap:12px;margin:16px 0;">
            <div style="height:1px;width:60px;background:linear-gradient(90deg,#00BCD4,transparent);"></div>
            <span style="color:#00BCD4;font-size:14px;">~</span>
            <div style="height:1px;flex:1;background:linear-gradient(90deg,transparent,rgba(0,188,212,0.3));"></div>
          </div>

          <!-- wp:paragraph {"align":"left","style":{"color":{"text":"#B0D4E8"},"typography":{"lineHeight":"1.9"}}} -->
          <p class="has-text-align-left" style="color:#B0D4E8;line-height:1.9;">
            <?php esc_html_e('Beneath the waves lies a world of breathtaking beauty — coral reefs, the rainforests of the sea. These vibrant underwater cities teem with life, from the tiniest plankton to majestic sea turtles, creating the most diverse ecosystems on our planet.', 'bondigi-ocean'); ?>
          </p>
          <!-- /wp:paragraph -->

          <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
          <div class="wp-block-group" style="gap:16px;margin-top:8px;">

            <!-- Stat card 1 -->
            <div class="wp-block-group ocean-stat-card" style="background:linear-gradient(135deg,rgba(21,101,192,0.12),rgba(15,43,76,0.92));border:1px solid rgba(0,188,212,0.3);border-radius:10px;padding:20px 28px;flex:1;position:relative;overflow:hidden;">
              <div style="position:absolute;top:0;left:0;right:0;height:1px;background:linear-gradient(90deg,transparent,#00BCD4,transparent);"></div>
              <h2 class="wp-block-heading" style="color:#00BCD4;font-family:'Cinzel',serif;"><?php esc_html_e('25%', 'bondigi-ocean'); ?></h2>
              <p style="color:#B0D4E8;font-size:13px;letter-spacing:1px;margin:0;"><?php esc_html_e('of Marine Life', 'bondigi-ocean'); ?></p>
            </div>

            <!-- Stat card 2 -->
            <div class="wp-block-group ocean-stat-card" style="background:linear-gradient(135deg,rgba(21,101,192,0.12),rgba(15,43,76,0.92));border:1px solid rgba(0,188,212,0.3);border-radius:10px;padding:20px 28px;flex:1;position:relative;overflow:hidden;">
              <div style="position:absolute;top:0;left:0;right:0;height:1px;background:linear-gradient(90deg,transparent,#00BCD4,transparent);"></div>
              <h2 class="wp-block-heading" style="color:#00BCD4;font-family:'Cinzel',serif;"><?php esc_html_e('284M', 'bondigi-ocean'); ?></h2>
              <p style="color:#B0D4E8;font-size:13px;letter-spacing:1px;margin:0;"><?php esc_html_e('People Depend on Reefs', 'bondigi-ocean'); ?></p>
            </div>

          </div>
          <!-- /wp:group -->

          <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
          <div class="wp-block-buttons" style="margin-top:24px;">

            <!-- wp:button {"style":{"color":{"text":"#E0F7FA","background":"linear-gradient(135deg,#1565C0,#1A5276)"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"4px"},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}}} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-radius:4px;color:#E0F7FA;background:linear-gradient(135deg,#1565C0,#1A5276);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);font-size:14px;font-weight:600;letter-spacing:2px;font-family:'Cinzel',serif;text-transform:uppercase;"><?php esc_html_e('Discover Reefs', 'bondigi-ocean'); ?></a></div>
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
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bahrain-fort-heritage.png" alt="Coral Reef Underwater" style="border-radius:12px;aspect-ratio:4/3;object-fit:cover;width:100%;box-shadow:0 20px 60px rgba(0,0,0,0.6);" />
          <!-- Decorative frame -->
          <div style="position:absolute;inset:12px;border:1px solid rgba(0,188,212,0.25);border-radius:8px;pointer-events:none;"></div>
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

<!-- ═══════════ CTA SECTION — DEEP TRENCHES ═══════════ -->
<!-- wp:group {"style":{"color":{"background":"#0A1628"},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bahrain-pearl-monument.png","source":"file","title":"Ocean Depths"},"backgroundSize":"cover","backgroundPosition":"50% 50%","backgroundAttachment":"fixed"}},"layout":{"type":"constrained"}} -->
<div id="tides" class="wp-block-group has-background cta-ocean" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bahrain-pearl-monument.png);background-size:cover;background-position:50% 50%;background-attachment:fixed;background-color:#0A1628;position:relative;">

  <!-- Dark overlay -->
  <div style="position:absolute;inset:0;background:rgba(10,22,40,0.78);z-index:0;pointer-events:none;"></div>

  <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"position":{"type":"relative"},"zIndex":1},"layout":{"type":"default"}} -->
  <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70);position:relative;z-index:1;">

    <!-- Label -->
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px","letterSpacing":"5px","fontWeight":"600"},"color":{"text":"#FF6B6B"}}} -->
    <p style="font-size:12px;letter-spacing:5px;font-weight:600;color:#FF6B6B;text-transform:uppercase;font-family:'Cinzel',serif;text-align:center;margin-bottom:16px;">
      <?php esc_html_e('ABYSSAL PLAINS — The Unknown Depths', 'bondigi-ocean'); ?>
    </p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","className":"mobile_text","style":{"color":{"text":"#E0F7FA"},"typography":{"fontSize":"52px"}}} -->
    <h2 class="wp-block-heading has-text-align-center mobile_text" style="color:#E0F7FA;font-size:52px;font-family:'Cinzel',serif;">
      <?php echo sprintf(
        esc_html__( 'Into the %1$s%2$sAbyss%3$s', 'bondigi-ocean' ),
        '<br>',
        '<mark style="background-color:rgba(0,0,0,0);color:#00BCD4;">',
        '</mark>'
      ); ?>
    </h2>
    <!-- /wp:heading -->

    <!-- Ocean divider -->
    <div style="display:flex;align-items:center;justify-content:center;gap:16px;margin:20px 0;">
      <div style="height:1px;width:80px;background:linear-gradient(90deg,transparent,#00BCD4);"></div>
      <span style="color:#00BCD4;font-size:18px;">~</span>
      <div style="height:1px;width:80px;background:linear-gradient(90deg,#00BCD4,transparent);"></div>
    </div>

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
    <div class="wp-block-group">

      <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#B0D4E8"},"typography":{"lineHeight":"1.9","fontSize":"17px"}}} -->
      <p class="has-text-align-center" style="color:#B0D4E8;line-height:1.9;font-size:17px;">
        <?php esc_html_e('The abyssal plain — Earth\'s final frontier. At 11 kilometres deep, the Mariana Trench plunges into darkness where pressure crushes and strange bioluminescent creatures dance in eternal night. More humans have walked on the Moon than visited these depths.', 'bondigi-ocean'); ?>
      </p>
      <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"32px"}}}} -->
    <div class="wp-block-buttons" style="margin-top:32px;">

      <!-- wp:button {"textAlign":"center","style":{"color":{"text":"#E0F7FA","background":"linear-gradient(135deg,#1565C0,#1A5276)"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"4px"},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}}} -->
      <div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-text-align-center wp-element-button" style="border-radius:4px;color:#E0F7FA;background:linear-gradient(135deg,#1565C0,#1A5276);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);font-size:14px;font-weight:600;letter-spacing:2px;font-family:'Cinzel',serif;text-transform:uppercase;box-shadow:0 6px 24px rgba(21,101,192,0.4);"><?php esc_html_e('Dive Deeper', 'bondigi-ocean'); ?></a></div>
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
