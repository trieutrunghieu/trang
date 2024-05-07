<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sửa điện thoại</title>
	<link rel="stylesheet" type="text/css" href="css/suadt.css">
</head>
<body>
	<div class="container">
		<form method="post">
			<h1>Sửa điện thoại</h1>
			<div class="nhomtext"><a href="index.php">Quay lại quản lí điện thoại</a></div>
			<div class="nhomtext">Tên điện thoại: <input type="text" name="tendt" value="<?php echo $data1[0]['ten_dt'] ?>"></div>
			<div class="nhomtext">Tên hãng:
				<select name="hang">
					<?php foreach ($data as $value) {
						if ($value['ma_hang']==$data1[0]['ma_hang']){


						?>
							<option value="<?php echo $value['ma_hang'] ?>"><?php echo $value['ten_hang'] ?></option>
						<?php
						}else {
							?>
							<option value="<?php echo $value['ma_hang'] ?>"><?php echo $value['ten_hang'] ?></option>
							<?php
						}
					} 
					?>
					
				</select>
			</div>
			<div class="nhomtext">Giá: <input type="text" name="gia" value="<?php echo $data1[0]['gia'] ?>"></div>
			<div class="nhomtext">Hình ảnh: <input type="text" name="hinhanh" value="<?php echo $data1[0]['hinh_anh'] ?>"></div>
			<div class="nhomnut">
				<input type="submit" name="nutsua" value="Sửa">
				<input type="reset" name="reset">
			</div>
		</form>
	</div>
</body>
</html>