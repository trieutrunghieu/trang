<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sua sach</title>
	<link rel="stylesheet" type="text/css" href="css/suasach.css">
</head>
<body>
	<div class="container">
		<form method="POST">
			<h1>Sua sach</h1>
			<div class="nhomtext"><a href="index.php">Quay lai quan ly sach</a></div>
			<div class="nhomtext">Ten sach: <input type="text" name="tens"  value="<?php echo $data[0]['ten_sach'] ?>"></div>
			<div class="nhomtext">Nam xuat ban: <input type="date" name="nxb" value="<?php echo $data[0]['namxb'] ?>"></div>
			<div class="nhomtext">
				Ten tac gia:
				<select name="tg">
					<?php 
					foreach ($datatg as $value) {
						if ($value['ma_tg']==$data[0]['ma_tg']){
							?>
							<option value="<?php echo $value['ma_tg'] ?>" selected><?php echo $value['ten_tg'] ?></option>
							<?php
						}else {
							?>
							<option value="<?php echo $value['ma_tg'] ?>"><?php echo $value['ten_tg'] ?></option>
							<?php
						}
					 }
				?>
				</select>
			</div>
			<div class="nhomnut">
				<input type="submit" name="nutsua" value="Edit">
				<input type="reset" name="nutreset" value="Reset">
			</div>
		</form>
	</div>
</body>
</html>