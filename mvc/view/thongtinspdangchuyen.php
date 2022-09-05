<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="http://localhost/websitemvc12/public/css/styles1.css" rel="stylesheet" />
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
                        
                            <a class="nav-link" href="thongtinmuahang">
                                <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
</svg></div>
                                Thông tin mua hàng
                            </a>
                            
                            <a class="nav-link" href="thongtinspdangchuyen">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Thông tin hàng đang vận chuyển
                            </a>
                            
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">  
                                </nav>
                            </div>
                           
                            <a class="nav-link" href="index">
                                <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
  <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
</svg>
</div>
                                  Index
                            </a>
                            <a class="nav-link" href="quantri">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Quản trị
                            </a>
                        </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
            <div id="form">
                <main>
                
                    <div class="container-fluid px-4">

                        <div class="card mb-4">
                        <div id="form">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Quản lí thông tin mua hàng
                            </div>


                            <div class="card-body">
                            
                            
                            <form id="waterform">
                            
                            <br>
                                <div class="dataTable-top">
                                <div class="dataTable-search">
                                   
                                    <input name="tukhoa" class="dataTable-input" placeholder="Tìm kiếm..." type="text">
                                    
                                </div>
                                </div>
                               

                            <div class="dataTable-container">
                                <table id="datatablesSimple" class="dataTable-table">
                                    <thead>
                                       <tr>
                                            <th  class="row1"  scope="col" >ID tài khoản</th>
                                            <th  class="row1"  scope="col" >Tên KH</th>
                                            <th  class="row1"  scope="col" >Số ĐT</th>
                                           
                                            <th  class="row1"  scope="col">Địa chỉ</th>
                                           
                                            <th  class="row1"  scope="col">Ảnh SP</th>
                                            <th  class="row1"  scope="col">Tên SP</th>
                                            <th  class="row1"  scope="col">Giá bán</th>
                                            <th  class="row1"  scope="col">Số lượng</th>
                                            <th  class="row1"  scope="col">Size</th>
                                            <th  class="row1"  scope="col">Tổng tiền</th>
                                            <th  class="row1"  scope="col">Ghi chú</th>
                                            
                                            <th class="row1" scope="col"></th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody class="danhsach">
                                    <?php
                                        foreach ($thongtinspdangchuyen as $item) {   
                                    ?>
                                    <tr >

                                        <td class="row1" ><?php echo $item['idtaikhoan'] ?> </td>
                                        <td class="row1" ><?php echo $item['tenkh'] ?> </td>
                                        <td class="row1" ><?php echo $item['sodt']?></td>
                                        <td class="row1" ><?php echo $item['diachi'] ?> đ</td>
                                        <td class="row1" ><img src="http://localhost/websitemvc12/public/anh/<?php echo $item['anhsp']?>"  width="50" height="50"> </td>
                                        <td class="row1" ><?php echo $item['tensp']?></td>
                                        <td class="row1" ><?php echo $item['gia']?></td>
                                        <td class="row1" ><?php echo $item['soluong']?></td>
                                        <td class="row1" ><?php echo $item['size']?></td>
                                        <td class="row1" ><?php echo $item['tongtien']?></td>
                                        <td class="row1" ><?php echo $item['ghichu']?></td>
                                        </td>
                                        <td class="row1" >
                                            <a href="xoasanphamdangchuyen?Id=<?php echo $item['Id']?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>
                                            </a>
                                        </td>
                                        

                                    </tr>
                                        <?php
                                            }
                                        ?>


                                    </tbody>
                                </table>
                                
                                </div>
                                
                                
                                </form> 
                            </div>
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="http://localhost/quanlikho/public/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="http://localhost/quanlikho/public/js/datatables-simple-demo.js"></script>
       
    </body>
</html>
