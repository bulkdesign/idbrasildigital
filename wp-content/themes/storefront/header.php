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
<script src='https://www.google.com/recaptcha/api.js'></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>
	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
		<div class="container">
			<div class="row hide-on-med-and-down" style="margin:0;">
				<div class="col l3 hide-on-med-and-down" style="width: 250px">
					<?php storefront_site_title_or_logo(); ?>
				</div>
				<ul class="col l5 hide-on-med-and-down padding15">
					<li class="col s12 l3">
						<a class="blue-text" href="/suporte">Suporte</a>
					</li>
					<li class="col s12 l4">
						<a class="blue-text" href="/cadastro-contabilidade/">Cadastro Contábil</a>
					</li>
					<?php if ( is_user_logged_in() ) { ?>
						<li class="col s12 l3">
							<a class="blue-text" href="/minha-conta">Minha conta</a>
						</li>
					<?php } else { } ?>
					<?php if ( ! is_user_logged_in() ) { ?>
						<li class="col s12 l2">
							<a class="blue-text" href="/login/">Login</a>
						</li>
					<?php } else { ?>
						<li class="col s12 l2">
							<a class="blue-text" href="<?php echo wp_logout_url( get_permalink() ); ?>">Sair</a>
						</li>
					<?php } ?>
				</ul>
				<div class="col l3 push-l1 hide-on-med-and-down">
					<ul id="site-header-cart" class="site-header-cart menu">
						<li class="<?php echo esc_attr( $class ); ?>">
							<?php storefront_cart_link(); ?>
						</li>
						<li>
							<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
						</li>
					</ul>
				</div>
			</div>

			<div class="row" style="margin:0;">
				<div class="col s12 hide-on-large-only">
					<div class="col s9" style="margin-bottom:30px;">
						<?php storefront_site_title_or_logo(); ?>
					</div>
					<div class="col s1 right">
						<main class="hide-on-large-only">
							<a class="black-text toggle-overlay"><i class="small material-icons" style="margin: 10px -10px;">menu</i></a>
						</main>	

						<aside>
							<div class="outer-close toggle-overlay">
							  <a class="white-text right close"><i class="margin-clear small material-icons" style="margin:20px;">clear</i></a>
							</div>
							<nav class="primary-navigation mobile-menu" role="navigation" aria-label="<?php esc_html_e( 'Secondary Navigation', 'storefront' ); ?>">
						        <ul>
							    <?php
								    wp_nav_menu(
									    array(
										    'theme_location'	=> 'secondary',
										    'fallback_cb'		=> '',
									    )
								    );
							    ?>
						        </ul>
							</nav>
						</aside>
					</div>
				</div>
			</div>

		</div>
		<div class="blue hide-on-med-and-down">
			<div class="container">
				<?php do_action( 'storefront_header' ); ?>
			</div>
		</div>
	</header>
	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">
		<?php do_action( 'storefront_content_top' ); ?>