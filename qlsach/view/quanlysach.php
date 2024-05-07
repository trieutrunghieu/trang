<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quan ly sach</title>
	<link rel="stylesheet" type="text/css" href="css/quanlysach.css">
</head>
<body>
	<h1>Danh sach sach</h1>
	<a href="index.php?action=themsach">Thêm sách mới</a>
	<table>
		<tr>
			<th>STT</th>
			<th>Ten sach</th>
			<th>Nam xuat ban</th>
			<th>Ten tac gia</th>
			<th>Thao tac</th>
		</tr>
		<?php 
		foreach ($data as  $value) {
		 	// code...
		 	?>
		 	<tr>
		 		<td><?php echo $value['ma_sach'] ?></td>
		 		<td><?php echo $value['ten_sach'] ?></td>
		 		<td><?php echo $value['namxb'] ?></td>
		 		<td><?php echo $value['ten_tg']?></td>
		 		<td><a href="index.php?action=suasach&ma_sach=<?php echo $value['ma_sach'] ?>">Edit</a> <a href="#">Delete</a></td>
		 	</tr>
		 	<?php
		 	} 
		 ?>
	</table>
	<h1>Danh sach sach ten tieng viet</h1>
	<table>
		<tr>
			<th>STT</th>
			<th>Ten sach</th>
			<th>Nam xuat ban</th>
			<th>Ten tac gia</th>
			<th>Thao tac</th>
		</tr>
		<?php 
		foreach ($data1 as  $value1) {
		 	// code...
		 	?>
		 	<tr>
		 		<td><?php echo $value1['ma_sach'] ?></td>
		 		<td><?php echo $value1['ten_sach'] ?></td>
		 		<td><?php echo $value1['namxb'] ?></td>
		 		<td><?php echo $value1['ten_tg']?></td>
		 		<td><a href="#">Edit</a> <a href="#">Delete</a></td>
		 	</tr>
		 	<?php
		 	} 
		 ?>
	</table>
</body>
</html>