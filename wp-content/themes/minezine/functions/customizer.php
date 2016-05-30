<?php
/**
 * MineZine Theme Customizer.
 * @package MineZine
 * @since MineZine 2.0.0
*/

/**
 * Default values - backwards compatibility for older MineZine versions.
 *  
*/ 
function minezine_default_options($key) {

$minezine_theme_options = get_option('minezine_options');

/* Define the array of defaults */ 
$minezine_defaults = array(
			'minezine_css' => 'Red (default)',
      'minezine_display_background_pattern' => 'Display',
      'minezine_background_pattern_opacity' => 'Default',
      'minezine_display_sidebar' => 'Display',
      'minezine_content_archives' => 'Excerpt',
			'minezine_display_breadcrumb' => 'Display',
			'minezine_display_header_image' => 'Everywhere',
			'minezine_logo_url' => '',
      'minezine_display_site_description' => 'Display',
      'minezine_display_search_form' => 'Display',
			'minezine_display_image_post' => 'Display',
			'minezine_display_meta_post' => 'Display',
			'minezine_next_preview_post' => 'Display',
			'minezine_display_image_page' => 'Display',
      'minezine_display_latest_posts' => 'Display',
      'minezine_latest_posts_headline' => 'Latest Posts',
			'minezine_body_google_fonts' => 'default',
			'minezine_headings_google_fonts' => 'default',
      'minezine_description_google_fonts' => 'default',
			'minezine_headline_google_fonts' => 'default',
      'minezine_headline_box_google_fonts' => 'default',
			'minezine_postentry_google_fonts' => 'default',
			'minezine_sidebar_google_fonts' => 'default',
			'minezine_menu_google_fonts' => 'default',
      'minezine_top_menu_google_fonts' => 'default',
      'minezine_header_facebook_link' => '',
      'minezine_header_twitter_link' => '',
      'minezine_header_google_link' => '',
      'minezine_header_rss_link' => '',
			'minezine_own_css' => '' );

$minezine_theme_options = wp_parse_args( $minezine_theme_options, $minezine_defaults );

if ( isset($minezine_theme_options[$key]) ) {
return $minezine_theme_options[$key]; } else {
return false;
}}

