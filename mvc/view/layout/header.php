<html>
<head>
	<meta charset = "UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/websitemvc12/public/css/index1.css">
</head>
<body>
<div class = "logo" >
    <img class="anhlogo" src="http://localhost/websitemvc12/public/anh/logo.jpg" width="280" height="150">
  </div>
    

  
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E8E8E8;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index">AKASAI Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link" href = "index" id="navbarDropdown">Trang chủ</a>
        </li>

        <li class="nav-item dropdown">
        <?php
          foreach ($danhmuc1 as $item) {
          ?>
           <a class="nav-link" href = "danhmuc?iddmuc=<?php echo $item['id'];?>" id="navbarDropdown"><?php echo $item['tendanhmuc'];?></a>
          <?php
           }
         ?>
         <ul class="dropdown-content">
        <?php
          foreach ($danhmuccon1 as $item) {
          ?>
        <li><a class="dropdown-item" href = "sanpham?iddmuc=<?php echo $item['id'];?>"><?php echo $item['tendanhmuc'];?></a></li>
        
          <?php } ?>
          </ul>
        </li>

         <li class="nav-item dropdown">
        <?php
          foreach ($danhmuc2 as $item) {
          ?>
           <a class="nav-link" href = "danhmuc?iddmuc=<?php echo $item['id'];?>" id="navbarDropdown"><?php echo $item['tendanhmuc'];?></a>
          <?php
           }
         ?>
         <ul class="dropdown-content">
        <?php
          foreach ($danhmuccon2 as $item) {
          ?>
        <li><a class="dropdown-item" href = "sanpham?iddmuc=<?php echo $item['id'];?>"><?php echo $item['tendanhmuc'];?></a></li>
        
          <?php } ?>
          </ul>
        </li>

         <li class="nav-item dropdown">
        <?php
          foreach ($danhmuc3 as $item) {
          ?>
           <a class="nav-link" href = "danhmuc?iddmuc=<?php echo $item['id'];?>" id="navbarDropdown"><?php echo $item['tendanhmuc'];?></a>
          <?php
           }
         ?>
         <ul class="dropdown-content">
        <?php
          foreach ($danhmuccon3 as $item) {
          ?>
        <li><a class="dropdown-item" href = "sanpham?iddmuc=<?php echo $item['id'];?>"><?php echo $item['tendanhmuc'];?></a></li>
        
          <?php } ?>
          </ul>
        </li>

        <li class="nav-item dropdown" >
       
        </li>
        <li class="nav-item dropdown" >
       
        </li>
        <li class="nav-item dropdown" >
       
        </li>
        <li class="nav-item dropdown" >
       
        </li>
        <li class="nav-item dropdown" >
       
        </li>
        <li class="nav-item dropdown" >
       
        </li>
        
        

<?php try{
  if($thongtin == null) {
  echo'      
        <li class="nav-item dropdown" >
           <a class="nav-link" href = "login" id="navbarDropdown">Đăng nhập </a>
        </li>';
        }
  }catch(Excption $e){}
   ?>
        
  <?php try{
  if($thongtin != null) {
     foreach ($thongtin as $item) {
  ?>      
        <li class="nav-item dropdown" >
           <a class="nav-link" href = "index.php" id="navbarDropdown">
           <?php echo $item['ten'];?>
           </a>

          <ul class="dropdown-content"> 
          <?php }
           if($checkquyen == true) {
            echo '
            <li><a class="dropdown-item" href = "quantri">Quản trị</a></li>';
          }
          echo
          '

        <li><a class="dropdown-item" href = "show">Thông tin người dùng</a></li>
        <li><a class="dropdown-item" href = "logout">Đăng xuất</a></li>

        
          </ul>
        </li>';
        }
  }catch(Excption $e){}
   ?>
 <li class="nav-item dropdown" >
       <a class="like btn btn-default" href="giohang"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
</svg></a>

      <ul class="dropdown-content">
      <a class="dropdown-item" href="giohangdamua">sản phẩm đã mua</a>
      </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>