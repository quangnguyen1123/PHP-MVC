
<html>
<head>
    <meta charset = "UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="http://localhost/websitemvc12/public/css/chitietsp.css">
</head>
<body>

  <?php require_once('./mvc/view/layout/header.php');?> 
<h2 class="text-center">Sản phẩm đã mua </h2>
<div class="container"> 
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:32%">Tên sản phẩm</th> 
    <th style="width:15%">Tên khách hàng</th>  
    <th style="width:10%">Giá</th> 
    <th style="width:8%">Số lượng</th> 
    <th style="width:8%">Kích cỡ</th> 
    <th style="width:12%" class="text-center">Thành tiền</th> 
    <th style="width:18%">Tình trạng </th> 
    <th style="width:18%"> </th>
   </tr> 
  </thead> 
  <tbody>
    <?php
  foreach ($giohangdamua as $item) {
      
?>
    <tr> 
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-3 hidden-xs"><img src="http://localhost/websitemvc12/public/anh/<?php echo $item['anhsp'];?>" alt="Sản phẩm 1" class="img-responsive" width="100">
     </div> 
     <div class="col-sm-9"> 
      <h4 class="nomargin"><?php echo $item['tensp']?></h4> 
   
     </div> 
    </div> 
   </td> 
   <td data-th="Quantity"><?php echo $item['tenkh']?></td> 
   <td data-th="Price"><?php echo $item['gia']?>đ</td> 
   <td data-th="Quantity"><?php echo $item['soluong']?></td>
   <td data-th="Quantity"><?php echo $item['size']?>
   </td> 
   <td data-th="Subtotal" class="text-center"><?php echo $item['tongtien']?>đ</td> 
   <td data-th="Quantity"><?php echo $item['ghichu']?></td> 
   <td class="actions" data-th="">
   
    <a href="huysanpham?Id=<?php echo $item['Id']?>">Hủy hàng</a>

   </td> 
  </tr>
   <?php }  ?>

  
  </tbody>
  
 </table>
</div>

 <?php require_once('./mvc/view/layout/footer.php');?>

<script src="js/jquery-1.11.1.min.js"></script>

</body>
</html>