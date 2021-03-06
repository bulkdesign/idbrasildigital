<?php /* Template Name: Contato */ ?>
<?php get_header();?>

<style type="text/css">
  
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

.wpsl-search {
  display: none;
}

.wpsl-store-location span {
  color: #999999 !important;
}

#wpsl-wrap.wpsl-store-below #wpsl-result-list li {
    padding: 0 10px 25px;
}

#wpsl-result-list li p {
  margin: 0 !important;
}

#wpsl-result-list {
  background: #f2f2f2;
  color: #999999;
}

.wpsl-store-location {
  padding: 0;
}

#wpsl-wrap.wpsl-store-below #wpsl-result-list li {
  border: 1px solid #e2e0e0;
  background: #f2f2f2 !important;
}

h1 {
  padding-bottom: 0;
}

h6 {
  font-size: 17px;
  font-weight: 400;
}

</style>

	<div class="container">
		<div class="row">
			<div class="col m12 s12">
				<h1>Contato</h1>
        <p>Você pode entrar em contato conosco através do formulário ou um dos nossos telefones. Para suporte, <a href="/suporte" class="blue-text">clique aqui.</a></p>
			</div>

      <div class="col s12">
  			<!--FORMULARIO-->
        <div class="col s12 l4 left-align margin50">
          <h3 class="blue-text">Telefones:</h3>
          <h6>AR Centro: (41) 3042-0700</h6>
          <h6>ITS Boqueirão: (41) 3043-0800</h6>
          <h6>ITS Sítio Cercado: (41) 3308-3105</h6> 
          <div class="margin30">
            <h3 class="blue-text">E-mails:</h3>
            <h6><a href="mailto:contato@idbrasildigital.com.br"></a>contato@idbrasildigital.com.br</h6>
            <h6><a href="mailto:id@idbrasildigital.com.br"></a>id@idbrasildigital.com.br</h6>
          </div>
        </div>
  			<div class="col s12 l8">
  			  <?php echo do_shortcode('[contact-form-7 id="60" title="Contato"]'); ?>
  			</div>
      </div>
      <!-- LOCALIZACAO -->
      <div class="col m12 s12">
        <h1>Localização</h1>
        <p>Encontre no mapa abaixo uma de nossas Instalações Técnicas Secundárias:</p>
      </div>
    </div>
  </div>
  
  <?php echo do_shortcode('[wpsl]'); ?>

<?php get_footer(); ?>