<html>
<head>
	<meta charset = "UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="http://localhost/websitemvc12/public/css/chitietsp.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php require_once('./mvc/view/layout/header.php');?> 

<div class="card">
		
                <div class="container-fliud">
                        <div class="container">
                        <div class="wrapper row">
                            <div class="preview col-md-5">
                              
                                    <?php
                                     foreach ($chitiet as $item) {
  
                                    ?>
                                    
                                        <img src="http://localhost/websitemvc12/public/anh/<?php echo $item['tenanh'];?>" width="400" height="550">
                                    
                                    
                                    <?php
                                     }
  
                                    ?>
                                
                                
                            </div>
                            <div class="details col-md-4" style="margin-left: 60px; ">
                                <?php
                                     foreach ($chitiet as $item) {
  
                                    ?>
                            
                                <h3 class="product-title" style="color: #ffcc00;"><?php echo $item['tensp'];?></h3>
                                <div class="rating">
                                 
                                    <span class="review-no">View: <?php echo $item['clicksanpham'];?></span>
                                </div>
                            
                                <small class="text-muted">Giá cũ: <s><span><?php echo $item['gia'];?> đ</span></s></small>
                                <h4 class="price">Giá hiện tại: <span><?php echo $item['gia'];?> đ</span></h4>
                                <p class="vote"><strong>100%</strong> hàng <strong>Chất lượng</strong>, đảm bảo
                                    <strong>Uy
                                        tín</strong>!</p>
                                <form class="contact-form row" method="POST" style="margin-left: 5px; ">
                                   <table >
                                    <tr>
                                        <td >Số lượng lấy:</td>
                                        <td colspan="4"> <input id="soluonglay" name ="soluonglay" type="float" required></td>
                                        </tr>
                                        <tr>
                                        <td>Size:</td>
                                        <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="S" name="size" id="flexRadioDefault1">
                                          <label class="form-check-label" for="flexRadioDefault1">
                                            S
                                          </label>
                                        </div></td>
                                        <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="L" name="size" id="flexRadioDefault2" checked>
                                          <label class="form-check-label" for="flexRadioDefault2">
                                            L
                                          </label>
                                          </div></td>
                                          <td>
                                          <div class="form-check">
                                          <input class="form-check-input" type="radio" value="XL" name="size" id="flexRadioDefault3" checked>
                                          <label class="form-check-label" for="flexRadioDefault3">
                                            XL
                                          </label>
                                        </div></td>
                                        <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="XXL" name="size" id="flexRadioDefault4" checked>
                                          <label class="form-check-label" for="flexRadioDefault4">
                                            XXL
                                          </label>
                                        </div>
                                        </td>
                                      </tr>
                                      <tr >
                                     <td>   
                                    <input class="add-to-cart btn btn-default" name ="showcuahang" type="submit" value="Thêm vào giỏ hàng">
                                    
                                    
                                    </td>
                                    </tr>
                                      
                            </table> 
                               </form>
                                      <?php
                                     }
                                    ?>
                            </div>

                        </div>
                        </div>
        </div>
        <br><br>
  <?php require_once('./mvc/view/layout/footer.php');?>
  
</body>
</html>

