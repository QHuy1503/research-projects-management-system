<?php

    include("connect.php");

    $madetai = $_POST['madetai'];
    $ngaygiahan = $_POST['ngaygiahan'];
    $ngayhoanthanh = $_POST['ngayhoanthanh'];
    $lydo = $_POST['lydo'];

    $sql = "INSERT INTO giahandtgv (MaDeTaiGV, NgayGiaHan, NgayHoanThanh, LyDo) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ssss", $madetai, $ngaygiahan, $ngayhoanthanh, $lydo);
        if ($stmt->execute()) {
            echo "ok";
        } else {
            echo "Lỗi khi thực hiện truy vấn 1: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Lỗi khi chuẩn bị truy vấn 1: " . $conn->error;
    }

    $sql2 = "UPDATE detaigiangvien SET NgayKetThuc = ? WHERE MaDeTaiGV = ?";
    $stmt2 = $conn->prepare($sql2);
    if ($stmt2) {
        $stmt2->bind_param("ss", $ngayhoanthanh, $madetai);
        if ($stmt2->execute()) {
            echo "ok";
        } else {
            echo "Lỗi khi thực hiện truy vấn 2: " . $stmt2->error;
        }
        $stmt2->close();
    } else {
        echo "Lỗi khi chuẩn bị truy vấn 2: " . $conn->error;
    }

    $conn->close();
?>
