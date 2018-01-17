<?php
// DETERMINACAO DE DADOS DE CPF

// Campos Locais
$cpf = $_POST['cpf_da_validacao']; // campo de CPF
$campoNascimento = $_POST['nascimento_da_validacao']; // campo de Data de Nascimento

// Campos do iWebServices
$cpfurl = 'http://ws.iwebservice.info/CPF/?chave=6EF7K-E068T-CE03T-ADCI4&cpf=' . $cpf . '&dataNascimento=' . $_POST['nascimento_da_validacao'] . '&formato=json'; // url do iWebService
$datacpf = file_get_contents($cpfurl); // declaracao dos itens
$infoscpf = json_decode($datacpf, TRUE); // decode do json do iWebService
$receitaCPF = $infoscpf['RetornoCpf']; // retorno do CPF do iWebService
$nascimentoUsuario = $receitaCPF['DadosTitular']['DataNascimento']; // retorno da Data de Nascimento do iWebService

// Verificacao se o campo de nascimento local = iWebService
if($receitaCPF['msg']['ResultadoTXT'] == "CPF encontrado") { ?>
	<script type="text/javascript">
  		window.location.replace("http://www.idbrasildigital.com.br/checkout");
  	</script>
<?php }

else { ?>
	<script type="text/javascript">
		 Materialize.toast('Data de Nascimento não pertence ao CPF.', 10000, 'red darken-4 white-text bold');
	</script>
<?php }

?>