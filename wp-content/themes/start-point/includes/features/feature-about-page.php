<?php

/**
 * Lite Manager
 *
 * @package start-point
 */
/**
 * About page class
 */
require_once get_template_directory() . '/cw-notifications/cw-about-page/class-inkthemes-about-page.php';

$func = 'general_admin_notice';
/*
 * About page instance
 */
$config = array(
    // Menu name under Appearance.
    'menu_name' => apply_filters('startpoint_about_page_filter', sprintf(__('About %s', 'start-point'), wp_get_theme()->get('Name'), 'menu_name')),
    // Page title.
    'page_name' => apply_filters('startpoint_about_page_filter', sprintf(__('About %s', 'start-point'), wp_get_theme()->get('Name'), 'page_name')),
    // Main welcome title
    /* translators: s - theme name */
    'welcome_title' => apply_filters('startpoint_about_page_filter', sprintf(__('Welcome to %s !', 'start-point'), wp_get_theme()->get('Name')), 'welcome_title'),
    // Main welcome content
    'welcome_content' => apply_filters('startpoint_about_page_filter', sprintf(__('Start Point is the ultimate WordPress theme with lots of customization features and options. The theme can be used by all kind of businesses and it is also perfect for personal use.', 'start-point'), 'welcome_content')),
    /**
     * Tabs array.
     *
     * The key needs to be ONLY consisted from letters and underscores. If we want to define outside the class a function to render the tab,
     * the will be the name of the function which will be used to render the tab content.
     */
    'tabs' => array(
        'getting_started' => __('Colorway (Advanced)', 'start-point'),
        'getting_started_theme' => __('Getting Started (Start Point)', 'start-point'),
        'support' => __('Support', 'start-point'),
        'changelog' => __('Changelog', 'start-point'),
    // 'free_pro' => __('Free vs Paid', 'start-point'),
    ),
    // Support content tab.
    'support_content' => array(
        'first' => array(
            'title' => esc_html__('Contact Support', 'start-point'),
//			'icon'         => 'dashicons dashicons-sos',
            'text' => esc_html__('Our support staff is always dedicated to hold your website up and running without any glitch. If you need any kind help while creating a website with Start Point you can contact us via our conatct form.', 'start-point'),
            'button_label' => esc_html__('Contact Us', 'start-point'),
            'button_link' => esc_url('https://www.inkthemes.com/contact-us/'),
            'is_button' => true,
            'is_new_tab' => true,
        ),
        'second' => array(
            'title' => esc_html__('Support', 'start-point'),
//			'icon'         => 'dashicons dashicons-book-alt',
            'text' => esc_html__('Checkout our support forum for more help.', 'start-point'),
            'button_label' => esc_html__('Support Forum', 'start-point'),
            'button_link' => 'https://wordpress.org/support/theme/start-point',
            'is_button' => false,
            'is_new_tab' => true,
        ),
        'third' => array(
            'title' => esc_html__('Changelog', 'start-point'),
//			'icon'         => 'dashicons dashicons-portfolio',
            'text' => esc_html__('We keep a track and manitain all the records of our enhanced features or latest versions of theme in the Changelog. You can find all those changes and updated anytime in our Changelog.', 'start-point'),
            'button_label' => esc_html__('Changelog', 'start-point'),
            'button_link' => esc_url(admin_url('themes.php?page=start-point-welcome&tab=changelog&show=yes')),
            'is_button' => false,
            'is_new_tab' => false,
        ),
    ),
    // Getting started tab
    'getting_started' => array(
        'first' => array(
            //'title' => esc_html__('', 'start-point'),
            'text' => $func()
        ),
    ),
    // Getting started theme tab
    'getting_started_theme' => array(
        'first' => array(
            'title' => esc_html__('Start Point  Theme - Full Documentation', 'start-point'),
            'text' => sprintf(__('Read full documentation of %s lite WordPress Theme. In case any issue, you can go to the community forum of InkThemes and get instant solution to your queries.', 'start-point'), 'start-point'),
            'button_label' => sprintf(__('View %s lite Documentation', 'start-point'), 'start-point'),
            'button_link' => 'https://www.inkthemes.com/doc/startpoint-wordpress-theme-documentation/',
            'is_button' => false,
            'recommended_actions' => false,
            'is_new_tab' => true,
        ),
        'second' => array(
            'title' => esc_html__('Upgrade to Start Point Wordpress Theme[Pro]', 'start-point'),
            'text' => sprintf(__('Make a move to %s pro. Get Advance CSS, Mobile friendliness and more when you switch from basic to advance', 'start-point'), 'start-point'),
            'button_label' => esc_html__('View Pro Features', 'start-point'),
            'button_link' => 'https://www.inkthemes.com/market/single-page-wordpress-theme/',
            'is_button' => false,
            'recommended_actions' => true,
            'is_new_tab' => false,
        ),
    ),
    // Free vs PRO array.
    'free_pro' => array(
        'free_theme_name' => '' . wp_get_theme()->get('Name') . ' ',
        'pro_theme_name' => '' . wp_get_theme()->get('Name') . '  Pro',
        'pro_theme_link' => 'https://www.inkthemes.com/market/yoga-studio-wordpress-theme/',
        /* translators: s - theme name */
        'get_pro_theme_label' => sprintf(__('Get %s now!', 'start-point'), 'Start Point Pro'),
        'banner_link' => 'https://www.inkthemes.com/doc/start-point-wordpress-theme-documentation/',
        'banner_src' => get_template_directory_uri() . '/assets/images/feature-image.png',
        'features' => array(
            array(
                'title' => __('Translation Ready', 'start-point'),
                'description' => __('The theme is compatible with WPML plugin and you can display the contents in your desired language.', 'start-point'),
                'is_in_lite' => 'true',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Live Customizer', 'start-point'),
                'description' => __('Visible Editing Shortcuts For HomePage Elements. Now, edit the content directly by clicking the edit icon(pencil) on homepage elements.', 'start-point'),
                'is_in_lite' => 'true',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Mobile friendly', 'start-point'),
                'description' => __('Responsive layout. Works on every device.', 'start-point'),
                'is_in_lite' => 'true',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Background Image', 'start-point'),
                'description' => __('You can use any background image you want.', 'start-point'),
                'is_in_lite' => 'true',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Social Icons', 'start-point'),
                'description' => __('Add Social Icons for your Business website.', 'start-point'),
                'is_in_lite' => 'true',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Home Page Blog Post Box On/Off', 'start-point'),
                'description' => __('You can Enable or Disable the Home page Blog Post Section.', 'start-point'),
                'is_in_lite' => 'true',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Footer Widget Section On/Off', 'start-point'),
                'description' => __('You can Enable or Disable the Footer Section.', 'start-point'),
                'is_in_lite' => 'true',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Home Page Slider Two Types', 'start-point'),
                'description' => __('Change Normal and Layered Slider Types As per Your Choice', 'start-point'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Home Page Slider Speed Control', 'start-point'),
                'description' => __('Change Speed of Slider As Required', 'start-point'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Six Slider In Home page', 'start-point'),
                'description' => __('Change Slider Settings through Customizer.', 'start-point'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Home Page Feature Column Structure', 'start-point'),
                'description' => __('Choose whether you want 3-column structure or 4-column structure for feature box.', 'start-point'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Home Page Display No Of Blogs', 'start-point'),
                'description' => __('Change the number of blogs you want to display for home page.', 'start-point'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Footer Widget Area Column Option', 'start-point'),
                'description' => __('Change Footer Settings through Customizer.', 'start-point'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Page and Blog Sidebar Layout', 'start-point'),
                'description' => __('Change Layout of Blog and Page through Customizer in three Different Ways.', 'start-point'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Typography', 'start-point'),
                'description' => __('You can use any font family as you want.', 'start-point'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Contact Map Page', 'start-point'),
                'description' => __('Setup Contact Map Page for Your Theme.', 'start-point'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Add Unlimited Feature Box In Home Page', 'start-point'),
                'description' => __('Add Feature Box As Much As You Want.', 'start-point'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Copyright Footer Text', 'start-point'),
                'description' => __('Change your Copyright Footer Text for your business website.', 'start-point'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Styling Options', 'start-point'),
                'description' => __('Design your website with more colors and styles.', 'start-point'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Google Analytics Tracking Code', 'start-point'),
                'description' => __('Analyze and track the number of visitors on your website with Google Analytics.', 'start-point'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('SEO Optimized', 'start-point'),
                'description' => __('Get a completely SEO optimized website for your business.', 'start-point'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('24*7 Support', 'start-point'),
                'description' => __('Get instant solution to all your queries with our 24*7 support.', 'start-point'),
                'is_in_lite' => 'true',
                'is_in_pro' => 'true',
            ),
        ),
    ),
);
inkthemes_About_Page::init(apply_filters('startpoint_about_page_array', $config));

function general_admin_notice() {
    $content = '<div class="warning-message">
       <img src="' . get_template_directory_uri() . '/images/information-icon.png"/>
    <p>Switch to Colorway WordPress Theme which is packed with 35+ ready-made elementor templates & offers better customization features and website development elements. <a href="https://wordpress.org/themes/colorway/" target="_blank">Download Colorway</a> for Free !!</p>
</div>';
    $content .= '<div id="colorway-sites-on-active" data-repeat-notice-after="">
                    <div class="notice-container">
                        <div class="colorway-sites-wrap">
                        <div class="block1-container">
                        <div class="top-container">
                            <div class="notice-image">
                            <img src="' . get_template_directory_uri() . '/images/thumb33.png" class="custom-logo" alt="Start Point">
                            </div> 
                            
                        <div class="notice-content">
                        <div class="colorway-sites-block">
                        <h4>Colorway - Advanced Elementor Based WordPress Theme</h4>
                        <p>Create stunning websites in a minute by using 35+ elementor based site templates and the Drag & Drop builder.</p>
                        </div>
	<div class="colorway-review-notice-container">';

    //Check if Colorway Theme Exists or not        
    $get_themes = array();
    $get_themes = wp_get_themes();
    
    if (array_key_exists("colorway", $get_themes)) {
        $content .= '<a href="'.admin_url('theme-install.php?search=colorway').'" class="button button-primary button-hero">Try Colorway For Free</a>';
    } else {
        $content .= '<a href="'.admin_url('theme-install.php?search=colorway').'" class="button button-primary button-hero">Try to Colorway For Free</a>';
    }
    $content .= '<a target="_blank" href="' . esc_url(admin_url("customize.php")) . '" class="button cwy-sites-btn">Go to the Customizer</a></div>
       </div></div></div><div class="cw-sites-video">
 <div class="cwy-video-section embed-container">
<iframe width="100%" height="315px" src="https://www.youtube.com/embed/WLrfR4-HEfo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>                </div>
            
</div>
        </div>
        </div>
	</div>';
    return $content;
}
