<?php
    include("connect.php");

    $mahoidong = $_POST['select_mhd'];
   

    $sql = "SELECT hd.*, gv.HoTenGV 
            FROM hoidong hd
            JOIN giangvien gv ON hd.MaGiangVien = gv.MaGiangVien
            WHERE hd.MaHoiDong = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $mahoidong);

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
