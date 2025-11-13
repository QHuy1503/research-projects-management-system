<?php
    session_start();
    include("./php/connect.php");
    $session_user = $_SESSION['username'];
    $session_loaitk = $_SESSION['loaitk'];
    if($session_loaitk == "GV"){
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Trang Chủ</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">     
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">                      
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function(){
                
            });
        </script>
    </head>    

    <body id="top">
        <main>
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="homePage.php">
                        <i class="bi-back"></i>
                        <span>Thông Tin & Truyền Thông</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Trang Chủ</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">Danh sách hội đồng</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Đề tài đang cố vấn</a>
                            </li>

                            <!-- <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Danh Sách Đề Tài</a>
                            </li> -->
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Danh Sách Đề Tài</a>
                            </li>                       
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                        </div>
                    </div>
                </div>
            </nav>
            
            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">Quản Lý Đề Tài Nghiên Cứu Khoa Học</h1>
                            <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bi-search" id="basic-addon1">
                                    </span>
                                    <input type="search" class="form-control keyword" placeholder="Tìm kiếm đề tài..." aria-label="Search">

                                    <!-- <button type="submit" class="form-control search_detai">Search</button> -->
                                </div>
                                <!-- <input type="text" onfocus="focusHandler(event)"> -->
                            </form>

                            <div class="list-group list-group-numbered hide">
                                
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <!-- <a href="topics-detail.html"> -->
                                <div class="d-flex">
                                    <div>
                                        <h5 class="mb-2">Steve Jobs</h5>
                                        <p class="mb-0">"Công nghệ thông tin là ngôn ngữ của tương lai."</p>
                                    </div>
                                </div>
                                <img src="images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">
                                <!-- </a> -->
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="images/hinh1.jpg" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">Bill Gates</h5>

                                            <p class="text-white">"Công nghệ thông tin là sự tiến bộ của mọi ngành nghề, mọi loại hình kinh doanh và mọi khía cạnh của cuộc sống."</p>
                                        </div>
                                    </div>
                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="explore-section section-padding" id="section_2">
                <div class="container">
                    <div class="col-12 text-center">
                        <h2 class="mb-4">Danh Sách Hội Đồng</h1> 
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-12 mb-4 mb-lg-0">
                            <div class="choose_group">
                                <select class="form-select inputGroup custom_select_vaitro select_gv_mahoidong" aria-label="Default select example" >
                                    <?php
                                        $sql = "SELECT DISTINCT MaHoiDong FROM hoidong WHERE MaGiangVien = '".$session_user."'";
                                        if ($result = mysqli_query($conn,$sql))
                                        {
                                            while ($row=mysqli_fetch_row($result))
                                            {
                                                $count = 1;
                                                echo "<option value=".$row[0].">".$row[0]."</option>";
                                                $count++;
                                            }
                                            mysqli_free_result($result);
                                        }
                                        // mysqli_close($conn);
                                    ?>          
                                </select>  

                                <button class="btn_choose_group btn_gv_timMaHoiDong">
                                    Tìm
                                </button>
                            </div>
                            <table class="custom_table table table_gv_dsHoiDong">
                                <thead>
                                    <tr >
                                        <th scope="col">Mã Hội Đồng</th>
                                        <th scope="col">Mã Giảng Viên</th>
                                        <th scope="col">Họ Tên</th>
                                        <th scope="col">Vai Trò</th>
                                    </tr>
                                </thead>
                                <tbody id="gv_hoiDongCuaToi">

                                </tbody>
                                                                                                                                                
                            </table>
                        </div>
                </div>
            </section>

            <!-- Danh sách các đề tài đang cố vấn -->
            <section class="timeline-section section-padding" id="section_3">
                <div class="section-overlay"></div>
                
                <div class="container">
                    <div class="row">
                        <form action="" class="">
                            <h2 class="text-center text-white mb-4">Danh Sách Đề Tài Đang Cố Vấn </h2>
                            <!-- <select class="form-select inputGroup custom_select_vaitro select_gv_mahoidong" aria-label="Default select example" >
                                <?php
                                    $sql = "SELECT  YEAR(NgayThucHien) FROM detai WHERE MaGiangVien = '".$session_user."'";
                                    if ($result = mysqli_query($conn,$sql))
                                    {
                                        while ($row=mysqli_fetch_row($result))
                                        {
                                            $count = 1;
                                            echo "<option value=".$row[0].">".$row[0]."</option>";
                                            $count++;
                                        }
                                        mysqli_free_result($result);
                                    }
                                    // mysqli_close($conn);
                                ?>          
                            </select>   -->
                            <table class="custom_table table text-white">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã Đề Tài</th>
                                        <th scope="col">Mã Nhóm</th>
                                        <th scope="col">Tên Đề Tài</th>
                                        <th scope="col">Kinh Phí</th>
                                        <th scope="col">Gv Cố Vấn</th>
                                        <th scope="col">Chi Tiết</th>
                                        
                                    </tr>
                                </thead>
                                <tbody id="">
                                    <?php
                                        $sql = "SELECT MaDeTai, MaNhom, TenDeTai, KinhPhiDuKien, NgayThucHien, NgayKetThuc FROM detai WHERE GVCoVan = '".$session_user."'";
                                        if ($result = mysqli_query($conn,$sql))
                                        {
                                            while ($row=mysqli_fetch_row($result))
                                            {
                                    ?>  
                                                <tr>
                                                    <td><?php echo $row[0];?></td>
                                                    <td><?php echo $row[1];?></td>
                                                    <td><?php echo $row[2];?></td>
                                                    <td><?php echo number_format($row[3]);?> đ</td>
                                                    <td><?php echo $row[4];?></td>
                                                    <td><?php echo $row[5];?></td>
                                                    <td>
                                                    <button tabindex="0" class="plusButton btn_gv_chiTietDeTai" data-madetai="<?php echo $row[0];?>">

                                                        <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                                                            <g mask="url(#mask0_21_345)">
                                                            <path d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z"></path>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    </td>
                                                </tr>
                                    <?php
                                            }
                                            mysqli_free_result($result);
                                        }
                                        // mysqli_close($conn);
                                    ?>      
                                </tbody>
                                                                                                                                                
                            </table>
                        </form>

                        <div class="container mt-3">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link hide" href="#section_3" id="pre">Previous</a></li>
                                <li class="page-item active"><a class="page-link hide" href="#section_3" id="current">1</a></li>
                                <li class="page-item"><a class="page-link hide" href="#section_3" id="next">Next</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>

            

            <section class="contact-section section-padding section-bg" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-5">Danh Sách Đề Tài</h2>
                        </div>
                        
                        <?php
                            $sql = "SELECT MaDeTai, TenDeTai FROM detai "; //WHERE TrangThai = 1
                            if ($result = mysqli_query($conn,$sql))
                            {
                                while ($row=mysqli_fetch_row($result))
                                {
                        ?>
                            <div class="col-lg-3 col-12 mb-4 mb-lg-0 custom_card"> 
                                <div class="card">
                                     <div class="card-details">
                                        <p class="text-body"><?php echo $row[1];?></p>
                                    </div>
                                    <button class="card-button" data-mdt="<?php echo $row[0];?>" onclick="window.location.href = '/DoAnNCKHv3/chiTietDeTai.php?mdt=<?php echo $row[0];?>'">Xem</button>
                                </div>
                            </div>
                        <?php
                                }
                                mysqli_free_result($result);
                            }
                        ?>   

                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="index.html">
                            <i class="bi-back"></i>
                            <span>Topic</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="site-footer-title mb-3">Resources</h6>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Home</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">How it works</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">FAQs</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Information</h6>

                        <p class="text-white d-flex mb-1">
                            <a href="tel: 305-240-9671" class="site-footer-link">
                                305-240-9671
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="mailto:info@company.com" class="site-footer-link">
                                info@company.com
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                English
                            </button>

                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" type="button">Thai</button></li>

                                <li><button class="dropdown-item" type="button">Myanmar</button></li>

                                <li><button class="dropdown-item" type="button">Arabic</button></li>
                            </ul>
                        </div>

                        <p class="copyright-text mt-lg-5 mt-4">Copyright © 2048 Topic Listing Center. All rights reserved.
                        <br><br>Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a> Distribution <a href="https://themewagon.com">ThemeWagon</a></p>
                        
                    </div>
                </div>
            </div>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="js/main.js"></script>
        <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
        <script src="js/jquery.sticky.js"></script>
        <!-- <script src="js/click-scroll.js"></script> -->
        <!-- <script src="js/custom.js"></script> -->

    </body>
</html>


<?php
    }
?>