<!DOCTYPE html>
<html>
<head>
	

	<!-- Popper JS -->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="http://localhost/websitemvc12/public/css/chitietsp.css">

	<!-- Latest compiled JavaScript -->
</head>
<body>
<form method="post">
	<div class="container">
	<div class="row">
	<div class="col-12 col-md-5" style="margin-top: 50px;">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thông tin khách hàng</h2>
			</div>
			<div class="panel-body">
			
				<div class="form-group">
				  <input type="text" class="form-control" name="tenkh" placeholder="Họ và tên" required>
				</div><br>
				<div class="form-group">
				  <input type="phone" class="form-control" name="sodt" placeholder="Số điện thoại" required>
				</div><br>
				<div class="form-group">
				  <input type="email" class="form-control" name="email" placeholder="Email" required>
				</div><br>
				<div class="form-group">
				  <input type="text" class="form-control" name="diachi" placeholder="Địa chỉ giao hàng" required>
				</div><br>
				<div class="form-group">
				  <textarea class="form-control" name="ghichu" placeholder="Ghi chú" style="width: 100%; height: 150px;"></textarea> 
				</div><br>
				<button class="btn btn-success" name="chuyenhang">Chuyển hàng</button>
				<a href = "giohang"><input type="button" class="btn btn-success" value="Quay lại giỏ hàng"></a>
			</div>
		</div>

	</div>
	<div class="col-12 col-md-7">
		<div class="container"> 
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th >Tên sản phẩm</th> 
    <th >Giá</th> 
    <th >Số lượng</th> 
    <th >Kích cỡ</th> 
    
   
   </tr> 
  </thead> 
  <tbody>
    <?php
  foreach ($hoadon as $item) {
      
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
   
  </tr>
  <tr>
  <td><strong>Tổng tiền</strong></td>
  	<td data-th="Subtotal" class="text-center"><strong><?php echo $item['tong']?> đ</strong></td> 
  </tr>
   <?php }  ?>

  
  </tbody>
 </table>
</div>
 
	</div>
	</div>
	</div>
	</form>
</body>
</html>