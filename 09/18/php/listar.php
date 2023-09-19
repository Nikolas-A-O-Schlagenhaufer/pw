<?php

$conn = mysqli_connect('localhost', 'root', 'j39dAwG*wA%$giDE52g6_cp9gA', 'aula_18_09');

$query = "SELECT * FROM USER";

$result = mysqli_query($conn, $query);

$users = array();

while ($row = mysqli_fetch_assoc($result)) {
	array_push($users, $row);
}

echo json_encode($users);

?>