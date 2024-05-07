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
 		$this->model=new datamodel();
 	}
 	public function dieuhuong(){
    if ( isset($_GET['action'])){
      switch ($_GET['action']) {
        case 'hienthi':
           $data=$this->model->laydienthoaitheohang($_GET['ma_hang']);
           include_once('view/hienthi.php');
          break;
        case 'suadt':
          $data=$this->model->laytenhang();
          $data1=$this->model->laydienthoaitheomadt($_GET['ma_dt']);
          include_once('view/suadt.php');
          break;
        default:
          // code...
          break;
      }
    }else{
      $data=$this->model->laytenhang();
      $data1=$this->model->laydanhsachdt();
      include_once('view/quanlydienthoai.php');
    }
 } 
}
?>