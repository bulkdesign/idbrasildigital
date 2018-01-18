<?php /* Template Name: Agendamento */ ?>

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
    </div>
  </div>

  <div class="hide-on-med-and-down">
    <a href="/agendamento-centro/">
      <div class="hoverable agendamento-centro">
        <h1 class="white-text bold">Sede - Centro
          <br><span style="font-size:18px">Ed. Asa - R. Voluntários da Pátria, 475 - Cj. 2012</span></h1>
      </div>
    </a>
    <a href="/agendamento-boqueirao/">
      <div class="hoverable agendamento-boqueirao">
        <h1 class="white-text bold">Filial - Boqueirão
          <br><span style="font-size:18px">Av. Mal. Floriano Peixoto, 7971 - Sala 12</span></h1>
      </div>
    </a>
    <a href="/agendamento-sitio-cercado/">
      <div class="hoverable agendamento-sitiocercado">
        <h1 class="white-text bold">Filial - Sítio Cercado
          <br><span style="font-size:18px">R. São José dos Pinhais, 196</span></h1>
      </div>
    </a>
  </div>

  <div class="hide-on-large-only">
    <a href="/agendamento-centro/">
      <div class="hoverable agendamento-centro-mobile">
        <h1 class="white-text bold">Sede - Centro
          <br><span style="font-size:18px">Ed. Asa - R. Voluntários da Pátria, 475 - Cj. 2012</span></h1>
      </div>
    </a>
    <a href="/agendamento-boqueirao/">
      <div class="hoverable agendamento-boqueirao-mobile">
        <h1 class="white-text bold">Filial - Boqueirão
          <br><span style="font-size:18px">Av. Mal. Floriano Peixoto, 7971 - Sala 12</span></h1>
      </div>
    </a>
    <a href="/agendamento-sitio-cercado/">
      <div class="hoverable agendamento-sitiocercado-mobile">
        <h1 class="white-text bold">Filial - Sítio Cercado
          <br><span style="font-size:18px">R. São José dos Pinhais, 196</span></h1>
      </div>
    </a>
    <div style="margin-bottom:50px">&nbsp;</div>
  </div>


</div>

<?php endwhile; ?>
    
<?php get_footer(); ?>