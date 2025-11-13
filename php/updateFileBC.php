<?php
    include("connect.php");

    // Lấy dữ liệu từ AJAX
    $mdt = $_POST['mdtnghiemthu'];
    $updateFileBC = $_FILES['updateFileBC']['name'];
    $fileTmpName = $_FILES['updateFileBC']['tmp_name'];
    $fileSavePath = "uploadFile/" . $updateFileBC;

    // Di chuyển file tải lên vào thư mục lưu trữ
    if (!is_dir('uploadFile/')) {
        mkdir('uploadFile/', 0755, true);
    }
    move_uploaded_file($fileTmpName, $fileSavePath);

    // Lưu dữ liệu vào database
    $sql = "UPDATE nghiemthudt SET FileBaoCao = ? WHERE MaDeTai = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss",$updateFileBC,  $mdt);

    if ($stmt->execute()) {
        echo $updateFileBC;
    } else {
        echo "Cập nhật dữ liệu thất bại: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
?>