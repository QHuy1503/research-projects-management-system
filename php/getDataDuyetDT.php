
<?php
    require_once('connect.php');
 
    // Thiết lập header CORS
    //  header("Access-Control-Allow-Origin: *");
    //  header("Content-Type: application/json; charset=UTF-8");
 
    $pageSize = isset($_GET['pageSize']) ? $_GET['pageSize'] : 5; 

    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($page - 1) * $pageSize;

    $sql1 = "SELECT detai.*, HoTenGV FROM detai join giangvien on detai.GVCoVan = giangvien.MaGiangVien WHERE detai.TrangThai = 0 ORDER BY MaDeTai LIMIT $start, $pageSize";
    $result1 = mysqli_query($conn, $sql1);

    $data = array();
    while ($row = mysqli_fetch_assoc($result1)) {
        $data[] = $row;
    }

    $sql2 = "SELECT * FROM detai ";
    $result2 = mysqli_query($conn, $sql2);
    $totalRecords = mysqli_num_rows($result2);

    $response = array(
        "records" => $data,
        "totalRecords" => $totalRecords
    );

    echo json_encode($response);
 ?>