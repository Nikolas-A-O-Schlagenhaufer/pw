<?php

$pais = $_POST["pais"];

if ($pais == 'brasil') {
	$retorno = 'Moeda: Real';
} else if ($pais == 'eua') {
	$retorno = 'Moeda: Dólar';
} else if ($pais == 'inglaterra') {
	$retorno = 'Moeda: Libra';
} else if ($pais == 'japao') {
	$retorno = 'Moeda: Iene';
} else {
	$retorno = 'Moeda: Nao encontrada';
}

$json = json_encode($retorno);

echo $json;

?>