<?php
    include("connect.php");

    $nam = $_POST['nam'];
    // $nam = 2024;
    $sql = "SELECT MaDeTai, TenDeTai, TrangThai, isNGhiemThu FROM detai WHERE YEAR(NgayThucHien) = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nam);

    // Thực thi câu lệnh
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $data = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        header('Content-Type: application/json');
        echo json_encode($data);
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    // Đóng kết nối
    $stmt->close();
    $conn->close();

?>
