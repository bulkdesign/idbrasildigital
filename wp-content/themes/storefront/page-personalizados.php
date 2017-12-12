<?php /* Template Name: Personalizados */ ?>

<?php get_header('personalizados');?>

    <header class="page-header">
      <h1 class="page-title"><?php the_title(); ?></h1>
    </header><!-- .page-header -->
    <!-- GRADE -->
    <?php
      /**
       * Functions hooked in to storefront_before_content
       *
       * @hooked storefront_header_widget_region - 10
       */
      do_action( 'storefront_before_content' ); ?>

      <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
          <div class="row">
            <div class="col l12 s12">
              <p>Feitos um a um pra você que é única! Aqui na Ania Store (yass!) temos produtos "Do seu Jeito", exclusivos e, o melhor de tudo, em poucos cliques ele será todinho seu, do jeitinho que você escolher. Além disso você pode levar pra casa um item que só você vai ter, feito à mão, com seu monograma. Grave suas iniciais, ou presenteie com originalidade. Diferencie-se! Nossa proposta é te entregar produtos com mais personalidade, e porque não, com a SUA personalidade, sua marca!<br>
              Aqui multiplicamos suas possibilidades, mas quem escolhe como isso vai acontecer é você!</p>
              <p>Você pode escolher produtos e personalizá-los para serem só seus ou também para dar de presente aos seus amigos e familiares:</p>
              <div class="grade-personalizados">
                <div class="col m4 s12">
                  <img class="hoverable" src="<?php bloginfo('template_url'); ?>/images/voce.jpg">
                  <h1>Para Você</h1>
                </div>
                <div class="col m4 s12">
                  <img class="hoverable" src="<?php bloginfo('template_url'); ?>/images/amigos.jpg">
                  <h1>Para Amigos</h1>
                </div>
                <div class="col m4 s12">
                  <img class="hoverable" src="<?php bloginfo('template_url'); ?>/images/familia.jpg">
                  <h1>Para Família</h1>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col l12 s12">
              <p>Ou também você pode escolher uma das categorias de produtos abaixo para personalizar:</p>
              <div class="grade-personalizados">
                <div class="col m3 s12">
                  <a href="/categorias/personalizados_doseujeito/chapeupersonalizado/">
                    <img class="hoverable" src="<?php bloginfo('template_url'); ?>/images/chapeu-sorvete-aniastore.jpg">
                    <h1>Chapéus</h1>
                  </a>
                </div>
                <div class="col m3 s12">
                  <a href="/categorias/personalizados_doseujeito/viseirapersonalizada/">
                    <img class="hoverable" src="<?php bloginfo('template_url'); ?>/images/viseira-aniastore.jpg">
                    <h1>Viseiras</h1>
                  </a>
                </div>
                <div class="col m3 s12">
                  <a href="/categorias/personalizados_doseujeito/necessairepersonalizada/">
                    <img class="hoverable" src="<?php bloginfo('template_url'); ?>/images/necessaire-aniastore.png">
                    <h1>Necessaires</h1>
                  </a>
                </div>
                <div class="col m3 s12">
                  <a href="/categorias/personalizados_doseujeito/bolsapersonalizada/">
                    <img class="hoverable" src="<?php bloginfo('template_url'); ?>/images/bolsa-aniastore.jpg">
                    <h1>Bolsas</h1>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
<?php get_footer('home'); ?>