<?php /* Template Name: Contato */ ?>
<?php get_header();?>
  	<!--SESSÃO CONTATO-->
  	<section id="Contato">
  		<div class="container">
  			<div class="row">
  				<div class="col m12 s12">
  					<h1>Entre em Contato Conosco</h1>
  				</div>
  				<!--LADO ESQUERDO-->
  				<div class="col l5 m12 s12 PainelEsquerdo">
  					<div id="Whatsapp" class="col m12"">
  						<div class="col m12">
  							<img src="<?php bloginfo('template_url');?>/images/Whatsapp.png">
  							<p>(41) 98714-4714</p>
  							<br>
  						</div>
  					</div>
  					<!--WHATSAPP-->
  					<div id="Facebook" class="col m12">
  						<div class="col m12">
  							<img src="<?php bloginfo('template_url');?>/images/Facebook.png">
  							<p>facebook.com/storeania</p>
  							<br>
  						</div>
  					</div>
  					<!--WHATSAPP-->
  					<div id="Email" class="col m12">
  						<div class="col m12">
  							<img src="<?php bloginfo('template_url');?>/images/Email.png">
  							<p>aniastore@aniastore.com.br</p>
  							<br>
  						</div>
  					</div>
  				</div>
  				<!--ESPAÇAMENTO-->
  				<div class="col m1 s12">
  				</div>
  				<!--FORMULÁRIO-->
  				<div class="col l6 m12 s12">
  					<form class="formulario-contato">
  						<div class="col s12 input-field">
  							<i class="material-icons prefix hide-on-small-only">account_circle</i>
  							<input id="icon_prefix" type="text" class="validate" required="required" placeholder="Nome Completo">
  						</div>
  						<div class="col s12 input-field">
  							<i class="material-icons prefix hide-on-small-only">email</i>
  							<input id="icon_telephone" type="email" class="validate" required="required" placeholder="E-mail">
  						</div>
  						<div class="col s12 input-field">
  							<i class="material-icons prefix hide-on-small-only">phone</i>
  							<input id="icon_subject" type="text" class="validate" required="required" placeholder="Telefone">
  						</div>
  						<div class="col s12 input-field">
  							<i class="material-icons prefix hide-on-small-only">message</i>
  							<textarea id="icon_message" class="materialize-textarea" required="required" placeholder="Mensagem"></textarea>
  						</div>
  						<div class="col s12">
  							<button class="btn">Enviar</button>
  						</div>          
  					</form>         
  				</div>
  			</div>
  		</div>
  	</section>
<?php get_footer(); ?>