/**
 * Register Customizer sections and options.
 *  
*/
function minezine_customize_register($wp_customize){

$minezine_fonts = array(
			'default' => 'default',	
			'Abel' => 'Abel',			
			'Aclonica' => 'Aclonica',
			'Actor' => 'Actor',
			'Adamina' => 'Adamina',
			'Aldrich' => 'Aldrich',
			'Alice' => 'Alice',
			'Alike' => 'Alike',
			'Allan' => 'Allan',
			'Allerta' => 'Allerta',
      'Amarante' => 'Amarante',
			'Amaranth' => 'Amaranth',
      'Andika' => 'Andika',
			'Antic' => 'Antic',
			'Arimo' => 'Arimo',	
			'Artifika' => 'Artifika',
			'Arvo' => 'Arvo',
			'Brawler' => 'Brawler',
			'Buda' => 'Buda',	
      'Butcherman' => 'Butcherman',	
			'Cantarell' => 'Cantarell',	
      'Cherry Swash' => 'Cherry Swash',				
			'Chivo' => 'Chivo',			
			'Coda' => 'Coda',	
      'Concert One' => 'Concert One',		
			'Copse' => 'Copse',
			'Corben' => 'Corben',
			'Cousine' => 'Cousine',			
			'Coustard' => 'Coustard',
			'Covered By Your Grace' => 'Covered By Your Grace',
			'Crafty Girls' => 'Crafty Girls',
			'Crimson Text' => 'Crimson Text',
			'Crushed' => 'Crushed',
			'Cuprum' => 'Cuprum',
			'Damion' => 'Damion',
			'Dancing Script' => 'Dancing Script',
			'Dawning of a New Day' => 'Dawning of a New Day',
			'Days One' => 'Days One',
			'Delius' => 'Delius',
			'Delius Swash Caps' => 'Delius Swash Caps',
			'Delius Unicase' => 'Delius Unicase',
			'Didact Gothic' => 'Didact Gothic',
			'Dorsa' => 'Dorsa',
			'Droid Sans' => 'Droid Sans',
			'Droid Sans Mono' => 'Droid Sans Mono',
      'Droid Serif' => 'Droid Serif',
			'EB Garamond' => 'EB Garamond',
			'Expletus Sans' => 'Expletus Sans',
			'Fanwood Text' => 'Fanwood Text',
			'Federo' => 'Federo',
			'Fontdiner Swanky' => 'Fontdiner Swanky',
			'Forum' => 'Forum',
			'Francois One' => 'Francois One',
			'Gentium Basic' => 'Gentium Basic',
			'Gentium Book Basic' => 'Gentium Book Basic',
			'Geo' => 'Geo',
			'Geostar' => 'Geostar',
			'Geostar Fill' => 'Geostar Fill',
      'Gilda Display' => 'Gilda Display',
			'Give You Glory' => 'Give You Glory',
			'Gloria Hallelujah' => 'Gloria Hallelujah',
			'Goblin One' => 'Goblin One',
			'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
			'Gravitas One' => 'Gravitas One',
			'Gruppo' => 'Gruppo',
			'Hammersmith One' => 'Hammersmith One',
			'Holtwood One SC' => 'Holtwood One SC',
			'Homemade Apple' => 'Homemade Apple',
			'Inconsolata' => 'Inconsolata',
			'Indie Flower' => 'Indie Flower',
      'IM Fell English' => 'IM Fell English',
			'Irish Grover' => 'Irish Grover',
			'Irish Growler' => 'Irish Growler',
			'Istok Web' => 'Istok Web',
			'Judson' => 'Judson',
			'Julee' => 'Julee',
			'Just Another Hand' => 'Just Another Hand',
			'Just Me Again Down Here' => 'Just Me Again Down Here',
			'Kameron' => 'Kameron',
			'Kelly Slab' => 'Kelly Slab',
			'Kenia' => 'Kenia',
			'Kranky' => 'Kranky',
			'Kreon' => 'Kreon',
			'Kristi' => 'Kristi',
			'La Belle Aurore' => 'La Belle Aurore',
      'Lato' => 'Lato',
			'League Script' => 'League Script',
			'Leckerli One' => 'Leckerli One',
			'Lekton' => 'Lekton',
      'Lily Script One' => 'Lily Script One',
			'Limelight' => 'Limelight',
			'Lobster' => 'Lobster',
			'Lobster Two' => 'Lobster Two',
			'Lora' => 'Lora',
			'Love Ya Like A Sister' => 'Love Ya Like A Sister',
			'Loved by the King' => 'Loved by the King',
      'Lovers Quarrel' => 'Lovers Quarrel',
			'Luckiest Guy' => 'Luckiest Guy',
			'Maiden Orange' => 'Maiden Orange',
			'Mako' => 'Mako',
			'Marvel' => 'Marvel',
			'Maven Pro' => 'Maven Pro',
			'Meddon' => 'Meddon',
			'MedievalSharp' => 'MedievalSharp',
      'Medula One' => 'Medula One',
			'Megrim' => 'Megrim',
			'Merienda One' => 'Merienda One',
			'Merriweather' => 'Merriweather',
			'Metrophobic' => 'Metrophobic',
			'Michroma' => 'Michroma',
			'Miltonian Tattoo' => 'Miltonian Tattoo',
			'Miltonian' => 'Miltonian',
			'Modern Antiqua' => 'Modern Antiqua',
			'Molengo' => 'Molengo',
      'Monofett' => 'Monofett',
			'Monoton' => 'Monoton',
      'Montaga' => 'Montaga',
			'Montez' => 'Montez',
      'Montserrat' => 'Montserrat',
			'Mountains of Christmas' => 'Mountains of Christmas',
			'Muli' => 'Muli',
			'Neucha' => 'Neucha',
			'Neuton' => 'Neuton',
			'News Cycle' => 'News Cycle',
			'Nixie One' => 'Nixie One',
			'Nobile' => 'Nobile',
			'Nova Cut' => 'Nova Cut',
			'Nova Flat' => 'Nova Flat',
			'Nova Mono' => 'Nova Mono',
			'Nova Oval' => 'Nova Oval',
			'Nova Round' => 'Nova Round',
			'Nova Script' => 'Nova Script',
			'Nova Slim' => 'Nova Slim',
			'Nova Square' => 'Nova Square',
			'Numans' => 'Numans',
			'Nunito' => 'Nunito',
      'Open Sans' => 'Open Sans',
			'Oswald' => 'Oswald',
			'Over the Rainbow' => 'Over the Rainbow',
			'Ovo' => 'Ovo',
			'Pacifico' => 'Pacifico',
			'Passero One' => 'Passero One',
			'Patrick Hand' => 'Patrick Hand',
			'Paytone One' => 'Paytone One',
			'Permanent Marker' => 'Permanent Marker',
			'Philosopher' => 'Philosopher',
			'Play' => 'Play',
			'Playfair Display' => 'Playfair Display',
			'Podkova' => 'Podkova',
			'Poller One' => 'Poller One',
			'Pompiere' => 'Pompiere',
			'Prata' => 'Prata',
			'Prociono' => 'Prociono',
			'PT Sans' => 'PT Sans',
			'PT Sans Caption' => 'PT Sans Caption',
			'PT Sans Narrow' => 'PT Sans Narrow',
			'PT Serif' => 'PT Serif',
			'PT Serif Caption' => 'PT Serif Caption',
			'Puritan' => 'Puritan',
			'Quattrocento' => 'Quattrocento',
			'Quattrocento Sans' => 'Quattrocento Sans',
			'Questrial' => 'Questrial',
			'Radley' => 'Radley',
			'Raleway' => 'Raleway', 
      'Rationale' => 'Rationale',
			'Redressed' => 'Redressed',
      'Reenie Beanie' => 'Reenie Beanie', 
      'Roboto' => 'Roboto',
      'Roboto Condensed' => 'Roboto Condensed',
			'Rock Salt' => 'Rock Salt',
			'Rochester' => 'Rochester',
			'Rokkitt' => 'Rokkitt',
			'Rosario' => 'Rosario',
			'Ruslan Display' => 'Ruslan Display',
      'Sancreek' => 'Sancreek',
			'Sansita One' => 'Sansita One',
			'Schoolbell' => 'Schoolbell',
			'Shadows Into Light' => 'Shadows Into Light',
			'Shanti' => 'Shanti',
			'Short Stack' => 'Short Stack',
			'Sigmar One' => 'Sigmar One',
			'Six Caps' => 'Six Caps',
			'Slackey' => 'Slackey',
			'Smokum' => 'Smokum',
			'Smythe' => 'Smythe',
			'Sniglet' => 'Sniglet',
			'Snippet' => 'Snippet',
			'Sorts Mill Goudy' => 'Sorts Mill Goudy',
			'Special Elite' => 'Special Elite',
			'Spinnaker' => 'Spinnaker',
			'Stardos Stencil' => 'Stardos Stencil',
			'Sue Ellen Francisco' => 'Sue Ellen Francisco',
			'Sunshiney' => 'Sunshiney',
			'Swanky and Moo Moo' => 'Swanky and Moo Moo',
			'Syncopate' => 'Syncopate',
			'Tangerine' => 'Tangerine',
			'Tenor Sans' => 'Tenor Sans',
			'Terminal Dosis Light' => 'Terminal Dosis Light',
			'Tinos' => 'Tinos',
			'Tulpen One' => 'Tulpen One',
			'Ubuntu' => 'Ubuntu',
			'Ultra' => 'Ultra',
      'UnifrakturCook' => 'UnifrakturCook',
			'UnifrakturMaguntia' => 'UnifrakturMaguntia',
      'Unkempt' => 'Unkempt',
			'Unna' => 'Unna',
			'Varela' => 'Varela',
			'Varela Round' => 'Varela Round',
			'Vibur' => 'Vibur',
			'Vidaloka' => 'Vidaloka',
			'Volkhov' => 'Volkhov',
			'Vollkorn' => 'Vollkorn',
			'Voltaire' => 'Voltaire',
			'VT323' => 'VT323',
			'Waiting for the Sunrise' => 'Waiting for the Sunrise',
			'Wallpoet' => 'Wallpoet',
			'Walter Turncoat' => 'Walter Turncoat',
			'Wire One' => 'Wire One',
			'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
			'Yellowtail' => 'Yellowtail',
			'Yeseva One' => 'Yeseva One',
			'Zeyada' => 'Zeyada');
      
/**
 * Textarea custom control.
 *  
*/ 
class minezine_customize_textarea_control extends WP_Customize_Control {
    public $type = 'textarea'; 
    public function render_content() { ?>
        <label>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
        </label>
<?php }}

/**
 * Sections and Options.
 *  
*/     
    $wp_customize->add_section('minezine_general_settings', array(
        'title'    => __('MineZine General Settings', 'minezine'),
        'description' => '',
        'priority' => 120,
    ));
    $wp_customize->add_section('minezine_header_settings', array(
        'title'    => __('MineZine Header Settings', 'minezine'),
        'description' => '',
        'priority' => 130,
    ));
    $wp_customize->add_section('minezine_posts_settings', array(
        'title'    => __('MineZine Posts/Pages Settings', 'minezine'),
        'description' => '',
        'priority' => 140,
    ));
    $wp_customize->add_section('minezine_post_entries_settings', array(
        'title'    => __('MineZine Homepage/Blog Page Settings', 'minezine'),
        'description' => '',
        'priority' => 150,
    ));
    $wp_customize->add_section('minezine_font_settings', array(
        'title'    => __('MineZine Font Settings', 'minezine'),
        'description' => '',
        'priority' => 160,
    ));
 
    //  =============================
    //  = Color Scheme              =
    //  =============================
    $wp_customize->add_setting('minezine_css', array(
        'default'        => minezine_default_options('minezine_css'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
    ));
 
    $wp_customize->add_control('minezine_css_control', array(
        'label'      => __('Color Scheme', 'minezine'),
        'section'    => 'minezine_general_settings',
        'settings'   => 'minezine_css',
        'type'       => 'radio',
        'choices'    => array(
            'Red (default)' => __( 'Red (default)' , 'minezine' ),
            'Blue' => __( 'Blue' , 'minezine' ),
            'Green' => __( 'Green' , 'minezine' ),
        ),
    ));
    
    //  ==================================
    //  = Display Background Pattern     =
    //  ==================================
    $wp_customize->add_setting('minezine_display_background_pattern', array(
        'default'        => minezine_default_options('minezine_display_background_pattern'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
    ));
 
    $wp_customize->add_control('minezine_display_background_pattern_control', array(
        'label'      => __('Display Background Pattern', 'minezine'),
        'section'    => 'minezine_general_settings',
        'settings'   => 'minezine_display_background_pattern',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'minezine' ),
            'Hide' => __( 'Hide' , 'minezine' ),
        ),
    ));
    
    //  =================================
    //  = Background Pattern Opacity    =
    //  =================================
    $wp_customize->add_setting('minezine_background_pattern_opacity', array(
        'default'        => minezine_default_options('minezine_background_pattern_opacity'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
    ));
 
    $wp_customize->add_control('minezine_background_pattern_opacity_control', array(
        'label'      => __('Background Pattern Opacity', 'minezine'),
        'section'    => 'minezine_general_settings',
        'settings'   => 'minezine_background_pattern_opacity',
        'type'       => 'radio',
        'choices'    => array(
            'Default' => __( 'Default' , 'minezine' ),
            '100' => '100',
            '90' => '90',
            '80' => '80',
            '70' => '70',
            '60' => '60',
            '50' => '50',
            '40' => '40',
            '30' => '30',
            '20' => '20',
            '10' => '10',
        ),
    ));
    
    //  ==================================
    //  = Display Sidebar                =
    //  ==================================
    $wp_customize->add_setting('minezine_display_sidebar', array(
        'default'        => minezine_default_options('minezine_display_sidebar'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
    ));
 
    $wp_customize->add_control('minezine_display_sidebar_control', array(
        'label'      => __('Display Right Sidebar', 'minezine'),
        'section'    => 'minezine_general_settings',
        'settings'   => 'minezine_display_sidebar',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'minezine' ),
            'Hide' => __( 'Hide' , 'minezine' ),
        ),
    ));
    
    //  ===============================
    //  = Content/Excerpt Displaying  =
    //  ===============================
    $wp_customize->add_setting('minezine_content_archives', array(
        'default'        => minezine_default_options('minezine_content_archives'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
    ));
 
    $wp_customize->add_control('minezine_content_archives_control', array(
        'label'      => __('Content/Excerpt Displaying on Post Archives', 'minezine'),
        'section'    => 'minezine_general_settings',
        'settings'   => 'minezine_content_archives',
        'type'       => 'radio',
        'choices'    => array(
            'Excerpt' => __( 'Excerpt' , 'minezine' ),
            'Content' => __( 'Content' , 'minezine' ),
        ),
    ));
    
    //  =================================
    //  = Display Breadcrumb Navigation =
    //  =================================
    $wp_customize->add_setting('minezine_display_breadcrumb', array(
        'default'        => minezine_default_options('minezine_display_breadcrumb'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
    ));
 
    $wp_customize->add_control('minezine_display_breadcrumb_control', array(
        'label'      => __('Display Breadcrumb Navigation', 'minezine'),
        'section'    => 'minezine_general_settings',
        'settings'   => 'minezine_display_breadcrumb',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'minezine' ),
            'Hide' => __( 'Hide' , 'minezine' ),
        ),
    ));
    
    //  ==================================
    //  = Display Header Image           =
    //  ==================================
    $wp_customize->add_setting('minezine_display_header_image', array(
        'default'        => minezine_default_options('minezine_display_header_image'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
    ));
 
    $wp_customize->add_control('minezine_display_header_image_control', array(
        'label'      => __('Display Header Image', 'minezine'),
        'section'    => 'minezine_header_settings',
        'settings'   => 'minezine_display_header_image',
        'type'       => 'radio',
        'choices'    => array(
            'Everywhere' => __( 'Everywhere' , 'minezine' ),
            'Only on Homepage' => __( 'Only on Homepage' , 'minezine' ),
        ),
    ));
    
    //  =============================
    //  = Header Logo               =
    //  =============================
    $wp_customize->add_setting('minezine_logo_url', array(
        'default'        => minezine_default_options('minezine_logo_url'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_uri',
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'minezine_logo_url_control', array(
        'label'    => __('Header Logo', 'minezine'),
        'section'  => 'minezine_header_settings',
        'settings' => 'minezine_logo_url',
    )));
    
    //  ====================================
    //  = Display Site Description         =
    //  ====================================
    $wp_customize->add_setting('minezine_display_site_description', array(
        'default'        => minezine_default_options('minezine_display_site_description'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
    ));
 
    $wp_customize->add_control('minezine_display_site_description_control', array(
        'label'      => __('Display Site Description', 'minezine'),
        'section'    => 'minezine_header_settings',
        'settings'   => 'minezine_display_site_description',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'minezine' ),
            'Hide' => __( 'Hide' , 'minezine' ),
        ),
    ));
    
    //  ====================================
    //  = Display Search Form              =
    //  ====================================
    $wp_customize->add_setting('minezine_display_search_form', array(
        'default'        => minezine_default_options('minezine_display_search_form'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
    ));
 
    $wp_customize->add_control('minezine_display_search_form_control', array(
        'label'      => __('Display Search Form', 'minezine'),
        'section'    => 'minezine_header_settings',
        'settings'   => 'minezine_display_search_form',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'minezine' ),
            'Hide' => __( 'Hide' , 'minezine' ),
        ),
    ));
    
    //  =============================
    //  = Facebook Link             =
    //  =============================
    $wp_customize->add_setting('minezine_header_facebook_link', array(
        'default'        => minezine_default_options('minezine_header_facebook_link'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_uri',
    ));
 
    $wp_customize->add_control('minezine_header_facebook_link_control', array(
        'label'      => __('Facebook Link', 'minezine'),
        'section'    => 'minezine_header_settings',
        'settings'   => 'minezine_header_facebook_link',
    ));
    
    //  =============================
    //  = Twitter Link              =
    //  =============================
    $wp_customize->add_setting('minezine_header_twitter_link', array(
        'default'        => minezine_default_options('minezine_header_twitter_link'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_uri',
    ));
 
    $wp_customize->add_control('minezine_header_twitter_link_control', array(
        'label'      => __('Twitter Link', 'minezine'),
        'section'    => 'minezine_header_settings',
        'settings'   => 'minezine_header_twitter_link',
    ));
    
    //  =============================
    //  = Google+ Link              =
    //  =============================
    $wp_customize->add_setting('minezine_header_google_link', array(
        'default'        => minezine_default_options('minezine_header_google_link'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_uri',
    ));
 
    $wp_customize->add_control('minezine_header_google_link_control', array(
        'label'      => __('Google+ Link', 'minezine'),
        'section'    => 'minezine_header_settings',
        'settings'   => 'minezine_header_google_link',
    ));
    
    //  =============================
    //  = RSS Link                  =
    //  =============================
    $wp_customize->add_setting('minezine_header_rss_link', array(
        'default'        => minezine_default_options('minezine_header_rss_link'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_uri',
    ));
 
    $wp_customize->add_control('minezine_header_rss_link_control', array(
        'label'      => __('RSS Link', 'minezine'),
        'section'    => 'minezine_header_settings',
        'settings'   => 'minezine_header_rss_link',
    ));
    
    //  ==========================================
    //  = Display Featured Image on single posts =
    //  ==========================================
    $wp_customize->add_setting('minezine_display_image_post', array(
        'default'        => minezine_default_options('minezine_display_image_post'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
    ));
 
    $wp_customize->add_control('minezine_display_image_post_control', array(
        'label'      => __('Display Featured Image on single posts', 'minezine'),
        'section'    => 'minezine_posts_settings',
        'settings'   => 'minezine_display_image_post',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'minezine' ),
            'Hide' => __( 'Hide' , 'minezine' ),
        ),
    ));
    
    //  ====================================
    //  = Display Meta Box on single posts =
    //  ====================================
    $wp_customize->add_setting('minezine_display_meta_post', array(
        'default'        => minezine_default_options('minezine_display_meta_post'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
    ));
 
    $wp_customize->add_control('minezine_display_meta_post_control', array(
        'label'      => __('Display Meta Box on single posts', 'minezine'),
        'section'    => 'minezine_posts_settings',
        'settings'   => 'minezine_display_meta_post',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'minezine' ),
            'Hide' => __( 'Hide' , 'minezine' ),
        ),
    ));
    
    //  =================================
    //  = Next/Previous Post Navigation =
    //  =================================
    $wp_customize->add_setting('minezine_next_preview_post', array(
        'default'        => minezine_default_options('minezine_next_preview_post'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
    ));
 
    $wp_customize->add_control('minezine_next_preview_post_control', array(
        'label'      => __('Display Next/Previous Post Navigation on single posts', 'minezine'),
        'section'    => 'minezine_posts_settings',
        'settings'   => 'minezine_next_preview_post',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'minezine' ),
            'Hide' => __( 'Hide' , 'minezine' ),
        ),
    ));
    
    //  ==========================================
    //  = Display Featured Image on pages        =
    //  ==========================================
    $wp_customize->add_setting('minezine_display_image_page', array(
        'default'        => minezine_default_options('minezine_display_image_page'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
    ));
 
    $wp_customize->add_control('minezine_display_image_page_control', array(
        'label'      => __('Display Featured Image on pages', 'minezine'),
        'section'    => 'minezine_posts_settings',
        'settings'   => 'minezine_display_image_page',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'minezine' ),
            'Hide' => __( 'Hide' , 'minezine' ),
        ),
    ));
    
    //  ====================================
    //  = Display Latest Posts             =
    //  ====================================
    $wp_customize->add_setting('minezine_display_latest_posts', array(
        'default'        => minezine_default_options('minezine_display_latest_posts'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
    ));
 
    $wp_customize->add_control('minezine_display_latest_posts_control', array(
        'label'      => __('Display Latest Posts section on Latest Posts (Blog) page', 'minezine'),
        'section'    => 'minezine_post_entries_settings',
        'settings'   => 'minezine_display_latest_posts',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'minezine' ),
            'Hide' => __( 'Hide' , 'minezine' ),
        ),
    ));
    
    //  =================================
    //  = Latest Posts section headline =
    //  =================================
    $wp_customize->add_setting('minezine_latest_posts_headline', array(
        'default'        => minezine_default_options('minezine_latest_posts_headline'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
    ));
 
    $wp_customize->add_control('minezine_latest_posts_headline_control', array(
        'label'      => __('Latest Posts (Blog) page headline', 'minezine'),
        'section'    => 'minezine_post_entries_settings',
        'settings'   => 'minezine_latest_posts_headline',
    ));
    
    //  =============================
    //  = Body font                 =
    //  =============================
     $wp_customize->add_setting('minezine_body_google_fonts', array(
        'default'        => minezine_default_options('minezine_body_google_fonts'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
 
    ));
    $wp_customize->add_control( 'minezine_body_google_fonts_control', array(
        'settings' => 'minezine_body_google_fonts',
        'label'   => __('Body font', 'minezine'),
        'section' => 'minezine_font_settings',
        'type'    => 'select',
        'choices'    => $minezine_fonts,
    ));
    
    //  =============================
    //  = Site Title font           =
    //  =============================
     $wp_customize->add_setting('minezine_headings_google_fonts', array(
        'default'        => minezine_default_options('minezine_headings_google_fonts'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
 
    ));
    $wp_customize->add_control( 'minezine_headings_google_fonts_control', array(
        'settings' => 'minezine_headings_google_fonts',
        'label'   => __('Site Title font', 'minezine'),
        'section' => 'minezine_font_settings',
        'type'    => 'select',
        'choices'    => $minezine_fonts,
    ));
    
    //  =============================
    //  = Site Description font     =
    //  =============================
     $wp_customize->add_setting('minezine_description_google_fonts', array(
        'default'        => minezine_default_options('minezine_description_google_fonts'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
 
    ));
    $wp_customize->add_control( 'minezine_description_google_fonts_control', array(
        'settings' => 'minezine_description_google_fonts',
        'label'   => __('Site Description font', 'minezine'),
        'section' => 'minezine_font_settings',
        'type'    => 'select',
        'choices'    => $minezine_fonts,
    ));
    
    //  =============================
    //  = Page/Post Headlines font  =
    //  =============================
     $wp_customize->add_setting('minezine_headline_google_fonts', array(
        'default'        => minezine_default_options('minezine_headline_google_fonts'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
 
    ));
    $wp_customize->add_control( 'minezine_headline_google_fonts_control', array(
        'settings' => 'minezine_headline_google_fonts',
        'label'   => __('Page/Post Headlines (h1 - h6) font', 'minezine'),
        'section' => 'minezine_font_settings',
        'type'    => 'select',
        'choices'    => $minezine_fonts,
    ));
    
    //  ==========================================
    //  = MineZine Posts Widgets headlines font =
    //  ==========================================
     $wp_customize->add_setting('minezine_headline_box_google_fonts', array(
        'default'        => minezine_default_options('minezine_headline_box_google_fonts'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
 
    ));
    $wp_customize->add_control( 'minezine_headline_box_google_fonts_control', array(
        'settings' => 'minezine_headline_box_google_fonts',
        'label'   => __('MineZine Posts Widgets headlines font (in Latest Posts Homepage widget area)', 'minezine'),
        'section' => 'minezine_font_settings',
        'type'    => 'select',
        'choices'    => $minezine_fonts,
    ));
    
    //  =============================
    //  = Post Entry Headline font  =
    //  =============================
     $wp_customize->add_setting('minezine_postentry_google_fonts', array(
        'default'        => minezine_default_options('minezine_postentry_google_fonts'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
 
    ));
    $wp_customize->add_control( 'minezine_postentry_google_fonts_control', array(
        'settings' => 'minezine_postentry_google_fonts',
        'label'   => __('Post Entry Headline font', 'minezine'),
        'section' => 'minezine_font_settings',
        'type'    => 'select',
        'choices'    => $minezine_fonts,
    ));
    
    //  ========================================
    //  = Sidebar/Footer Widget Headlines font =
    //  ========================================
     $wp_customize->add_setting('minezine_sidebar_google_fonts', array(
        'default'        => minezine_default_options('minezine_sidebar_google_fonts'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
 
    ));
    $wp_customize->add_control( 'minezine_sidebar_google_fonts_control', array(
        'settings' => 'minezine_sidebar_google_fonts',
        'label'   => __('Sidebar/Footer Widget Headlines font', 'minezine'),
        'section' => 'minezine_font_settings',
        'type'    => 'select',
        'choices'    => $minezine_fonts,
    ));
    
    //  =============================
    //  = Main Header Menu font     =
    //  =============================
     $wp_customize->add_setting('minezine_menu_google_fonts', array(
        'default'        => minezine_default_options('minezine_menu_google_fonts'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
 
    ));
    $wp_customize->add_control( 'minezine_menu_google_fonts_control', array(
        'settings' => 'minezine_menu_google_fonts',
        'label'   => __('Main Header Menu font', 'minezine'),
        'section' => 'minezine_font_settings',
        'type'    => 'select',
        'choices'    => $minezine_fonts,
    ));
    
    //  =============================
    //  = Top Header Menu font      =
    //  =============================
     $wp_customize->add_setting('minezine_top_menu_google_fonts', array(
        'default'        => minezine_default_options('minezine_top_menu_google_fonts'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'minezine_sanitize_text',
 
    ));
    $wp_customize->add_control( 'minezine_top_menu_google_fonts_control', array(
        'settings' => 'minezine_top_menu_google_fonts',
        'label'   => __('Top Header Menu font', 'minezine'),
        'section' => 'minezine_font_settings',
        'type'    => 'select',
        'choices'    => $minezine_fonts,
    ));
    
    //  =============================
    //  = Custom CSS                =
    //  =============================
    $wp_customize->add_setting('minezine_own_css', array(
        'default'        => minezine_default_options('minezine_own_css'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));
 
    $wp_customize->add_control( new minezine_customize_textarea_control($wp_customize, 'minezine_own_css_control', array(
        'label'    => __('Custom CSS', 'minezine'),
        'section'  => 'minezine_general_settings',
        'settings' => 'minezine_own_css',
    )));
}

add_action('customize_register', 'minezine_customize_register');

/**
 * Sanitize URIs
*/
function minezine_sanitize_uri($uri) {
	if('' === $uri){
		return '';
	}
	return esc_url_raw($uri);
}

/**
 * Sanitize Texts
*/
function minezine_sanitize_text($str) {
	if('' === $str){
		return '';
	}
	return sanitize_text_field( $str);
} ?>