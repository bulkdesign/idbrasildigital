<?php /* Template Name: Certificado PF */ ?>

<?php get_header();?>

<style type="text/css">
  
.col-full {
  max-width: 100% !important;
  padding: 0 !important;
}

</style>

<?php while ( have_posts() ) : the_post(); ?>

  <div class="sobre" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.40) 100%, rgba(0, 0, 0, 0.40) 100%), url(https://images.unsplash.com/photo-1448932223592-d1fc686e76ea?auto=format&fit=crop&w=2000&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D);background-repeat: no-repeat;background-size: cover;background-position:0 180%;background-attachment:fixed;">
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
            <li class="collection-item">RG e CPF</li>
            <li class="collection-item">Comprovante de Endereço atualizado</li>
            <li class="collection-item">Título de Eleitor (opcional)</li>
            <li class="collection-item">PIS, PASEP, NIT (opcional)</li>
            <li class="collection-item">CEI (caso seja empregador)</li>
            <li class="collection-item">Todos os documentos devem ser originais</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

<?php endwhile; ?>
    
<?php get_footer(); ?>