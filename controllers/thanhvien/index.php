<?php 
	
		if(isset($_GET['action'])){
		$action = $_GET['action'];
	}
	else {
		$action = '';
	}
	$thanhcong = array();
	// nếu action=add thì dẫn đến file add_tv.php
	switch ($action) {
		case 'add':{

			if(isset($_POST['add_tv'])){
				$hoten = $_POST['ten_tv'];
				$namsinh = $_POST['nam_sinh'];
				$gioitinh = $_POST['gioi_tinh'];

				if($db->InsertData($hoten, $namsinh, $gioitinh)){
					$thanhcong[] = 'them_thanh_cong';  
				}

			}
		
		
			require_once('views/thanhvien/add_tv.php');
			break;
			
		}
		case 'list':{
			$tblTable = "thanhvien";
			$data = $db -> getAllData($tblTable);
			require_once('views/thanhvien/list.php');
			break;
		}


		case 'delete':{
			if(isset($_GET['ma_tv'])){
				$id = $_GET['id'];
				$tblTable = 'thanhvien';

				if($db -> Delete($id, $tblTable)){
					header('location : index.php?controller=thanh-vien&action=list');
				}
			}
		}
			

		case 'edit':{
			if(isset($_GET['ma_tv'])){
				$id = $_GET['ma_tv'];
				$tblTable = "thanhvien";
				$dataID = $db -> getDataID($tblTable, $id);

				//Lay du lieu tu view
				if(isset($_POST['updata_user'])){
					$hoten = $_POST['ten_tv'];
					$namsinh = $_POST['nam_sinh'];
					$gioitinh = $_POST['gioi_tinh'];

				//Truyen du lieu lay tu View sang Model 
					$db-> UpdateData($id,$hoten,$namsinh,$gioitinh); 
					header('location : index.php?controller=thanh-vien&action=list');
				}
			}
			require_once('views/thanhvien/edit_user.php');
			break;
		}
	}
		

 ?>