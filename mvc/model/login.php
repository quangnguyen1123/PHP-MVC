<?php
	
class user extends database
{
	
	public function dangnhap($a,$b)
	{
				
				$sql = "SELECT * FROM user where taikhoan = '$a' and matkhau ='$b' ";
				$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error());
				$hang = mysqli_fetch_array($ketqua);
				$_SESSION['quyen'] = $hang['quyen'];
				if ($hang != 0){
					$_SESSION['id'] = $hang['iduser'];
					if($hang['quyen'] ==1){
						header("location: ../home/quantri");
					}else{
						header("location: ../home/index");
					}	
					 
				}
					else{
						return false;
					}
				//Hiển thị kết quả truy vấn dưới dạng  mảng
				
	}
	public function checkquyen(){
		try{
		if(isset($_SESSION['quyen'])){
			$a = $_SESSION['quyen'];
  		if ($a == 1){
					return true;
				}else{
					return false;
				}
		}
				
  		}catch(Excption $e){
  			return false;
  		}		
	}
	public function xoaquyen(){
		unset($_SESSION['quyen']);
	}

	public function timedangnhap()
	{
			date_default_timezone_set("Asia/Ho_Chi_Minh");
    		$time = date("Y-m-d H:i:s");
    		$id = $_SESSION['id'];
    		$sql = "INSERT INTO timedangnhap (userid ,timeuser) VALUES('$id','$time')";
    		$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error());
    	

	}


	public function dangki($matkhau,$taikhoan,$tenuser,$tuoi,$sodt,$email)
	{
	
	
			$sql = "INSERT INTO user (matkhau,taikhoan,tenuser,tuoi,sodt,email) VALUES('$matkhau','$taikhoan','$tenuser','$tuoi','$sodt','$email')";
			$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error());
			
			header("location: ../home/login");
			
	}
	public function show($taikhoan)
	{

			$sql = "SELECT tenuser,tuoi,email,sodt FROM user WHERE taikhoan = '$taikhoan' ";
			$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error());
			
			$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				
				$item['ten'] = $hang['tenuser'];
				$item['sodt'] =  $hang['sodt'];
				$item['email'] =$hang['email'];
				$item['tuoi'] = $hang['tuoi'];
				$arr[]= $item;
			}
				
			return $arr;
		
	}
	

	public function showtimeuser()
	{
		$id = $_SESSION['id'];
		$results_per_page = 7;
    		$sql = "SELECT tenuser,timeuser,iduser, userid FROM user,timedangnhap WHERE iduser = '$id' and iduser = userid";
		 $ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
		$number_of_results = mysqli_num_rows($ketqua);

		$number_of_pages = ceil($number_of_results/$results_per_page);

		$_SESSION['page'] = $number_of_pages;
		if(!isset($_GET['page'])){
			$page = 1;

		}else{
			$page =$_GET['page'];
		}

		$this_page_first_result = ($page -1) * $results_per_page;
		$sql ="SELECT tenuser,timeuser,iduser, userid FROM user,timedangnhap WHERE iduser = '$id' and iduser = userid LIMIT ".$this_page_first_result.','.$results_per_page;
		 $ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
			$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				
				$item['time'] =  $hang['timeuser'];
				$arr[]= $item;
			}
				
			return $arr;
			

	}
	public function index()
	{

			$results_per_page = 16;
	  		$sql ="SELECT tenanh,tensp,idsp,gia FROM sanpham ";
		 	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
			$number_of_results = mysqli_num_rows($ketqua);
				

			$number_of_pages = ceil($number_of_results/$results_per_page);

			$_SESSION['page'] = $number_of_pages;
			if(!isset($_GET['page'])){
				$page = 1;

			}else{
				$page =$_GET['page'];
			}

			$this_page_first_result = ($page -1) * $results_per_page;

			$sql ="SELECT tenanh,tensp,idsp,gia FROM sanpham  LIMIT ".$this_page_first_result.','.$results_per_page;
		 	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
			$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['idsp']= $hang['idsp'];
				$item['tenanh'] = $hang['tenanh'];
				$item['tensp'] =  $hang['tensp'];
				$item['gia'] =  $hang['gia'];
				$arr[]= $item;
			}
			
			return $arr;
	}

	public function chiatrang(){
			$number =$_SESSION['page'];
			$arr =[];
			for($page = 1; $page<= $number ;$page++){
				$item['page'] =  $page;
				$arr[]= $item;
			}
			
			return $arr;
	}
	
	
	public function soluongclicksp()
	{
		if(isset($_GET['idsp'])){
		$_SESSION['idsp']=$_GET['idsp'];
	}
		$idsp =$_SESSION['idsp'];
		$sql = "UPDATE sanpham SET clicksanpham = clicksanpham+1 WHERE idsp = '$idsp'";
		$ketqua = mysqli_query($this->link, $sql);
	}

	public function timeclicksp()
	{
		date_default_timezone_set("Asia/Ho_Chi_Minh");
		$time = date("Y-m-d H:i:s");
		$a = 'sanpham';
		$idsp = $_SESSION['idsp'];
		$sql = "INSERT INTO clicksanpham (idparent,timeclick,type) VALUES('$idsp','$time','$a')";
		$ketqua = mysqli_query($this->link, $sql);	
	}

	public function chitietsp()
	{
		$idsp = $_SESSION['idsp'];
		$sql ="SELECT tensp,idsp,ngaysx,gia,clicksanpham,tenanh FROM sanpham where idsp = '$idsp'";
		$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 

			$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				
				$item['tensp'] = $hang['tensp'];
				
				$item['ngaysx'] =$hang['ngaysx'];
				$item['gia'] = $hang['gia'];
				$item['clicksanpham'] = $hang['clicksanpham'];
				$item['tenanh'] = $hang['tenanh'];
				$arr[]= $item;
			}
				
			return $arr;
	}

	
	public function timeclickdanhmuc()
	{
		if(isset($_GET['iddmuc'])){
		$_SESSION['iddm']=$_GET['iddmuc'];
		}
		$iddmuc = $_SESSION['iddm'];
		date_default_timezone_set("Asia/Ho_Chi_Minh");
		$time = date("Y-m-d H:i:s");
		$sql = "INSERT INTO clicksanpham (idparent,timeclick) VALUES('$iddmuc','$time')";
		$ketqua = mysqli_query($this->link, $sql);
	}
	public function danhmuccha()
	{
		if(isset($_GET['iddmuc'])){
		$_SESSION['iddm']=$_GET['iddmuc'];
		}
		$iddmuc = $_SESSION['iddm'];
		$sql ="SELECT tendanhmuc FROM danhmuc where id = '$iddmuc' ";
		$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
		$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				
				$item['tendanhmuc'] = $hang['tendanhmuc'];
				
				$arr[]= $item;
			}
				
			return $arr;
	}
	public function danhmuccon()
	{
		if(isset($_GET['iddmuc'])){
		$_SESSION['iddm']=$_GET['iddmuc'];
		}
		$iddmuc = $_SESSION['iddm'];
		$results_per_page = 16;
		$sql ="SELECT tenanh,tensp,idsp,gia FROM sanpham,danhmuc where parent = '$iddmuc' and id = iddanhmuc ";
		 $ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
		$number_of_results = mysqli_num_rows($ketqua);

		$number_of_pages = ceil($number_of_results/$results_per_page);

		$_SESSION['page'] = $number_of_pages;
		if(!isset($_GET['page'])){
			$page = 1;

		}else{
			$page =$_GET['page'];
		}

		$this_page_first_result = ($page -1) * $results_per_page;
		$iddmuc = $_SESSION['iddm'];
		$sql ="SELECT tenanh,tensp,idsp,gia FROM sanpham,danhmuc where  parent = '$iddmuc' and id = iddanhmuc LIMIT ".$this_page_first_result.','.$results_per_page;
		 $ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
			$arr =[];
		while ($hang = mysqli_fetch_array($ketqua)) {
			$item['idsp']= $hang['idsp'];
			$item['tenanh'] = $hang['tenanh'];
			$item['tensp'] =  $hang['tensp'];
			$item['gia'] =  $hang['gia'];
			$arr[]= $item;
		}
			
			return $arr;
	}
	
	public function sanpham()
	{
		$iddmuc = $_SESSION['iddm'];
	  	if('parent' == 0){
	  			
	  	$sql ="SELECT tenanh,tensp,iddanhmuc,idsp,id,parent,gia FROM sanpham,danhmuc where  parent = '$iddmuc' and id = iddanhmuc ";
		$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
		$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['idsp']= $hang['idsp'];
				$item['tenanh'] = $hang['tenanh'];
				$item['tensp'] =  $hang['tensp'];
				$item['gia'] =  $hang['gia'];
				$arr[]= $item;
			}
			
			return $arr;
	  		
	  	}else{			
	  	$sql ="SELECT tenanh,tensp,iddanhmuc,idsp,gia FROM sanpham where iddanhmuc = '$iddmuc' ";
		$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
		$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['idsp']= $hang['idsp'];
				$item['tenanh'] = $hang['tenanh'];
				$item['tensp'] =  $hang['tensp'];
				$item['gia'] =  $hang['gia'];
				$arr[]= $item;
			}
			return $arr;
	  		} 
	}

	public function danhmuc1()
	{
		$sql ="SELECT tendanhmuc,id FROM danhmuc where id = 1 ";
        $ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
       	$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['tendanhmuc']= $hang['tendanhmuc'];
				$item['id'] = $hang['id'];
				$arr[]= $item;
			}
			return $arr;

	}	
	public function danhmuc2()
	{
		$sql ="SELECT tendanhmuc,id FROM danhmuc where id = 2 ";
        $ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
       	$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['tendanhmuc']= $hang['tendanhmuc'];
				$item['id'] = $hang['id'];
				$arr[]= $item;
			}
			return $arr;
       	
	}
	public function danhmuc3()
	{
		$sql ="SELECT tendanhmuc,id FROM danhmuc where id = 3 ";
        $ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
       	$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['tendanhmuc']= $hang['tendanhmuc'];
				$item['id'] = $hang['id'];
				$arr[]= $item;
			}
			return $arr;
       	
	}
	

	public function danhmuccon1()
	{
		$sql ="SELECT tendanhmuc,parent,id FROM danhmuc where parent = '1' ";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['tendanhmuc']= $hang['tendanhmuc'];
				$item['id'] = $hang['id'];
				$arr[]= $item;
			}
			return $arr;
	  		

	}
	public function danhmuccon2()
	{
		$sql ="SELECT tendanhmuc,parent,id FROM danhmuc where parent = '2' ";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['tendanhmuc']= $hang['tendanhmuc'];
				$item['id'] = $hang['id'];
				$arr[]= $item;
			}
			return $arr;
	  		

	}
	public function danhmuccon3()
	{
		$sql ="SELECT tendanhmuc,parent,id FROM danhmuc where parent = '3' ";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['tendanhmuc']= $hang['tendanhmuc'];
				$item['id'] = $hang['id'];
				$arr[]= $item;
			}
			return $arr;
	  		

	}
	

	public function spgiohang($soluong,$size)
	{	
		$idsp = $_SESSION['idsp'];
		$id = $_SESSION['id'];

		$sql = "INSERT INTO giohang (idtaikhoan,idspgiohang,soluong,size) VALUES('$id','$idsp','$soluong','$size')";
		$ketqua = mysqli_query($this->link, $sql);
		header("location: ../home/chitietsanpham");

	}

	public function giohang()
	{	
		if(isset($_SESSION['id']) == false){
			$id = null;
			
		$sql ="SELECT tenanh,tensp,idsp,gia,size,soluong,idgiohang FROM sanpham,giohang where  idtaikhoan = '$id' and idspgiohang=idsp ";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	
      	$arr =[];
      	
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['idgiohang']= $hang['idgiohang'];
				$item['tenanh']= $hang['tenanh'];
				$item['tensp']= $hang['tensp'];
				$item['soluong']= $hang['soluong'];
				$item['gia']= $hang['gia'];
				$item['size']= $hang['size'];
				$item['tong']= $hang['gia']*$hang['soluong'];
				$arr[]= $item;
			}
			return $arr;
		}else{
			$id =$_SESSION['id'];
			$sql ="SELECT tenanh,tensp,idsp,gia,size,soluong,idgiohang FROM sanpham,giohang where idtaikhoan = '$id' and idspgiohang=idsp ";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	
      	$arr =[];
      	
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['idgiohang']= $hang['idgiohang'];
				$item['tenanh']= $hang['tenanh'];
				$item['tensp']= $hang['tensp'];
				$item['soluong']= $hang['soluong'];
				$item['gia']= $hang['gia'];
				$item['size']= $hang['size'];
				$item['tong']= $hang['gia']*$hang['soluong'];
				$arr[]= $item;
			}
			
			return $arr;
	}
	}
	public function tinhtien()
	{	
		if(isset($_SESSION['id']) == false){
			$id = null;

		$sql ="SELECT tenanh,tensp,idsp,gia,soluong,idgiohang FROM sanpham,giohang where  idtaikhoan = '$id' and idspgiohang=idsp ";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	
      	$arr =[];
      	$item['tongtien'] = 0;
			while ($hang = mysqli_fetch_array($ketqua)) {
				
				$item['soluong']= $hang['soluong'];
				$item['gia']= $hang['gia'];
				$item['tong']= $hang['gia']*$hang['soluong'];
				$item['tongtien']=$item['tongtien']+ $item['tong'];
				$arr['max']= $item;
			}
			return $arr;
		}else{
			$id =$_SESSION['id'];
			$sql ="SELECT tenanh,tensp,idsp,gia,soluong,idgiohang FROM sanpham,giohang where  idtaikhoan = '$id' and idspgiohang=idsp ";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	
      	$arr =[];
      	$item['tongtien'] = 0;
			while ($hang = mysqli_fetch_array($ketqua)) {
				
				$item['soluong']= $hang['soluong'];
				$item['gia']= $hang['gia'];
				$item['tong']= $hang['gia']*$hang['soluong'];
				$item['tongtien']=$item['tongtien']+ $item['tong'];
				$arr['max']= $item;
			}
			return $arr;
		}
	}

	public function xoa(){
		if(isset($_GET['idgiohang'])){
		$_SESSION['idgiohang']=$_GET['idgiohang'];
		}
		$idgiohang = $_SESSION['idgiohang'];
		$sql ="DELETE FROM giohang where  idgiohang = '$idgiohang'";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	header("location: ../home/giohang");
	}


	public function quantri($tukhoa){
		
		$results_per_page = 15;
		$sql = "SELECT idsp,masp,tensp,tendanhmuc,gia,gianhap,ngaysx,tenanh From sanpham,danhmuc where id=iddanhmuc  and masp like '%".$tukhoa."%' ";
				$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error());
		$number_of_results = mysqli_num_rows($ketqua);

		$number_of_pages = ceil($number_of_results/$results_per_page);

		$_SESSION['page'] = $number_of_pages;
		if(!isset($_GET['page'])){
			$page = 1;

		}else{
			$page =$_GET['page'];
		}

		$this_page_first_result = ($page -1) * $results_per_page;
		$sql = "SELECT idsp,masp,tensp,tendanhmuc,gia,gianhap,ngaysx,tenanh From sanpham,danhmuc where id=iddanhmuc  and masp like '%".$tukhoa."%' LIMIT ".$this_page_first_result.','.$results_per_page;;
				$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error());
			 	
				$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['idsp'] = $hang['idsp'];
				$item['tenanh'] = $hang['tenanh'];
				$item['masp'] = $hang['masp'];
				$item['tensp'] =  $hang['tensp'];
				$item['tendanhmuc'] =$hang['tendanhmuc'];
				$item['gia'] = $hang['gia'];
				$item['gianhap'] = $hang['gianhap'];
				$item['ngaysx'] = $hang['ngaysx'];
				
				$arr[]= $item;
			}
				
			return $arr;

		
	}

	public function themsp($masp, $tensp, $ngaysx, $gia, $gianhap, $tenanh,$iddanhmuc){
		
		$sql = "INSERT INTO sanpham (masp,tensp,ngaysx,gia,gianhap,tenanh,iddanhmuc) VALUES('$masp','$tensp','$ngaysx','$gia','$gianhap','$tenanh','$iddanhmuc')";
			$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error());
			 
			header("location: ../home/quantri");
	}

	public function xoasp(){
		if(isset($_GET['id'])){
		$_SESSION['id']=$_GET['id'];
		}
		$id = $_SESSION['id'];
		$sql = "DELETE From sanpham Where idsp = '$id'";
			$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error());

			header("location: ../home/quantri");
	}
	public function suasp($masp, $tensp, $ngaysx, $gia, $gianhap, $tenanh,$iddanhmuc){
		if(isset($_GET['id'])){
		$_SESSION['id']=$_GET['id'];
		}
		$id = $_SESSION['id'];
		
		$sql = "UPDATE sanpham SET masp = '$masp',tensp = '$tensp',ngaysx = '$ngaysx',gia = '$gia',gianhap = '$gianhap',tenanh = '$tenanh',iddanhmuc = '$iddanhmuc' WHERE idsp = '$id'";
			$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error());

			header("location: ../home/quantri");
	}


	public function hoadon()
	{	
		if(isset($_GET['idgiohang'])){
		$_SESSION['idgiohang']=$_GET['idgiohang'];
		}
		$idgiohang = $_SESSION['idgiohang'];

		if(isset($_SESSION['id']) == false){
			$id = null;
			
		$sql ="SELECT tenanh,tensp,idsp,gia,size,soluong,idgiohang FROM sanpham,giohang where  idtaikhoan = '$id' and idspgiohang=idsp and idgiohang = '$idgiohang' ";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	
      	$arr =[];
      	
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['idgiohang']= $hang['idgiohang'];
				$item['tenanh']= $hang['tenanh'];
				$item['tensp']= $hang['tensp'];
				$item['soluong']= $hang['soluong'];
				$item['gia']= $hang['gia'];
				$item['size']= $hang['size'];
				$item['tong']= $hang['gia']*$hang['soluong'];
				$arr[]= $item;
			}
			return $arr;
		}else{
			$id =$_SESSION['id'];
			$sql ="SELECT tenanh,tensp,idsp,gia,size,soluong,idgiohang FROM sanpham,giohang where idtaikhoan = '$id' and idspgiohang=idsp and idgiohang = '$idgiohang' ";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	
      	$arr =[];
      	
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['idgiohang']= $hang['idgiohang'];
				$item['tenanh']= $hang['tenanh'];
				$item['tensp']= $hang['tensp'];
				$item['soluong']= $hang['soluong'];
				$item['gia']= $hang['gia'];
				$item['size']= $hang['size'];
				$item['tong']= $hang['gia']*$hang['soluong'];
				$arr[]= $item;
			}
			return $arr;
	}
	}
	public function xoaspgiohang($idgiohang){
		
		$sql ="DELETE FROM giohang where  idgiohang = '$idgiohang'";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	
	}

	public function thongtinkh($tenkh, $email, $sodt, $diachi, $ghichu,$soluong,$size,$tenanh,$gia, $tong,$tensp){

		$sql = "INSERT INTO thongtinkh (tenkh,email,diachi,sodt,ghichu,anhsp,gia,soluong,size,tongtien,tensp) VALUES('$tenkh','$email','$diachi','$sodt','$ghichu','$tenanh','$gia','$soluong','$size','$tong','$tensp')";
			$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error());

	}

	public function thongtinmuahang($tukhoa){
		$sql ="SELECT  Id,tenkh,email,diachi,sodt,ghichu,anhsp,gia,soluong,size,tongtien,tensp FROM thongtinkh where tenkh like '%".$tukhoa."%'";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	
      	$arr =[];
      	
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['Id']= $hang['Id'];
				$item['tenkh']= $hang['tenkh'];
				$item['email']= $hang['email'];
				$item['diachi']= $hang['diachi'];
				$item['sodt']= $hang['sodt'];
				$item['ghichu']= $hang['ghichu'];
				$item['anhsp']= $hang['anhsp'];
				$item['tensp']= $hang['tensp'];
				$item['gia']= $hang['gia'];
				$item['soluong']= $hang['soluong'];
				$item['size']= $hang['size'];
				$item['tongtien']= $hang['tongtien'];

				$arr[]= $item;
			}
			return $arr;

	}
	public function xoathongtinmuahang(){

		if(isset($_GET['Id'])){
		$_SESSION['Id']=$_GET['Id'];
		}
		$id = $_SESSION['Id'];
		$sql = "DELETE From thongtinkh Where Id = '$id'";
			$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error());

			header("location: ../home/thongtinmuahang");
	
	}
	public function sanphamdangchuyen($tenkh, $sodt, $diachi,$soluong,$size,$tenanh,$gia, $tong,$tensp){
		if(isset($_SESSION['id']) == false){
			$id = null;

		$sql = "INSERT INTO sanphamdangchuyen (idtaikhoan,tenkh,diachi,sodt,anhsp,gia,soluong,size,tongtien,tensp) VALUES('$id','$tenkh','$diachi','$sodt','$tenanh','$gia','$soluong','$size','$tong','$tensp')";
			$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error());
		}else{
			$id = $_SESSION['id'];
			$sql = "INSERT INTO sanphamdangchuyen (idtaikhoan,tenkh,diachi,sodt,anhsp,gia,soluong,size,tongtien,tensp) VALUES('$id','$tenkh','$diachi','$sodt','$tenanh','$gia','$soluong','$size','$tong','$tensp')";
			$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error());
		}
	}
	public function thongtinspdangchuyen($tukhoa){
		$sql ="SELECT  Id,idtaikhoan,tenkh,diachi,sodt,anhsp,gia,soluong,size,tongtien,tensp,ghichu FROM sanphamdangchuyen where tenkh like '%".$tukhoa."%'";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	
      	$arr =[];
      	
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['Id']= $hang['Id'];
				$item['idtaikhoan']= $hang['idtaikhoan'];
				$item['tenkh']= $hang['tenkh'];
				$item['diachi']= $hang['diachi'];
				$item['sodt']= $hang['sodt'];
				$item['anhsp']= $hang['anhsp'];
				$item['tensp']= $hang['tensp'];
				$item['gia']= $hang['gia'];
				$item['soluong']= $hang['soluong'];
				$item['size']= $hang['size'];
				$item['tongtien']= $hang['tongtien'];
				$item['ghichu']= $hang['ghichu'];
				$arr[]= $item;
			}
			return $arr;

	}
	public function xoasanphamdangchuyen(){

		if(isset($_GET['Id'])){
		$_SESSION['Id']=$_GET['Id'];
		}
		$id = $_SESSION['Id'];
		$sql = "DELETE From sanphamdangchuyen Where Id = '$id'";
			$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error());

			header("location: ../home/thongtinspdangchuyen");
	
	}

	public function giohangdamua(){
		if(isset($_SESSION['id']) == false){
			$id = null;

		$sql ="SELECT  Id,idtaikhoan,tenkh,diachi,sodt,anhsp,gia,soluong,size,tongtien,tensp,ghichu FROM sanphamdangchuyen where idtaikhoan = '$id' ";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	
      	$arr =[];
      	
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['Id']= $hang['Id'];
				$item['idtaikhoan']= $hang['idtaikhoan'];
				$item['tenkh']= $hang['tenkh'];
				$item['diachi']= $hang['diachi'];
				$item['sodt']= $hang['sodt'];
				$item['anhsp']= $hang['anhsp'];
				$item['tensp']= $hang['tensp'];
				$item['gia']= $hang['gia'];
				$item['soluong']= $hang['soluong'];
				$item['size']= $hang['size'];
				$item['tongtien']= $hang['tongtien'];
				$item['ghichu']= $hang['ghichu'];
				$arr[]= $item;
			}
			return $arr;
		}else{
			$id = $_SESSION['id'];
			$sql ="SELECT  Id,idtaikhoan,tenkh,diachi,sodt,anhsp,gia,soluong,size,tongtien,tensp,ghichu FROM sanphamdangchuyen where idtaikhoan = '$id' ";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	
      	$arr =[];
      	
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['Id']= $hang['Id'];
				$item['idtaikhoan']= $hang['idtaikhoan'];
				$item['tenkh']= $hang['tenkh'];
				$item['diachi']= $hang['diachi'];
				$item['sodt']= $hang['sodt'];
				$item['anhsp']= $hang['anhsp'];
				$item['tensp']= $hang['tensp'];
				$item['gia']= $hang['gia'];
				$item['soluong']= $hang['soluong'];
				$item['size']= $hang['size'];
				$item['tongtien']= $hang['tongtien'];
				$item['ghichu']= $hang['ghichu'];
				$arr[]= $item;
			}
			return $arr;
		}

	}

	public function huysanpham(){
		if(isset($_GET['Id'])){
		$_SESSION['Id']=$_GET['Id'];
		}
		$Id = $_SESSION['Id'];
		
		$sql = "UPDATE sanphamdangchuyen SET ghichu = 'đã hủy hàng' WHERE Id = '$Id'";
			$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error());

			header("location: ../home/giohangdamua");
	}





}
	
			
?>