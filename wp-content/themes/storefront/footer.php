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
            <div class="col l2 s12 left">
                <p class="grey-text text-lighten-4 left-align">LINKS RÁPIDOS</p>
                <ul>
                  <li class="left-align"><a href="/">Home</a></li>
                  <li class="left-align"><a href="/a-id-brasil">A ID Brasil</a></li>
                  <li class="left-align"><a href="/certificados-digitais">Certificados Digitais</a></li>
                  <li class="left-align"><a href="/hardware-avulso">Hardware Avulso</a></li>
                  <li class="left-align"><a href="/validacao-em-domicilio">Validação em Domicílio</a></li>
                  <li class="left-align"><a href="/contato">Contato</a></li>
              </ul>
            </div>
            <!-- LOCALIZACAO -->
            <div class="col l8 s12 center">
              <p class="grey-text text-lighten-4">LOCALIZAÇÃO</p>
              <ul>
                <li>Av. Mal. Floriano Peixoto, 7971 - Sala 12 - Boqueirão | Fone: (41) 3043-0800</li>
                <li>R. São José dos Pinhais, 196 - Sítio Cercado | Fone: (41) 3308-3105</li>
                <li>R. João Bettega, 6369 - Cidade Industrial - CIC | Fone: (41) 3121-3737</li>
                
                
              </ul>
            </div>
            <!-- REDES SOCIAIS-->
            <div class="col l2 s12 right">
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

<style type="text/css">
  
.storefront-full-width-content .content-area {
  height: auto !important;
}

</style>

</body>
</html>