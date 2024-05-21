<?php
$server = "localhost";
$user = "addy";
$pw = "Kazuha@05";
$db = "termin";

$conn = mysqli_connect($server, $user, $pw, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
