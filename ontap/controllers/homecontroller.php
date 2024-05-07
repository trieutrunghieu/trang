<?php 
// lấy tất cả văn bản/mã/đánh dấu tồn tại trong tệp được chỉ định và sao chép nó vào tệp sử dụng câu lệnh include.
// requiresẽ tạo ra lỗi nghiêm trọng (E_COMPILE_ERROR) và dừng tập lệnh
	require_once 'models/model.php';

/**
  * 
  */
 class datacontroller
 {
 	private $model;
 	// Hàm tạo cho phép bạn khởi tạo các thuộc tính của đối tượng khi tạo đối tượng.
 	 // tự động gọi hàm này khi bạn tạo một đối tượng từ một lớp.
 	function __construct()
 	{
 		$this->model=new datamodel();
 	}
 	public function dieuhuong(){
 		 // sử dụng để kiểm tra xem một biến đã được khởi tạo và có giá trị hay không
 		if (isset($_GET['action'])){
 			// Lệnh switch case dùng để xác định một danh sách các trường hợp
 			// $_GET các tham số và giá trị của chúng sẽ hiển thị trực tiếp trong URL
 			// một biến siêu toàn cục 
 			switch ($_GET['action']) {
 				case 'suasv':
 					$data=$this->model->laytenlop();
 					$datalay=$this->model->laysinhvientheomasv($_GET['ma_sv']);
 					include_once('views/suasv.php');
 					if (isset($_POST['nutsua'])){
 						$t1=$_POST['tensv'];
 						$t2=$_POST['date'];
 						$t3=$_POST['gt'];
 						$t4=$_POST['lop'];
 						$this->model->suasinhvien($t1,$t2,$t3,$t4,$_GET['ma_sv']);
 						header('location:index.php');
 					}
 					break;
 				case 'themsv':
					$data_lay=$this->model->laytenlop();
					include_once('views/themsv.php');
					// được sử dụng để truy cập các giá trị được gửi đi từ một biểu mẫu HTML thông qua phương thức POST.
					if (isset($_POST['nutthem'])){
						$t1=$_POST['tensv'];
						$t2=$_POST['date'];
						$t3=$_POST['gt'];
						$t4=$_POST['lop'];
						$this->model->themsv($t1,$t2,$t3,$t4);
						// chuyển hướng
						header('location:index.php');
					}
					break;
				case 'xoasv':
					$this->model->xoasinhvien($_GET['ma_sv']);
					header('location:index.php');
					break;
 				default:
 					// code...
 					break;
 			}
 		} else {
			$data=$this->model->laysinhvien();
	 		$datanu=$this->model->laysinhviennu();
	 		$data20=$this->model->sinhvienduoi20tuoi();
	 		// include sẽ chỉ tạo ra cảnh báo (E_WARNING) và tập lệnh sẽ tiếp tục
	 		include_once('views/home.php');
 		}
 		
 	}
 } ?>