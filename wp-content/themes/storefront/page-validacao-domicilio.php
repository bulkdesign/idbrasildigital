<?php /* Template Name: Validação em Domicílio */ ?>

<?php get_header();?>

<style type="text/css">
  
.col-full {
  max-width: 100% !important;
  padding: 0 !important;
}

input[type=submit] {
  background-color: #998520 !important;
  color: #FFFFFF !important;
  padding: 0 25px;
  margin-bottom: 50px;
}

textarea, input:not([type]), input[type=text]:not(.browser-default), input[type=email]:not(.browser-default), input[type=tel]:not(.browser-default), textarea.materialize-textarea {
  border: 0.10em solid #dbdbdb !important;
  border-radius: 2px;
  text-align: left;
  padding-left: 15px;
  width: 97.3% !important;
}

textarea, textarea:hover, textarea:active {
  border: 0.10em solid #dbdbdb !important;
  border-radius: 2px;
  background: #FFFFFF;
  text-align: left;
  width: 100% !important;
  box-shadow: none;
}

</style>

<?php while ( have_posts() ) : the_post(); ?>

  <div class="sobre" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.40) 100%, rgba(0, 0, 0, 0.40) 100%), url(https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?auto=format&fit=crop&w=2000&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D);background-repeat: no-repeat;background-size: cover;background-position:0;background-attachment:fixed;">
    <h1 class="center white-text bold"><?php the_title(); ?></h1>
  </div>

  <div class="container">
    <div id="post-<?php the_ID(); ?>">
      <div class="row">
        <div class="col s12 margin50">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>

<?php endwhile; ?>
    
<?php get_footer(); ?>