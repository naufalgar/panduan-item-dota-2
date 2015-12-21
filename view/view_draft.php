<?php
@session_start();
if(empty(@$_SESSION['username'])){
	header("location:login.php");
}else{
?>
<body>
	<div id="isi">
		<fieldset>
		<legend>Data Item</legend>
		<table width="100%" border="1px" style="border-collapse:collapse;">
		<thead style="background-color:#0635e5; color:#fff;">
			<tr>
				<tr>
					<th width="5%">No</th>
					<th width="15%">Gambar</th>
					<th width="10%">Nama</th>
					<th width="10%">Harga</th>
					<th width="20%">Deskripsi</th>
					<th width="20%">Sejarah</th>
					<th width="15%">Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				while($row = $this->model->fetch($data)){
				?>
				<tr>
					<td align="center"><?php echo $no++?></td>
					<td align="center"><img src="assets/img/item/<?php echo $row['gambar']?>" width="80" height="60"></td>
					<td><?php echo $row['nama']?></td>
					<td align="center"><?php echo $row['harga']?></td>
					<td><?php echo $row['deskripsi']?></td>
					<td><?php echo $row['sejarah']?></td>
					<td align="center"><a href="?page=edit&id=<?php echo $row['id']?>"><button>Edit</button></a>
						<a onclick="return confirm('Yakin Akan Menghapus?');" href="?page=delete&id=<?php echo $row['id']?>"><button>hapus</button></a></td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
		</fieldset>	
</body>
<?php
}
?>