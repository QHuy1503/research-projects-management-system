<?php
    include("connect.php");

    $madetai        = $_POST['mdt'];
    $dkdetai_manhom = $_POST['dkdt_manhom'];
    $tendetai       = $_POST['tendt'];
    $ghichu         = $_POST['ghichu'];
    $ngaythuchien   = $_POST['ngayTH'];
    $ngayketthuc    = $_POST['ngayKT'];
    $kinhphi        = $_POST['kinhphi'];
    $magiangvien    = $_POST['mgv'];

    $sql = "INSERT INTO detaigiangvien (MaDeTaiGV, MaNhomGV, TenDeTai, GhiChu, NgayThucHien, NgayKetThuc, KinhPhiDuKien, CoVan) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $madetai, $dkdetai_manhom, $tendetai, $ghichu, $ngaythuchien, $ngayketthuc, $kinhphi, $magiangvien);

    $newDeTai = array(
        'mdt' => $madetai,
        'dkdt_manhom' => $dkdetai_manhom,
        'tendt' => $tendetai,
        'ghichu' => $ghichu,
        'ngayTH' => $ngaythuchien,
        'ngayKT' => $ngayketthuc,
        'kinhphi' => $kinhphi,
        'mgv' => $magiangvien
    );
    
    // Thực thi câu lệnh
    if ($stmt->execute()) {
        header('Content-Type: application/json');
        echo json_encode($newDeTai);
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    // Đóng kết nối
    $stmt->close();
    $conn->close();

?>
