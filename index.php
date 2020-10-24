<!DOCTYPE html>
<html>
<head>
	<title>
		sweetheartshop
	</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<meta charset="utf-8">
	<style type="text/css">
		@font-face{
			src:url(18889.ttf);
			font-family: NK63;
		}
		.font{
			font-family: NK63;
			color: white;
			height: 100%;
		}
		.font3{
			font-family: NK63;
			color: black;
			height: 100%;
		}
		.font2{
			font-family: NK63;
			color: #817cdc;
			height: 100%;
		}
		@font-face{
			src:url(19317.ttf);
			font-family: MariageAntD;
		}
		.ban{
			background: #b1b9b5;
		}
		.add{
			background: #f8e5de;
		}
		.bg{
			background: #b1b9b5;
		}
		.mr-6{
			margin-right: 500px;
		}
		.bg2{
			background: #f8e5de;
		}
		.logo{
			height: 100px;
		}
		.font-color{
			color: #b1b9b5;
		}
		.font-color2{
			color: #f8e5de;
		}
	</style>
</head>
<body class="bg">
	<form action="index.php" method="GET">
		<?php 
			$zapros = mysqli_connect("127.0.0.1", "root", "", "shop"); 
			$query_text = "SELECT * FROM int_shop";
			$query = mysqli_query($zapros, $query_text); 
			$stroka = $query->fetch_assoc();
			$stroka2 = $query->fetch_assoc();
			$stroka3 = $query->fetch_assoc();
			$stroka4 = $query->fetch_assoc();
			$stroka5 = $query->fetch_assoc();
			$stroka6 = $query->fetch_assoc();
			$stroka7 = $query->fetch_assoc();
			$stroka8 = $query->fetch_assoc();
			$stroka9 = $query->fetch_assoc();
			$stroka10 = $query->fetch_assoc();
			$stroka11 = $query->fetch_assoc();
			
			
		 ?>
		<!--шапка-->
		<div class="col-12 ban mb-0" style="">
			<div class="row">
				<div class="add mt-2 ml-3 border border-light" style="width: 130px; height: 40px;">
					<p class="text-center mt-2 ">
						<a href="admin.php" class="font-color">
							добавить товар
						</a>
					</p>		
				</div>
				<div class="col-2" >
					<div class="row">
						<img src="5.png" class="logo" style="margin-left: 950px; height: 100px;">
					</div>	
				</div>			
			</div>
		</div>
		<!--шапка2-->
		<div class="col-12 bg-white mt-0 pt-0" style="">
			<div class="col-10 mx-auto">
				<div class="row">
					<div class="col-3">
						<h3 class="text-center">
							<a href="admin.php" class="font2 font-color">
								NEW
							</a>
						</h3>			
					</div>
					<div class="col-3">
						<h3 class="text-center" style="margin-left: 800px;">
							<a href="admin.php" class="font2 font-color">
								SECOND 
							</a>
						</h3>			
					</div>
					<div class="col-3">
						<h3 class="text-center" style="margin-left: 400px;">
							<a href="admin.php" class="font2 font-color">
								SEASON
							</a>
						</h3>			
					</div>
				</div>		
			</div>
		</div>
		<div style=" background: #f8e5de;">
			<img src="8.jpg" style="margin-left: 800px;">
			<h1 class="font font-color" style="margin-left: 870px;">MINI RAINBOW BUNDLE</h1>
			<h5 class="font font-color" style="margin-left: 200px;">Introducing the Mini Rainbow Velour Liquid Lipstick bundle! This box set features a rainbow of 8 of our top selling shades, including a new exclusive color for this set!! Shade names: Diva, RedRum, Flamethrower, Queen Bee, Equality, Breakfast at Tiffany's, Blue Velvet and I'm Royalty!  </h5>
			<h5 class="font font-color" style="margin-left: 200px;">  
			These are perfect for travel size and keeping in your bag or purse!
			</h5>
			<h5 class="font font-color" style="margin-left: 200px;">I
			In alignment with the celebration of Pride Month, Jeffree Star Cosmetics has partnered with the Los Angeles LGBT Center, to support their efforts in health, social services, education, and advocacy.</h5>
		</div>
		<!--список-->
		<div class="col-10 mx-auto">
			<?php 
				echo "<h4 class='font'>  " . $_GET["name"] . "";
			?>
		</div>
		<div class="bg2 col-10 mx-auto" style="margin-top:50px;">
			<div class="row">
				<div class="col-4 border-light border-right border-bottom" style="">
					<?php 
						echo "<h2 class='font3 text-center font-color' style='height: 70px;'>" . $stroka["title"] . "</h3>";
						echo "<p class='font text-center mt-2 font-color'style='height: 100px;'>". $stroka["dess"] . "</p>";
						echo "<div class='col-10 mt-2 mx-auto' style=''> <img class='w-100' src='" .  $stroka["img"] . "'> </div>";
						echo "<h3 class='font text-center mt-2 font-color' style='height: 30px;'>" . $stroka["price"] . "</h3>";
					?>
				</div>
				<div class="col-4 border-light border-right border-bottom" style="">
					<?php 
						echo "<h2 class='font3 text-center font-color' style='height: 60px;'>" . $stroka2["title"] . "</h3>";
						echo "<p class='font text-center mt-2 font-color'style='height: 100px;'>". $stroka2["dess"] . "</p>";
						echo "<div class='col-10 mt-2 mx-auto' style=''> <img class='w-100' src='" .  $stroka2["img"] . "'> </div>";
						echo "<h3 class='font text-center mt-2 font-color' style='height: 30px;'>" . $stroka2["price"] . " </h3>";
					?>
				</div>
				<div class="col-4 border-light border-bottom" style="">
					<?php 
						echo "<h2 class='font3 text-center font-color' style='height: 60px;'>" . $stroka3["title"] . "</h3>";
						echo "<p class='font text-center mt-2 font-color'style='height: 100px;'>". $stroka3["dess"] . "</p>";
						echo "<div class='col-10 mt-2 mx-auto' style=''> <img class='w-100' src='" .  $stroka3["img"] . "'> </div>";
						echo "<h3 class='font text-center mt-2 font-color' style='height: 30px;'>" . $stroka3["price"] . " </h3>";
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-4 border-light border-right" style="">
					<?php 
						echo "<h3 class='font3 text-center font-color' style='height: 50px;'>" . $stroka4["title"] . "</h3>";
						echo "<p class='font text-center mt-2 font-color'style='height: 80px;'>". $stroka4["dess"] . "</p>";
						echo "<div class='col-10 mt-5 mx-auto' style=''> <img class='w-100' src='" .  $stroka4["img"] . "'> </div>";
						echo "<p class='font text-center mt-2 font-color' style='height: 30px;'>" . $stroka4["price"] . " </p>";
					?>
				</div>
				<div class="col-4 border-light border-right" style="">
					<?php 
						echo "<h3 class='font3 text-center font-color' style='height: 50px;'>" . $stroka5["title"] . "</h3>";
						echo "<p class='font text-center mt-2 font-color'style='height: 60px;'>". $stroka5["dess"] . "</p>";
						echo "<div class='col-10 mx-auto' style='margin-top: 80px;'> <img class='w-100' src='" .  $stroka5["img"] . "'> </div>";
						echo "<p class='font text-center mt-2 font-color' style='height: 30px;'>" . $stroka5["price"] . " </p>";
					?>
				</div>
				<div class="col-4" style="">
					<?php 
						echo "<h3 class='font3 text-center font-color' style='height: 50px;'>" . $stroka6["title"] . "</h3>";
						echo "<p class='font text-center font-color mt-2'style='height: 100px;'>". $stroka6["dess"] . "</p>";
						echo "<div class='col-10 mt-2 mx-auto' style='margin-top: 80px;'> <img class='w-100' src='" .  $stroka6["img"] . "'> </div>";
						echo "<p class='font text-center font-color mt-2' style='height: 30px;'>" . $stroka6["price"] . " </p>";
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-4 border-light border-right" style="">
					<?php 
						echo "<h3 class='font3 text-center font-color' style='height: 50px;'>" . $strok12["title"] . "</h3>";
						echo "<p class='font text-center mt-2 font-color'style='height: 80px;'>". $stroka12["dess"] . "</p>";
						echo "<div class='col-10 mt-5 mx-auto' style=''> <img class='w-100' src='" .  $stroka12["img"] . "'> </d10iv>";
						echo "<p class='font text-center mt-2 font-color' style='height: 30px;'>" . $stroka12["price"] . " </p>";
					?>
				</div>
				<div class="col-4 border-light border-right" style="">
					<?php 
						echo "<h3 class='font3 text-center font-color' style='height: 50px;'>" . $stroka13["title"] . "</h3>";
						echo "<p class='font text-center mt-2 font-color'style='height: 60px;'>". $stroka13["dess"] . "</p>";
						echo "<div class='col-10 mx-auto' style='margin-top: 80px;'> <img class='w-100' src='" .  $stroka13["img"] . "'> </div>";
						echo "<p class='font text-center mt-2 font-color' style='height: 30px;'>" . $stroka13["price"] . " </p>";
					?>
				</div>
				<div class="col-4" style="">
					<?php 
						echo "<h3 class='font3 text-center font-color' style='height: 50px;'>" . $stroka14["title"] . "</h3>";
						echo "<p class='font text-center font-color mt-2'style='height: 100px;'>". $stroka14["dess"] . "</p>";
						echo "<div class='col-10 mt-2 mx-auto' style='margin-top: 80px;'> <img class='w-100' src='" .  $stroka14["img"] . "'> </div>";
						echo "<p class='font text-center font-color mt-2' style='height: 30px;'>" . $stroka14["price"] . " </p>";
					?>
				</div>
			</div>
		</div>
	</form>
</body>
</html>