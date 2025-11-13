<?php
    include("connect.php");

    $manhom = $_POST['select_mn'];
   

    $sql = "SELECT n.*, s.HoTen 
            FROM nhom n
            JOIN sinhvien s ON n.MaSinhVien = s.MaSinhVien
            WHERE n.MaNhom = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $manhom);

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
