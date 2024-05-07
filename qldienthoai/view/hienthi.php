<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hien thi theo hang</title>
	<link rel="stylesheet" type="text/css" href="css/quanlydienthoai.css">
</head>
<body>
	<a href="index.php">Quay lại quản lý điện thoại</a>
	<table>
		<tr>
			<th>STT</th>
			<th>Tên điện thoại</th>
			<th>Tên hãng</th>
			<th>Giá</th>
			<th>Hình ảnh</th>
			<th>Thao tac</th>
		</tr>
		<?php foreach ($data as $value) {
			?>
			<tr>
				<td><?php echo $value['ma_dt'] ?></td>
				<td><?php echo $value['ten_dt'] ?></td>
				<td><?php echo $value['ten_hang'] ?></td>
				<td><?php echo $value['gia'] ?></td>
				<td><img src="img/<?php echo $value['hinh_anh'] ?>"></td>
				<td><a href="#">Sua</a></td>
			</tr> <?php
		} ?>
	</table>
</body>
</html>