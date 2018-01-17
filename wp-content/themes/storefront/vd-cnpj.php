<?php
// DETERMINACAO DE DADOS DE CPF

// Campos Locais
$cpf = $_POST['cpf_da_validacao_cnpj']; // campo de CPF
$campoNascimento = $_POST['nascimento_da_validacao']; // campo de Data de Nascimento

// Campos do iWebServices
$cpfurl = 'http://ws.iwebservice.info/CPF/?chave=6EF7K-E068T-CE03T-ADCI4&cpf=' . $cpf . '&dataNascimento=' . $_POST['nascimento_da_validacao'] . '&formato=json'; // url do iWebService
$datacpf = file_get_contents($cpfurl); // declaracao dos itens
$infoscpf = json_decode($datacpf, TRUE); // decode do json do iWebService
$receitaCPF = $infoscpf['RetornoCpf']; // retorno do CPF do iWebService
$nascimentoUsuario = $receitaCPF['DadosTitular']['DataNascimento']; // retorno da Data de Nascimento do iWebService

// Verificacao se o campo de nascimento local = iWebService
if($receitaCPF['msg']['ResultadoTXT'] !== "CPF encontrado") { ?>
	<script type="text/javascript">
		 Materialize.toast('Data de Nascimento não pertence ao CPF.', 10000, 'red darken-4 white-text bold');
	</script>
<?php }

?>

<?php
// DETERMINACAO DE DADOS DE CNPJ

// Campos Locais
$cnpj = $_POST['cnpj_da_validacao']; // campo de cnpj

// Campos do iWebService
$cnpjurl = 'http://ws.iwebservice.info/CNPJ/?chave=6EF7K-E068T-CE03T-ADCI4&cnpj=' . $cnpj . '&formato=json'; // url do iWebService
$datacnpj = file_get_contents($cnpjurl); // declaracao dos itens
$infoscnpj = json_decode($datacnpj, TRUE); // decode do json do iWebService
$receitaCNPJ = $infoscnpj['RetornoCnpj']; // retorno do CPF do iWebService
$dadosResponsavel = $receitaCNPJ['DadosResponsavel']['CpfResponsavel']; // retorno do CPF do Responsavel

?>

<?php

// Verificacao se o campo de cpf local = iWebService
if ($dadosResponsavel == $cpf) { ?>
	<script type="text/javascript">
		window.location.replace("http://www.idbrasildigital.com.br/checkout");
	</script>
<?php }

else { ?>
	<script type="text/javascript">
		Materialize.toast('O CPF informado não consta como responsável pelo CNPJ!', 10000, 'red darken-4 white-text bold')
	</script>
<?php } ?>