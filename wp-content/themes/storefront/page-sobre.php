<?php /* Template Name: Sobre */ ?>

<?php get_header();?>

<style type="text/css">
  
.col-full {
  max-width: 100% !important;
  padding: 0 !important;
}

</style>

<?php while ( have_posts() ) : the_post(); ?>

  <div class="sobre">
    <h1 class="center white-text bold"><?php the_title(); ?></h1>
  </div>

  <div class="container">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="row">
      <div class="col s12 margin50">
        <?php the_content(); ?>
      </div>
    </div>
  </div>

<?php endwhile; ?>
    
<?php get_footer(); ?>