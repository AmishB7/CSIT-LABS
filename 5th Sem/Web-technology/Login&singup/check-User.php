<?php
session_start();
include "db.php";

$uname = $_POST["uname"];
$pwd = sha1($_POST["pwd"]);

$sql = "SELECT * FROM login WHERE uname='$uname' AND pwd='$pwd'";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) {
    $_SESSION['uname'] = $uname;
    header('location:homeP.html?login=true');
} else {
    header('location:signin.php?login=false');
}