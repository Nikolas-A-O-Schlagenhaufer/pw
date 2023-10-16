<?php

$conn = mysqli_connect('localhost', 'root', 'j39dAwG*wA%$giDE52g6_cp9gA', 'aula_10_05');
$query = "SELECT * FROM app";

$result = mysqli_query($conn, $query);

$apps = array();
while ($row = mysqli_fetch_assoc($result)) {
  array_push($apps, $row);
}

echo json_encode($apps);

?>