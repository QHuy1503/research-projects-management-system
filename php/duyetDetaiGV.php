<?php
    include("connect.php");

    $madetai = $_POST['madetai'];
   

    $sql = "UPDATE detaigiangvien SET TrangThai = 1 WHERE MaDeTaiGV = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $madetai);

    // Thực thi câu lệnh
    if ($stmt->execute()) {
        echo "";
    } else {
        // echo "Lỗi: " . $stmt->error;
    }

    // Đóng kết nối
    $stmt->close();
    $conn->close();

?>
