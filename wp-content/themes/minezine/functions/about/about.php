<?php
/**
 * About MineZine admin page framework.
 * @package MineZine
 * @since MineZine 2.0.0
*/   

add_action('admin_init', 'minezine_about_setup');
function minezine_about_setup() {
$minezine_about = array (

array( "name" => __( 'MineZine' , 'minezine' ),
	"type" => "title"),

array( "type" => "open"),

// Start Tabs
array( "name" => "Start Tabs",
		"type" => "tabs-open",
		"icon" => "layout"),

	// Home
	array( "name" => __( '<i class="icon_house" aria-hidden="true"></i>Welcome' , 'minezine' ),
			"id" => "tab_menu_0",
			"type" => "tab",
			"icon" => "layout",
			"class" => " selected first"),

  // Get Premium
	array( "name" => __( '<i class="icon_cart" aria-hidden="true"></i>GET PREMIUM' , 'minezine' ),
			"type" => "tab",
			"id" => "tab_menu_1",
			"class" => ""),
	
array( "name" => "Close Tabs",
		"type" => "tabs-close",
		"icon" => "layout"),


array( "name" => "Start Container",
		"type" => "container-open",
		"icon" => "layout"),

array( "name" => "tab_content_0",
		"type" => "tabcontent-open",
		"display" => "block",
		"icon" => "layout"),

	// Home
	array( "name" => __( 'Welcome to MineZine!' , 'minezine' ),
		"type" => "heading",
		"icon" => "layout"),
	
	array("name" => __( 'First of all, I would like to thank you for choosing the MineZine theme! I firmly believe that you will be satisfied with this template.' , 'minezine' ),
		"type" => "infotext"),
	
	array( "name" => __( 'About MineZine' , 'minezine' ),
		"type" => "heading",
		"icon" => "layout"),
	
	array("name" => __( 'MineZine is an easily customizable WordPress blog and magazine theme. It is a fully responsive theme that allows for easy viewing on any device.' , 'minezine' ),
		"type" => "infotext"),
    
	array("name" => __( 'Since version 2.0.0, the Theme Options have been moved to the <a href="customize.php">Customizer</a>.' , 'minezine' ),
		"type" => "infotext"),

  array( "name" => "tab_content_0",
		"type" => "tabcontent-close",
		"icon" => "layout"),
// Close Home

// Open Get Premium
array( "name" => "tab_content_1",
		"type" => "tabcontent-open",
		"display" => "none",
		"icon" => "layout"),

	array( "name" => __( 'Get MineZine Premium Version' , 'minezine' ),
		"type" => "heading",
		"icon" => "layout"),
		
  array( "type" => "infotext",
		"name" => __( 'If you would like to purchase the MineZine Premium Version, you can do so on <a href="http://themes.tomastoman.cz/downloads/minezine-premium/" target="_blank">Developers Official Website</a>.' , 'minezine' )),
    
  array( "type" => "infotext",
		"name" => __( '<strong>What the MineZine Premium Version offers in addition?</strong><br />
    - Support for Drag-and-drop Page Builder with 37 widgets for creating custom page templates<br />
    - 7 pre-defined color schemes (Blue, Green, Orange, Pink, Purple, Red and Turquoise)<br />
    - Unlimited ability to create custom Color scheme (color settings)<br />
    - Ability to set different Header Images on the individual pages/posts<br />
    - Ability to set different Background Images/Colors for the individual pages/posts<br />
    - Ability to set the Cover size for the Background Images<br />
    - Homepage Header Slideshow<br />
    - Image Slideshow with 3 different templates<br /> 
    - Font size settings<br />
    - Header Carousel box (slider with your Latest Posts or a Custom Menu)<br />
    - Related posts box on the single posts<br />
    - 6 Custom widgets for displaying the latest posts from the specific categories (as a Column, Grid, List, Slider, Thumbnails and by Default)<br />
    - Custom Tab Widget (displays popular posts, recent posts, comments and tags in tabbed format)<br />
    - Info-Box Custom widget (displays a text box with an icon)<br />
    - Social Networking Custom widget (displays 10 social network profile links)<br />
    - Facebook Like Box Custom widget<br />
    - Twitter Following Custom widget<br />
    - Integrated Facebook/Twitter/Google +1 sharing buttons on posts/pages/post entries<br />
    - Integrated automatic Sitemap generator with advanced options<br />
    - Custom Shortcodes for adding buttons, images, tables and highlighted texts anywhere you like<br />
    - Custom Shortcode for displaying Google maps<br />
    - Custom Shortcode for displaying specific listing of posts anywhere you like<br />
    - 8 Custom Page templates' , 'minezine' )),
    
  array( "name" => "tab_content_1",
		"type" => "tabcontent-close",
		"icon" => "layout"),
    
// Close Get Premium

array("name" => "Close Container",
		"type" => "container-close",
		"icon" => "layout"),

array( "type" => "close") 
); return $minezine_about; }

add_action('admin_head', 'minezine_admin_css');

function minezine_admin_css() { ?>
     
	<script language="JavaScript">
		jQuery.noConflict();
		jQuery(document).ready(function($) {
	
		$(".tabs .tab[id^=tab_menu]").click(function() {
			var curMenu=$(this);
			$(".tabs .tab[id^=tab_menu]").removeClass("selected");
			curMenu.addClass("selected");
	
			var index=curMenu.attr("id").split("tab_menu_")[1];
			$(".curvedContainer .tabcontent").css("display","none");
			$(".curvedContainer #tab_content_"+index).css("display","block");
		});
	});
	</script>

<?php }
function minezine_add_admin() {
	add_theme_page( __( 'About MineZine' , 'minezine' ), __( 'About MineZine' , 'minezine' ), 'edit_theme_options', 'about.php', 'minezine_admin', '', '1' );
}

function minezine_admin() {
$minezine_about = minezine_about_setup(); 
  wp_enqueue_style('minezine-framework-style', get_template_directory_uri() . '/functions/about/css.css');
  wp_enqueue_style('minezine-framework-icons', get_template_directory_uri() . '/css/elegantfont.css');
  $minezine_manualurl = get_template_directory_uri() . '/docs/documentation.html';
?>

	<div id="wrap_fm"><!-- [ Header ]-->
		<div class="header_fm">
			<div class="logo_fm"><?php _e( 'MineZine Theme' , 'minezine' ); ?></div>
		</div>

		<!-- [ Top Menu ]-->
		<div class="top_menu_fm">
			<a target="_blank" class="doc_fm" href="<?php echo esc_url($minezine_manualurl); ?>"><?php _e( 'Documentation' , 'minezine' ); ?></a><a target="_blank" class="support_fm" href="http://themes.tomastoman.cz/support"><?php _e( 'Support' , 'minezine' ); ?></a><a target="_blank" class="premium_fm" href="http://themes.tomastoman.cz/downloads/minezine-premium/"><?php _e( 'Get Premium Version' , 'minezine' ); ?></a>
		</div>

	<?php 
	foreach ($minezine_about as $value) {
	switch ( $value['type'] ) {
	case "open":
	?> 
	<?php break; case "title": ?> 

	<!-- [ Body ]-->
	<div id="wrap_body_fm">
	<div class="tabscontainer">

	<?php break; case "close": ?> 

</div></div>
	
	<?php break; case "heading":?>
	<h1><?php echo $value['name']; ?></h1>
	
	<?php break; case "subheader":?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
	
  <?php break; case "infotext":?>
	<div class="infotext"><?php echo $value['name']; ?></div>
	
	<?php break; case "paragraph":?>
	<div class="desc_fm"><small><?php echo $value['name']; ?></small></div>
  	
	<?php break; case "tabs-open":?>	
	<div class="tabs">
	
	<?php break; case "tabs-close":?>	
	</div>	
	
	<?php break; case "tab":?>	
	<div class="tab<?php echo $value['class']; ?>" id="<?php echo $value['id']; ?>">
	<div class="link"><?php echo $value['name']; ?></div>
	<div class="arrow"></div>
	</div>
 	
 	<?php break; case "container-open":?>	
	<div class="curvedContainer">
 	
 	<?php break; case "container-close":?>	
	</div>	
 	
	<?php break; case "tabcontent-open":?>	
	<div class="tabcontent" id="<?php echo $value['name']; ?>" style="display:<?php echo $value['display']; ?>" >
	
	<?php break; case "tabcontent-close":?>	
	</div>
	 	
<?php break;
}
}
?>

<?php
}
add_action('admin_menu', 'minezine_add_admin'); ?>