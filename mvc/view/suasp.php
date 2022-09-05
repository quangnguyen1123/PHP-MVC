<html>
<head>
  <meta charset = "UTF-8">


     <link rel="stylesheet" href="http://localhost/websitemvc12/public/css/themsp.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post">
                <h3>Sửa Sản Phẩm</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="masp" class="form-control" placeholder="Mã sản phẩm" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="tensp" class="form-control" placeholder="Tên sản phẩm" value="" />
                        </div>
                        <div class="form-group">
                            <input type="date" name="ngaysx" class="form-control" placeholder="Ngày sản xuất" value="" />
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="gia" class="form-control" placeholder="Giá bán" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="gianhap" class="form-control" placeholder="Giá nhập" value="" />
                        </div>
                        <div class="form-group">
                            <input type="file" name="tenanh" class="form-control" placeholder="Tên ảnh" value="" />
                        </div>
                    </div>
                    <div>
                    <table>
                        <tr>
                                    
                                        <td>Loại sản phẩm:</td>
                                        <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="6" name="iddanhmuc" id="flexRadioDefault1">
                                          <label class="form-check-label" for="flexRadioDefault1">
                                            Áo phông
                                          </label>
                                        </div></td>
                                        <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="7" name="iddanhmuc" id="flexRadioDefault2" checked>
                                          <label class="form-check-label" for="flexRadioDefault2">
                                          Áo sơmi
                                            </label>
                                          </div></td>
                                          <td>
                                          <div class="form-check">
                                          <input class="form-check-input" type="radio" value="8" name="iddanhmuc" id="flexRadioDefault3" checked>
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            Áo gió
                                          </label>
                                        </div></td>
                                        <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="9" name="iddanhmuc" id="flexRadioDefault4" checked>
                                          <label class="form-check-label" for="flexRadioDefault4">
                                            Áo phao
                                          </label>
                                        </div></td>
                                        <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="10" name="iddanhmuc" id="flexRadioDefault4" checked>
                                          <label class="form-check-label" for="flexRadioDefault4">
                                            Áo len
                                          </label>
                                        </div>
                                        </td>
                                      </tr>
                                      <tr>
                                      <td></td>
                                      <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="11" name="iddanhmuc" id="flexRadioDefault1">
                                          <label class="form-check-label" for="flexRadioDefault1">
                                            Quần âu
                                          </label>
                                        </div></td>
                                        <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="12" name="iddanhmuc" id="flexRadioDefault2" checked>
                                          <label class="form-check-label" for="flexRadioDefault2">
                                          Quần jean
                                            </label>
                                          </div></td>
                                          <td>
                                          <div class="form-check">
                                          <input class="form-check-input" type="radio" value="13" name="iddanhmuc" id="flexRadioDefault3" checked>
                                        <label class="form-check-label" for="flexRadioDefault3">
                                           Quần short
                                          </label>
                                        </div></td>
                                        <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="14" name="iddanhmuc" id="flexRadioDefault4" checked>
                                          <label class="form-check-label" for="flexRadioDefault4">
                                            Mũ 
                                          </label>
                                        </div></td>
                                        <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="15" name="iddanhmuc" id="flexRadioDefault4" checked>
                                          <label class="form-check-label" for="flexRadioDefault4">
                                            Vòng
                                          </label>
                                        </div>
                                        </td>
                                      </tr>
                                      <tr>
                                      <td></td>
                                      <td>
                                       <div class="form-group">
                            <input type="submit" name="suasp" class="btnContact" value="Sửa sản phẩm" />
                    </div></td>
                                      </tr>
                                    
                    </table>
                </div>

                </div>
                
            </form>
</div>

</body>
</html>