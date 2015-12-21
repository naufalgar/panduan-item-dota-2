<?php

include "controller/inputController.php";
include "controller/viewController.php";
include "controller/loginController.php";

$input = new inputController();
$view = new viewController();
$login = new loginController();

$page = @$_GET['page'];
$id = @$_GET['id'];

if($page == ''){
	$input->view();
}else if($page == 'tambah_item'){
	$input->viewInsert();
}else if($page == 'item'){
	$view->viewDetail($id);
}else if($page == 'logout'){
	$login->logout();
}else if($page == 'view_data'){
	$input->viewLihat();
}else if($page == 'edit'){
	$input->viewEdit($id);
}else if($page == 'delete'){
	$input->delete($id);
}else{
	echo "Tidak Adala Halaman";
}

?>