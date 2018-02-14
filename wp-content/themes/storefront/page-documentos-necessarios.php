<?php /* Template Name: Documentos Necessários */ ?>

<?php get_header();?>

<style type="text/css">
  
.col-full {
  max-width: 100% !important;
  padding: 0 !important;
}

h1 {
  padding: 0;
}

</style>

<?php while ( have_posts() ) : the_post(); ?>

  <div class="sobre" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.40) 100%, rgba(0, 0, 0, 0.40) 100%), url(https://images.unsplash.com/photo-1470173274384-c4e8e2f9ea4c?auto=format&fit=crop&w=2000&q=80);background-repeat: no-repeat;background-size: cover;background-position:0 100%;">
    <h1 class="center white-text bold"><?php the_title(); ?></h1>
  </div>

  <div class="container">
    <div id="post-<?php the_ID(); ?>">
      <div class="row">
        <div class="col s12 l12 margin50">
          <div class="col s12 l6">
            <h1>E-CNPJ</h1>
            <ul class="collection">
              <li class="collection-item">Documento de identificação com foto: RG, CNH ou Passaporte</li>
              <li class="collection-item">Cartão CNPJ</li>
              <li class="collection-item">Comprovante de endereço atualizado</li>
              <li class="collection-item">Contrato Social (com alteração se houver)</li>
              <li class="collection-item">PIS, PASEP, NIT (opcional)</li>
              <li class="collection-item">CEI (opcional)</li>
              <li class="collection-item">Título de Eleitor (opcional)</li>
              <li class="collection-item">Todos os documentos devem ser originais</li>
            </ul>
          </div>
          <div class="col s12 l6">
            <h1>E-CPF</h1>
            <ul class="collection">
              <li class="collection-item">Documento de identificação com foto: RG, CNH ou Passaporte</li>
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
  </div>
  <div class="margin50"></div>

<?php endwhile; ?>
    
<?php get_footer(); ?>