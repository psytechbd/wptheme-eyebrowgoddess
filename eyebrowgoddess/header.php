<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EyebrowGoddess
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
	<?php wp_head(); ?>
	<style>
		.widget{margin:2px}
		.wp-block-columns{margin:0}
		.pagebox{background:white}
		.main-navigation {float: none;margin-top:10px}
		.main-navigation ul {text-align: center; display:block}
		.main-navigation li {float: none;display: inline-block;padding:0 10px ; border-right:1px solid lightgray}
		.main-navigation li:hover {background:lightgray;}
		.main-navigation li:last-child {border:none}
		.main-navigation li a{color:black}
		.border{border:1px solid lightgray;padding:5px}
		.pagebox{padding:20px}
		.footer{margin-top:100px}
		.tag{margin:300px 0;text-align:center} 
		.footer{color: gray}
		.entry-header{display:none}
		.entry-content{margin:0}
		.pinkborder{border:5px solid #FF1493; padding:10px}
		.pinkborder p strong{color:#FF1493}
		.wpforms-container input.wpforms-field-medium, .wpforms-container select.wpforms-field-medium, .wpforms-container .wpforms-field-row.wpforms-field-medium {
    max-width: 100% !important;}
	.formborder{border:3px dashed #FF1493; padding: 10px; margin-top:10px}
	.wpforms-submit{width:100% !important}
	.aligncenter{text-align:center}
	.aligncenter img{margin-bottom:20px}
		
	</style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'eyebrowgoddess' ); ?></a>

<div class="container pagebox">
	<div class="row">
		<div class="col-md-12">
			<header id="masthead" class="site-header">
			

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'eyebrowgoddess' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

		</div>
	</div>
</div>