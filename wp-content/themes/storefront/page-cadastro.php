<?php /* Template Name: Cadastro */ ?>

<?php get_header('conta');?>

  <?php if ( is_user_logged_in() ) { ?>
    <div id="post-<?php the_ID(); ?>">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <h1 class="center blue-text bold"><?php the_title(); ?></h1>
          </div>
          <div class="col s12">
            <?php echo do_shortcode('[woocommerce_checkout]'); ?>
          </div>
        </div>
      </div>
    </div>
  <?php } else { ?>
    <div id="post-<?php the_ID(); ?>">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <h1 class="center blue-text bold"><?php the_title(); ?></h1>
          </div>
          <div class="col s12">
            <?php echo do_shortcode('[ultimatemember form_id=11]'); ?>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
    
<?php get_footer(); ?>