<!DOCTYPE html>
<html>
<head>
	<title>Cập nhật thành viên</title>
</head>
<body>
	<div class="themthanhvien">
		<h3>SỬA THÀNH VIÊN</h3>
		<a href="index.php?controller=thanh-vien&action=list">Danh Sách</a>
		<form action="" method="POST">
			<table>
				<tr>
					<td>Họ tên :</td>
					<td><input type="text" name="ten_tv" value="<?php echo $dataID['ten_tv'];  ?>" placeholder="Họ tên thành viên"></td>
				</tr>
				<tr>
					<td>Năm sinh :</td>
					<td><input type="text" name="nam_sinh" value="<?php echo $dataID['nam_sinh'];  ?>" placeholder="Năm sinh"></td>
				</tr>
				<tr>
					<td>Giới tính :</td>
					<td><input type="text" name="gioi_tinh" value="<?php echo $dataID['gioi_tinh'];  ?>" placeholder="Giới tính"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input style="" type="submit" name="add_tv" value="Cập Nhật"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>