<?php /* Template Name: Suporte */ ?>
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

</style>

	<div class="container">
		<div class="row">
			<div class="col m12 s12">
				<h1>Suporte</h1>
        <p>Caso você esteja enfrentando problemas na utilização do seu certificado, entre em contato através de um dos canais abaixo:</p>
			</div>

      <div class="col s12">
  			<!--FORMULARIO-->
        <div class="col s12 l4 left-align margin50">
          <h3 class="blue-text">Telefones:</h3>
          <h6>Sede Centro: (41) 3042-0700</h6>
          <h6>Sede Boqueirão: (41) 3043-0800</h6>
          <h6>Sede Sítio Cercado: (41) 3308-3105</h6> 
          <div class="margin30">
            <h3 class="blue-text">E-mails:</h3>
            <h6><a href="mailto:contato@idbrasildigital.com.br"></a>contato@idbrasildigital.com.br</h6>
            <h6><a href="mailto:id@idbrasildigital.com.br"></a>id@idbrasildigital.com.br</h6>
          </div>
        </div>
  			<div class="col s12 l8">
  			  <?php echo do_shortcode('[contact-form-7 id="211" title="Suporte"]'); ?>
  			</div>
      </div>
      <!-- LOCALIZACAO -->
      <div class="col m12 s12">
        <h1 style="padding:0">Downloads</h1>
        <p>O especialista em suporte irá solicitar o download de um dos programas abaixo. Clique para baixar:</p>
      </div>
      <div class="col l8 push-l2 s12">
        <div class="col l6 m6 s12 padding10">
          <a href="http://www.ammyy.com/en/downloads.html">
            <img style="max-height: 100px;display: block;margin: 0px auto" src="<?php bloginfo('template_url'); ?>/images/ammyy.png" />
          </a>
        </div>
        <div class="col l6 m6 s12 padding10">
          <a href="https://www.teamviewer.com/pt/download">
            <img style="max-height: 200px;display: block;margin: 0px auto" src="<?php bloginfo('template_url'); ?>/images/teamviewer.png" />
          </a>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>