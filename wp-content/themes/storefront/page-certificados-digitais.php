<?php /* Template Name: Certificados Digitais */ ?>

<?php get_header();?>

<style type="text/css">
  
.col-full {
  max-width: 100% !important;
  padding: 0 !important;
}

</style>

<?php while ( have_posts() ) : the_post(); ?>

<div id="post-<?php the_ID(); ?>">

  <a href="/certificado-pj">
    <div class="hoverable certificado-pj">
      <h1 class="white-text bold">Certificado Pessoa Jurídica</h1>
    </div>
  </a>
  <a href="/certificado-pf">
    <div class="hoverable certificado-pf">
      <h1 class="white-text bold">Certificado Pessoa Física</h1>
    </div>
  </a>

</div>

<?php endwhile; ?>
    
<?php get_footer(); ?>