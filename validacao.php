<?php

$cnpj = $_POST['cnpj_da_validacao'];
// // $cnpj = "14150901000174";
// $url = 'https://www.receitaws.com.br/v1/cnpj/' . $cnpj;

// $data = file_get_contents($url);
// $infos = json_decode($data, TRUE);

// $receita = $infos['cnpj'][0];
$receita = "14150901000174";


if ($receita == $cnpj) {
  echo "<script>alert('ESTÁ TUDO CORRETO!')</script>";
}

else {
  echo "<script>alert('O NOME DIGITADO NÃO CONSTA NO QSA!')</script>";
}

?>