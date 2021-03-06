<?php
/**
 * Plain email instructions.
 *
 * @author  Claudio_Sanches
 * @package WooCommerce_PagSeguro/Templates
 * @version 2.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

_e( 'Payment', 'woocommerce-pagseguro' );

echo "\n\n";

if ( 2 == $type ) {

	_e( 'Please use the link below to view your Banking Ticket, you can print and pay in your internet banking or in a lottery retailer:', 'woocommerce-pagseguro' );

	echo "\n";

	echo esc_url( $link );

	echo "\n";

	_e( 'After we receive the ticket payment confirmation, your order will be processed.', 'woocommerce-pagseguro' );

} elseif ( 3 == $type ) {

	_e( 'Please use the link below to make the payment in your bankline:', 'woocommerce-pagseguro' );

	echo "\n";

	echo esc_url( $link );

	echo "\n";

	_e( 'After we receive the confirmation from the bank, your order will be processed.', 'woocommerce-pagseguro' );

} else {

	echo sprintf( __( 'Você acabou de fazer o pagamento em %s usando o %s.', 'woocommerce-pagseguro' ), $installments . 'x', $method );

	echo "\n";

	_e( 'Assim que a operadora do cartão de crédito confirmar seu pagamento, seu pedido será processado.', 'woocommerce-pagseguro' );

}

echo "\n\n****************************************************\n\n";
