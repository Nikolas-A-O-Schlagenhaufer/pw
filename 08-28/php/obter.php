<?php

$email = $_POST["email"];
$qtde = strlen($email);

$retorno;

if ($qtde > 10) {
	$retorno = 'maior que 10';
} else {
	$retorno = 'menor que 10';
}

$json = json_encode($retorno);

echo $json;

?>