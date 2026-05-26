<?php
if ( ! function_exists( 'bondigi_ocean_setup' ) ) :
function bondigi_ocean_setup() {
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
}
endif;
add_action( 'after_setup_theme', 'bondigi_ocean_setup' );

function bondigi_ocean_theme_setup() {
    load_theme_textdomain( 'bondigi-ocean', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'bondigi_ocean_theme_setup' );

function bondigi_ocean_enqueue_styles_and_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'bondigi-ocean-normalize-css', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0' );
    wp_enqueue_style( 'bondigi-ocean-blocks-style', get_template_directory_uri() . '/assets/css/block.css', array(), '1.0' );
    wp_enqueue_style( 'bondigi-ocean-style-css', get_stylesheet_uri(), array(), $theme_version );

    wp_enqueue_script( 'bondigi-ocean-custom-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'bondigi_ocean_enqueue_styles_and_scripts' );

require_once get_template_directory() . '/inc/core/init.php';
require get_template_directory() . '/inc/customizer.php';

if ( class_exists( 'WP_Customize_Section' ) ) {
    class Bondigi_Ocean_Upsell_Section extends WP_Customize_Section {
        public $type = 'bondigi-ocean-upsell';
        public $button_text = '';
        public $url = '';
        public $background = '';
        public $text_color = '';

        protected function render() {
            $background = ! empty( $this->background ) ? esc_attr( $this->background ) : '#ff6f61';
            $text_color = ! empty( $this->text_color ) ? esc_attr( $this->text_color ) : '#fff';
            ?>
            <li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="bondigi_ocean_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
                <h3 class="accordion-section-title" style="border: 0; color:#fff; background:<?php echo esc_attr( $background ); ?>;">
                    <?php echo esc_html( $this->title ); ?>
                    <a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
                </h3>
            </li>
            <?php
        }
    }
}

require get_template_directory() . '/inc/get-started/get-started.php';

function bondigi_ocean_admin_notice() { 
    global $pagenow;
    $theme_args = wp_get_theme();
    $meta = get_option('bondigi_ocean_admin_notice');
    $name = $theme_args->__get('Name');
    $current_screen = get_current_screen();

    if(!$meta) {
        if(is_network_admin() || !current_user_can('manage_options')) return;
        if($current_screen->base != 'appearance_page_bondigi-ocean-guide-page') {
            ?>
            <div class="notice notice-success bondigi-ocean-pro-promotion is-dismissible" style="border-left: 4px solid #2271b1; padding: 15px 20px; position: relative;">
                <style>
                    .bondigi-ocean-pro-promotion {
                        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
                        border-radius: 8px;
                        margin: 15px 0;
                        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
                    }
                    .bondigi-ocean-pro-promotion h1 {
                        color: #1e293b;
                        margin: 10px 0 15px;
                        font-size: 24px;
                        font-weight: 700;
                    }
                    .bondigi-ocean-pro-promotion p {
                        font-size: 16px;
                        line-height: 1.6;
                        margin-bottom: 15px;
                        color: #475569;
                    }
                    .bondigi-ocean-pro-promotion .stars {
                        font-size: 22px;
                        color: #f59e0b;
                        margin-bottom: 5px;
                    }
                    .bondigi-ocean-pro-promotion .features-list {
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                        gap: 12px;
                        margin: 15px 0;
                    }
                    .bondigi-ocean-pro-promotion .feature-item {
                        display: flex;
                        align-items: center;
                        font-size: 14px;
                    }
                    .bondigi-ocean-pro-promotion .feature-icon {
                        color: #10b981;
                        margin-right: 8px;
                        font-weight: bold;
                    }
                    .bondigi-ocean-pro-promotion .cta-buttons {
                        display: flex;
                        gap: 10px;
                        margin-top: 20px;
                        flex-wrap: wrap;
                    }
                    .bondigi-ocean-pro-promotion .button-primary {
                        background: #10b981;
                        border-color: #10b981;
                        padding: 10px 20px;
                        font-weight: 600;
                        border-radius: 4px;
                        box-shadow: 0 2px 5px rgba(16, 185, 129, 0.3);
                    }
                    .bondigi-ocean-pro-promotion .button-primary:hover {
                        background: #059669;
                        border-color: #059669;
                        transform: translateY(-1px);
                        box-shadow: 0 4px 8px rgba(16, 185, 129, 0.4);
                    }
                    @media (max-width: 768px) {
                        .bondigi-ocean-pro-promotion .features-list {
                            grid-template-columns: 1fr;
                        }
                    }
                </style>
                
                <div class="stars">⭐⭐⭐⭐⭐</div>
                
                <h1><?php esc_html_e('Unlock the Full Power of Bondigi Ocean!', 'bondigi-ocean'); ?></h1>
                
                <p>You're using the <strong>free version</strong> of Bondigi Ocean. Upgrade to <strong>Bondigi Ocean PRO</strong> and unlock exclusive features that will transform your website!</p>
                
                <div class="features-list">
                    <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Advanced customization options</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Premium blocks and templates</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Priority customer support</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Regular updates and new features</span>
                    </div>
                </div>
                
                <div class="cta-buttons">
                    <a class="button button-primary" href="<?php echo esc_url( MINTRARO_BUY_NOW ); ?>" target="_blank">
                        <?php esc_html_e('Upgrade to PRO Now', 'bondigi-ocean'); ?>
                    </a>
                </div>
            </div>
            <?php
        }
    }
}
add_action( 'admin_notices', 'bondigi_ocean_admin_notice' );

function bondigi_ocean_notice_dismissed() {
    if ( isset( $_GET['bondigi-ocean-dismissed'] ) )
        update_option( 'bondigi_ocean_admin_notice', true );
}
add_action( 'admin_init', 'bondigi_ocean_notice_dismissed' );

if ( ! function_exists( 'bondigi_ocean_update_admin_notice' ) ) :
function bondigi_ocean_update_admin_notice() {
    if ( isset( $_GET['bondigi_ocean_admin_notice'] ) && $_GET['bondigi_ocean_admin_notice'] == '1' ) {
        update_option( 'bondigi_ocean_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'bondigi_ocean_update_admin_notice' );

add_action( 'after_switch_theme', 'bondigi_ocean_getstart_setup_options' );
function bondigi_ocean_getstart_setup_options () {
    update_option( 'bondigi_ocean_admin_notice', false );
}

// Link constants without translations
define('MINTRARO_BUY_NOW', 'https://effethemes.com/themes/bondigi-wordpress-theme/');
define('MINTRARO_PRO_DEMO', 'https://preview.effethemes.com/bondigi-wordpress-theme/');
define('MINTRARO_REVIEW', 'https://wordpress.org/support/theme/bondigi/reviews/#new-post');
define('MINTRARO_SUPPORT', 'https://wordpress.org/support/theme/bondigi');
