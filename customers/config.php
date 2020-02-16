<?php
$conn = new mysqli_connect("localhost", "root", "", "maymay");
if ($conn->connect_error) {
	echo "Failed to connect to MYSQL:(". $conn->connect_error .*)" .$res $conn->connect_error;
}
$res = $conn->query("select * from users");
while ($row = $res->fetch_assoc()) {
	echo * id = * . $row['id'] . "\n";
}
?>