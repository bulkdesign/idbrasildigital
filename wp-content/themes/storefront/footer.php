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
            <div class="col l3 s12">
                <p class="grey-text text-lighten-4 left-align">INSTITUCIONAL</p>
                <ul>
                  <li class="left-align"><a href="/prazos-e-entrega">Prazos e Entrega</a></li>
                  <li class="left-align"><a href="/formas-de-pagamento">Formas de Pagamento</a></li>
                  <li class="left-align"><a href="/politica-de-privacidade">Política de Privacidade</a></li>
                  <li class="left-align"><a href="/politica-de-trocas-e-devolucoes">Política de Trocas e Devoluções</a></li>
              </ul>
            </div>
            <!-- LINKS -->
            <div class="col l3 s12">
                <p class="grey-text text-lighten-4 left-align">LINKS RÁPIDOS</p>
                <ul>
                  <li class="left-align"><a href="/feito-a-mao">Feito à mão</a></li>
                  <li class="left-align"><a href="/nos-♥-natureza">Nós ♥ Natureza</a></li>
                  <li class="left-align"><a href="/personalizados">Do Seu Jeito</a></li>
                  <li class="left-align"><a href="/sobre-a-ania">Sobre a Ania</a></li>
                  <li class="left-align"><a href="/contato">Central de Atendimento</a></li>
              </ul>
            </div>
            <!-- REDES SOCIAIS-->
            <div class="col l3 s12">
                <p class="grey-text text-lighten-4 left-align">REDES SOCIAIS</p>
                <ul>
                  <li class="left-align"><a href="https://api.whatsapp.com/send?phone=5541987144714">Fone: (41) 98714-4714</a></li>
                  <li class="left-align"><a href="http://facebook.com/storeania" target="_blank">Facebook</a></li>
                  <li class="left-align"><a href="https://www.instagram.com/store_ania/" target="_blank">Instagram</a></li>
              </ul>
            </div>
            <!-- FORMAS PAGAMENTO -->
            <div class="col l3 s12">
                <p class="grey-text text-lighten-4 left-align">FORMAS DE PAGAMENTO</p>
                <ul>
                  <li class="left-align">
                    <img src="<?php bloginfo('template_url'); ?>/images/rodape.png">
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container center">
          Ania Store © <?php echo date('Y'); ?> - Todos os direitos reservados | Made by <a class="purple-text text-lighten-3" href="http://www.bulkdesign.com.br" target="blank">Bulk Design</a>
        </div>
      </div>
  </footer>

</div><!-- #page -->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/funcoes.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/materialize.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110389287-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110389287-1');
</script>
<style type="text/css">
  
.storefront-full-width-content .content-area {
  height: auto !important;
}

</style>
<?php wp_footer(); ?>

</body>
</html>
