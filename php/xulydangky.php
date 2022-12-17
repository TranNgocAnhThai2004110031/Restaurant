<?php
include("lib.php");
?>
<html>
	<head>
      <title>Xu ly thong tin</title>
  </head>
  <body>
   <h3>
     Xu ly dang nhap
    </h3>


<?php

	$hoten = $_GET["txt_hoten"];
	$sodienthoai = $_GET["txt_sodienthoai"];
	echo $hoten . " <br />";
	echo $sodienthoai;

  if($hoten=="a" && $sodienthoai=="1")
  {
    echo "<br />login thanh cong";
    $_SESSION["da_dang_nhap"] = "ok";

  }
  else
  {
    echo "<br />Login that bai";
  }



	?>

  Đăng xuất 
  <a href="logout.php" >Log out</a>

    

    

  </body>

</html>