<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

    </div><!-- .col-full -->
  </div><!-- #content -->

  <footer class="page-footer">
    <div class="container">
        <div class="row">
          <div class="col l12 m12 s12 center">
            <!-- INSTITUCIONAL -->
            <div class="col l2 hide-on-med-and-down left">
              <p class="grey-text text-lighten-4 left-align">NAVEGAÇÃO</p>
              <ul>
                  <li class="left-align"><a href="/">Home</a></li>
                  <li class="left-align"><a href="/a-id-brasil">A ID Brasil</a></li>
                  <li class="left-align"><a href="/certificados-digitais">Certificados Digitais</a></li>
                  <li class="left-align"><a href="/hardware-avulso">Hardware Avulso</a></li>
                  <li class="left-align"><a href="/validacao-em-domicilio">Validação em Domicílio</a></li>
                  <li class="left-align"><a href="/agendamento">Agendamento</a></li>
              </ul>
            </div>
            <div class="col l2 hide-on-med-and-down">
              <p class="grey-text text-lighten-4 left-align">LINKS RÁPIDOS</p>
              <ul>
                  <li class="left-align"><a href="/contato">Contato</a></li>
                  <li class="left-align"><a href="/suporte">Suporte</a></li>
                  <li class="left-align"><a href="/cadastro-contabilidade">Cadastro Contábil</a></li>
                  <?php if ( ! is_user_logged_in() ) { ?>
                    <li class="left-align"><a href="/login">Login</a></li>
                  <?php } else { ?>
                    <li class="left-align"><a href="<?php echo wp_logout_url( get_permalink() ); ?>">Logout</a></li>
                  <?php } ?>
              </ul>
            </div>
            <div class="col s12 hide-on-large-only">
              <p class="grey-text text-lighten-4 center">LINKS RÁPIDOS</p>
              <ul>
                  <li class="center"><a href="/contato">Contato</a></li>
                  <li class="center"><a href="/suporte">Suporte</a></li>
                  <li class="center"><a href="/cadastro-contabilidade">Cadastro Contábil</a></li>
                  <?php if ( ! is_user_logged_in() ) { ?>
                    <li class="center"><a href="/login">Login</a></li>
                  <?php } else { ?>
                    <li class="center"><a href="<?php echo wp_logout_url( get_permalink() ); ?>">Logout</a></li>
                  <?php } ?>
              </ul>
              <div class="margin50 hide-on-large-only"></div>
            </div>
            <!-- LOCALIZACAO -->
            <div class="col l6 s12 center">
              <p class="grey-text text-lighten-4">LOCALIZAÇÃO</p>
              <ul>
                <li>AR Centro: Edifício Asa - Rua Voluntários da Pátria, 475 - Cj. 2012 - Centro | Fone: (41) 3042-0700</li>
                <li>ITS Boqueirão: Av. Mal. Floriano Peixoto, 7971 - Sala 12 - Boqueirão | Fone: (41) 3043-0800</li>
                <li>ITS Sítio Cercado: R. São José dos Pinhais, 196 - Sítio Cercado | Fone: (41) 3308-3105</li> 
              </ul>
            </div>
            <!-- REDES SOCIAIS-->
            <div class="col l2 hide-on-med-and-down right">
                <p class="grey-text text-lighten-4 right-align">REDES SOCIAIS</p>
                <ul>
                  <li class="right padding-left20">
                    <a href="#" target="_blank">
                      <img width="30" src="<?php bloginfo('template_url'); ?>/images/linkedin.png">
                    </a>
                  </li>
                  <li class="right">
                    <a href="#" target="_blank">
                      <img width="30" src="<?php bloginfo('template_url'); ?>/images/facebook.png" />
                    </a>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container center">
          ID Brasil Digital © <?php echo date('Y'); ?> - Todos os direitos reservados | Made by <a class="purple-text text-lighten-3" href="http://www.bulkdesign.com.br" target="blank">Bulk Design</a>
        </div>
      </div>
  </footer>

</div><!-- #page -->
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/bootstrap-table.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/filter-control/bootstrap-table-filter-control.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/funcoes.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/materialize.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<script type="text/javascript">

$(document).ready(function(){
  $('ul.tabs').tabs('select_tab', 'tab_id');
  $("input[name=billing_postcode]").blur(function(){
    var cep = $(this).val();
    if(cep){
    var url = 'https://viacep.com.br/ws/' + cep + '/json/';
      $.ajax({
        url: url,
        dataType: 'json',
        crossDomain: true,
        contentType: "application/json",
        success : function(json){

        if(json.logradouro){

          $("input[name=billing_address_1]").val(json.logradouro);
          $("input[name=billing_neighborhood]").val(json.bairro);
          $("input[name=billing_city]").val(json.localidade);

          }
        }
      });
    }
  });
});
 
</script>
<style type="text/css">
  
.storefront-full-width-content .content-area {
  height: auto !important;
}

</style>

</body>
</html>