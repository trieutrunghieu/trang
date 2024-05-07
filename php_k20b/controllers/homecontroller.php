<?php
session_start();
require_once'models/basemodel.php';
/**
 * 
 */
class datacontroller
{
	public $model;

	function __construct()
	{
		$this->model=new datamodel();
	}
	public function dieuhuong(){
		if (isset($_GET['action'])) {
			switch ($_GET['action']) {
				case 'dangnhap':
					include_once('views/dangnhap.php');
					if(isset($_POST['nutdn'])){
						$ten_dn=$_POST['tdn'];
						$mat_khau=$_POST['mk'];
						$d1=$this->model->kiemtradangnhap($ten_dn,$mat_khau);
						if ($d1==0){
							echo "Đăng nhập thất bại";
						}else {
							// echo "Đăng nhập thành công";
							$data_nd=$this->model->laythongtinnguoidung($ten_dn,$mat_khau);
							header('location:index.php');
							$_SESSION['tennguoidung']=$data_nd[0]['tendangnhap'];
							$_SESSION['quyennguoidung']=$data_nd[0]['phanquyen'];
						}
					}
					
					break;
					case 'trangquantri':
						$data=$this->model->laysanpham();
						include_once('views/trangquantri.php');
						break;
				case 'dangxuat':
					session_destroy();
					header ('location:index.php');
					break;
				case 'themsanpham':
					$data_loai=$this->model->layloaisp();
					include_once('views/themsp.php');
					if (isset($_POST['nutthem'])){
						$t1=$_POST['tsp'];
						$t2=$_POST['lsp'];
						$t3=$_POST['sl'];
						$t4=$_POST['dg'];
						$t5=$_POST['mota'];
						$t6=$_POST['img'];
						$t7=date('Y-m-d');
						$this->model->themsanpham($t1,$t2,$t3,$t4,$t5,$t6,$t7);
						header('location:index.php');
					}
					break;
				case 'suasp':
					$data_loai=$this->model->layloaisp();
					$sanpham=$this->model->laysanphamcua1($_GET['id_sp']);
					include_once('views/suasp.php');
					if (isset($_POST['nutsua'])){
						$t1=$_POST['tsp'];
						$t2=$_POST['lsp'];
						$t3=$_POST['sl'];
						$t4=$_POST['dg'];
						$t5=$_POST['mota'];
						$t6=$_POST['img'];
						$t7=date('Y-m-d');
						$this->model->suasanpham($t1,$t2,$t3,$t4,$t5,$t6,$t7,$_GET['id_sp']);
						header('location:index.php');
					}
					break;
				case 'xoasp':
					$this->model->xoasanpham($_GET['id_sp']);
					header('location:index.php');
					// include_once('views/xoasp.php');
					// if(isset($_POST['nutxoa'])){
					// 	$this->model->xoasanpham($_GET['id_sp']);
					// 	echo "Xóa thành công";						
					// }
					// else if (isset($_POST['nutthoat'])){
					// 	header('location:index.php');
					// }
					break;
				default:
					// code...
					break;
			}
		}else{
		$data=$this->model->laysanpham();
		// echo $data[0]['ten_sp'];
		$dataloaisp = $this->model->layloaisp(); 
         include_once('views/home.php');
		}
	}
}
?>