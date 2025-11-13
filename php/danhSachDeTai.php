<?php
    include("connect.php");

    // $madetai = $_POST['madetai'];
   

    $sql = "SELECT MaDeTai, TenDeTai, TrangThai, isNGhiemThu FROM detai";
    $result = mysqli_query($conn, $sql);
    $data = array();
    
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);

    $conn->close();

?>
