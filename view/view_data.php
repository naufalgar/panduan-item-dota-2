<?php
@session_start();
if(empty(@$_SESSION['username'])){
	header("location:login.php");
}else{
?>
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
		color:#fff;
	}

	
	#menu{
		background-color: #fff;
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
		background-color: #aea;
	}

	#menu ul li a{
		display: block;
		text-decoration: none;
		color: #000;
		line-height: 40px;
		padding: 0 10px;
	}
	#canvas #isi table tr td {
	color: #FFF;
	}

	.utama ul{
		display: none;
		position: absolute;
		z-index: 2;
	}
	.utama:hover ul{
		display: block;
	}
	.utama ul li{
		display: block;
		background-color: #230df7;
		width: 140px;
	}
	.utama2{
		background-color: #f06009;
	}
    </style>
</head>
<body>
<div id="canvas">
	<div id="header">
		<a href="index.php">ITEMS</a>
	</div>
	<div id="menu">
    	<ul>
    		<li class="utama"><a href="?page=tambah_item">Insert Data</a></li>
    		<li class="utama"><a href="?page=view_data">Lihat Data</a></li>
    		<li class="utama2" style="float:right;"><a href="?page=logout">Logout</a></li>
    	</ul>
    </div>
	<div id="isi">
		<fieldset>
	<legend>Daftar Item</legend>
	<form method="POST">
		<table>
			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td>
					<label>
						<input name="kategori" value="itemcat_consumables" type="radio"><img src="assets/img/itemcat_consumables.PNG" width="20" heigth="5">
					</label>

					<label>
						<input name="kategori" value="itemcat_attributes" type="radio"><img src="assets/img/itemcat_attributes.PNG" width="20" heigth="5">
					</label>

					<label>
						<input name="kategori" value="itemcat_armaments" type="radio"><img src="assets/img/itemcat_armaments.PNG" width="20" heigth="5">
					</label>

					<label>
						<input name="kategori" value="itemcat_arcane" type="radio"><img src="assets/img/itemcat_arcane.PNG" width="20" heigth="5">
					</label>

					<label>
						<input name="kategori" value="itemcat_common" type="radio"><img src="assets/img/itemcat_common.PNG" width="20" heigth="5">
					</label>

					<label>
						<input name="kategori" value="itemcat_support" type="radio"><img src="assets/img/itemcat_support.PNG" width="20" heigth="5">
					</label>

					<label>
						<input name="kategori" value="itemcat_caster" type="radio"><img src="assets/img/itemcat_caster.PNG" width="20" heigth="5">
					</label>

					<label>
						<input name="kategori" value="itemcat_weapons" type="radio"><img src="assets/img/itemcat_weapons.PNG" width="20" heigth="5">
					</label>

					<label>
						<input name="kategori" value="itemcat_armor" type="radio"><img src="assets/img/itemcat_armor.PNG" width="20" heigth="5">
					</label>

					<label>
						<input name="kategori" value="itemcat_artifacts" type="radio"><img src="assets/img/itemcat_artifacts.PNG" width="20" heigth="5">
					</label>

					<label>
						<input name="kategori" value="itemcat_secret" type="radio"><img src="assets/img/itemcat_secret.PNG" width="20" heigth="5">
					</label>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="lihat" value="Lihat"></td>
			</tr>
		</table>
	</form>
	
	<?php
	if(@$_POST['lihat']){
		$main = new inputController();
		$main->lihat();
	}
	?>
</fieldset>
  	</div>
</div>	
</body>
</html>
<?php
}
?>