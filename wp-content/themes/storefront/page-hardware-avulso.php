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

  <div class="sobre" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.40) 100%, rgba(0, 0, 0, 0.40) 100%), url(https://images.unsplash.com/photo-1477949331575-2763034b5fb5?auto=format&fit=crop&w=2000&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D);background-repeat: no-repeat;background-size: cover;background-position:0 120%;background-attachment:fixed;">
    <h1 class="center white-text bold"><?php the_title(); ?></h1>
  </div>

  <div class="container">
    <div id="post-<?php the_ID(); ?>">
      <div class="row">
        <div class="col s12 l12 margin50 justify">
          <p class="center margin20">Aqui você pode adquirir dispositivos criptográficos para armazenar o seu certificado digital (cartão inteligente ou token) e também leitoras de cartão inteligente avulsas.</p>
          <div class="col s12 l12 margin50">
            <div class="col s12 l3">
              <img src="http://siritech.net/wp-content/uploads/2015/11/Contact-Smart-Card.png" />
            </div>
            <div class="col s12 l6 push-l1 left-align margin50">
              <h1>CARTÃO INTELIGENTE CERTISIGN</h1>
              <p>
              Para armazenamento de: e-CPF, e-CNPJ, NF-e, NFC-e e CT-e.<br>
              Fabricantes homologados: GD Burti, Morpho e Gemalto
              </p>
            </div>
            <div class="col s12 l2 margin50 right right-align">
              <span>por</span><h2>R$60,00</h2>
              <a href="#" class="btn btn-primary blue">COMPRAR</a>
            </div>
          </div>
        </div>
        <div class="col s12 l12 margin50 justify">
          <div class="col s12 l12">
            <div class="col s12 l3">
              <img src="https://images-na.ssl-images-amazon.com/images/I/51FVduBTeYL._SL500_AC_SS350_.jpg" />
            </div>
            <div class="col s12 l6 push-l1 left-align margin50">
              <h1>LEITORA DE CARTÃO INTELIGENTE</h1>
              <p>
              Fabricantes homologados:<br>
              Omnikey, SCM Microsytems e Gemalto
              </p>
            </div>
            <div class="col s12 l2 margin50 right right-align">
              <span>por</span><h2>R$160,00</h2>
              <a href="#" class="btn btn-primary blue">COMPRAR</a>
            </div>
          </div>
        </div>
        <div class="col s12 l12 margin50 justify">
          <div class="col s12 l12">
            <div class="col s12 l3">
              <img src="https://ae01.alicdn.com/kf/HTB1yNphLXXXXXcrXFXXq6xXFXXXA/Free-Shipping-Aladdin-eToken-PRO-72K-Portable-USB-Token-Smart-Card-SafeNet-wholesale-security-token.jpg" />
            </div>
            <div class="col s12 l6 push-l1 left-align margin50">
              <h1>TOKEN CRIPTOGRÁFICO USB</h1>
              <p>
              Fabricantes homologados:<br>
              Safenet, Morpho e Gemalto
              </p>
            </div>
            <div class="col s12 l2 margin50 right right-align">
              <span>por</span><h2>R$225,00</h2>
              <a href="#" class="btn btn-primary blue">COMPRAR</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php endwhile; ?>
    
<?php get_footer(); ?>