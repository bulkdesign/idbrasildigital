<?php
/**
 * Payment instructions.
 *
 * @author  Claudio Sanches
 * @package WC_Itau_Shopline/Templates
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<div class="woocommerce-message">
	<span>
		<a class="button" href="<?php echo esc_url( $url ); ?>" target="_blank" style="display: block !important; visibility: visible !important;margin-top: 5px;font-size: 18px;"><?php esc_html_e( 'PAGAR BOLETO', 'wc-itau-shopline' ); ?></a>
		<?php if ( $billet_only ) : ?>
			<?php esc_html_e( 'Clique no botão ao lado para efetuar o pagamento:', 'wc-itau-shopline' ); ?>
		<?php else : ?>
			<?php esc_html_e( 'Clique no botão ao lado para efetuar o pagamento:', 'wc-itau-shopline' ); ?>
		<?php endif; ?>
		<br />
		<?php esc_html_e( 'Após recebermos a confirmação do pagamento, o seu pedido será processado.', 'wc-itau-shopline' ); ?>
	</span>
</div>