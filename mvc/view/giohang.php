
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
<h2 class="text-center">Chi tiết giỏ </h2>
<div class="container"> 
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:40%">Tên sản phẩm</th> 
    <th style="width:10%">Giá</th> 
    <th style="width:8%">Số lượng</th> 
    <th style="width:8%">Kích cỡ</th> 
    <th style="width:16%" class="text-center">Thành tiền</th> 
    <th style="width:18%"> </th> 
   </tr> 
  </thead> 
  <tbody>
    <?php
  foreach ($giohang as $item) {
      
?>
    <tr> 
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-2 hidden-xs"><img src="http://localhost/websitemvc12/public/anh/<?php echo $item['tenanh'];?>" alt="Sản phẩm 1" class="img-responsive" width="100">
     </div> 
     <div class="col-sm-10"> 
      <h4 class="nomargin"><?php echo $item['tensp']?></h4> 
   
     </div> 
    </div> 
   </td> 
   <td data-th="Price"><?php echo $item['gia']?> đ</td> 
   <td data-th="Quantity"><?php echo $item['soluong']?></td>
   <td data-th="Quantity"><?php echo $item['size']?>
   </td> 
   <td data-th="Subtotal" class="text-center"><?php echo $item['tong']?> đ</td> 
   <td class="actions" data-th="">
   
    <a href="xoa?idgiohang=<?php echo $item['idgiohang'] ?>"><button class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg> 
    </button></a>

    <a href="hoadon?idgiohang=<?php echo $item['idgiohang'] ?>&tensp=<?php echo $item['tensp'] ?>&tenanh=<?php echo $item['tenanh'];?>&gia=<?php echo $item['gia']?>&soluong=<?php echo $item['soluong']?>&size=<?php echo $item['size']?>&tong=<?php echo $item['tong']?>" class="btn btn-success btn-block">Thanh toán<i class="fa fa-angle-right"></i></a>
   </td> 
  </tr>
   <?php }  ?>

  
  </tbody><tfoot> 
  <?php
  foreach ($tinhtien as $item) {
      
?>
   <tr class="visible-xs"> 
    <td class="text-center"><strong><?php echo $item['tongtien']?> đ</strong>
    </td> 
   </tr> 
   <tr> 
    <td><a href="index" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
    </td> 
    <td colspan="2" class="hidden-xs"> </td> 
    <td class="hidden-xs text-center"><strong><?php echo $item['tongtien']?>đ</strong>
    </td> 
    <td><a href="giohangdamua" class="btn btn-success btn-block">Sản phẩm đã mua <i class="fa fa-angle-right"></i></a>
    </td> 
   </tr>
   <?php }  ?> 
  </tfoot> 
 </table>
</div>


 <?php require_once('./mvc/view/layout/footer.php');?>

<script src="js/jquery-1.11.1.min.js"></script>

</body>
</html>