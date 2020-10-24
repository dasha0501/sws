<!DOCTYPE html>
<html>
<head>
	<title>добавление товара</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
		.bg{
			background: #f8e5de;
		}
		@font-face{
			font-family: DESDEMONA;
		}
		.font{
			font-family: DESDEMONA;
			color: white;
			height: 100%;
		}
		.width200{
			width: 200px;
		}
		.mt-6{
			margin-top: 100px;
		}
		.ban{
			background: #b1b9b5;
		}
		@font-face{
			src:url(19317.ttf);
			font-family: MariageAntD;
		}
		.logo{
			height: 100px;
		}
		.font-color{
			color: #b1b9b5;
		}
	</style>
</head>
<body class="bg">
	<form action="test.php" method="GET">
		<div class="col-12 ban" style="height: 100px;">
			<div class="row">
				<img src="logo.png" class="logo mx-auto">
			</div>	
		</div>
		<div class="width200 mx-auto mt-6">
			<h6 class="font font-color">
				введи наименование товара
			</h6>
			<input type="" name="title">
		</div>
		<div class="width200 mx-auto">
			<h6 class="font font-color">
				опиши его
			</h6>
			<input type="" name="dess">
		</div>
		<div class="width200 mx-auto">
			<h6 class="font font-color">
				укажить путь к изображению
			</h6>
			<input type="" name="img">
		</div>
		<div class="width200 mx-auto">
			<h6 class="font font-color">
				напиши его цену
			</h6>
			<input type="" name="price">
		</div>
		<div class="mx-auto col-4 mt-3">
				<button type="" class="ban col-12 font" style="height: 35px;">
					<h6 class="font">
						добавить
					</h6>
				</button>				
			</div>
	</form>
</body>
</html>