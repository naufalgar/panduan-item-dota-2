<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ITEM DOTA</title>
	<link rel="stylesheet" href="">
	<style type="text/css">
	body{
		background-color: #000;
		font-size: 14px;
		font-family: arial;
	}
	#canvas{
		background-color: #fff;
		width: 960px;
		margin: 0 auto;
		border: 1px solid silver;
	}

	#header{
		padding: 20px;
		font-size: 20px;
		text-align: center;
		background-color: #000;
		color: #fff;
		text-align: center;
	}

	#isi{
		min-height: 510px;
		padding: 20px;
		background-color: #3d3d37;
	}

	#menu{
		background-color: #3d3d37;
		color: #fff;
	}

	#menu ul{
		list-style: none;
		padding: 0px;
		margin: 0;
	}

	#menu ul li{
		display: inline-table;
	}

	#menu ul li:hover{
		background-color: #000;
	}

	#menu ul li a{
		display: block;
		text-decoration: none;
		color: #fff;
		line-height: 40px;
		padding: 0 10px;
	}
	#utama{
	 		width: 300px;
	 		margin: 0 auto;
	 		margin-top: 12%;


	}
	#judul{
		background-color: #000;
		color: #fff;
		text-align: center;
		padding: 20px;
		border-top-left-radius: 20px;
		border-top-right-radius: 20px;
	}

	input{
		padding: 10px;
		border: 0;
	}

	 #inputan{
	 	background-color: #2707ed;
	 	padding: 20px;
	 	border-bottom-left-radius: 20px;
	 	border-bottom-right-radius: 20px;
	 }

	 .lg{
	 	width: 240px;
	 	border-top-left-radius: 20px;
	 	border-top-right-radius: 20px;
	 	border-bottom-right-radius: 20px;
	 	border-bottom-left-radius: 20px;
	 }
	 .btn{
	 	width: 260px;
	 	background-color: #000;
	 	color: #fff;
	 	border-top-left-radius: 20px;
	 	border-top-right-radius: 20px;
	 	border-bottom-right-radius: 20px;
	 	border-bottom-left-radius: 20px;
	 }
	 .btn:hover{
	 	cursor: pointer;
	 	background-color: #f50739;
	 }
    </style>
</head>
<body>
<div id="canvas">
	<div id="header">
		ITEMS
	</div>
	<div id="isi">
		<div id="utama">
			<div id="judul">
				<strong>HALAMAN LOGIN</strong>
			</div>
			<form method="POST">
			<div id="inputan">
				<div>
					<input type="text" name="username" placeholder="username" class="lg">
				</div>
				<div style="margin-top:10px;">
					<input type="password" name="password" placeholder="password" class="lg">
				</div>
				<div style="margin-top:10px;">
					<input type="submit" name="login" value="MASUK" class="btn">
				</div>
			</div>
			</form>
		</div>
  	</div>
</div>	
</body>
</html>