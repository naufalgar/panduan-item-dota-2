<?php
include "model/loginModel.php";
class loginController{
	public $model;
	public function __construct(){
		$this->model = new loginModel();
	}

	public function login(){
		$username = @$_POST['username'];
		$password = md5(@$_POST['password']);

		$sql = $this->model->select($username, $password);
		$data = $this->model->fetch($sql);
		$cek = $this->model->numRow($sql);

		if($cek > 0){
			@session_start();
			@$_SESSION['nama'] = $data['nama'];
			@$_SESSION['username'] = $data['username'];
			?>
			<script type="text/javascript">
			alert("Login Berhasil");
			window.location.href="index.php?page=tambah_item";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
			alert("Login Gagal");
			</script>
			<?php
		}
	}

	public function logout(){
		@session_start();
		@session_destroy();
		?>
			<script type="text/javascript">
			alert("Logout Berhasil");
			window.location.href="index.php";
			</script>
			<?php
	}

	public function __destruct(){

	}
}
?>