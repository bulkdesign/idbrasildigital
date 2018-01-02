<?php /* Template Name: Cadastro */ ?>

<?php get_header('conta');?>

<?php while ( have_posts() ) : the_post(); ?>

<div id="post-<?php the_ID(); ?>">

  <div class="container">
    <div class="row">
      <div class="col s12">
        <h1 class="center blue-text bold"><?php the_title(); ?></h1>
      </div>
      <div class="col s12">

      <?php

        echo do_shortcode('[ultimatemember form_id=11]');

        $cnpj = $_POST['cnpj_usuario-11'];
        // $cnpj = "14150901000174";
        $url = 'https://www.receitaws.com.br/v1/cnpj/' . $cnpj;

        $nome = $_POST['nome_completo-11'];

        $data = file_get_contents($url);
        $infos = json_decode($data, TRUE);

        $receita = $infos['qsa'][0];

        if ($receita['nome'] == $nome) {
          echo "<script>alert('ESTÁ TUDO CORRETO!')</script>";
        }

        else {
          echo "<script>alert('O NOME DIGITADO NÃO CONSTA NO QSA!')</script>";
        }

        ?>
      
      </div>
    </div>
  </div>

</div>

<?php endwhile; ?>
    
<?php get_footer(); ?>