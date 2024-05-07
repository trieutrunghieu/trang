<?php 
/**
 * 
 */
class datamodel
{
	private $host='localhost';
	private $user='root';
	private $pass='';
	private $dbname='qlsach';
	private $connect=null;
	function __construct()
	{
		// code...
		$this->ketnoi();
	}
	public function ketnoi(){
		$this->connect=new mysqli($this->host,$this->user,$this->pass,$this->dbname);
		mysqli_set_charset($this->connect,'utf8');
	}
	public function laydanhsachsach(){
		$sql='select ma_sach, ten_sach, namxb, ten_tg 
				from sach, tacgia
				where sach.ma_tg=tacgia.ma_tg';
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
	public function laydanhsachsachtenTV(){
		$sql='select ma_sach, ten_sach, namxb, ten_tg 
				from sach, tacgia
				where sach.ma_tg=tacgia.ma_tg and ten_sach="Tieng viet"';
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
	public function laytentacgia(){
		$sql='select * from tacgia';
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
	public function laythongtinsach($mas){
		$sql='select * from sach where ma_sach="'.$mas.'"';
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
	public function suathongtinsach($a1,$a2,$a3,$mas){
		$sql='update sach
				set ten_sach="'.$a1.'", namxb="'.$a2.'", ma_tg="'.$a3.'"
				where ma_sach="'.$mas.'"';
		$this->connect->query($sql);
	}
	public function themthongtinsach($a1,$a2,$a3){
		$sql='insert into sach(ten_sach,namxb,ma_tg) values("'.$a1.'","'.$a2.'","'.$a3.'")';
		$this->connect->query($sql);
	}
}
?>