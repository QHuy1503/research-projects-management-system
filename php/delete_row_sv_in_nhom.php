<?php
    include("connect.php");

    // Lấy mã nhóm và mã sinh viên từ yêu cầu POST
    $groupId = $_POST['groupId'];
    $studentId = $_POST['studentId'];

    // Xóa dữ liệu từ cơ sở dữ liệu
    $sql = "DELETE FROM nhom WHERE MaNhom = ? AND MaSinhVien = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $groupId, $studentId);

    if ($stmt->execute()) {
        echo "";
    } else {
        // echo "Lỗi khi xóa dữ liệu: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
?>