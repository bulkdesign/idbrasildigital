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