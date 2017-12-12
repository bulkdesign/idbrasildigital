<?php /* Template Name: Home */ ?>
<?php get_header();?>
    <!--SESSÃO PRODUTOS-->
    <section id="Produtos" class="session scrollspy">
      <div class="container">
        <div class="row">
          <div class="col s12 m12 l4">
              <a href="http://www.aniastore.com.br/categorias/kids">
                <div class="Destaque Destaque3" style=" background-image: url('<?php bloginfo('template_url');?>/images/gif-infantil.gif');">
                </div>
              </a>
              <h4 class="paddingtop">Kids</h4>
          </div>
          <div class="col s12 m12 l4">
              <a href="http://www.aniastore.com.br/verao">
                <div class="Destaque Destaque3" style=" background-image: url('<?php bloginfo('template_url');?>/images/gif-verao.gif');">
                </div>
              </a>
              <h4 class="paddingtop">Verão</h4>
          </div>
          <div class="col s12 m12 l4">
              <a href="http://www.aniastore.com.br/presentes">
                <div class="Destaque Destaque1" style=" background-image: url('<?php bloginfo('template_url');?>/images/gif-presentes.gif');">
                </div>
              </a>
              <h4 class="paddingtop">Presentes</h4>
          </div>
          <!--TITULO-->
          <div class="produtosrecentes">
            <div class="col s12">
              <h1>New In</h1>
            </div> 
           <?php
            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
            <div class="col s12 m6 l3 hoverable margin-top">   
              <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>
                <h3 class="woocommerce-loop-product__title"><?php the_title(); ?></h3>
                <hr>
                <!-- Hashtags -->
                <p class="hashtags"><?php echo $product->get_categories(); ?></p>
                <span>Em até 3x de R$<?php echo number_format(($product->price / 3), 2, ',', '.'); ?> sem juros</span>
              </a>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
          </div>
          <!--BOTAO "LISTA COMPLETA"-->
          <div class="col s12 center">
            <a href="produtos" class="btn" style="margin-top: 50px;">Lista Completa</a>
          </div>
          <!-- CARROUSEL DE VANTAGENS -->
          <div class="col s12 center margin50 grey lighten-4 padding10">
          <?php
            $vantagens = array( 'post_type' => 'vantagens', 'posts_per_page' => 5 );
            $caroussel_vantagens = new WP_Query( $vantagens );
            while ( $caroussel_vantagens->have_posts() ) : $caroussel_vantagens->the_post(); ?>
              <div class="col l25 m4 s12">
                <img class="vantagens" src="<?php echo the_field('icone_vantagem'); ?>">
                <h1 class="vantagens"><?php the_title(); ?></h1>
              </div>
            <?php endwhile; wp_reset_query(); ?>
          </div>
          <!-- VERAO -->
          <div class="col s12 center">
            <?php
            $banner = array( 'post_type' => 'banner', 'posts_per_page' => 1 );
            $bannerdestaque = new WP_Query( $banner );
            while ( $bannerdestaque->have_posts() ) : $bannerdestaque->the_post(); ?>
            <h1 class="banner"><?php the_field('titulo'); ?> <i class="em em-heart"></i></h1>
              <a href="<?php echo get_field('link_do_banner'); ?>">
                <img src="<?php echo get_field('imagem'); ?>" class="responsive-img" style="margin: 0px auto;" />
              </a>
            <?php endwhile; wp_reset_query(); ?>
          </div>
      </div>
      <div class="row" style="margin-bottom:0;">
          <!-- COMENTARIOS DE CLIENTES -->
          <div class="col s12 center margin50 grey lighten-4 padding10">
            <h1>Quem comprou e voltou pra dizer <i class="em em-heart"></i><i class="em em-smile"></i></h1>
            <?php
              $comentarios = array( 'post_type' => 'comentarios_clientes', 'posts_per_page' => 3 );
              $comentarios_clientes = new WP_Query( $comentarios );
              while ( $comentarios_clientes->have_posts() ) : $comentarios_clientes->the_post(); ?>
                <div class="col l4 m4 s12">
                  <i class="em <?php echo the_field('emoji'); ?>"></i><br><br>
                  <h1 class="vantagens"><?php echo the_field('comentario'); ?></h1>
                  <p><?php echo the_field('nome_da_cliente'); ?></p>
                </div>
              <?php endwhile; wp_reset_query(); ?>
          </div>
      </div>
    </div>
    </section>
<?php get_footer('home'); ?>