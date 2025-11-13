<?php
    include("connect.php");

    // Lấy mã nhóm và mã sinh viên từ yêu cầu POST
    $groupId = $_POST['groupId'];
    $teacherId = $_POST['teacherId'];

    // Xóa dữ liệu từ cơ sở dữ liệu
    $sql = "DELETE FROM hoidong WHERE MaHoiDong = ? AND MaGiangVien = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $groupId, $teacherId);

    if ($stmt->execute()) {
        echo "";
    } else {
        // echo "Lỗi khi xóa dữ liệu: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
?>