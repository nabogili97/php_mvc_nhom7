<!DOCTYPE html>
<html>
<head>
	<title>Thêm mới thành viên</title>
</head>
<body>
	<div class="themthanhvien">
		<h3>THÊM THÀNH VIÊN MỚI</h3>
		<a href="index.php?controller=thanh-vien&action=list">Danh Sách</a>
		<form action="" method="POST">
			<table>
				<tr>
					<td>Họ tên :</td>
					<td><input type="text" name="ten_tv" placeholder="Họ tên thành viên"></td>
				</tr>
				<tr>
					<td>Năm sinh :</td>
					<td><input type="text" name="nam_sinh" placeholder="Năm sinh"></td>
				</tr>
				<tr>
					<td>Giới tính :</td>
					<td><input type="text" name="gioi_tinh" placeholder="Giới tính"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input style="" type="submit" name="add_tv" value="Thêm"></td>
				</tr>
			</table>
		</form>
		<?php 
				if(isset($thanhcong) && in_array('them_thanh_cong', $thanhcong)){
					echo "<p style='color:red;text-align:center;'>Thêm mới thành công !!! </p>";
				}
			 ?>
	</div>
</body>
</html>