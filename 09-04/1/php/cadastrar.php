<?php

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];

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
} else if (strlen($senha) <= 10) {
	$return = "Deve gravar uma senha forte";
} else {
	$return = "Gravado com sucesso";
}

echo json_encode($return);

?>