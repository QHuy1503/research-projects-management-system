<?php
    include("connect.php");

    $mahoidong = $_POST['mahoidong'];
    $mgv = $_POST['mgv'];
    $hd_vaitro = $_POST['hd_vaitro'];

    $sql = "INSERT INTO hoidong (MaHoiDong, MaGiangVien, VaiTro) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $mahoidong, $mgv, $hd_vaitro);

    // Thực thi câu lệnh
    if ($stmt->execute()) {
        echo "";
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    // Đóng kết nối
    $stmt->close();
    $conn->close();

?>
