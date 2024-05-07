<?php 
require_once 'model/basemodel.php';
/**
  * 
  */
 class datacontroller
 {
 	private $model;
 	function __construct()
 	{
 		// code...
 		$this->model= new datamodel();
 	}
 	public function dieuhuong(){
 		if (isset($_GET['action'])){
 			switch ($_GET['action']) {
 				case 'suasach':
 					$datatg=$this->model->laytentacgia();
 					$data=$this->model->laythongtinsach($_GET['ma_sach']);
 					include_once ('view/suasach.php');
 					if (isset($_POST['nutsua'])) {
		 				$t1=$_POST['tens'];
		 				$t2=$_POST['nxb'];
		 				$t3=$_POST['tg'];
		 				$this->model->suathongtinsach($t1,$t2,$t3,$_GET['ma_sach']);
		 				header('location:index.php');
 					}
 					break;
 				case 'themsach':
 					$datatg=$this->model->laytentacgia();
 					include_once ('view/themsach.php');
 					if (isset($_POST['nutthem'])) {
		 				$t1=$_POST['tens'];
		 				$t2=$_POST['nxb'];
		 				$t3=$_POST['tg'];
		 				$this->model->themthongtinsach($t1,$t2,$t3);
		 				header('location:index.php');
 					}
 				break;
 				default:
 					// code...
 					break;
 			}
 		}else {
 			$data=$this->model->laydanhsachsach();
 			$data1=$this->model->laydanhsachsachtenTV();
 			include_once('view/quanlysach.php');
 			}
 		
 	}
 } ?>