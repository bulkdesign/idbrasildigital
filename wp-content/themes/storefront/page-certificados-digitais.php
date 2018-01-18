<?php /* Template Name: Certificados Digitais */ ?>

<?php get_header();?>

<style type="text/css">
  
.col-full {
  max-width: 100% !important;
  padding: 0 !important;
}

</style>

<?php while ( have_posts() ) : the_post(); ?>

<div class="hide-on-med-and-down" id="post-<?php the_ID(); ?>">
  <a href="/certificados-para-pessoa-juridica/">
    <div class="hoverable certificado-pj">
      <h1 class="white-text bold">Certificado Pessoa Jurídica</h1>
    </div>
  </a>
  <a href="/certificados-para-pessoa-fisica/">
    <div class="hoverable certificado-pf">
      <h1 class="white-text bold">Certificado Pessoa Física</h1>
    </div>
  </a>
</div>

<div class="hide-on-large-only" id="post-<?php the_ID(); ?>">
  <div class="row">
    <a href="/certificados-para-pessoa-juridica/">
      <div class="hoverable certificado-pj-mobile">
        <h1 class="white-text bold">Certificado Pessoa Jurídica</h1>
      </div>
    </a>
    <a href="/certificados-para-pessoa-fisica/">
      <div class="hoverable certificado-pf-mobile">
        <h1 class="white-text bold">Certificado Pessoa Física</h1>
      </div>
    </a>
  </div>
</div>

<?php endwhile; ?>
    
<?php get_footer(); ?>