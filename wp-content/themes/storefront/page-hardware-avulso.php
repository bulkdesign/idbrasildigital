<?php /* Template Name: Hardware Avulso */ ?>

<?php get_header();?>

<style type="text/css">
  
.col-full {
  max-width: 100% !important;
  padding: 0 !important;
}

@media (min-width: 993px) {
  .row .col.l3 {
    width: 25% !important;
    margin-left: auto !important;
  }
}

h1 {
  padding: 0;
}

</style>

<?php while ( have_posts() ) : the_post(); ?>

  <div class="sobre" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.40) 100%, rgba(0, 0, 0, 0.40) 100%), url(http://s3.amazonaws.com/digitaltrends-uploads-prod/2015/02/Enterprise-network-security.jpg);background-repeat: no-repeat;background-size: cover;background-position:0%;background-attachment:fixed;">
    <h1 class="center white-text bold"><?php the_title(); ?></h1>
  </div>

  <div class="container">
    <div id="post-<?php the_ID(); ?>">
      <div class="row">
        <div class="col s12 l12 margin50 justify">
          <p class="center margin20">Aqui você pode adquirir dispositivos criptográficos para armazenar o seu certificado digital (cartão inteligente ou token) e também leitoras de cartão inteligente avulsas.</p>
          <div class="col s12 l12 margin50">
            <div class="col s12 l3">
              <img class="margin30" src="<?php bloginfo('template_url'); ?>/images/hardwares/produto1.png" />
            </div>
            <div class="col s12 l6 push-l1 left-align margin50">
              <h1>Smart Card</h1>
              <p>
              Para armazenamento de: e-CPF, e-CNPJ, NF-e, NFC-e e CT-e.<br>
              </p>
            </div>
            <div class="col s12 l2 margin50 right right-align">
              <span>de</span> <span style="text-decoration:line-through;">R$55,00</span>
              <span>por</span><h2 style="font-weight:bold;">R$50,00</h2>
              <a href="/produto/smart-card/" class="btn btn-primary blue">COMPRAR</a>
            </div>
          </div>
        </div>
        <div class="col s12 l12 margin50 justify">
          <div class="col s12 l12">
            <div class="col s12 l3">
              <img src="<?php bloginfo('template_url'); ?>/images/hardwares/produto2.png" />
            </div>
            <div class="col s12 l6 push-l1 left-align margin50">
              <h1>Leitora de Smart Card</h1>
            </div>
            <div class="col s12 l2 margin50 right right-align">
              <span>de</span> <span style="text-decoration:line-through;">R$121,00</span>
              <span>por</span><h2 style="font-weight:bold;">R$110,00</h2>
              <a href="/produto/leitora-de-smart-card/" class="btn btn-primary blue">COMPRAR</a>
            </div>
          </div>
        </div>
        <div class="col s12 l12 margin50 justify">
          <div class="col s12 l12">
            <div class="col s12 l3">
              <img src="<?php bloginfo('template_url'); ?>/images/hardwares/produto3.png" />
            </div>
            <div class="col s12 l6 push-l1 left-align margin50">
              <h1>Token Criptográfico USB</h1>
            </div>
            <div class="col s12 l2 margin50 right right-align">
              <span>de</span> <span style="text-decoration:line-through;">R$154,00</span>
              <span>por</span><h2 style="font-weight:bold;">R$140,00</h2>
              <a href="/produto/token-criptografico-usb/" class="btn btn-primary blue">COMPRAR</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php endwhile; ?>
    
<?php get_footer(); ?>