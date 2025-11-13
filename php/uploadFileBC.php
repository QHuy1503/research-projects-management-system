<?php
    include("connect.php");

    // Lấy dữ liệu từ AJAX
    $madetai = $_POST['madetai'];
    $mahoidong = $_POST['mahoidong'];
    $danhgia = $_POST['danhgia'];
    $diem = $_POST['diem'];
    $ngaynghiemthu = $_POST['ngaynghiemthu'];
    $fileBC = $_FILES['fileBC']['name'];
    $fileTmpName = $_FILES['fileBC']['tmp_name'];
    $fileSavePath = "uploadFile/" . $fileBC;

    // Di chuyển file tải lên vào thư mục lưu trữ
    if (!is_dir('uploadFile/')) {
        mkdir('uploadFile/', 0755, true);
    }
    move_uploaded_file($fileTmpName, $fileSavePath);

    // Lưu dữ liệu vào database
    $sql = "INSERT INTO nghiemthudt (MaDeTai, MaHoiDong, NgayNghiemThu, Diem, DanhGia, FileBaoCao) VALUES (?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $madetai, $mahoidong, $ngaynghiemthu, $diem, $danhgia, $fileBC);
    
    $sql2 = "UPDATE detai SET isNGhiemThu = 1 WHERE MaDeTai = ?";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->bind_param("s", $madetai);
    $stmt2->execute();

    if ($stmt->execute()) {
        echo $fileBC;
    } else {
        echo "Lưu dữ liệu thất bại: " . $conn->error;
    }

    $stmt2->close();
    $stmt->close();
    $conn->close();
?>