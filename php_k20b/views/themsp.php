<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang thêm sản phẩm</title>
	<link rel="stylesheet" type="text/css" href="CSS/themsp.css">
</head>
<body>
		<div class="container">
		<form method="post">
			<div class="nhan_login ccpadding">Thêm sản phẩm	</div>
			<div>
				<a href="index.php?action=trangquantri">Quay lại</a>
			</div>
			<div class="ccpadding">Tên sản phẩm:</div>
			<div>
				<input type="text" name="tsp" placeholder="Nhập tên sản phẩm" class="ddtext">
			</div>
			<div class="ccpadding">Id loại sản phẩm:</div>
			<div class="ccpadding">
				<select class="ddtext" name="lsp">
					<?php
						foreach ($data_loai as $value){
							?>
								<option value="<?php echo $value['id_loaisp']; ?>">
									<?php 
										echo $value['tenloaisp'];
									?>
								</option>
					<?php 
						}
						?>
					
				</select>
			</div>
			<div class="ccpadding">Số lượng sản phẩm:</div>
			<div>
				<input type="text" name="sl" placeholder="Nhập số lượng" class="ddtext">
			</div>
			<div class="ccpadding">Đơn giá:</div>
			<div>
				<input type="text" name="dg" placeholder="Nhập đơn giá" class="ddtext">
			</div>
			<div class="ccpadding">Mô tả:</div>
			<div>
				<input type="text" name="mota" placeholder="Nhập mô tả" class="ddtext">
			</div>
			<div class="ccpadding">Viết link hình ảnh:</div>
			<div>
				<input type="text" name="img" placeholder="Nhập mô tả" class="ddtext">
			</div>			
			<div class="nhomnut ccpadding">
				<div class="nut_login">
					<input type="submit" name="nutthem" value="Thêm" class="ddnut">
				</div>
				<div class="nut_rs">
					<input type="reset" name="" value="Nhập lại" class="ddnut">
				</div>
			</div>
		</form>
	</div>
</body>
</html>