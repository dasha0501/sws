<?php
	$con = mysqli_connect("127.0.0.1", "root", "", "shop");
	$query_text_vstavit = "INSERT INTO int_shop (title, dess, img, price) 
							VALUES (' {$_GET["title"]}', ' {$_GET["dess"]}', 'img/4.png', ' {$_GET["price"]}')" ;
	$con_vstavit = mysqli_query($con, $query_text_vstavit );
	header("location: admin.php")
?>
