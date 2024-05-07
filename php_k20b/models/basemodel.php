<?php
/**
 * 
 */
class datamodel
{
	private $host='localhost';
	private $user='root';
	private $pass='';
	private $dbname='db_quanlybanhang_k20b';
	private $connect=null;

	function __construct()
	{
		$this->ketnoi();
	}
	
	public function ketnoi(){
		$this->connect=new mysqli($this->host,$this->user,$this->pass,$this->dbname);
		mysqli_set_charset($this->connect,'UTF8');
	}

	public function laysanpham(){
		$sql='select * from tbl_sanpham';
		$this->ketqua=$this->connect->query($sql);
		if ($this->ketqua->num_rows==0) {
			$data=0;
		} else {
			while ($row=$this->ketqua->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;
	}
	public function kiemtradangnhap($ten_dn,$mat_khau){
		$sql='select * from tbl_nguoidung where tendangnhap="'.$ten_dn.'"and matkhau="'.$mat_khau.'"';
		$this->ketqua=$this->connect->query($sql);
		if ($this->ketqua->num_rows==0){
			$dem=0;
		} else {
			$dem=1;
		}
		return $dem;
	}
	public function laythongtinnguoidung($ten_dn,$mat_khau){
		$sql='select * from tbl_nguoidung where tendangnhap="'.$ten_dn.'"and matkhau="'.$mat_khau.'"';
		$this->ketqua=$this->connect->query($sql);
		if ($this->ketqua->num_rows==0) {
			$data=0;
		} else {
			while ($row=$this->ketqua->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;
	}
	public function layloaisp(){
		$sql='select * from tbl_loaisp';
		$this->ketqua=$this->connect->query($sql);
		if ($this->ketqua->num_rows==0) {
			$dataloaisp=0;
		} else {
			while ($row=$this->ketqua->fetch_assoc()) {
				$dataloaisp[]=$row;
			}
		}
		return $dataloaisp;
	}
	public function themsanpham($a1,$a2,$a3,$a4,$a5,$a6,$a7){
		$sql='insert into tbl_sanpham(ten_sp,id_loaisp,soluong,dongia,mota,hinhanh,ngaynhap) values ("'.$a1.'","'.$a2.'","'.$a3.'","'.$a4.'","'.$a5.'","'.$a6.'","'.$a7.'")';
		$this->connect->query($sql);
	}
	public function suasanpham($a1,$a2,$a3,$a4,$a5,$a6,$a7,$id_sp){
		$sql='update tbl_sanpham
				set ten_sp="'.$a1.'", id_loaisp="'.$a2.'", soluong="'.$a3.'",dongia="'.$a4.'",mota="'.$a5.'",hinhanh="'.$a6.'",ngaynhap="'.$a7.'"
				where id_sp="'.$id_sp.'"';
				$this->connect->query($sql);
	}
	public function laysanphamcua1($id_sp){
		$sql='select * from tbl_sanpham where id_sp="'.$id_sp.'"';
		$this->ketqua=$this->connect->query($sql);
		if ($this->ketqua->num_rows==0) {
			$data=0;
		} else {
			while ($row=$this->ketqua->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;
	}
	public function xoasanpham($id_sp){
		$sql='delete from tbl_sanpham where id_sp="'.$id_sp.'"';
		$this->connect->query($sql);
	}
}
?>