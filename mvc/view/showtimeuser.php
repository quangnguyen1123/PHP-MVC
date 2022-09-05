<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	 <link rel="stylesheet" href="http://localhost/websitemvc12/public/css/thongtin1.css">
</head>
<body>
<?php require_once('./mvc/view/layout/header.php');?>  


<div id="form">
<br>
<h2>LỊCH SỬ NGƯỜI DÙNG</h2>

<form id="waterform" method="post">
	<?php
	foreach ($thongtin as $item) {
	
		
?>
<div class="formgroup" id="name-form">
    <label for="name">Tên người dùng:<?php echo $item['ten']?> </label>
    
</div>
<?php
}
?>
<div class="formgroup" id="name-form">
    <label for="name">lịch sử người dùng:</label>
<?php
	foreach ($lichsu as $item) {
	
		
?>
<div class="formgroup" id="name-form">
    <label for="name"><?php echo $item['time']?></label>
    
</div>
<?php
}
?>
<div style="margin-left: 100%;">
        
        <nav aria-label="Page navigation example">
          <ul class="pagination">
  
            <?php
                foreach ($chiatrang as $item) {
                ?>
              <li class="page-item" style="background-color: black;"><a class="page-link" href="showtime?page=<?php echo $item['page'];?>" style = "color: black;"><?php echo $item['page'];?></a></li>
              <?php
                  }
                  ?>
   
                </ul>
              </nav>

        
        </div>
</form>
</div>

 <?php require_once('./mvc/view/layout/footer.php');?>
</body>
</html>