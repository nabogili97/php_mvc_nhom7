<div class="danhsach">
	<h3>DANH SÁCH THÀNH VIÊN</h3>
	<table border="1px">
		<thead>
			<tr>
				<th>STT</th>
				<th>Ma</th>
				<th>Ho Ten</th>
				<th>Nam Sinh</th>
				<th>Gioi Tinh</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$stt = 1;
					foreach ($data as $value ) {
						
				
			 ?>
			<tr>
				<td><?php echo $stt;  ?></td>
				<td><?php echo $value['ten_tv'];  ?></td>
				<td><?php echo $value['nam_sinh'];  ?></td>
				<td><?php echo $value['gioi_tinh'];  ?></td>
				<td>
					<a  href="index.php?controller=thanh-vien&action=edit&id=<?php echo $value['ma_tv'] ?>">EDIT</a>
					<a href="index.php?controller=thanh-vien&action=edit&id=<?php echo $value['ma_tv'] ?>" title="Xóa">DELETE</a>
				</td>
			</tr>
			<?php 
				$stt++;
			}
			 ?>
		</tbody>
	</table>
</div>