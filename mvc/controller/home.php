<?php 
    
    class home extends controller{


    public function check()
    {
        if (!isset($_SESSION['CheckLogin'])) {
            $dn = $this->view('login');
        }
        
        $this->view('index',[
            'controller'    => 'home',
            'view'          => 'home'
        ]);
    }

 public function login()
    {
        unset($_SESSION['CheckLogin']);
        if(isset($_POST['taikhoan']) && $_POST['matkhau']) 
                {

                $taikhoan =$_POST['taikhoan'];
                $matkhau=$_POST['matkhau'];
                 $this->model('login');
                $db = new user;
                $login = $db->dangnhap($taikhoan,$matkhau);
                $db->timedangnhap();
                $_SESSION['taikhoan'] = $taikhoan;
                if ($login==true)
                {
               //kết nối đến trang khác
                    
                    $_SESSION['CheckLogin']='cmdjcndjm';
                header("location: ../home/index");
                } 
                else
                {echo '<script language="javascript">';
echo 'alert("thông tin sai nhập lại thông tin")';
echo '</script>';}
                
    }else{
    $this->view('login');
        }

}

    public function dangki(){
    if(isset($_POST['them']))
        {
        
        $matkhau=$_POST['matkhau'];
        $taikhoan=$_POST['taikhoan'];
        $tenuser=$_POST['tenuser'];
        $tuoi=$_POST['tuoi'];
        $sodt=$_POST['sodt'];
        $email=$_POST['email'];

        $this->model('login');
          $db = new user;
        $dangki = $db->dangki($matkhau, $taikhoan, $tenuser, $tuoi, $sodt, $email);
        
    }else{
         $this->view('dangki');
    }
}

public function show()
    {

     $this->model('login');
       $db = new user;
       $thongtin = $db->show($_SESSION['taikhoan']);  
        $checkquyen =$db->checkquyen();
       $danhmuc1 = $db->danhmuc1();
        $danhmuc2 = $db->danhmuc2();
        $danhmuc3 = $db->danhmuc3();
        
        $danhmuccon1 = $db->danhmuccon1();
        $danhmuccon2 = $db->danhmuccon2();
        $danhmuccon3 = $db->danhmuccon3();
        
        include "./mvc/view/show.php";
    
     }

     public function showtime()
    {

     $this->model('login');
       $db = new user;
       $lichsu = $db->showtimeuser(); 
       $chiatrang = $db->chiatrang();
        $thongtin = $db->show($_SESSION['taikhoan']);  

         $checkquyen =$db->checkquyen();
        $danhmuc1 = $db->danhmuc1();
        $danhmuc2 = $db->danhmuc2();
        $danhmuc3 = $db->danhmuc3();
       
        $danhmuccon1 = $db->danhmuccon1();
        $danhmuccon2 = $db->danhmuccon2();
        $danhmuccon3 = $db->danhmuccon3();
        
        include "./mvc/view/showtimeuser.php";

     }



     public function index()
    {
        $this->model('login');
        $db = new user;
        $thongtin = null;
        $sanpham = $db->index(); 
        $chiatrang = $db->chiatrang();
         
        if(isset($_SESSION['taikhoan'])){
             $thongtin = $db->show($_SESSION['taikhoan']);
        }else{
             $thongtin = null;
        }
        $checkquyen =$db->checkquyen();
        $danhmuc1 = $db->danhmuc1();
        $danhmuc2 = $db->danhmuc2();
        $danhmuc3 = $db->danhmuc3();
        
        $danhmuccon1 = $db->danhmuccon1();
        $danhmuccon2 = $db->danhmuccon2();
        $danhmuccon3 = $db->danhmuccon3();
        

        include "./mvc/view/index.php";
    }

    public function chitietsanpham()
    {
        $this->model('login');
        $db = new user;
        $db->soluongclicksp(); 
        $db->timeclicksp();  
        $chitiet = $db->chitietsp(); 
        if(isset($_POST['showcuahang']))
            {
            $soluong=$_POST['soluonglay'];
            $size=$_POST['size'];
       
        $sp = $db->spgiohang($soluong,$size);

        }
        if(isset($_SESSION['taikhoan'])){
             $thongtin = $db->show($_SESSION['taikhoan']);
        }else{
             $thongtin = null;
        }

        $checkquyen =$db->checkquyen();
        $danhmuc1 = $db->danhmuc1();
        $danhmuc2 = $db->danhmuc2();
        $danhmuc3 = $db->danhmuc3();
      
        $danhmuccon1 = $db->danhmuccon1();
        $danhmuccon2 = $db->danhmuccon2();
        $danhmuccon3 = $db->danhmuccon3();
        
        include "./mvc/view/chitietsp.php";
    }

    public function danhmuc()
    {
        $this->model('login');
        $db = new user; 
        $db->timeclickdanhmuc();
        $danhmuccha = $db->danhmuccha();  
        $danhmuccon = $db->danhmuccon(); 
        $chiatrang = $db->chiatrang();

        if(isset($_SESSION['taikhoan'])){
             $thongtin = $db->show($_SESSION['taikhoan']);
        }else{
             $thongtin = null;
        }
        $checkquyen =$db->checkquyen();
        $danhmuc1 = $db->danhmuc1();
        $danhmuc2 = $db->danhmuc2();
        $danhmuc3 = $db->danhmuc3();
    
        $danhmuccon1 = $db->danhmuccon1();
        $danhmuccon2 = $db->danhmuccon2();
        $danhmuccon3 = $db->danhmuccon3();
      
        include "./mvc/view/danhmuc.php";
    }

    public function sanpham()
    {
        $this->model('login');
        $db = new user;
       
        $db->timeclickdanhmuc();
        $danhmucsanpham = $db->danhmuccha();
        $danhmucsp = $db->sanpham(); 

        if(isset($_SESSION['taikhoan'])){
             $thongtin = $db->show($_SESSION['taikhoan']);
        }else{
             $thongtin = null;
        }
        $checkquyen =$db->checkquyen();
        $danhmuc1 = $db->danhmuc1();
        $danhmuc2 = $db->danhmuc2();
        $danhmuc3 = $db->danhmuc3();
        
        $danhmuccon1 = $db->danhmuccon1();
        $danhmuccon2 = $db->danhmuccon2();
        $danhmuccon3 = $db->danhmuccon3();

        include "./mvc/view/sanpham.php";

    }
    

    public function giohang()
    {

        $this->model('login');
        $db = new user;
        $giohang = $db->giohang();
        $tinhtien = $db->tinhtien();

        if(isset($_SESSION['taikhoan'])){
             $thongtin = $db->show($_SESSION['taikhoan']);
        }else{
             $thongtin = null;
        }
        $checkquyen =$db->checkquyen();
        $danhmuc1 = $db->danhmuc1();
        $danhmuc2 = $db->danhmuc2();
        $danhmuc3 = $db->danhmuc3();

        $danhmuccon1 = $db->danhmuccon1();
        $danhmuccon2 = $db->danhmuccon2();
        $danhmuccon3 = $db->danhmuccon3();

        include "./mvc/view/giohang.php";
    }
    public function xoa()
    {
        $this->model('login');
        $db = new user;
        $xoa = $db->xoa(); 
    }

      public function head()
    {
        $this->model('login');
        $db = new user;

       if(isset($_SESSION['taikhoan'])){
             $thongtin = $db->show($_SESSION['taikhoan']);
        }else{
             $thongtin = null;
        }
        $checkquyen =$db->checkquyen();
        $danhmuc1 = $db->danhmuc1();
        $danhmuc2 = $db->danhmuc2();
        $danhmuc3 = $db->danhmuc3();

        $danhmuccon1 = $db->danhmuccon1();
        $danhmuccon2 = $db->danhmuccon2();
        $danhmuccon3 = $db->danhmuccon3();

        include "./mvc/view/layout/header.php";

    }


    public function quantri(){
            if(isset($_GET['tukhoa'])){
        $tukhoa = $_GET['tukhoa'];
        }
        $this->model('login');
        $db = new user;
        if(!empty($tukhoa)){
             $quantri = $db->quantri($tukhoa); 
             $chiatrang = $db->chiatrang(); 
            
        }else{
             $quantri = $db->quantri($tukhoa); 
             $chiatrang = $db->chiatrang();
             
        }

         include "./mvc/view/quantri.php";
        }

        public function themsp(){
            if(isset($_POST['themsp']))
            {
            
            $masp=$_POST['masp'];
            $tensp=$_POST['tensp'];
            $ngaysx=$_POST['ngaysx'];
            $gia=$_POST['gia'];
            $gianhap=$_POST['gianhap'];
            $tenanh=$_POST['tenanh'];
             $iddanhmuc=$_POST['iddanhmuc'];

            $this->model('login');
            $db = new user;
            $themsp = $db->themsp($masp, $tensp, $ngaysx, $gia, $gianhap, $tenanh,$iddanhmuc);
           
            }else{
             $this->view('themsp');
            }
        }

        public function suasp(){
            if(isset($_POST['suasp']))
            {
            $masp=$_POST['masp'];
            $tensp=$_POST['tensp'];
            $ngaysx=$_POST['ngaysx'];
            $gia=$_POST['gia'];
            $gianhap=$_POST['gianhap'];
            $tenanh=$_POST['tenanh'];
             $iddanhmuc=$_POST['iddanhmuc'];

            $this->model('login');
            $db = new user;
            
            $suasp = $db->suasp($masp, $tensp, $ngaysx, $gia, $gianhap, $tenanh,$iddanhmuc);
            
            }else{
           $this->view('suasp');
            }
        }


        public function xoasp(){
            $this->model('login');
            $db = new user;
            $xoasp = $db->xoasp(); 
        }

    public function hoadon(){
        if(isset($_GET['soluong']) && isset($_GET['size'])&& isset($_GET['tong'])&& isset($_GET['gia'])&& isset($_GET['tenanh'])&& isset($_GET['idgiohang'])&& isset($_GET['tensp'])){
        $_SESSION['soluong']=$_GET['soluong'];
        $_SESSION['size']=$_GET['size'];
        $_SESSION['tenanh']=$_GET['tenanh'];
        $_SESSION['gia']=$_GET['gia'];
        $_SESSION['tong']=$_GET['tong'];
        $_SESSION['idgiohang']=$_GET['idgiohang'];
        $_SESSION['tensp']=$_GET['tensp'];
        }
        
        $soluong =$_SESSION['soluong'];
        $size =$_SESSION['size'];
        $tenanh =$_SESSION['tenanh'];
        $gia =$_SESSION['gia'];
        $tong =$_SESSION['tong'];
        $idgiohang=$_SESSION['idgiohang'];
        $tensp=$_SESSION['tensp'];

        $this->model('login');

        $db = new user;
        $hoadon = $db->hoadon();
        if(isset($_POST['chuyenhang']))
            {
            $tenkh=$_POST['tenkh'];
            $email=$_POST['email'];
            $sodt=$_POST['sodt'];
            $diachi=$_POST['diachi'];
            $ghichu=$_POST['ghichu'];
            
            
            $thongtinkh = $db->thongtinkh($tenkh, $email, $sodt, $diachi, $ghichu,$soluong,$size,$tenanh,$gia,$tong,$tensp);
            $sanphamdangchuyen=$db->sanphamdangchuyen($tenkh,$sodt,$diachi,$soluong,$size,$tenanh,$gia,$tong,$tensp);
            $xoaspgiohang =$db->xoaspgiohang($idgiohang);
            
            }
             include "./mvc/view/hoadon.php";

    }

    
    public function thongtinmuahang(){

    if(isset($_GET['tukhoa'])){
        $tukhoa = $_GET['tukhoa'];
        }
        $this->model('login');
        $db = new user;
        if(!empty($tukhoa)){
             $thongtinmuahang = $db->thongtinmuahang($tukhoa);
            
        }else{
              $thongtinmuahang = $db->thongtinmuahang($tukhoa);
             
        }
        
        include "./mvc/view/thongtinmuahang.php";
        }
        public function xoathongtinmuahang(){
            $this->model('login');
            $db = new user;
            $xoathongtinmuahang = $db->xoathongtinmuahang(); 
        }

    public function thongtinspdangchuyen(){

    if(isset($_GET['tukhoa'])){
        $tukhoa = $_GET['tukhoa'];
        }
        $this->model('login');
        $db = new user;
        if(!empty($tukhoa)){
             $thongtinspdangchuyen = $db->thongtinspdangchuyen($tukhoa);
            
        }else{
              $thongtinspdangchuyen = $db->thongtinspdangchuyen($tukhoa);
             
        }
        
        include "./mvc/view/thongtinspdangchuyen.php";
        }
        public function xoasanphamdangchuyen(){
            $this->model('login');
            $db = new user;
            $xoasanphamdangchuyen = $db->xoasanphamdangchuyen(); 
        }

        public function giohangdamua()
        {

        $this->model('login');
        $db = new user;
        $giohangdamua = $db->giohangdamua();
        
        if(isset($_SESSION['taikhoan'])){
             $thongtin = $db->show($_SESSION['taikhoan']);
        }else{
             $thongtin = null;
        }
        $checkquyen =$db->checkquyen();
        $danhmuc1 = $db->danhmuc1();
        $danhmuc2 = $db->danhmuc2();
        $danhmuc3 = $db->danhmuc3();

        $danhmuccon1 = $db->danhmuccon1();
        $danhmuccon2 = $db->danhmuccon2();
        $danhmuccon3 = $db->danhmuccon3();

        include "./mvc/view/giohangdamua.php";
    }
    public function huysanpham(){
            $this->model('login');
            $db = new user;
            $huysanpham = $db->huysanpham(); 
        }

    public function logout()
    {
         $this->model('login');
            $db = new user;
        $db->xoaquyen();
        unset($_SESSION['CheckLogin']);
        session_destroy();
           header("location: ../home/login");
                
    }

    

    
}

 ?>