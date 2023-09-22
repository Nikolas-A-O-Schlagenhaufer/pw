<?php

$conn = mysqli_connect('localhost', 'root', 'j39dAwG*wA%$giDE52g6_cp9gA', 'aula_21_09');
$query = "SELECT * FROM musica";

$result = mysqli_query($conn, $query);

$musicas = array();
while ($row = mysqli_fetch_assoc($result)) {
	array_push($musicas, $row);
}

echo json_encode($musicas);

?>