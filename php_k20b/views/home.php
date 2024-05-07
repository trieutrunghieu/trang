<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
		<nav class="navbar navbar-expand-lg bg-body-tertiary">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">Navbar</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Link</a>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Dropdown
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="#">Action</a></li>
	            <li><a class="dropdown-item" href="#">Another action</a></li>
	            <li><hr class="dropdown-divider"></li>
	            <li><a class="dropdown-item" href="#">Something else here</a></li>
	          </ul>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
	        </li>


	        <?php
	        	if (isset($_SESSION ['quyennguoidung']) && $_SESSION['quyennguoidung']==1)
	        		{
	        ?>
	        <li class="nav-item">
	        	<a class="nav-link active" aria-current="page"  href="index.php?action=trangquantri">Trang quản trị</a>
	        </li>
	        <?php
	        	}
	        ?>


	      </ul>

	      <div>
	      	<?php
	      		if (isset($_SESSION['tennguoidung'])){
	      			echo $_SESSION['tennguoidung'];	  
	      		?>
	      			<a href="index.php?action=dangxuat">Logout</a>' 		
	  	    <?php
	      		}else {
	      		?>
	      			<a href="index.php?action=dangnhap">Login</a>
	      		<?php
	      		}
	      	?>

	      	
	      </div>
	    
	    </div>
	  </div>
	</nav>

	<div>
		<div class="pd">
			<img src="Anh/anh2.jpg">
		</div>

		<div class="row">

			<div class="menu col-2">
				<div class="menu">
					<ul>
						<li>
							<i class="bi bi-house"></i>
							<a href="#">Trang chủ</a>
						</li>
						<li>
							<i class="bi bi-cart"></i>
							<a href="#">Sản phẩm</a>
							<ul>
								<?php
									foreach ($dataloaisp as $value) {
									?>
									<li>
										<a href="#"><?php echo $value['tenloaisp']; ?> </a>
									</li>
									<?php
										}
									?>

							</ul>
						</li>
					</ul>
				</div>
			</div>


			<div class="noidung col-10">
				<div class="row">
					<?php
						foreach($data as $value){
					?>
							<div class="col-3">
								<div>
									<img src="./anh/<?php echo $value['hinhanh']; ?>">
								</div>
								<div class="tensp">
									<?php echo $value['ten_sp']; ?>
								</div>
								<div class="nutmua">
									<input type="button" name="" value="Mua hàng" class="nm">
								</div>
							</div>
					<?php		
						}
					?>

				</div>

			</div>
		</div>
	</div>


</body>
</html>