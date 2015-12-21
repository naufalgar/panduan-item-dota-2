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
		background-color: #fff;
		text-align: right;
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
    </style>
</head>
<body>
<div id="canvas">
	<div id="header">
		<a href="index.php">ITEMS</a>
	</div>
    <div id="menu">
    	<ul>
    		<li><a href="login.php">Login</a></li>
    	</ul>
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
	    <tr>
	      	<td align="center">
	      	<?php while($row = $this->model->fetch($data1)){?>
				<a href="?page=item&id=<?php echo $row['id']?>"><img src="assets/img/item/<?php echo $row['gambar']?>" width="80" height="64"><br></a>
			<?php }?>
			</td>
	      <td align="center">
	      	<?php while($row = $this->model->fetch($data2)){?>
				<a href="?page=item&id=<?php echo $row['id']?>"><img src="assets/img/item/<?php echo $row['gambar']?>" width="80" height="64"><br></a>
			<?php }?>
	      </td>

	      <td align="center">
	      	<?php while($row = $this->model->fetch($data3)){?>
				<a href="?page=item&id=<?php echo $row['id']?>"><img src="assets/img/item/<?php echo $row['gambar']?>" width="80" height="64"><br></a>
			<?php }?>
	      </td>

	      <td align="center">
	      	<?php while($row = $this->model->fetch($data4)){?>
				<a href="?page=item&id=<?php echo $row['id']?>"><img src="assets/img/item/<?php echo $row['gambar']?>" width="80" height="64"><br></a>
			<?php }?>
	      </td>

	      <td align="center">
	      	<?php while($row = $this->model->fetch($data5)){?>
				<a href="?page=item&id=<?php echo $row['id']?>"><img src="assets/img/item/<?php echo $row['gambar']?>" width="80" height="64"><br></a>
			<?php }?>
	      </td>

	      <td align="center">
	      	<?php while($row = $this->model->fetch($data6)){?>
				<a href="?page=item&id=<?php echo $row['id']?>"><img src="assets/img/item/<?php echo $row['gambar']?>" width="80" height="64"><br></a>
			<?php }?>
	      </td>

	      <td align="center">
	      	<?php while($row = $this->model->fetch($data7)){?>
				<a href="?page=item&id=<?php echo $row['id']?>"><img src="assets/img/item/<?php echo $row['gambar']?>" width="80" height="64"><br></a>
			<?php }?>
	      </td>

	      <td align="center">
	      	<?php while($row = $this->model->fetch($data8)){?>
				<a href="?page=item&id=<?php echo $row['id']?>"><img src="assets/img/item/<?php echo $row['gambar']?>" width="80" height="64"><br></a>
			<?php }?>
	      </td>

	      <td align="center">
	      	<?php while($row = $this->model->fetch($data9)){?>
				<a href="?page=item&id=<?php echo $row['id']?>"><img src="assets/img/item/<?php echo $row['gambar']?>" width="80" height="64"><br></a>
			<?php }?>
	      </td>

	      <td align="center">
	      	<?php while($row = $this->model->fetch($data10)){?>
				<a href="?page=item&id=<?php echo $row['id']?>"><img src="assets/img/item/<?php echo $row['gambar']?>" width="80" height="64"><br></a>
			<?php }?>
	      </td>

	      <td align="center">
	      	<?php while($row = $this->model->fetch($data11)){?>
				<a href="?page=item&id=<?php echo $row['id']?>"><img src="assets/img/item/<?php echo $row['gambar']?>" width="80" height="64"><br></a>
			<?php }?>
	      </td>

        </tr>
      </table>
  </div>
</div>	
</body>
</html>