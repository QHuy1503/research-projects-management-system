<?php
    include("connect.php");

    $madetai = $_POST['madetai'];
   

    $sql = "SELECT detai.*, HoTenGV FROM detai JOIN giangvien ON detai.GVCoVan = giangvien.MaGiangVien WhERE MaDeTai = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $madetai);

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
