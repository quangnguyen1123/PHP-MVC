<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="http://localhost/quanlikho/public/css/styles.css" rel="stylesheet" />
        <link href="http://localhost/quanlikho/public/css/them.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Danh mục</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        
                            <a class="nav-link" href="loinhuan">
                                <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
</svg></div>
                                Lợi nhuận
                            </a>
                            
                         
                            
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">  
                                </nav>
                            </div>
                           
                            <a class="nav-link" href="cuahang">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Cửa hàng
                            </a>
                            <a class="nav-link" href="khohang1">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Kho hàng
                            </a>
                        </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                        <section class="get-in-touch">
                               <h1 class="title">Thêm sản phẩm</h1>
                               <form class="contact-form row" method="POST">
                                  <div class="form-field col-lg-6">
                                     <input id="masp" name = "masp" class="input-text js-input" type="text" required>
                                     <label class="label" for="masp">Mã sản phẩm</label>
                                  </div>
                                  <div class="form-field col-lg-6 ">
                                     <input id="tensp" name = "tensp" class="input-text js-input" type="text" required>
                                     <label class="label" for="tensp">Tên sản phẩm</label>
                                  </div>
                                  <div class="form-field col-lg-6 ">
                                     <input id="loaisp" name = "loaisp" class="input-text js-input" type="float" required>
                                     <label class="label" for="loaisp">Loại sản phẩm</label>
                                  </div>
                                  <div class="form-field col-lg-6">
                                     <input id="soluong" name = "soluong" class="input-text js-input" type="float" required>
                                     <label class="label" for="soluong">Số lượng</label>
                                  </div>
                                   <div class="form-field col-lg-6 ">
                                     <input id="giaban" name = "giaban" class="input-text js-input" type="float" required>
                                     <label class="label" for="giaban">Giá bán</label>
                                  </div>
                                  <div class="form-field col-lg-6">
                                     <input id="gianhap" name = "gianhap" class="input-text js-input" type="float" required>
                                     <label class="label" for="gianhap">Giá nhập </label>
                                  </div>
                                  
                                  
                                  <div class="form-field col-lg-12">
                                     <input class="submit-btn" name ="them" type="submit" value="Thêm mới">
                                  </div>
                               </form>

                            </section>
                        </div> 
                    </div>   
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="http://localhost/quanlikho/public/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="http://localhost/quanlikho/public/js/datatables-simple-demo.js"></script>
    </body>
</html>
