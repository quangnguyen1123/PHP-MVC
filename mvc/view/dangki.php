<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="http://localhost/websitemvc12/public/css/dangki1.css">
  
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<div class="card md-4">

<section class="get-in-touch">

   <h1 class="title">ĐĂNG KÍ TÀI KHOẢN</h1>
   <form class="contact-form row" method="POST">
      <div class="form-field col-lg-6">
         <input id="name" name = "taikhoan" class="input-text js-input" type="text" required>
         <label class="label" for="name">Tài khoản</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="email" name = "email" class="input-text js-input" type="email" required>
         <label class="label" for="email">E-mail</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="company" name = "matkhau" class="input-text js-input" type="password" required>
         <label class="label" for="company">Mật khẩu</label>
      </div>
       <div class="form-field col-lg-6 ">
         <input id="phone" name = "sodt" class="input-text js-input" type="phone" required>
         <label class="label" for="phone">Số điện thoại</label>
      </div>
      <div class="form-field col-lg-6">
         <input id="ten" name = "tenuser" class="input-text js-input" type="text" required>
         <label class="label" for="message">Tên người dùng</label>
      </div>
      <div class="form-field col-lg-6">
         <input id="tuoi" name = "tuoi" class="input-text js-input" type="integrity" required>
         <label class="label" for="message">Tuổi</label>
      </div>
      <div class="form-field col-lg-12" style="margin-left: 30px; ">
         <input class="submit-btn" name ="them" type="submit" value="Đăng kí">
      </div>
   </form>

</section>
</div>
</body>
</html>