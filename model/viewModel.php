<?php
class viewModel{
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

	public function select($id){
		$query = "SELECT * FROM input_item WHERE id='$id'";
		return $this->execute($query);
	}

	public function __destruct(){

	}
}
?>