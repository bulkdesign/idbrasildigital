<?php /* Template Name: Suporte */ ?>
<?php get_header();?>

<style type="text/css">

.margin-center {
  margin: 0px auto;
}
  
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

.tabs {
  height: 90px;
}

.tabs .tab a {
  height: auto;
}

</style>

	<div class="container">
		<div class="row">
			<div class="col m12 s12">
				<h1>Suporte</h1>
        <p>Caso você esteja enfrentando problemas na utilização do seu certificado, entre em contato através de um dos canais abaixo:</p>
			</div>

      <div class="col s12">
  			<!--LOCALIZACAO-->
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
        <!-- FORMULARIO -->
  			<div class="col s12 l8">
  			  <?php echo do_shortcode('[contact-form-7 id="211" title="Suporte"]'); ?>
  			</div>
      </div>
      <!-- DOWNLOADS -->
      <div class="col m12 s12">
        <h1 style="padding:0">Downloads</h1>
        <p>O especialista em suporte irá solicitar o download de um dos programas abaixo. Clique na categoria desejada para fazer o download:</p>
      </div>
      <div class="col l8 push-l2 s12">

        <div class="col s12">
          <ul class="tabs">
            <li class="tab col l4 m4 s12"> 
              <a class="active" href="#programas">
                <img class="margin-center" src="<?php bloginfo('template_url'); ?>/images/suporte_computador.png" />
              </a>
            </li>
            <li class="tab col l4 m4 s12">
              <a href="#cartao">
                <img class="margin-center" src="<?php bloginfo('template_url'); ?>/images/suporte_cartao.png" />
              </a>
            </li>
            <li class="tab col l4 m4 s12">
              <a href="#token">
                <img class="margin-center" src="<?php bloginfo('template_url'); ?>/images/suporte_token.png" />
              </a>
            </li>
          </ul>
        </div>
        <div id="programas" class="col l4 m4 s12">
          <p>Programas de Computador:</p>
          <p>- <strong>Team Viewer:</strong> <a href="https://www.soluti.com.br/download/1222/">Baixar</a><br>
          - <strong>Ammy:</strong> <a href="http://www.ammyy.com/en/downloads.html">Baixar</a></p>
        </div>
        <div id="cartao" class="col l4 push-l4 m4 push-m4 s12">
          <p>Drivers de Cartão:</p>
          <p>
            - <strong>Oberthur AWP MANAGER 5.1.8</strong> <a href="https://www.soluti.com.br/download/522/">Baixar</a><br>
            - <strong>OMNIKEY:</strong> <a href="https://www.soluti.com.br/download/493/">Baixar</a><br>
            - <strong>Safesign Standard 3.0.97:</strong> <a href="https://www.soluti.com.br/download/514/">Baixar</a>
          </p>
        </div>
        <div id="token" class="col l4 push-l8 m4 push-m8 s12">
          <p>Drivers de Token:</p>
          <p>
            - <strong>Oberthur AWP MANAGER 5.1.8</strong> <a href="https://www.soluti.com.br/download/522/">Baixar</a><br>
            - <strong>Safesign Standard 3.45:</strong> <a href="https://www.soluti.com.br/download/546/">Baixar</a><br>
            - <strong>GD Starsign:</strong> <a href="https://www.soluti.com.br/download/540/">Baixar</a><br>
            - <strong>SAC 10.3:</strong> <a href="https://www.soluti.com.br/download/1633/">Baixar</a><br>
            - <strong>SafeNet Authentication Cliente 9.0:</strong> <a href="https://www.soluti.com.br/download/469/">Baixar</a><br>
            - <strong>Feitian Token Windows:</strong> <a href="https://www.soluti.com.br/download/1171/">Baixar</a>
          </p>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>