<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "csit";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die('Connection Refused');
}
?>