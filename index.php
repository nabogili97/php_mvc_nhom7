<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

</body>
</html>
<?php 
	require_once 'models/Config.php';
	$db = new Database;
	$db->connect();

	if(isset($_GET['controller'])){
		$controller = $_GET['controller'];
	}
	else {
		$controller = '';
	}

	switch ($controller) {
		case 'thanh-vien':
			require_once('controllers/thanhvien/index.php');
			break;
	}
 ?>