<?php
    include("connect.php");

    $manhomgv = $_POST['manhomgv'];
    $mgv = $_POST['mgv'];
    $vaitrogv = $_POST['vaitrogv'];

    $sql = "INSERT INTO nhomgv (MaNhomGV, MaGiangVien, VaiTro) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $manhomgv, $mgv, $vaitrogv);

    // Thực thi câu lệnh
    if ($stmt->execute()) {
        echo "insert successfully";
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    // Đóng kết nối
    $stmt->close();
    $conn->close();

?>
