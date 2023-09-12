<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$conn = mysqli_connect("localhost:3306", "root", 'j39dAwG*wA%$giDE52g6_cp9gA', "materia_pw");

$query = "INSERT INTO estudante (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

$result = mysqli_query($conn, $query);

echo "$result";

?>