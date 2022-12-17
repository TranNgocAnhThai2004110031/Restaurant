<?php

// //khai báo biến host

$hostName = 'localhost';

// khai báo biến username

$userName = 'bvvrrhivhosting_thaitna';

//khai báo biến password

$passWord = 'thaitna2004110031';

// khai báo biến databaseName

$databaseName = 'bvvrrhivhosting_webck';

 // khởi tạo kết nối

 $connect = mysqli_connect($hostName, $userName, $passWord, $databaseName);

 //Kiểm tra kết nối

 if (!$connect) {

   die("Connection failed: " . mysqli_connect_error());

     exit('Kết nối không thành công!');

 }

 // thành công echo 'Kết nối thành công!';

?>