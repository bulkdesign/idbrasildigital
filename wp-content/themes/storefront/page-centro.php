<?php /* Template Name: Agendamento Centro */ ?>

<?php get_header();?>

<style type="text/css">
  
.col-full {
  max-width: 100% !important;
  padding: 0 !important;
}

</style>

<?php while ( have_posts() ) : the_post(); ?>

<div id="post-<?php the_ID(); ?>">

  <div class="container">
    <div class="row">
      <div class="col s12">
        <h1 class="center blue-text bold"><?php the_title(); ?></h1>
      </div>
      <div class="col s12">
        <p>Selecione o local onde você deseja realizar a validação presencial:</p>
      </div>
      <div class="col s12">
        <!-- Calendly inline widget begin -->
        <div class="calendly-inline-widget" data-url="https://calendly.com/idbrasildigital/agendamento-centro" style="min-width:100%;height:580px;"></div>
        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
        <!-- Calendly inline widget end -->
      </div>
    </div>
  </div>

</div>

<?php endwhile; ?>

<?php get_footer(); ?>