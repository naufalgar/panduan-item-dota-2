<?php
class inputModel{
	public function __construct(){
		$connection = mysql_connect("localhost","root","");
		$db = mysql_select_db("item_dota");
	}

	public function execute($query){
		return mysql_query($query);
	}

	public function fetch($var){
		return mysql_fetch_array($var);
	}

	public function numRow($data){
		return mysql_num_rows($data);
	}

	public function selectKat($kategori){
		$query = "SELECT * FROM input_item WHERE kategori = '$kategori'";
		return $this->execute($query);
	}

	public function select($id){
		$query = "SELECT * FROM input_item WHERE id = '$id'";
		return $this->execute($query);
	}

	public function insert($nama, $kategori, $deskripsi, $harga, $sejarah, $nama_gambar){
		$query = "INSERT INTO input_item VALUES(null, '$nama', '$kategori', '$deskripsi', '$harga', '$sejarah', '$nama_gambar')";
		return $this->execute($query);
	}

	public function update($id, $nama, $kategori, $deskripsi, $harga, $sejarah, $nama_gambar){
		$query = "UPDATE input_item SET nama = '$nama', kategori = '$kategori', deskripsi = '$deskripsi', harga = '$harga', sejarah = '$sejarah', gambar = '$nama_gambar' WHERE id='$id'";
		return $this->execute($query);		
	}

	public function delete($id){
		$query = "DELETE FROM input_item WHERE id = '$id'";
		return $this->execute($query);
	}

	public function __destruct(){

	}
}
?>