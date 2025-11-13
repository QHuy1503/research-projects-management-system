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
    $sql = "UPDATE nghiemthudt SET NgayNghiemThu = ? , Diem = ? , DanhGia = ? , FileBaoCao = ? WHERE MaDeTai = ? AND MaHoiDong = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $ngaynghiemthu, $diem, $danhgia, $fileBC, $madetai, $mahoidong);

    if ($stmt->execute()) {
        echo $fileBC;
    } else {
        echo "Lưu dữ liệu thất bại: " . $conn->error;
    }

    // $stmt2->close();
    $stmt->close();
    $conn->close();
?>