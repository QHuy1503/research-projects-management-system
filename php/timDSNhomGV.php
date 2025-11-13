<?php
    include("connect.php");

    $manhomgv = $_POST['select_mngv'];
   

    $sql = "SELECT n.*, g.HoTenGV
            FROM nhomgv n
            JOIN giangvien g ON n.MaGiangVien = g.MaGiangVien
            WHERE n.MaNhomGV = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $manhomgv);

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
