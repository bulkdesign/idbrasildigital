<?php /* Template Name: Validacao PJ */ ?>

<?php get_header('conta');?>

  <div id="post-<?php the_ID(); ?>">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h1 class="center blue-text bold"><?php the_title(); ?></h1>
          <p>Esta etapa é necessária para realizarmos a conferência dos dados do responsável pelo Certificado:</p>
        </div>
        <div class="col s12 padding40">
          <div class="row">
            <form action="<?php bloginfo('template_url'); ?>/vd.php" method="post" class="col s12" id="formvalidation">
              <div id="ajax-response"></div>
              <div class="row">
                <div class="input-field col s12 l6 push-l3">
                  <input maxlength="14" placeholder="Digite o número do CPF" name="cpf_da_validacao" id="cpf_da_validacao" type="text" class="validate" required>
                  <label for="cpf_da_validacao">CPF do Responsável</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 l6 push-l3">
                  <input maxlength="18" placeholder="Digite o número do CNPJ" name="cnpj_da_validacao" id="cnpj_da_validacao" type="text" class="validate" required>
                  <label for="cnpj_da_validacao">CNPJ</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 l6 push-l3">
                  <input maxlength="10" placeholder="Insira a data de nascimento" name="nascimento_da_validacao" id="nascimento_da_validacao" type="text" class="validate" required>
                  <label for="nascimento_da_validacao">Data de Nascimento</label>
                </div>
              </div>
              <div class="row padding40">
                <div class="col s12 right">
                  <button class="btn waves-effect blue" type="submit">Validar
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </form>
          </div>

        </div>
        <!-- 
        <div class="col s12">
          <?php //$checkout_url = WC()->cart->get_checkout_url(); ?>
          <a href="<?php //echo $checkout_url; ?>" class="checkout-button button alt wc-forward"><?php // _e( 'Finalizar compra', 'woocommerce' ); ?></a>
        </div>
      -->
      </div>
    </div>
  </div>
    
<?php get_footer(); ?>