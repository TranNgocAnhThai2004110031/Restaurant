<?php 

	ini_set('display_errors', 1);

	ini_set('display_startup_errors', 1);

	error_reporting(E_ALL);

	include('connection_PHP.php');

    $un = $_POST['username'];

    $pw = $_POST['password'];

    $db = mysqli_connect("localhost", "bvvrrhivhosting_thaitna", "thaitna2004110031", "bvvrrhivhosting_webck");

    $sql = "SELECT * FROM `Account` WHERE username = '$un' AND password = '$pw'";

    $rs = mysqli_query($db, $sql);

    if (mysqli_num_rows($rs) > 0) {
        echo "Xin chào " . $un . ". Bạn đã đăng nhập thành công.";
    }

    else {
        echo "Dang nhap that bai";
    }

?>