<?php 
/**
  * 
  */
 class datamodel
 {
 	private $host='localhost';
 	private $user='root';
 	private $pass='';
 	private $dbname='project_qldt';
 	private $connect=null;
 	function __construct()
 	{
 		$this->ketnoi();
 	}
 	public function ketnoi(){
 		$this->connect=new mysqli($this->host,$this->user,$this->pass,$this->dbname);
 		mysqli_set_charset($this->connect,'utf8');
 	}
 	public function laydanhsachdt(){
 		$sql='select ma_dt, ten_dt, ten_hang, gia, hinh_anh
 			from tbl_dienthoai, tbl_hang
 			where tbl_dienthoai.ma_hang=tbl_hang.ma_hang';
 		$this->ketqua=$this->connect->query($sql);
 		if($this->ketqua->num_rows==0){
 			$data=0;
 		}else{
 			while ( $row=$this->ketqua->fetch_assoc()){
 				$data[]=$row;
 			}
 		}
 		return $data;
 	}
 	public function laytenhang(){
 		$sql='select * from tbl_hang';
 		$this->ketqua=$this->connect->query($sql);
 		if($this->ketqua->num_rows==0){
 			$data=0;
 		}else{
 			while ( $row=$this->ketqua->fetch_assoc()){
 				$data[]=$row;
 			}
 		}
 		return $data;
 	}
  public function laydienthoaitheohang($mh){
    $sql='select ma_dt,ten_dt, ten_hang, gia, hinh_anh
      from tbl_dienthoai, tbl_hang
      where tbl_dienthoai.ma_hang=tbl_hang.ma_hang and tbl_dienthoai.ma_hang="'.$mh.'"';
    $this->ketqua=$this->connect->query($sql);
    if ($this->ketqua->num_rows==0){
      $data=0;
    }else{
      while($row=$this->ketqua->fetch_assoc()){
        $data[]=$row;
      }
    }
    return $data;
  }
  public function laydienthoaitheomadt($mdt){
    $sql='select * from tbl_dienthoai where ma_dt="'.$mdt.'"';
    $this->ketqua=$this->connect->query($sql);
    if ($this->ketqua->num_rows==0){
      $data=0;
    }else{
      while($row=$this->ketqua->fetch_assoc()){
        $data[]=$row;
      }
    }
    return $data;
  }
 } 
?>