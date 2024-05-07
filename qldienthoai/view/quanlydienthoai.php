<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản lý điện thoải</title>
	<link rel="stylesheet" type="text/css" href="css/quanlydienthoai.css">
</head>
<body>
	Các hãng điện thoại:
	<ul>
		<?php 
		foreach ($data as  $value) {
		 	?>
		 	<li><a href="index.php?action=hienthi&ma_hang=<?php echo $value['ma_hang'] ?>"><?php echo $value['ten_hang'] ?></a></li>
		 	<?php
		 } ?>
	</ul>
	<table>
		<tr>
			<th>STT</th>
			<th>Tên điện thoại</th>
			<th>Tên hãng</th>
			<th>Giá</th>
			<th>Hình ảnh</th>
			<th>Thao tác</th>
		</tr>
		<?php foreach ($data1 as $value) {
			?>
			<tr>
				<td><?php echo $value['ma_dt'] ?></td>
				<td><?php echo $value['ten_dt'] ?></td>
				<td><?php echo $value['ten_hang'] ?></td>
				<td><?php echo $value['gia'] ?></td>
				<td><img src="img/<?php echo $value['hinh_anh'] ?>"></td>
				<td><a href="index.php?action=suadt&ma_dt=<?php echo $value['ma_dt'] ?>">Sửa</a></td>
			</tr> <?php
		} ?>
	</table>
</body>
</html>