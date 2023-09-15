<?php

$titulo = $_POST['titulo'];
$duracao = $_POST['duracao'];
$compositor = $_POST['compositor'];
$album = $_POST['album'];

$conn = mysqli_connect('localhost', 'root', 'j39dAwG*wA%$giDE52g6_cp9gA', 'aula_14_09');

$query = "INSERT INTO musica (
	titulo, duracao, compositor, album
) VALUES (
	'$titulo', $duracao, '$compositor', '$album'
)";

mysqli_query($conn, $query);

echo json_encode("Música inserida com sucesso!");

?>