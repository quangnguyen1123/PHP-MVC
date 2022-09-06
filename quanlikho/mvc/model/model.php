
<?php
class banhang extends database
{
	public function sanpham($tukhoa){
		$sql = "SELECT Id,Masp,Tensp,Tenloai,Soluong,Giaban,Gianhap,Ngaynhap,Loinhuan From sanpham,loaisp where loaisp = Idloai and Masp like '%".$tukhoa."%' ";
				$ketqua = mysqli_query($this->Link, $sql) or die (mysqli_error());
			 	
				$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['Id'] = $hang['Id'];
				$item['Masp'] = $hang['Masp'];
				$item['Tensp'] =  $hang['Tensp'];
				$item['Tenloai'] =$hang['Tenloai'];
				$item['Soluong'] = $hang['Soluong'];
				$item['Giaban'] = $hang['Giaban'];
				$item['Gianhap'] = $hang['Gianhap'];
				$item['Ngaynhap'] = $hang['Ngaynhap'];
				$item['Loinhuan'] = $hang['Loinhuan'];
				$arr[]= $item;
			}
				
			return $arr;
	}
	public function them($masp,$tensp,$loaisp,$soluong,$giaban,$gianhap,$ngaynhap){
		date_default_timezone_set("Asia/Ho_Chi_Minh");
    		$time = date("Y-m-d");
		$loinhuan = ($giaban - $gianhap)*$soluong;
		$sql = "INSERT INTO sanpham (Masp,Tensp,loaisp,Soluong,Giaban,Gianhap,Ngaynhap,Loinhuan) VALUES('$masp','$tensp','$loaisp','$soluong','$giaban','$gianhap','$time','$loinhuan')";
			$ketqua = mysqli_query($this->Link, $sql) or die (mysqli_error());
			 
			header("location: ../home/khohang1");
	}

	public function xoa(){
		if(isset($_GET['id'])){
		$_SESSION['id']=$_GET['id'];
		}
		$id = $_SESSION['id'];
		$sql = "DELETE From sanpham Where Id = '$id'";
			$ketqua = mysqli_query($this->Link, $sql) or die (mysqli_error());

			header("location: ../home/khohang1");
	}
	public function sua($masp,$tensp,$loaisp,$soluong,$giaban,$gianhap,$ngaynhap){
		if(isset($_GET['id'])){
		$_SESSION['id']=$_GET['id'];
		}
		$id = $_SESSION['id'];
		$loinhuan = ($giaban - $gianhap)*$soluong;
		$sql = "UPDATE sanpham SET Masp = '$masp',Tensp = '$tensp',loaisp = '$loaisp',Soluong = '$soluong',Giaban = '$giaban',Gianhap = '$gianhap',Ngaynhap = '$ngaynhap',Loinhuan = '$loinhuan' WHERE id = '$id'";
			$ketqua = mysqli_query($this->Link, $sql) or die (mysqli_error());

			header("location: ../home/khohang1");
	}

	

	public function soluongcon($soluonglay){
		if(isset($_GET['id']) && isset($_GET['sl'])){
		$_SESSION['id']=$_GET['id'];
		$_SESSION['sl']=$_GET['sl'];
		$_SESSION['giaban']=$_GET['giaban'];
		$_SESSION['gianhap']=$_GET['gianhap'];
		}
		$id = $_SESSION['id'];
		$sl = $_SESSION['sl'];
		$giaban =$_SESSION['giaban'];
		$gianhap = $_SESSION['gianhap'];
		$soluongcl = $sl - $soluonglay;
		$loinhuan = ($giaban - $gianhap)*$soluongcl;
		$sql = "UPDATE sanpham SET Soluong = '$soluongcl',Loinhuan = '$loinhuan' WHERE id = '$id'";
			$ketqua = mysqli_query($this->Link, $sql) or die (mysqli_error());

			header("location: ../home/cuahang");
	}

	public function showcuahang($soluonglay,$giaban,$ngaylay){
        if(isset($_GET['masp']) ){
		$_SESSION['masp']=$_GET['masp'];
		}
		
		$gianhap = $_SESSION['gianhap'];
		$loinhuan = ($giaban - $gianhap)*$soluonglay;
		$masp = $_SESSION['masp'];                               
		$sql = "INSERT INTO cuahang (Masp,Soluong,Giaban,Ngaylay,Loinhuanch) VALUES('$masp','$soluonglay','$giaban','$ngaylay','$loinhuan')";
			$ketqua = mysqli_query($this->Link, $sql) or die (mysqli_error());

			header("location: ../home/cuahang");
	}

	public function cuahang($key){
		$sql = "SELECT Id,Masp,Soluong,Giaban,Ngaylay From cuahang where Masp like '%".$key."%'";
				$ketqua = mysqli_query($this->Link, $sql) or die (mysqli_error());
			 	
				$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['Id'] = $hang['Id'];
				$item['Masp'] = $hang['Masp'];
				$item['Giaban'] = $hang['Giaban'];
				$item['Soluong'] = $hang['Soluong'];
				$item['Ngaylay'] = $hang['Ngaylay'];
				
				$arr[]= $item;
			}
				
			return $arr;
	}
	public function xoacuahang(){
		if(isset($_GET['id'])){
		$_SESSION['id']=$_GET['id'];
		}
		$id = $_SESSION['id'];
		$sql = "DELETE From cuahang Where Id = '$id'";
			$ketqua = mysqli_query($this->Link, $sql) or die (mysqli_error());

			header("location: ../home/cuahang");
	}

	public function loinhuancuahang(){
		$sql = "SELECT Id,Masp,SUM(Loinhuanch) as Loinhuan From cuahang GROUP BY Masp";
				$ketqua = mysqli_query($this->Link, $sql) or die (mysqli_error());
			 	
				$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['Id'] = $hang['Id'];
				$item['Masp'] = $hang['Masp'];
				$item['Loinhuan'] = $hang['Loinhuan'];
				
				$arr[]= $item;
			}	
			return $arr;
	}
	public function loinhuankho(){
		$sql = "SELECT Id,Masp,Loinhuan From sanpham ";
				$ketqua = mysqli_query($this->Link, $sql) or die (mysqli_error());
			 	
				$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['Id'] = $hang['Id'];
				$item['Masp'] = $hang['Masp'];
				$item['Loinhuan'] = $hang['Loinhuan'];
				
				$arr[]= $item;
			}	
			return $arr;
	}


	
	
	
}
?>