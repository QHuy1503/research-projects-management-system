<?php
    include("connect.php");

    $manhom = $_POST['mn'];
    $mssv = $_POST['msv'];
    $vaitro = $_POST['vt'];

    $sql = "INSERT INTO nhom (MaNhom, MaSinhVien, VaiTro) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $manhom, $mssv, $vaitro);

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
