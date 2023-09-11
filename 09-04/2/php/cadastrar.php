<?php

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];

$currentDatetime = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));

if ($nome == "") {
	$return = "Nome não pode ser vazio";
} else if ($sobrenome == "") {
	$return = "Sobrenome não pode ser vazio";
} else if ($email == "") {
	$return = "Email não pode ser vazio";
} else if ($senha == "") {
	$return = "Senha não pode ser vazio";
} else if ($dia == "") {
	$return = "Dia não pode ser vazio";
} else if ($mes == "") {
	$return = "Mês não pode ser vazio";
} else if ($ano == "") {
	$return = "Ano não pode ser vazio";
} else {
	if (strlen($senha) <= 10) {
		$return = "Deve gravar uma senha forte";
	} else {
		if ($mes == "jan") {
			$mes = "01";
		} else if ($mes == "fev") {
			$mes = "02";
		} else if ($mes == "mar") {
			$mes = "03";
		} else if ($mes == "abr") {
			$mes = "04";
		} else if ($mes == "mai") {
			$mes = "05";
		} else if ($mes == "jun") {
			$mes = "06";
		} else if ($mes == "jul") {
			$mes = "07";
		} else if ($mes == "ago") {
			$mes = "08";
		} else if ($mes == "set") {
			$mes = "09";
		} else if ($mes == "out") {
			$mes = "10";
		} else if ($mes == "nov") {
			$mes = "11";
		} else if ($mes == "dez") {
			$mes = "12";
		}
		
		$userDateTime = new DateTime($ano."-".$mes."-".$dia, new DateTimeZone('America/Sao_Paulo'));
		
		$timeDiff = $currentDatetime->diff($userDateTime);

		if ($timeDiff->y < 18) {
			$return = "Usuário deve ter mais do que 18 anos";
		} else {
			$return = "Gravado com sucesso";
		}
	}
}

echo json_encode($return);

?>