<html>
<head>
	<meta charset = "UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
</head>
<body>
<?php require_once('./mvc/view/layout/header.php');?> 
<div>
	<?php
	foreach ($danhmucsanpham as $item) {	
	?>
	<h2 align="center"><?php echo $item['tendanhmuc'];?></h2>
	<?php
	}
	?>
	
	
 
 		<div class="container">
        	<div class= "row">

	  		<?php
       		 foreach ($danhmucsp as $item) {
        	?>
	  		<div class ="col-12 col-sm-6 col-md-3 image" >
        <div style="border-color: #DDDDDD; border-style: solid;margin:1;margin-bottom: 15px; text-align: center; border-top-left-radius :15px;border-top-right-radius :15px;">
	  		<a  href = "chitietsanpham?idsp=<?php echo $item['idsp'];?>"><img src="http://localhost/websitemvc12/public/anh/<?php echo $item['tenanh'];?>" style="border-top-left-radius :15px;border-top-right-radius :15px;"></a><hr>
	  		   <div class="row" >
           <div class="col-12 ">
            <a href = "chitietsanpham?idsp=<?php echo $item['idsp'];?>" style="color: #606060; text-decoration: none; font-size: 20;"><?php echo $item['tensp'];?></a></div>
            <div class="col-12 ">
	  		     <a href = "chitietsanpham?idsp=<?php echo $item['idsp'];?>" style="color: #606060; text-decoration: none;">Giá: <?php echo $item['gia'];?> đ</a></div>
	  		   </div>
           </div>
	  		</div>
	  		<?php
       		}
       		?>
	  	
      		</div>
    	</div>
  	


<?php
  include('layout/footer.php');
  ?>

</body>
</html>