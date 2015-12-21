<?php
include "model/inputModel.php";
class inputController{
	public $model;
	public function __construct(){
		$this->model = new inputModel();
	}

	public function view(){
		$kat1 = 'itemcat_consumables';
		$data1 = $this->model->selectKat($kat1);

		$kat2 = 'itemcat_attributes';
		$data2 = $this->model->selectKat($kat2);

		$kat3 = 'itemcat_armaments';
		$data3 = $this->model->selectKat($kat3);

		$kat4 = 'itemcat_arcane';
		$data4 = $this->model->selectKat($kat4);

		$kat5 = 'itemcat_common';
		$data5 = $this->model->selectKat($kat5);

		$kat6 = 'itemcat_support';
		$data6 = $this->model->selectKat($kat6);

		$kat7 = 'itemcat_caster';
		$data7 = $this->model->selectKat($kat7);

		$kat8 = 'itemcat_weapons';
		$data8 = $this->model->selectKat($kat8);

		$kat9 = 'itemcat_armor';
		$data9 = $this->model->selectKat($kat9);

		$kat10 = 'itemcat_artifacts';
		$data10 = $this->model->selectKat($kat10);

		$kat11 = 'itemcat_secret';
		$data11 = $this->model->selectKat($kat11);
		

		$view1 = include "view/view.php";
	}

	public function viewInsert(){
		include "view/view_insert_item.php";
	}

	public function insert(){
		$nama = @$_POST['nama'];
		$kategori = @$_POST['kategori'];
		$deskripsi = @$_POST['deskripsi'];
		$harga = @$_POST['harga'];
		$sejarah = @$_POST['sejarah'];

		$sumber = @$_FILES['gambar']['tmp_name'];
		$target = 'assets/img/item/';
		$nama_gambar = @$_FILES['gambar']['name'];

		if($nama == ''){
			?>
			<script type="text/javascript">
			alert("Nama Tidak Boleh Kosong!");
			</script>
			<?php
		}else if($kategori == ''){
			?>
			<script type="text/javascript">
			alert("Kategori Tidak Boleh Kosong!");
			</script>
			<?php
		}else{
			$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
			if($pindah){
				$insert = $this->model->insert($nama, $kategori, $deskripsi, $harga, $sejarah, $nama_gambar);
				?>
				<script type="text/javascript">
				alert("Data Berhasil di Tambahkan!");
				</script>
				<?php
			}else{
				?>
				<script type="text/javascript">
				alert("Gambar Gagal di Upload!");
				</script>
				<?php
			}
		}
	}

	public function viewLihat(){
		include "view/view_data.php";
	}

	public function lihat(){
		$kategori = @$_POST['kategori'];
		$data = $this->model->selectKat($kategori);
		include "view/view_draft.php";
	}

	public function viewEdit($id){
		$data = $this->model->select($id);
		include "view/view_edit_item.php";
	}

	public function edit(){
		$id = @$_GET['id'];
		$nama = @$_POST['nama'];
		$kategori = @$_POST['kategori'];
		$deskripsi = @$_POST['deskripsi'];
		$harga = @$_POST['harga'];
		$sejarah = @$_POST['sejarah'];

		$sumber = @$_FILES['gambar']['tmp_name'];
		$target = 'assets/img/item/';
		$nama_gambar = @$_FILES['gambar']['name'];

		if($nama == ''){
			?>
			<script type="text/javascript">
			alert("Nama Tidak Boleh Kosong!");
			</script>
			<?php
		}else if($kategori == ''){
			?>
			<script type="text/javascript">
			alert("Kategori Tidak Boleh Kosong!");
			</script>
			<?php
		}else{
			$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
			if($pindah){
				$insert = $this->model->update($id, $nama, $kategori, $deskripsi, $harga, $sejarah, $nama_gambar);
				?>
				<script type="text/javascript">
				alert("Data Berhasil di Edit!");
				window.location.href="?page=view_data";
				</script>
				<?php
			}
		}
	}

	public function delete($id){
		$delete = $this->model->delete($id);
		?>
				<script type="text/javascript">
				alert("Data Berhasil di Delete!");
				window.location.href="?page=view_data";
				</script>
				<?php
	}

	public function __destruct(){

	}
}
?>