<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$conn = mysqli_connect('localhost', 'root', 'j39dAwG*wA%$giDE52g6_cp9gA', 'aula_18_09');

$query = "INSERT INTO USER (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

$result = mysqli_query($conn, $query);

if ($result) {
	echo json_encode("Usuário cadastrado com sucesso!");
} else {
	echo json_encode("Erro ao cadastrar usuário!");
}

mysqli_close($conn);

?>