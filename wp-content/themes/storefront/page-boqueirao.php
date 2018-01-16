<?php /* Template Name: Agendamento Boqueirão */ ?>

<?php get_header();?>

<style type="text/css">
  
.col-full {
  max-width: 100% !important;
  padding: 0 !important;
}

.escondendo {
  width: 100%;
  height: 50px;
  background: white;
  position: absolute;
  z-index: 2;
  left: 0;
}

</style>

<?php while ( have_posts() ) : the_post(); ?>

<div id="post-<?php the_ID(); ?>">

  <div class="container">
    <div class="row">
      <div class="escondendo"></div>
      <div class="col s12">
        <div class="calendly-inline-widget" data-url="https://calendly.com/idbr/agendamento-boqueirao" style="min-width:320px;height:1275px;margin-top: 20px;" scrolling="no"></div>
        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
        <!-- Calendly inline widget end -->
      </div>
    </div>
  </div>

</div>

<?php endwhile; ?>

<?php get_footer(); ?>