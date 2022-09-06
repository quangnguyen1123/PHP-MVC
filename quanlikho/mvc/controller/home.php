
<?php 
    
    class home extends controller
    { 

    	public function khohang(){
    		if(isset($_GET['tukhoa'])){
		$tukhoa = $_GET['tukhoa'];
		}
		$this->model('model');
        $db = new banhang;
		if(!empty($tukhoa)){
			 $sanpham = $db->sanpham($tukhoa);  
    		
		}else{
			 $sanpham = $db->sanpham($tukhoa); 
			 
		}

         include "./mvc/view/khohang1.php";
    	}

    	public function them(){
    		if(isset($_POST['them']))
	        {
	        
	        $masp=$_POST['masp'];
	        $tensp=$_POST['tensp'];
	        $loaisp=$_POST['loaisp'];
	        $soluong=$_POST['soluong'];
	        $giaban=$_POST['giaban'];
	        $gianhap=$_POST['gianhap'];
	        $ngaynhap=$_POST['ngaynhap'];

	        $this->model('model');
	        $db = new banhang;
	        $them = $db->them($masp, $tensp, $loaisp, $soluong, $giaban, $gianhap,$ngaynhap);
        
    		}else{
        	 $this->view('them');
    		}
    	}

    	public function sua(){
    		if(isset($_POST['sua']))
        	{
	        $masp=$_POST['masp'];
	        $tensp=$_POST['tensp'];
	        $loaisp=$_POST['loaisp'];
	        $soluong=$_POST['soluong'];
	        $giaban=$_POST['giaban'];
	        $gianhap=$_POST['gianhap'];
	        $ngaynhap=$_POST['ngaynhap'];

        	$this->model('model');
        	$db = new banhang;
        	$sua = $db->sua($masp, $tensp, $loaisp, $soluong, $giaban, $gianhap,$ngaynhap);
        
    		}else{
         	$this->view('sua');
   			}
    	}


    	public function xoa(){
    		$this->model('model');
        	$db = new banhang;
        	$xoa = $db->xoa(); 
    	}

    	public function showcuahang(){
    		if(isset($_POST['showcuahang']))
        	{
	        $soluonglay=$_POST['soluonglay'];
	        $giaban=$_POST['giaban'];
	        $ngaylay=$_POST['ngaylay'];

        	$this->model('model');
        	$db = new banhang;
        	$showcuahang = $db->showcuahang($soluonglay,$giaban,$ngaylay);

        	$soluongcon = $db->soluongcon($soluonglay);
        	
    		 }else{
         	$this->view('showcuahang');
   			}		
    	}

    	public function cuahang(){
            if(isset($_GET['key'])){
        $key = $_GET['key'];
        }
    	$this->model('model');
        $db = new banhang;
       
        if(!empty($key)){
             $cuahang = $db->cuahang($key);  
            
        }else{
             $cuahang = $db->cuahang($tukhoa); 
             
        } 

         include "./mvc/view/cuahang.php";
    	}

    	public function xoacuahang(){
    		$this->model('model');
        	$db = new banhang;
        	$xoacuahang = $db->xoacuahang(); 
    	}

        public function loinhuan(){
            $this->model('model');
            $db = new banhang;
            $loinhuancuahang = $db->loinhuancuahang(); 
            $loinhuankho = $db->loinhuankho();
            include "./mvc/view/loinhuan.php";
        }



	}
?>