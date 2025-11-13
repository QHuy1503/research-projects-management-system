<?php
    session_start();
    include("php/connect.php");
    $maDeTai = $_GET["mdt"];
    $tendetai = "";
    $sql = "SELECT FileBaoCao
            FROM nghiemthudt
            WHERE MaDeTai = '".$maDeTai."'"; 
    if ($result = mysqli_query($conn,$sql))
    {
        while ($row=mysqli_fetch_row($result))
        {
            $tendetai = $row[0];
        }
        mysqli_free_result($result);
    }
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Chi Tiết Đề Tài</title>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">                      
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

	    <script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@2.16.105/build/pdf.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            $(document).ready(function(){
                var pdfUrl = "php/uploadFile/<?php echo $tendetai ?>";
                const pdfViewerContainer = document.getElementById('pdf-viewer');
                console.log(pdfViewerContainer);
                pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdn.jsdelivr.net/npm/pdfjs-dist@2.16.105/build/pdf.worker.js';

                pdfjsLib.getDocument(pdfUrl).promise.then(pdfDoc=>{
                    const totalPages = pdfDoc.numPages;
                    const maxPages = 5;

                    const scrollContainer = document.createElement('div');
                    scrollContainer.style.overflowY = 'auto';
                    scrollContainer.style.height = '500px';
                    pdfViewerContainer.appendChild(scrollContainer);

                    for (let i = 1; i <= Math.min(totalPages, maxPages); i++) {
                        pdfDoc.getPage(i).then(page => {
                            const viewport = page.getViewport({scale: 0.8});

                            const canvas = document.createElement('canvas');
                            scrollContainer.appendChild(canvas);

                            canvas.width = viewport.width;
                            canvas.height = viewport.width;
                            const renderContext = {
                                canvasContext: canvas.getContext('2d'),
                                viewport: viewport,
                            }
                            
                            page.render(renderContext);
                        })
                    }
                })
            });
        </script>

    </head>    

    <body id="top">
        <main>
            <nav class="navbar navbar-expand-lg navbar_ctDeTai">
                <div class="container">
                    <a class="navbar-brand" href="
                    <?php
                        if (isset($_SESSION['loaik'])) {
                            if($_SESSION['loaitk'] == "QTV")
                                echo "homePage.php";
                            // else if ($_SESSION['loaitk'] == "GV")
                            //     echo "giangvien.php";
                            // else 
                            //     echo "sinhvien.php";
                        } else {
                            echo "index.php";
                        }
                        
                    ?>
                    ">
                        <i class="bi-back"></i>
                        <span>Thông Tin & Truyền Thông</span>
                    </a>
                    <h3 class="text-center">CHI TIẾT ĐỀ TÀI</h3>

                    <div class="d-none d-lg-block">
                        <a href="" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
                    
                </div>
            </nav>

            <!-- Hiển thị thông tin đề tài -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 mb-4 custom_table_ttdetai">
                        <h5>Thông tin đề tài</h5>
                        <table class="custom_table table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Mã Đề Tài</th>
                                    <th scope="col">Tên Đề Tài</th>
                                    <th scope="col">Ghi Chú</th>
                                    <th scope="col">Ngày Thực Hiện</th>
                                    <th scope="col">Ngày Kết Thúc</th>
                                    <th scope="col">Kinh Phí</th>
                                    <th scope="col">Gv Cố Vấn</th>
                                </tr>
                            </thead>
                        <?php
                            $sql = "SELECT detai.*, HoTenGV
                                    FROM detai JOIN giangvien ON detai.GVCoVan = giangvien.MaGiangVien
                                    WHERE MaDeTai = '".$maDeTai."'"; //
                            if ($result = mysqli_query($conn,$sql))
                            {
                                while ($row=mysqli_fetch_row($result))
                                {
                                    
                        ?>
                            <tbody class="">
                                <tr class="">
                                    <td scope=""><?php echo $row[0] ?></td>
                                    <td class=""><?php echo $row[2] ?></td>
                                    <td class=""><?php echo $row[3] ?></td>
                                    <td class=""><?php echo $row[4] ?></td>
                                    <td class=""><?php echo $row[5] ?></td>
                                    <td class=""><?php echo number_format($row[6]) ?></td>
                                    <td class=""><?php echo $row[10] ?></td>
                                </tr>
                            </tbody>
                        <?php  
                                }
                                mysqli_free_result($result);
                            }
                        ?>    
                        </table>
                        
                    </div>
                    <br>
                    <div class="col-lg-12 col-md-12 col-12 mb-4 ">
                        <div class="col-lg-6 col-md-12 col-12 mb-4">
                            <h5>Tiến độ đề tài</h5>
                            <table class="custom_table table table-borderless custom_table_tiendo">
                                <?php
                                    $sql = "SELECT TrangThai, IsNghiemThu
                                            FROM detai
                                            WHERE MaDeTai = '".$maDeTai."'"; //
                                    if ($result = mysqli_query($conn,$sql))
                                    {
                                        while ($row=mysqli_fetch_row($result))
                                        {
                                ?>
                                    <tr>
                                <?php 
                                            if($row[0] == 0){
                                                echo '  <td>
                                                            <div class="spinner"></div> 
                                                        </td>';
                                            } else {
                                                echo '  <td>
                                                            <div class="spinner"></div> 
                                                        </td>
                                                        <td>
                                                            <div class="spinner"></div> 
                                                        </td> ';
                                            }
                                            if($row[1] == 1){
                                                echo '  <td>
                                                            <label class="container_hoanthanh">
                                                                <div class="checkmark">
                                                                    <svg viewBox="0 0 50 50" version="1.1" xmlns="http://www.w3.org/2000/svg" class="icon">
                                                                    <path d="M 24.10 6.29 Q 28.34 7.56 28.00 12.00 Q 27.56 15.10 27.13 18.19 A 0.45 0.45 4.5 0 0 27.57 18.70 Q 33.16 18.79 38.75 18.75 Q 42.13 18.97 43.23 21.45 Q 43.91 22.98 43.27 26.05 Q 40.33 40.08 40.19 40.44 Q 38.85 43.75 35.50 43.75 Q 21.75 43.75 7.29 43.75 A 1.03 1.02 0.0 0 1 6.26 42.73 L 6.42 19.43 A 0.54 0.51 -89.4 0 1 6.93 18.90 L 14.74 18.79 A 2.52 2.31 11.6 0 0 16.91 17.49 L 22.04 7.17 A 1.74 1.73 21.6 0 1 24.10 6.29 Z M 21.92 14.42 Q 20.76 16.58 19.74 18.79 Q 18.74 20.93 18.72 23.43 Q 18.65 31.75 18.92 40.06 A 0.52 0.52 88.9 0 0 19.44 40.56 L 35.51 40.50 A 1.87 1.83 5.9 0 0 37.33 39.05 L 40.51 23.94 Q 40.92 22.03 38.96 21.97 L 23.95 21.57 A 0.49 0.47 2.8 0 1 23.47 21.06 Q 23.76 17.64 25.00 12.00 Q 25.58 9.36 24.28 10.12 Q 23.80 10.40 23.50 11.09 Q 22.79 12.80 21.92 14.42 Z M 15.57 22.41 A 0.62 0.62 0 0 0 14.95 21.79 L 10.01 21.79 A 0.62 0.62 0 0 0 9.39 22.41 L 9.39 40.07 A 0.62 0.62 0 0 0 10.01 40.69 L 14.95 40.69 A 0.62 0.62 0 0 0 15.57 40.07 L 15.57 22.41 Z" fill-opacity="1.00"></path>
                                                                    <circle r="1.51" cy="37.50" cx="12.49" fill-opacity="1.000"></circle>
                                                                    </svg>
                                                                </div>
                                                                <!-- <p class="like">Liked!</p> -->
                                                            </label>
                                                        </td>';
                                            }
                                ?>
                                    </tr>
                                    <tr>
                                <?php   
                                            if($row[0] == 0) {
                                                echo ' <td>
                                                         <p class="tiendo">Chờ duyệt</p>
                                                        </td> ';
                                            }
                                            else {
                                                echo ' <td>
                                                         <p class="tiendo">Đã duyệt</p>
                                                        </td> ';
                                            }
                                            if ($row[0] == 1){
                                                echo ' <td>
                                                         <p class="tiendo">Đang thực hiện</p>
                                                        </td> ';
                                            }
                                            if ($row[1] == 1){
                                                echo ' <td>
                                                         <p class="tiendo">Đã nghiệm thu</p>
                                                        </td> ';
                                            }
                                ?>            
                                    </tr>    
                                <?php  
                                        }
                                        mysqli_free_result($result);
                                    }
                                ?>
                                
                            </table>
                        </div>
                        
                         
                    </div>
                    <br> 
                    <div class="col-lg-6 col-md-12 col-12 mb-4 ">
                        <h5>Danh sách sinh viên thực hiện đề tài</h5>
                        <table class="custom_table table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Mã Nhóm</th>
                                    <th scope="col">Mã Sinh Viên</th>
                                    <th scope="col">Họ Tên</th>
                                    <th scope="col">Vai Trò</th>
                                    
                                </tr>
                            </thead>
                        <?php
                            $sql = "SELECT nhom.MaNhom, nhom.MaSinhVien, HoTen, VaiTro
                                    FROM detai JOIN nhom ON detai.MaNhom = nhom.MaNhom JOIN sinhvien ON nhom.MaSinhVien = sinhvien.MaSinhVien
                                    WHERE MaDeTai = '".$maDeTai."'"; //
                            if ($result = mysqli_query($conn,$sql))
                            {
                                while ($row=mysqli_fetch_row($result))
                                {
                                    
                        ?>
                            <tbody class="">
                                <tr class="">
                                    <td scope=""><?php echo $row[0] ?></td>
                                    <td scope=""><?php echo $row[1] ?></td>
                                    <td class=""><?php echo $row[2] ?></td>
                                    <td class=""><?php echo $row[3] ?></td>
                                </tr>
                            </tbody>
                        <?php  
                                }
                                mysqli_free_result($result);
                            }
                        ?>    
                        </table>
                        <br> 
                        <br>
                        
                        <?php
                            $sql = "SELECT IsNghiemThu, MaHoiDong, NgayNghiemThu, Diem, DanhGia
                                    FROM detai JOIN nghiemthudt ON detai.MaDeTai = nghiemthudt.MaDeTai
                                    WHERE detai.MaDeTai = '".$maDeTai."'"; //
                            if ($result = mysqli_query($conn,$sql))
                            {
                                while ($row=mysqli_fetch_row($result))
                                {
                                    if($row[0] == 1) {
                        ?>
                                <h5>Thông tin nghiệm thu</h5>
                                <table class="custom_table table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Mã Hội Đồng</th>
                                            <th scope="col">Ngày Nghiệm Thu</th>
                                            <th scope="col">Điểm</th>
                                            <th scope="col">Đánh Giá</th>
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                        <tr class="">
                                            <td scope=""><?php echo $row[1] ?></td>
                                            <td class=""><?php echo $row[2] ?></td>
                                            <td class=""><?php echo $row[3] ?></td>
                                            <td scope=""><?php echo $row[4] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                        <?php  
                                    }
                                }
                                mysqli_free_result($result);
                            }
                        ?>
                    </div>

                    <div class="col-lg-6 col-md-12 col-12 mb-4 ">
                        <div>
                            <h5>Tài liệu báo cáo đề tài</h5>
                            <!-- TEST PHẦN HIỂN THỊ FILE VÀ GIỚI HẠN SỐ TRANG TẢI VỀ  -->
                            <div id="pdf-viewer"></div>
                        </div>
                    </div>

                    
                </div>                
            </div>
        </main>
        <footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="index.html">
                            <i class="bi-back"></i>
                            <span>TT&TT</span>
                        </a>
                    </div>
                    <p class="copyright-text mt-lg-5 mt-4">Copyright © 2048. </p>
                </div>
            </div>
        </footer>

    </body>
</html>

