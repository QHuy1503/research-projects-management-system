<?php
    session_start();
    include("./php/connect.php");
    $session_user = $_SESSION['username'];
    $session_loaitk = $_SESSION['loaitk'];
    if($session_loaitk == "QTV"){
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
                                <a class="nav-link click-scroll" href="#section_2">Quản lý đề tài</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Đề tài chờ duyệt</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Nghiệm Thu Đề Tài</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Danh Sách Đề Tài</a>
                            </li>                       
                        </ul>

                        <div class="d-none d-lg-block">
                            <!-- <a href="#top" class="navbar-icon bi-person smoothscroll"></a> -->
                            <a href="index.php" class="Btn_logout">
                                <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
                                <div class="text"></div>
                            </a>

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

            <!-- Quản lý đề tài -->
            <section class="explore-section section-padding" id="section_2">
                <div class="container">
                    <div class="col-12 text-center">
                        <h2 class="mb-4">Quản Lý Đề Tài</h1> 
                    </div>
                </div>

                <div class="container-fluid"> 
                    <div class="row">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="dangkynhom-tab" data-bs-toggle="tab" data-bs-target="#dangkynhom-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Đăng ký nhóm SV</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="dangkynhomgv-tab" data-bs-toggle="tab" data-bs-target="#dangkynhomgv-tab-pane" type="button" role="tab" aria-controls="education-tab-pane" aria-selected="false">Đăng ký nhóm GV</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="dangkydetai-tab" data-bs-toggle="tab" data-bs-target="#dangkydetai-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Đăng ký đề tài</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="dangkyhoidong-tab" data-bs-toggle="tab" data-bs-target="#dangkyhoidong-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">Đăng ký hội đồng</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="giahandetai-tab" data-bs-toggle="tab" data-bs-target="#giahandetai-tab-pane" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">Gia hạn đề tài</button>
                            </li>

                            <!-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="duyetgiahan-tab" data-bs-toggle="tab" data-bs-target="#duyetgiahan-tab-pane" type="button" role="tab" aria-controls="education-tab-pane" aria-selected="false">Duyệt gia hạn</button>
                            </li> -->
                        </ul>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                <!-- Đăng ký nhóm SV -->
                                <div class="tab-pane fade show active" id="dangkynhom-tab-pane" role="tabpanel" aria-labelledby="dangkynhom-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 newcustom_tab">
                                            <div class="custom-block bg-white shadow-lg ">
                                                <form >
                                                    <table class="custom_table">
                                                        <tr>
                                                            <td>
                                                                <p>Thêm SV Vào Nhóm</p>
                                                                <div class="inputGroup">
                                                                    <input type="text" class="manhom" required="" autocomplete="off">
                                                                    <label for="manhom">Nhập Mã Nhóm</label>
                                                                </div> 
                                                                
                                                                <div class="inputGroup">
                                                                    <input type="text" class="mssv" required="" autocomplete="off">
                                                                    <label for="mssv">Nhập Mã SV</label>
                                                                </div> 

                                                                <select class="form-select inputGroup custom_select_vaitro vaitro" aria-label="Default select example" >
                                                                    <option value="Thành Viên">Thành Viên</option>
                                                                    <option value="Thư Ký">Thư Ký</option>
                                                                    <option value="Chủ Nhiệm">Chủ Nhiệm</option>
                                                                </select>

                                                                <button class="btn btn_themNhom">
                                                                    <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                                                                        <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                                                                    </svg>
                                                                    <span class="text">Thêm</span>
                                                                </button>
                                                                <p class="notify"></p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="col-md-9 col-12 mb-4 mb-lg-0 newcustom_tab">
                                            <div class="custom-block bg-white shadow-lg ">
                                                <form action="">
                                                    <p>DS Sinh Viên Trong Nhóm</p>
                                                    <div class="choose_group">
                                                        <select class="form-select inputGroup custom_select_vaitro select_manhom" aria-label="Default select example" >
                                                            <?php
                                                                $sql = "SELECT DISTINCT MaNhom FROM nhom";
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

                                                        <button class="btn_choose_group btn_tim_nhomSV">
                                                            Tìm
                                                        </button>
                                                    </div>
                                                    <table class="custom_table table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Mã Nhóm</th>
                                                                <th scope="col">Mã Sinh Viên</th>
                                                                <th scope="col">Chức Vụ</th>
                                                                <th scope="col">Họ Tên</th>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody class="tableBody_nhomSV">
                                                            <tr class="custom__row_nhomSV">
                                                                <th scope="row"></th>
                                                                <td class="td_content_nhomSV"></td>
                                                                <td class="td_content_nhomSV"></td>
                                                                <td class="td_content_nhomSV"></td>
                                                                <td class="td_content_nhomSV"></td>
                                                            </tr>
                                                        </tbody>                                                                                                                     
                                                    </table>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Đăng ký nhóm GV -->
                                <div class="tab-pane fade show " id="dangkynhomgv-tab-pane" role="tabpanel" aria-labelledby="dangkynhomgv-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 newcustom_tab">
                                            <div class="custom-block bg-white shadow-lg ">
                                                <form >
                                                    <table class="custom_table">
                                                        <tr>
                                                            <td>
                                                                <p>Thêm GV Vào Nhóm</p>
                                                                <div class="inputGroup">
                                                                    <input type="text" class="manhomgv" required="" autocomplete="off">
                                                                    <label for="manhomgv">Nhập Mã Nhóm GV</label>
                                                                </div> 
                                                                
                                                                <div class="inputGroup">
                                                                    <input type="text" class="mgv" required="" autocomplete="off">
                                                                    <label for="mgv">Nhập Mã GV</label>
                                                                </div> 

                                                                <select class="form-select inputGroup custom_select_vaitro vaitrogv" aria-label="Default select example" >
                                                                    <option value="Thành Viên">Thành Viên</option>
                                                                    <option value="Thư Ký">Thư Ký</option>
                                                                    <option value="Chủ Nhiệm">Chủ Nhiệm</option>
                                                                    <option value="Tất Cả">Tất Cả</option>
                                                                </select>

                                                                <button class="btn btn_themNhomGV">
                                                                    <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                                                                        <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                                                                    </svg>
                                                                    <span class="text">Thêm</span>
                                                                </button>
                                                                <p class="notify"></p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="col-md-9 col-12 mb-4 mb-lg-0 newcustom_tab">
                                            <div class="custom-block bg-white shadow-lg ">
                                                <form action="">
                                                    <p>DS Giảng Viên Trong Nhóm</p>
                                                    <div class="choose_group">
                                                        <select class="form-select inputGroup custom_select_vaitro select_manhomgv" aria-label="Default select example" >
                                                            <?php
                                                                $sql = "SELECT DISTINCT MaNhomGV FROM nhomgv";
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

                                                        <button class="btn_choose_group btn_tim_nhomGV">
                                                            Tìm
                                                        </button>
                                                    </div>
                                                    <table class="custom_table table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Mã Nhóm GV</th>
                                                                <th scope="col">Mã Giảng Viên</th>
                                                                <th scope="col">Vai Trò</th>
                                                                <th scope="col">Họ Tên</th>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody class="tableBody_nhomGV">
                                                            <tr class="custom__row_nhomGV">
                                                                <th scope="row"></th>
                                                                <td class="td_content_nhomGV"></td>
                                                                <td class="td_content_nhomGV"></td>
                                                                <td class="td_content_nhomGV"></td>
                                                                <td class="td_content_nhomGV"></td>
                                                            </tr>
                                                        </tbody>                                                                                                                     
                                                    </table>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                
                                <!-- Đăng ký đề tài -->
                                <div class="tab-pane fade" id="dangkydetai-tab-pane" role="tabpanel" aria-labelledby="dangkydetai-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6 col-12 mb-4 mb-lg-0 newcustom_tab">
                                            <div class="custom-block bg-white shadow-lg ">
                                                <p>Đăng Ký Đề Tài</p>
                                                <br>
                                                <div class="uv-checkbox-wrapper">
                                                    <input type="checkbox" id="cbox_dangkydt" class="uv-checkbox">
                                                    <label for="cbox_dangkydt" class="uv-checkbox-label">
                                                        <div class="uv-checkbox-icon">
                                                        <svg viewBox="0 0 24 24" class="uv-checkmark">
                                                            <path d="M4.1,12.7 9,17.6 20.3,6.3" fill="none"></path>
                                                        </svg>
                                                        </div>
                                                        <span class="uv-checkbox-text">Đề tài cấp trường</span>
                                                    </label>
                                                </div>

                                                <!-- Đề tài cấp khoa -->
                                                <div class="custom_form_dkdt formdkdt_khoa">
                                                    <table class="custom_table_addDT">
                                                        <tr>
                                                            <td>
                                                                <div class="inputGroup">
                                                                <input type="text" class="dkdetai_madetai" required="" autocomplete="off">
                                                                    <label for="dkdetai_madetai">Nhập Mã Đề Tài</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <select class="form-select inputGroup custom_select_vaitro dkdetai_select_manhom" aria-label="Default select example" required="">
                                                                    <option value="">Chọn Mã Nhóm</option>
                                                                    <?php
                                                                        $sql = "SELECT DISTINCT MaNhom FROM nhom";
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
                                                            </td>
                                                            <td>
                                                                <div class="inputGroup">
                                                                    <input type="text" class="dkdetai_tendetai" required="" autocomplete="off">
                                                                    <label for="dkdetai_tendetai">Tên Đề Tài</label>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="inputGroup">
                                                                    <input type="text" class="dkdetai_ghichu" required="" autocomplete="off">
                                                                    <label for="dkdetai_tendetai">Ghi Chú</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="inputGroup">                                                                    
                                                                    <input type="date" id="date-input" class="dkdetai_ngaythuchien" required="" autocomplete="off">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="inputGroup">
                                                                    <input type="date" id="date-input" class="dkdetai_ngayketthuc" required="" autocomplete="off">
                                                                    <label class="inputGroup_label" for="dkdetai_ngayketthuc">Ngày Kết Thúc</label>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="inputGroup">
                                                                    <input type="text" class="dkdetai_kinhphidukien" required="" autocomplete="off">
                                                                    <label for="dkdetai_kinhphidukien">Kinh Phí Dự Kiến</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <select class="form-select inputGroup custom_select_vaitro dkdetai_select_magiangvien" aria-label="Default select example" required="">
                                                                    <option value="">GV Cố Vấn</option>
                                                                    <?php
                                                                        $sql = "SELECT MaGiangVien, HoTenGV FROM giangvien";
                                                                        if ($result = mysqli_query($conn,$sql))
                                                                        {
                                                                            while ($row=mysqli_fetch_row($result))
                                                                            {
                                                                                $count = 1;
                                                                                echo "<option value=".$row[0].">".$row[1]."</option>";
                                                                                $count++;
                                                                            }
                                                                            mysqli_free_result($result);
                                                                        }
                                                                        // mysqli_close($conn);
                                                                    ?>   
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <button class="btn custom_btn btn_themDeTai">
                                                                    <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                                                                        <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                                                                    </svg>
                                                                    <span class="text">Thêm</span>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                                        
                                                <!-- ĐỀ tài cấp trường -->
                                                <div class="custom_form_dkdt formdkdt_truong hide">
                                                    <table class="custom_table_addDT">
                                                        <tr>
                                                            <td>
                                                                <div class="inputGroup">
                                                                <input type="text" class="dkdetai_madetaigv" required="" autocomplete="off">
                                                                    <label for="dkdetai_madetaigv">Nhập Mã Đề Tài</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <select class="form-select inputGroup custom_select_vaitro dkdetai_select_manhomgv" aria-label="Default select example" required="">
                                                                    <option value="">Chọn Mã Nhóm GV</option>
                                                                    <?php
                                                                        $sql = "SELECT DISTINCT MaNhomGV FROM nhomgv";
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
                                                            </td>
                                                            <td>
                                                                <div class="inputGroup">
                                                                    <input type="text" class="dkdetai_tendetaigv" required="" autocomplete="off">
                                                                    <label for="dkdetai_tendetaigv">Tên Đề Tài</label>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="inputGroup">
                                                                    <input type="text" class="dkdetai_ghichugv" required="" autocomplete="off">
                                                                    <label for="dkdetai_tendetaigv">Ghi Chú</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="inputGroup">                                                                    
                                                                    <input type="date" id="date-input" class="dkdetai_ngaythuchiengv" required="" autocomplete="off">
                                                                    <label class="inputGroup_label" for="dkdetai_ngaythuchiengv">Ngày Thực Hiện</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="inputGroup">
                                                                    <input type="date" id="date-input" class="dkdetai_ngayketthucgv" required="" autocomplete="off">
                                                                    <label class="inputGroup_label" for="dkdetai_ngayketthucgv">Ngày Kết Thúc</label>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="inputGroup">
                                                                    <input type="text" class="dkdetai_kinhphidukiengv" required="" autocomplete="off">
                                                                    <label for="dkdetai_kinhphidukiengv">Kinh Phí Dự Kiến</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <select class="form-select inputGroup custom_select_vaitro dkdetai_select_covangv" aria-label="Default select example" required="">
                                                                    <option value="">Cố Vấn</option>
                                                                    <?php
                                                                        $sql = "SELECT MaGiangVien, HoTenGV FROM giangvien";
                                                                        if ($result = mysqli_query($conn,$sql))
                                                                        {
                                                                            while ($row=mysqli_fetch_row($result))
                                                                            {
                                                                                $count = 1;
                                                                                echo "<option value=".$row[0].">".$row[1]."</option>";
                                                                                $count++;
                                                                            }
                                                                            mysqli_free_result($result);
                                                                        }
                                                                        // mysqli_close($conn);
                                                                    ?>   
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <button class="btn custom_btn btn_themDeTaiGV">
                                                                    <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                                                                        <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                                                                    </svg>
                                                                    <span class="text">Thêm</span>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>

                                                <table class="custom_table table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Mã Đề Tài</th>
                                                            <th scope="col">Mã Nhóm</th>
                                                            <th scope="col">Tên Đề Tài</th>
                                                            <th scope="col">Ghi Chú</th>
                                                            <th scope="col">Ngày Thực Hiện</th>
                                                            <th scope="col">Ngày Kết Thúc</th>
                                                            <th scope="col">Kinh Phí</th>
                                                            <th scope="col">Cố Vấn</th>
                                                        </tr>
                                                    </thead>
                                                    
                                                    <tbody class="dkdetai_tableBodyGV">
                                                        
                                                    </tbody>                                                                                                                     
                                                </table>

                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <!-- Đăng ký hội đồng -->
                                <div class="tab-pane fade" id="dangkyhoidong-tab-pane" role="tabpanel" aria-labelledby="dangkyhoidong-tab" tabindex="0">   
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 newcustom_tab">
                                            <div class="custom-block bg-white shadow-lg ">
                                                <form >
                                                    <table class="custom_table custom_table_dkhoidong">
                                                        <tr>
                                                            <td>
                                                                <p>Thêm TV Hội Đồng</p>
                                                                <div class="inputGroup">
                                                                    <input type="text" class="mahoidong" required="" autocomplete="off">
                                                                    <label for="mahoidong">Nhập Mã Hội Đồng</label>
                                                                </div> 
                                                                
                                                                <div class="inputGroup">
                                                                    <input type="text" class="mgv" required="" autocomplete="off">
                                                                    <label for="mgv">Nhập Mã GV</label>
                                                                </div> 

                                                                <select class="form-select inputGroup custom_select_vaitro hoidong_vaitro" aria-label="Default select example" >
                                                                    <option value="Ủy Viên">Ủy Viên</option>
                                                                    <option value="Thư Ký">Thư Ký</option>
                                                                    <option value="Phản Biện 1">Phản Biện 1</option>
                                                                    <option value="Phản Biện 1">Phản Biện 2</option>
                                                                    <option value="Chủ Tịch">Chủ Tịch</option>
                                                                </select>

                                                                <button class="btn btn_themHoiDong">
                                                                    <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                                                                        <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                                                                    </svg>
                                                                    <span class="text">Thêm</span>
                                                                </button>
                                                                <!-- <p class="notify"></p> -->
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="col-md-9 col-12 mb-4 mb-lg-0 newcustom_tab">
                                            <div class="custom-block bg-white shadow-lg ">
                                                <form action="">
                                                    <p>DS Thành Viên Hội Đồng</p>
                                                    <div class="choose_group">
                                                        <select class="form-select inputGroup custom_select_vaitro select_mahoidong" aria-label="Default select example" >
                                                            <?php
                                                                $sql = "SELECT DISTINCT MaHoiDong FROM hoidong";
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

                                                        <button class="btn_choose_group btn_tim_nhomHD">
                                                            Tìm
                                                        </button>
                                                    </div>
                                                    <table class="custom_table table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Mã Hội Đồng</th>
                                                                <th scope="col">Mã Giảng Viên</th>
                                                                <th scope="col">Chức Vụ</th>
                                                                <th scope="col">Họ Tên</th>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody class="tableBody_hoidong">
                                                            <tr class="custom__row_hoidong">
                                                                <th scope="row"></th>
                                                                <td class="td_content_hoidong"></td>
                                                                <td class="td_content_hoidong"></td>
                                                                <td class="td_content_hoidong"></td>
                                                                <td class="td_content_hoidong"></td>
                                                            </tr>
                                                        </tbody>                                                                                                                     
                                                    </table>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>  

                                <!-- Gia hạn đề tài -->
                                <div class="tab-pane fade" id="giahandetai-tab-pane" role="tabpanel" aria-labelledby="giahandetai-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-4 mb-lg-0 newcustom_tab">
                                            <div class="custom-block bg-white shadow-lg ">
                                                <p>Gia Hạn Đề Tài</p>   

                                                <div class="uv-checkbox-wrapper">
                                                    <input type="checkbox" id="cbox_giahandt" class="uv-checkbox">
                                                    <label for="cbox_giahandt" class="uv-checkbox-label">
                                                        <div class="uv-checkbox-icon">
                                                        <svg viewBox="0 0 24 24" class="uv-checkmark">
                                                            <path d="M4.1,12.7 9,17.6 20.3,6.3" fill="none"></path>
                                                        </svg>
                                                        </div>
                                                        <span class="uv-checkbox-text">Gia hạn đề tài cấp trường</span>
                                                    </label>
                                                </div>
                                                <br>
                                                <!-- Gia hạn đề tài cấp khoa -->
                                                <div class="custom_form_dkdt formghdt_khoa">
                                                    <table class="custom_table_addDT">
                                                        <tr>
                                                            <td>
                                                                <select class="form-select inputGroup custom_select_vaitro ghdetai_select_madetai" aria-label="Default select example" required="">
                                                                    <option value="">Chọn Mã Đề Tài</option>
                                                                    <?php
                                                                        $sql = "SELECT MaDeTai FROM detai WHERE TrangThai = 1 AND isNghiemThu = 0";
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
                                                            </td>
                                                            <td>
                                                                <div class="inputGroup">                              
                                                                                                          <!--  placeholder="yyyy-mm-dd" -->
                                                                    <input type="date" id="date-input" class="ghdetai_ngaygiahan" required="" autocomplete="off">
                                                                    <label class="inputGroup_label" for="ghdetai_ngaygiahan">Ngày Gia Hạn</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="inputGroup">
                                                                    <input type="date" id="date-input" class="ghdetai_ngayhoanthanh" required="" autocomplete="off">
                                                                    <label class="inputGroup_label" for="ghdetai_ngayhoanthanh">Ngày Hoàn Thành</label>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        

                                                        <tr>
                                                            <td colspan="2">
                                                                <div class="inputGroup inputDanhGiaDT">
                                                                    <input type="text" class="ghdetai_lydo" required="" autocomplete="off">
                                                                    <label for="ghdetai_lydo">Lý Do</label>
                                                                </div>
                                                            </td>
                                                           
                                                            <td>
                                                                <button class="btn custom_btn btn_giaHanDeTai">
                                                                    <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                                                                        <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                                                                    </svg>
                                                                    <span class="text">Gia Hạn</span>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                                        
                                                <!-- Gia hạn đề tài cấp trường -->
                                                <div class="custom_form_dkdt formghdt_truong hide">
                                                    <table class="custom_table_addDT">
                                                        <tr>
                                                            <td>
                                                                <select class="form-select inputGroup custom_select_vaitro ghdetai_select_madetaiGV" aria-label="Default select example" required="">
                                                                    <option value="">Chọn Mã Đề Tài GV</option>
                                                                    <?php
                                                                        $sql = "SELECT MaDeTaiGV FROM detaigiangvien WHERE TrangThai = 1 AND isNghiemThu = 0";
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
                                                            </td>
                                                            <td>
                                                                <div class="inputGroup">     
                                                                    <input type="date" id="date-input" class="ghdetai_ngaygiahanGV" required="" autocomplete="off">
                                                                    <label class="inputGroup_label" for="ghdetai_ngaygiahanGV">Ngày Gia Hạn</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="inputGroup">
                                                                    <input type="date" id="date-input" class="ghdetai_ngayhoanthanhGV" required="" autocomplete="off">
                                                                    <label class="inputGroup_label" for="ghdetai_ngayhoanthanhGV">Ngày Hoàn Thành</label>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="2">
                                                                <div class="inputGroup inputDanhGiaDT">
                                                                    <input type="text" class="ghdetai_lydoGV" required="" autocomplete="off">
                                                                    <label for="ghdetai_lydoGV">Lý Do</label>
                                                                </div>
                                                            </td>
                                                           
                                                            <td>
                                                                <button class="btn custom_btn btn_giaHanDeTaiGV">
                                                                    <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                                                                        <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                                                                    </svg>
                                                                    <span class="text">Gia Hạn</span>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
                                    <div class="row">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Danh sách các đề tài chờ duyệt -->
            <section class="timeline-section section-padding" id="section_3">
                <div class="section-overlay"></div>
                
                <div class="container">
                    <!-- Checkbox chọn loại đề tài -->
                    <div class="uv-checkbox-wrapper">
                        <input type="checkbox" id="cbox_duyetdt" class="uv-checkbox">
                        <label for="cbox_duyetdt" class="uv-checkbox-label">
                            <div class="uv-checkbox-icon">
                            <svg viewBox="0 0 24 24" class="uv-checkmark">
                                <path d="M4.1,12.7 9,17.6 20.3,6.3" fill="none"></path>
                            </svg>
                            </div>
                            <span class="uv-checkbox-text text-white">Duyệt đề tài cấp trường</span>
                        </label>
                    </div>

                    <!-- DANH SÁCH CÁC ĐỀ TÀI CẤP KHOA CHỜ DUYỆT -->
                    <div class="row dsdtchoduyet_khoa">
                        <form action="" class="custom_form_duyetdetai">
                            <h2 class="text-center text-white mb-4">DS Đề Tài Cấp Khoa Chờ Duyệt </h2>
                            <table class="custom_table table text-white">
                                <thead>
                                    <tr >
                                        <th scope="col">Mã Đề Tài</th>
                                        <th scope="col">Mã Nhóm</th>
                                        <th scope="col">Tên Đề Tài</th>
                                        <th scope="col">Kinh Phí</th>
                                        <th scope="col">Gv Cố Vấn</th>
                                        <th scope="col">Chi Tiết</th>
                                        <th scope="col">Xóa</th>
                                        <th scope="col">Duyệt</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody_dsDetai">

                                </tbody>
                                                                                                                                                
                            </table>
                        </form>

                        <div class="container mt-3">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link hide" href="#section_3" id="pre">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#section_3" id="current">1</a></li>
                                <li class="page-item"><a class="page-link hide" href="#section_3" id="next">Next</a></li>
                            </ul>
                        </div>

                    </div>

                    <!-- DANH SÁCH CÁC ĐỀ TÀI CẤP TRƯỜNG CHỜ DUYỆT -->
                    <div class="row dsdtchoduyet_truong hide">
                        <form action="" class="custom_form_duyetdetai">
                            <h2 class="text-center text-white mb-4">DS Đề Tài Cấp Trường Chờ Duyệt </h2>
                            <table class="custom_table table text-white">
                                <thead>
                                    <tr >
                                        <th scope="col">Mã Đề Tài</th>
                                        <th scope="col">Mã Nhóm</th>
                                        <th scope="col">Tên Đề Tài</th>
                                        <th scope="col">Kinh Phí</th>
                                        <th scope="col">Cố Vấn</th>
                                        <th scope="col">Chi Tiết</th>
                                        <th scope="col">Xóa</th>
                                        <th scope="col">Duyệt</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody_dsDetaiGV">

                                </tbody>
                                                                                                                                                
                            </table>
                        </form>

                        <div class="container mt-3">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link hide" href="#section_3" id="preGV">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#section_3" id="currentGV">1</a></li>
                                <li class="page-item"><a class="page-link hide" href="#section_3" id="nextGV">Next</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>
                                        
            <!-- Nghiệm Thu Đề Tài -->
            <section class="faq-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Nghiệm Thu Đề Tài</h2>
                        </div>

                        <div class="clearfix"></div>
                        <br>
                        <!-- <form action=""> -->
                            <div class="col-lg-8 col-12 ">
                                <div class="uv-checkbox-wrapper">
                                    <input type="checkbox" id="cbox_nghiemthudt" class="uv-checkbox">
                                    <label for="cbox_nghiemthudt" class="uv-checkbox-label">
                                        <div class="uv-checkbox-icon">
                                        <svg viewBox="0 0 24 24" class="uv-checkmark">
                                            <path d="M4.1,12.7 9,17.6 20.3,6.3" fill="none"></path>
                                        </svg>
                                        </div>
                                        <span class="uv-checkbox-text">Nghiệm thu đề tài cấp trường</span>
                                    </label>
                                </div>
                                <table class="custom_table_addDT">
                                    <tr>
                                        <td>
                                            <!-- Đề tài cấp khoa -->
                                            <select class="form-select inputGroup custom_select_vaitro nghiemthu_select_madetai" aria-label="Default select example" required="">
                                                <option value="">Chọn Mã Đề Tài</option>
                                                <?php
                                                    $sql = "SELECT DISTINCT MaDeTai FROM detai WHERE TrangThai = 1 "; //AND isNghiemThu = 0
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

                                            <!-- Đề tài cấp trường -->
                                            <select class="form-select inputGroup custom_select_vaitro nghiemthu_select_madetaiGV hide" aria-label="Default select example" required="">
                                                <option value="">Chọn Mã Đề Tài GV</option>
                                                <?php
                                                    $sql = "SELECT DISTINCT MaDeTaiGV FROM detaigiangvien WHERE TrangThai = 1 "; //AND isNghiemThu = 0
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
                                        <td>
                                            <select class="form-select inputGroup custom_select_vaitro nghiemthu_select_mahoidong" aria-label="Default select example" required="">
                                                <option value="">Chọn Mã Hội Đồng</option>
                                                <?php
                                                    $sql = "SELECT DISTINCT MaHoiDong FROM hoidong";
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
                                        <td rowspan="3">
                                            <div class="file-upload-form">
                                                <label for="file" class="file-upload-label">
                                                    <div class="file-upload-design">
                                                        <svg viewBox="0 0 640 512" height="1em">
                                                            <path
                                                            d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"
                                                            ></path>
                                                        </svg>
                                                        <p>Drag and Drop</p>
                                                        <p>or</p>
                                                        <span class="browse-button">Tải file lên</span>
                                                    </div>
                                                    <input class="nghiemthu_fileBC" id="file" type="file" accept=".pdf" require=""/>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">
                                            <div class="inputGroup inputDanhGiaDT">
                                                <input type="text" class="nghiemthu_danhgia" required="" placeholder="" autocomplete="off">
                                                <label for="nghiemthu_danhgia">Đánh Giá</label>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="inputGroup">
                                                <input type="text" class="nghiemthu_diem" required="" autocomplete="off">
                                                <label for="nghiemthu_diem">Điểm</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="inputGroup">                                                                    
                                                <input type="date" id="date-input" class="nghiemthu_ngaynghiemthu" required="" autocomplete="off">
                                                <label class="inputGroup_label" for="nghiemthu_ngaynghiemthu">Ngày Nghiệm Thu</label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4 col-12 m-auto showFileBC">

                            </div>
                            <div class="col-lg-12 col-12 m-auto d-flex group_btn_nghiemthu">
                                <button class="btn custom_btn btn_luuKQNghiemThu">
                                    <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                                        <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                                    </svg>
                                    <span class="text">Lưu</span>
                                </button>

                                <button class="btn custom_btn btn_suaKQNghiemThu">
                                    <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                                        <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                                    </svg>
                                    <span class="text">Cập nhật</span>
                                </button>

                                <button class="btn custom_btn btn_luuKQNghiemThuGV hide">
                                    <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                                        <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                                    </svg>
                                    <span class="text">Lưu</span>
                                </button>

                                <button class="btn custom_btn btn_suaKQNghiemThuGV hide">
                                    <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                                        <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                                    </svg>
                                    <span class="text">Cập nhật</span>
                                </button>
                            </div>    
                                                
                          
                        <!-- </form> -->
                        
                        
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
                                    <?php
                                        if ($_SESSION['loaitk'] == "QTV") {
                                    ?>
                                            <td>
                                                <!-- btn xuất danh sách đề tài cấp khoa -->
                                                <button class="btn_exportFile btn_FileDSdetai">
                                                    <div class="svg-wrapper-1">
                                                        <div class="svg-wrapper">
                                                            <svg
                                                                fill="#fff"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="20"
                                                                height="20"
                                                                viewBox="0 0 50 50"
                                                            >
                                                                <path
                                                                d="M28.8125 .03125L.8125 5.34375C.339844 
                                                                5.433594 0 5.863281 0 6.34375L0 43.65625C0 
                                                                44.136719 .339844 44.566406 .8125 44.65625L28.8125 
                                                                49.96875C28.875 49.980469 28.9375 50 29 50C29.230469 
                                                                50 29.445313 49.929688 29.625 49.78125C29.855469 49.589844 
                                                                30 49.296875 30 49L30 1C30 .703125 29.855469 .410156 29.625 
                                                                .21875C29.394531 .0273438 29.105469 -.0234375 28.8125 .03125ZM32 
                                                                6L32 13L34 13L34 15L32 15L32 20L34 20L34 22L32 22L32 27L34 27L34 
                                                                29L32 29L32 35L34 35L34 37L32 37L32 44L47 44C48.101563 44 49 
                                                                43.101563 49 42L49 8C49 6.898438 48.101563 6 47 6ZM36 13L44 
                                                                13L44 15L36 15ZM6.6875 15.6875L11.8125 15.6875L14.5 21.28125C14.710938 
                                                                21.722656 14.898438 22.265625 15.0625 22.875L15.09375 22.875C15.199219 
                                                                22.511719 15.402344 21.941406 15.6875 21.21875L18.65625 15.6875L23.34375 
                                                                15.6875L17.75 24.9375L23.5 34.375L18.53125 34.375L15.28125 
                                                                28.28125C15.160156 28.054688 15.035156 27.636719 14.90625 
                                                                27.03125L14.875 27.03125C14.8125 27.316406 14.664063 27.761719 
                                                                14.4375 28.34375L11.1875 34.375L6.1875 34.375L12.15625 25.03125ZM36 
                                                                20L44 20L44 22L36 22ZM36 27L44 27L44 29L36 29ZM36 35L44 35L44 37L36 37Z"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <span class="hide">Xuất File</span>
                                                </button>
                                            </td>
                                    <?php
                                        }
                                    ?>
                                        
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
                                    <?php
                                        if ($_SESSION['loaitk'] == "QTV") {
                                    ?>
                                        <td>
                                            <!-- btn xuất danh sách đề tài cấp trường -->
                                            <button class="btn_exportFile btn_FileDSdetaiGV">
                                                <div class="svg-wrapper-1">
                                                    <div class="svg-wrapper">
                                                        <svg
                                                            fill="#fff"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 50 50"
                                                        >
                                                            <path
                                                            d="M28.8125 .03125L.8125 5.34375C.339844 
                                                            5.433594 0 5.863281 0 6.34375L0 43.65625C0 
                                                            44.136719 .339844 44.566406 .8125 44.65625L28.8125 
                                                            49.96875C28.875 49.980469 28.9375 50 29 50C29.230469 
                                                            50 29.445313 49.929688 29.625 49.78125C29.855469 49.589844 
                                                            30 49.296875 30 49L30 1C30 .703125 29.855469 .410156 29.625 
                                                            .21875C29.394531 .0273438 29.105469 -.0234375 28.8125 .03125ZM32 
                                                            6L32 13L34 13L34 15L32 15L32 20L34 20L34 22L32 22L32 27L34 27L34 
                                                            29L32 29L32 35L34 35L34 37L32 37L32 44L47 44C48.101563 44 49 
                                                            43.101563 49 42L49 8C49 6.898438 48.101563 6 47 6ZM36 13L44 
                                                            13L44 15L36 15ZM6.6875 15.6875L11.8125 15.6875L14.5 21.28125C14.710938 
                                                            21.722656 14.898438 22.265625 15.0625 22.875L15.09375 22.875C15.199219 
                                                            22.511719 15.402344 21.941406 15.6875 21.21875L18.65625 15.6875L23.34375 
                                                            15.6875L17.75 24.9375L23.5 34.375L18.53125 34.375L15.28125 
                                                            28.28125C15.160156 28.054688 15.035156 27.636719 14.90625 
                                                            27.03125L14.875 27.03125C14.8125 27.316406 14.664063 27.761719 
                                                            14.4375 28.34375L11.1875 34.375L6.1875 34.375L12.15625 25.03125ZM36 
                                                            20L44 20L44 22L36 22ZM36 27L44 27L44 29L36 29ZM36 35L44 35L44 37L36 37Z"
                                                            ></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <span class="hide">Xuất File</span>
                                            </button>
                                        </td>
                                    <?php
                                        }
                                    ?>
                                        
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