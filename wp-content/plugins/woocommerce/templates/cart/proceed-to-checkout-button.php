<?php
/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/proceed-to-checkout-button.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<!-- <?php

// set our flag to be false until we find a product in that category
// $cat_check = false;
        
// check each cart item for our category
// foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
            
//     $product = $cart_item['data'];

//     $categorias_cnpj = array(
//     	'ct-e',
//     	'a1-cte',
//     	'a3-cte',
//     	'e-cnpj',
//     	'a1-cnpj',
//     	'a3-cnpj',
//     	'e-cnpj-me',
//     	'a3-cnpj-m3',
//     	'nf-e',
//     	'a1-nfe',
//     	'a3-nfe' 
//     );

//     if ( has_term( $categorias_cnpj, 'product_cat', $product->id ) ) {
//         $cat_check = true;
//         break;
//     }
// }
        
// if ( $cat_check ) { ?> -->

<!-- <?php //$checkout_cnpj = get_site_url() . "/validacao-pj/"; ?>
<a href="<?php //echo $checkout_cnpj; ?>" class="checkout-button button alt wc-forward">
	<?php //_e( 'Fazer validação de CNPJ', 'woocommerce' ); ?>
</a>

<?php // } else { ?>

<?php //$checkout_cpf = get_site_url() . "/validacao-pf/"; ?>
<a href="<?php //echo $checkout_cpf; ?>" class="checkout-button button alt wc-forward">
	<?php //_e( 'Fazer validação de CPF', 'woocommerce' ); ?>
</a>

<?php // } ?> -->

<a href="<?php echo esc_url( wc_get_checkout_url() );?>" class="checkout-button button alt wc-forward">
	<?php esc_html_e( 'Fazer Checkout', 'woocommerce' ); ?>
</a>