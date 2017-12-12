<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/materialize.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/stylechild.css">
<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div class="navbar-fixed hide-on-small-only">
	<div class="black">
		<div class="container">
			<p class="white-text left-align" style="padding:5px;font-size:14px;">“Produtos manuseados por mãos brasileiras com o maior cuidado e com o menor impacto ao nosso meio ambiente. Feitos um a um para você que é única.”
				<a href="https://api.whatsapp.com/send?phone=5541987144714">
					<span style="margin:0px 10px;" class="right white-text">(41) 98714-4714</span>
					<img class="right hide-on-med-and-down" src="http://pluspng.com/img-png/whatsapp-png-white-whatsapp-icon-256.png" width="20" style="margin:2px;" />
				</a>
				<a class="hide-on-med-and-down" href="https://www.instagram.com/store_ania/" target="_blank">
					<img class="right" src="https://straypet.net/wp-content/uploads/2014/11/instagram-icon-good.png" width="20" style="margin:2px 10px;" />
				</a>
				<a class="hide-on-med-and-down" href="http://facebook.com/storeania" target="_blank">
					<img class="right" src="https://www.uspca.com/wp-content/uploads/facebook-logo-png-white-i6.png" width="20" />
				</a>
			</p>
		</div>
	</div>
</div>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
		<div class="container">

			<?php
			/**
			 * Functions hooked into storefront_header action
			 *
			 * @hooked storefront_skip_links                       - 0
			 * @hooked storefront_social_icons                     - 10
			 * @hooked storefront_site_branding                    - 20
			 * @hooked storefront_secondary_navigation             - 30
			 * @hooked storefront_product_search                   - 40
			 * @hooked storefront_primary_navigation_wrapper       - 42
			 * @hooked storefront_primary_navigation               - 50
			 * @hooked storefront_header_cart                      - 60
			 * @hooked storefront_primary_navigation_wrapper_close - 68
			 */
			do_action( 'storefront_header' ); ?>
		</div>
	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		/**
		 * Functions hooked in to storefront_content_top
		 *
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'storefront_content_top' );
