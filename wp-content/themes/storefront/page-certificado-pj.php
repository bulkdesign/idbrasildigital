<?php /* Template Name: Certificado PJ */ ?>

<?php get_header();?>

<style type="text/css">
  
.col-full {
  max-width: 100% !important;
  padding: 0 !important;
}

</style>

<?php while ( have_posts() ) : the_post(); ?>

  <div class="sobre" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.40) 100%, rgba(0, 0, 0, 0.40) 100%), url(https://images.unsplash.com/photo-1431540015161-0bf868a2d407?auto=format&fit=crop&w=2000&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D);background-repeat: no-repeat;background-size: cover;background-position:50%;background-attachment:fixed;">
    <h1 class="center white-text bold"><?php the_title(); ?></h1>
  </div>

  <div class="container">
    <div id="post-<?php the_ID(); ?>">
      <div class="row">
        <div class="col s12 l9 margin50 justify">
          <?php the_content(); ?>
        </div>
        <div class="col s12 l2 push-l1 margin50">
          <p>DOCUMENTAÇÃO NECESSÁRIA</p>
          <ul class="collection">
            <li class="collection-item">Documento de identificação com foto: RG, CNH ou Passaporte</li>
            <li class="collection-item">Cartão CNPJ</li>
            <li class="collection-item">Comprovante de endereço atualizado</li>
            <li class="collection-item">Contrato Social (com alteração se houver)</li>
            <li class="collection-item">PIS, PASEP, NIT (opcional)</li>
            <li class="collection-item">CEI</li>
            <li class="collection-item">Título de Eleitor (opcional)</li>
            <li class="collection-item">Todos os documentos devem ser originais</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col s12">
        <h1>Todos os Certificados PJ</h1>
          <?php
            $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'e-cnpj','order' => 'asc', 'orderby' => 'title' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
              <div class="col s12 l4" style="height: 400px;">
                <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                  <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
                  <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="200px" height="200px" />'; ?>
                    <h3><?php the_title(); ?></h3>
                    <span class="price"><?php echo $product->get_price_html(); ?></span>                    
                </a>
                <br>
                <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
              </div>
            <?php endwhile; ?>
          <?php wp_reset_query(); ?>
          <?php
            $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'ct-e, nf-e, e-cnpj-me','order' => 'asc', 'orderby' => 'title' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
              <div class="col s12 l4" style="height: 400px;">
                <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                  <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
                  <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="200px" height="200px" />'; ?>
                    <h3><?php the_title(); ?></h3>
                    <span class="price"><?php echo $product->get_price_html(); ?></span>                    
                </a>
                <br>
                <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
              </div>
            <?php endwhile; ?>
          <?php wp_reset_query(); ?>
      </div>
    </div>
  </div>
  <div class="margin50"></div>

<?php endwhile; ?>
    
<?php get_footer(); ?>