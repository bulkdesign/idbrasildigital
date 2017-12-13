<?php /* Template Name: Home */ ?>
<style type="text/css">
  .col-full {
    padding: 0 !important;
    max-width: 100% !important;
  }
</style>
<?php get_header();?>
<!--SESSÃO PRODUTOS-->
<section id="Produtos" class="session scrollspy">
  <div class="produto-destacado" style="background: url(<?php bloginfo('template_url'); ?>/images/header-home.jpg);background-size: cover;background-position: 100% 50%;">
    <div class="container">
      <!-- DESTAQUE -->
      <div class="row">
        <div class="col s12">
          <div class="col s12 l6 margin50">
            <h1 class="white-text bold">Certificado PJ A1</h1>
            <ul class="left-align">
              <li>Assinar Nota Fiscal Eletrônica e Controle de Transporte Eletrônico (CT-e)</li>
              <li>Acessar o Conectividade Social ICP (Caixa Econômica)</li>
              <li>Comunicar com a Receita Federal (e-CAC)</li>
              <li>Assinar e Transmitir o SPED</li>
              <li>Transmitir o CAGED</li>
            </ul>
            <a class="hoverable btn waves cor-secundaria margin20 left">COMPRAR</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--TIRA DUVIDAS -->
  <div class="certificado-tiraduvidas" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.55) 0%, rgba(0, 0, 0, 0.55) 100%, rgba(0, 0, 0, 0.55) 100%), url(https://images.unsplash.com/photo-1461773518188-b3e86f98242f?auto=format&fit=crop&w=750&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D);background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="col s12 center">
            <h1 class="white-text margin30 bold">Certificados Digitais</h1>
          </div>
        </div>
        <div class="col s12">
          <div class="col s12 l5">
            <h3 class="bold white-text">O que é?</h3>
            <p class="justify white-text">O certificado digital é uma identidade eletrônica com dados protegidos por chaves criptografadas que comprovam quem fez uma determinada transação, podendo ser utilizada por empresas e pessoas físicas.</p>
          </div>
          <div class="col s12 l6 push-l1">
            <h3 class="bold white-text">Para que serve?</h3>
            <p class="justify white-text">O certificado digital serve para assinar e enviar documentos remotamente, cumprir com as obrigações fiscais e acessórias, no caso de uma empresa, realizar transações bancárias on-line, entre outras funcionalidades.</p>
          </div>
          <div class="col s12 l12 margin50">
            <h3 class="bold white-text">Quem precisa?</h3>
            <p class="justify white-text">A certificação digital é obrigatória para empresas do Simples Nacional (SN) com mais de cinco funcionários. Empresas que emitem nota fiscal eletrônica (NF-e) e estão no regime de tributação de lucro real ou lucro presumido também precisam da certificação. Caso a empresa não atenda a obrigatoriedade, fica impedida de declarar as obrigações acessórias e pagar tributos, incorrendo no risco de multa.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--PASSO A PASSO -->
  <div class="container">
    <div class="row">
      <div class="col s12 margin20">
        <div class="col s12 center">
          <h1 class="bold">Passo a Passo</h1>
        </div>
        <div class="col s12 l3">
          <div class="col s12 center">
            <img width="100" src="<?php bloginfo('template_url'); ?>/images/icone1.png" style="display: block;margin: 0px auto 20px;" />
          </div>
          <h3>1. Solicitação</h3>
          <p class="justify margin20">Escolha o tipo de Certificado Digital, informe seus dados e efetue o pagamento.</p>
        </div>
        <div class="col s12 l3">
          <div class="col s12 center">
            <img width="100" src="<?php bloginfo('template_url'); ?>/images/icone2.png" style="display: block;margin: 0px auto 20px;" />
          </div>
          <h3>2. Agendamento</h3>
          <p class="justify margin20">Após a confirmação de pagamento à ID Brasil Digital, você receberá um e-mail para o agendamento da validação presencial, processo essencial para a emissão do Certificado.</p>
        </div>
        <div class="col s12 l3">
          <div class="col s12 center">
            <img width="100" src="<?php bloginfo('template_url'); ?>/images/icone3.png" style="display: block;margin: 0px auto 20px;" />
          </div>
          <h3>3. Validação presencial</h3>
          <p class="justify margin20">Nessa etapa você apresenta a documentação obrigatória, tem seus dados biométricos cadastrados e assina alguns termos. Confira a documentação <a href="#">aqui</a>.</p>
        </div>
        <div class="col s12 l3">
          <div class="col s12 center">
            <img width="100" src="<?php bloginfo('template_url'); ?>/images/icone4.png" style="display: block;margin: 0px auto 20px;" />
          </div>
          <h3>4. Emissão</h3>
          <p class="justify margin20">Após a validação presencial, considere até 3 (três) dias para receber via e-mail o link para a emissão do Certificado Digital. Se o Certificado Digital for tipo A3, você poderá emití-lo no Ponto de Atendimento ou onde estiver realizando a validação da documentação.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- COMPARATIVO -->
  <div class="grey lighten-5 comparativo">
    <div class="container">
      <div class="row">
        <div class="col s12 margin30">
          <div class="col s12 center">
            <h1 class="bold">Comparativo entre os certificados</h1>
          </div>
          <table class="striped">
            <thead>
              <th></th>
              <th>e-CNPJ</th>
              <th>e-CPF</th>
            </thead>
            <tbody>
               <tr>
                  <td><p class="bold">Tipos de Certificados:</p></td>
                  <td>e-CNPJ A1, e-CNPJ A3, CT-e, NF-e</td>
                  <td>e-CPF A1, e-CPF A3</td>
               </tr>
               <tr>
                  <td><p class="bold">Validade:</p></td>
                  <td>De 1 a 5 anos</td>
                  <td>De 1 a 5 anos</td>
               </tr>
               <tr>
                  <td><p class="bold">Indicado para:</p></td>
                  <td>Empresas, corporações e instituições cuja situação cadastral junto a Receita Federal do Brasil esteja ativa</td>
                  <td>Pessoas físicas que desejam autenticar o seu acesso a sistemas, assinar documentos eletrônicos com validade jurídica e em casos específicos, também pode representar empresas jurídicas quando seu titular é o representante legal.</td>
               </tr>
            </tbody>
          </table>
        </div>
        <div class="col s12 margin30">
          <a class="hoverable btn blue waves btn-primary">VER TODOS OS CERTIFICADOS</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer('home'); ?>