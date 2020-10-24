<!DOCTYPE html>
<html>
<head>
	<title>войдите в аккаунт | 	sweetheartshop</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
		.bg{
			background: #f8e5de;
		}
		.mt-6{
			margin-top: 150px;
		}
		@font-face{
			src:url(18889.ttf);
			font-family: NK63;
		}
		.font{
			font-family: NK63;
			color: white;
			height: 100%;
		}
		@font-face{
			src:url(19317.ttf);
			font-family: MariageAntD;
		}
		.ban{
			background:  #b1b9b5;
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
	<form action="index.php" method="GET">
		<div class="col-12 ban" style="height: 100px;">
			<div class="row">
				<img src="logo.png" class="logo mx-auto">
			</div>
		</div>
		<div class="col-4 mx-auto mt-6">
			<h5 class="font font-color">
				для дальнейшей работы, введите ваше имя
			</h5>
			<input type="text" name="name" class="form-control">	
		</div>
		<div class="col-4 mx-auto mt-2">	
			<h5 class="font font-color
			">
				и пароль
			</h5>
			<input type="password" name="pass" class="form-control">
			<div class="mx-auto col-10 mt-3">
				<button type="" class="ban col-12 font" style="height: 35px;">
							войти
				</button>				
			</div>
		</div>
	</form>
</body>
</html>