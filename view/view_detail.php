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

	td{
		vertical-align: top;
	}

	#header{
		padding: 20px;
		font-size: 20px;
		text-align: center;
		background-color: #000;
		color: #fff;
		text-align: center;
	}

	#header a{
		text-decoration: none;
		color: #fff;
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
	#canvas #isi table tr td {
	color: #FFF;
}
    </style>
</head>
<body>
<div id="canvas">
	<div id="header">
		<a href="index.php">ITEMS</a>
	</div>
	<div id="isi">
	<table width="100%" height="86">
	    <tr>
	      <td colspan="4" align="center"><div align="left">BASICS</div></td>
	      <td colspan="6" align="center"><div align="left">UPGRADES</div></td>
	      <td align="center"><div align="left">SECRETS</div></td>
      </tr>
	    <tr>
	      <td align="center"><img src="assets/img/itemcat_consumables.PNG" width="39" height="40"></td>
	      <td align="center"><img src="assets/img/itemcat_attributes.PNG" width="39" height="40"></td>
	      <td align="center"><img src="assets/img/itemcat_armaments.PNG" width="39" height="40"></td>
	      <td align="center"><img src="assets/img/itemcat_arcane.PNG" width="39" height="40"></td>
	      <td align="center"><img src="assets/img/itemcat_common.PNG" width="39" height="40"></td>
	      <td align="center"><img src="assets/img/itemcat_support.PNG" width="39" height="40"></td>
	      <td align="center"><img src="assets/img/itemcat_caster.PNG" width="39" height="40"></td>
	      <td align="center"><img src="assets/img/itemcat_weapons.PNG" width="39" height="40"></td>
	      <td align="center"><img src="assets/img/itemcat_armor.PNG" width="39" height="40"></td>
	      <td align="center"><img src="assets/img/itemcat_artifacts.PNG" width="39" height="40"></td>
	      <td align="center"><img src="assets/img/itemcat_secret.PNG" width="39" height="40"></td>
      </tr>
      </table>
	<table width="100%">
	  <tr>
	    <td width="31%" align="center" valign="middle"><strong><?php echo $row['nama']?></strong></td>
      </tr>
	  <tr>
	    <td align="center" valign="middle"><?php echo $row['harga']?></td>
      </tr>
	  <tr>
	    <td height="194"><img src="assets/img/item/<?php echo $row['gambar']?>" width="262" height="188"></td>
	    <td><?php echo $row['deskripsi']?></td>
	    <td><?php echo $row['sejarah']?></td>
      </tr>
	  </table>
  </div>
</div>	
</body>
</html>