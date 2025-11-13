<?php
    session_start();
    session_destroy();
    include("./php/connect.php"); 
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function(){

                // XỬ LÝ PHẦN TÌM KIẾM ĐỀ TÀI 
                $('.keyword').keyup( () =>{
                    
                    const listGroup = document.querySelector('.list-group');

                    let keyword = $('.keyword').val();
                    // Lắng nghe sự kiện blur
                    
                    // console.log(keyword);
                    let result = '';

                    $.ajax({
                        url: './php/timKiemDeTai.php',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            keysearch: keyword
                        },
                        success: function(data) {
                        
                            data.forEach(item => {
                                let href = '';
                                if (item.MaDeTaiGV) {
                                    href = `chiTietDeTaiGV.php?mdt=${item.MaDeTaiGV}`;
                                } else {
                                    href = `chiTietDeTai.php?mdt=${item.MaDeTai}`;
                                }
                                result += `<a href="${href}" class="list-group-item list-group-item-action">${item.TenDeTai}</a>`;

                            });
                            $('.list-group').html(result);
                        }
                    });
                    if(keyword == ''){
                        listGroup.classList.add('hide');
                    } else {
                        listGroup.classList.remove('hide');
                    }
                }) 


                // CHECK BOX chọn options Danh sách đề tài cấp trường
                const checkbox_dsdetai = document.getElementById('cbox_dsdetai');
                const dsdetai_khoa = document.querySelector('.FileDSdetai');
                const dsdetai_truong = document.querySelector('.FileDSdetaiGV');
                
                // Thêm sự kiện change vào checkbox
                checkbox_dsdetai.addEventListener('change', function() {
                    if (this.checked) {
                        dsdetai_truong.classList.remove('hide');
                        dsdetai_khoa.classList.add('hide');
                        $.ajax({
                            url: './php/danhSachDeTaiGV.php',
                            type: 'post',
                            dataType: 'json',
                            success: function(data){
                                const dsdetai = $('.ds_detainckh');
                                dsdetai.empty();
                                data.forEach(row =>{
                                    let status = '';
                                    if (row.TrangThai == 0) {
                                        status = "Chờ Duyệt";
                                    } else if (row.isNGhiemThu == 1) {
                                        status = "Xong";
                                    } else {
                                        status = "Đang...";
                                    }
                                    let card = `
                                        <div class="col-lg-3 col-12 mb-4 mb-lg-0 custom_card"> 
                                            <div class="card">
                                                <p class="text-title">${status}</p>
                                                <div class="card-details">
                                                    <p class="text-body">${row.TenDeTai}</p>
                                                </div>
                                                <button class="card-button" data-mdt="${row.MaDeTaiGV}" onclick="window.location.href = '/DoAnNCKHv3/chiTietDeTaiGV.php?mdt=${row.MaDeTaiGV}'">Xem</button>
                                            </div>
                                        </div>
                                    `;
                                    dsdetai.append(card);
                                    // dsdetai.innerHTML += card;
                                });
                                
                            }
                        });
                    } else {
                        dsdetai_truong.classList.add('hide');
                        dsdetai_khoa.classList.remove('hide');
                        $.ajax({
                            url: './php/danhSachDeTai.php',
                            type: 'post',
                            dataType: 'json',
                            success: function(data){
                                const dsdetai = $('.ds_detainckh');
                                dsdetai.empty();
                                data.forEach(row =>{
                                    let status = '';
                                    if (row.TrangThai == 0) {
                                        status = "Chờ Duyệt";
                                    } else if (row.isNGhiemThu == 1) {
                                        status = "Xong";
                                    } else {
                                        status = "Đang...";
                                    }
                                    let card = `
                                        <div class="col-lg-3 col-12 mb-4 mb-lg-0 custom_card"> 
                                            <div class="card">
                                                <p class="text-title">${status}</p>
                                                <div class="card-details">
                                                    <p class="text-body">${row.TenDeTai}</p>
                                                </div>
                                                <button class="card-button" data-mdt="${row.MaDeTai}" onclick="window.location.href = '/DoAnNCKHv3/chiTietDeTai.php?mdt=${row.MaDeTai}'">Xem</button>
                                            </div>
                                        </div>
                                    `;
                                    dsdetai.append(card);
                                    // dsdetai.innerHTML += card;
                                });
                                
                            }
                        });
                    }
                });
                
                // Phần xử lý lọc đề tài theo năm - Sinh Viên
                const select_namDTSV = document.querySelector('.dsdetai_select_nam');
                select_namDTSV.addEventListener('change', function(){
                    const select_namVal = this.value;
                    $.ajax({
                        url: './php/danhSachDeTaiSV_nam.php',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            nam : select_namVal
                        },
                        success: function(data){
                            const dsdetai = $('.ds_detainckh');
                            dsdetai.empty();
                            data.forEach(row =>{
                                let status = '';
                                if (row.TrangThai == 0) {
                                    status = "Chờ Duyệt";
                                } else if (row.isNGhiemThu == 1) {
                                    status = "Xong";
                                } else {
                                    status = "Đang...";
                                }
                                let card = `
                                    <div class="col-lg-3 col-12 mb-4 mb-lg-0 custom_card"> 
                                        <div class="card">
                                            <p class="text-title">${status}</p>
                                            <div class="card-details">
                                                <p class="text-body">${row.TenDeTai}</p>
                                            </div>
                                            <button class="card-button" data-mdt="${row.MaDeTai}" onclick="window.location.href = '/DoAnNCKHv3/chiTietDeTai.php?mdt=${row.MaDeTai}'">Xem</button>
                                        </div>
                                    </div>
                                `;
                                dsdetai.append(card);
                                // dsdetai.innerHTML += card;
                            });
                        }
                    });
                });

                // Phần xử lý lọc đề tài theo năm - Giảng Viên
                const select_namDTGV = document.querySelector('.dsdetai_select_namGV');
                select_namDTGV.addEventListener('change', function(){
                    const select_namVal = this.value;
                    $.ajax({
                        url: './php/danhSachDeTaiGV_nam.php',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            nam : select_namVal
                        },
                        success: function(data){
                            const dsdetai = $('.ds_detainckh');
                            dsdetai.empty();
                            data.forEach(row =>{
                                let status = '';
                                if (row.TrangThai == 0) {
                                    status = "Chờ Duyệt";
                                } else if (row.isNGhiemThu == 1) {
                                    status = "Xong";
                                } else {
                                    status = "Đang...";
                                }
                                let card = `
                                    <div class="col-lg-3 col-12 mb-4 mb-lg-0 custom_card"> 
                                        <div class="card">
                                            <p class="text-title">${status}</p>
                                            <div class="card-details">
                                                <p class="text-body">${row.TenDeTai}</p>
                                            </div>
                                            <button class="card-button" data-mdt="${row.MaDeTaiGV}" onclick="window.location.href = '/DoAnNCKHv3/chiTietDeTaiGV.php?mdt=${row.MaDeTaiGV}'">Xem</button>
                                        </div>
                                    </div>
                                `;
                                dsdetai.append(card);
                                // dsdetai.innerHTML += card;
                            });
                        }
                    });
                });
            });
        </script>
        
    </head>    

    <body id="top">
        <main>
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
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
                                <a class="nav-link click-scroll" href="#section_5">Danh Sách Đề Tài</a>
                            </li>                       
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="dangnhap.php" class="navbar-icon bi-person smoothscroll"></a>
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
                                <div class="d-flex">
                                    <div>
                                        <h5 class="mb-2">Steve Jobs</h5>
                                        <p class="mb-0">"Công nghệ thông tin là ngôn ngữ của tương lai."</p>
                                    </div>
                                </div>
                                <img src="images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">
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


            <!-- Danh Sách Các Đề Tài -->
            <section class="contact-section section-padding section-bg" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-5">Danh Sách Đề Tài</h2>
                        </div>
                        <div class="col-lg-12 col-12 control_dsdetai">
                            <!-- check box chọn danh sách đề tài cấp trường -->
                            <div class="uv-checkbox-wrapper">
                                <input type="checkbox" id="cbox_dsdetai" class="uv-checkbox">
                                <label for="cbox_dsdetai" class="uv-checkbox-label">
                                    <div class="uv-checkbox-icon">
                                    <svg viewBox="0 0 24 24" class="uv-checkmark">
                                        <path d="M4.1,12.7 9,17.6 20.3,6.3" fill="none"></path>
                                    </svg>
                                    </div>
                                    <span class="uv-checkbox-text">DS đề tài cấp trường</span>
                                </label>
                            </div>

                            <div class="FileDSdetai">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <!-- select đề tài theo năm - Sinh Viên -->
                                            <select class="form-select inputGroup custom_select_vaitro dsdetai_select_nam" aria-label="Default select example" required="">
                                                <option value="">Lọc Theo Năm</option>
                                                <?php
                                                    $sql = "SELECT DISTINCT YEAR(NgayThucHien) FROM detai";
                                                    if ($result = mysqli_query($conn,$sql))
                                                    {
                                                        while ($row=mysqli_fetch_row($result))
                                                        {
                                                            echo "<option value=".$row[0].">".$row[0]."</option>";
                                                        }
                                                        mysqli_free_result($result);
                                                    }
                                                    // mysqli_close($conn);
                                                ?>   
                                            </select>
                                        </td>
                                   
                                        
                                    </tr>
                                </table>
                            </div>

                            <div class="FileDSdetaiGV hide">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <!-- select đề tài theo năm - Giảng Viên -->
                                            <select class="form-select inputGroup custom_select_vaitro dsdetai_select_namGV" aria-label="Default select example" required="">
                                                <option value="">Lọc Theo Năm GV</option>
                                                <?php
                                                    $sql = "SELECT DISTINCT YEAR(NgayThucHien) FROM detaigiangvien ";
                                                    if ($result = mysqli_query($conn,$sql))
                                                    {
                                                        while ($row=mysqli_fetch_row($result))
                                                        {
                                                            echo "<option value=".$row[0].">".$row[0]."</option>";
                                                        }
                                                        mysqli_free_result($result);
                                                    }
                                                    // mysqli_close($conn);
                                                ?>   
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-12 row ds_detainckh">
                            <?php
                                $sql = "SELECT MaDeTai, TenDeTai, TrangThai, isNGhiemThu FROM detai "; //WHERE TrangThai = 1
                                if ($result = mysqli_query($conn,$sql))
                                {
                                    while ($row=mysqli_fetch_row($result))
                                    {
                            ?>
                                <div class="col-lg-3 col-12 mb-4 mb-lg-0 custom_card"> 
                                    <div class="card">
                                        <p class="text-title"><?php if($row[2] == 0) {echo "Chờ Duyệt";} else if($row[3] == 1) {echo  "Xong";} else {echo "Đang...";}?></p>
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
        <!-- <script src="js/main.js"></script> -->
        <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
        <script src="js/jquery.sticky.js"></script>
        <!-- <script src="js/click-scroll.js"></script> -->
        <!-- <script src="js/custom.js"></script> -->

    </body>
</html>

