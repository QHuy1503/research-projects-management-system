<?php
    // để cài vendor vào thư mục thì chạy lệnh sau: composer require phpoffice/phpspreadsheet:^2.0.0 --ignore-platform-req=ext-gd
    // lưu ý là cd vào thư mục lib

    include "connect.php";
    require '../lib/vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    $nam = $_POST['nam'];


    // Truy vấn dữ liệu từ CSDL
    $sql = "SELECT * FROM detaigiangvien WHERE YEAR(NgayThucHien) = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nam);

    // Tạo file Excel mới
    $spreadsheet = new Spreadsheet();    
    $sheet = $spreadsheet->getActiveSheet();

    // Thêm tiêu đề cột
    $sheet->setCellValue('A1', 'Mã Đề Tài');
    $sheet->setCellValue('B1', 'Mã Nhóm');
    $sheet->setCellValue('C1', 'Tên Đề Tài');
    $sheet->setCellValue('D1', 'Ngày Thực Hiện');
    $sheet->setCellValue('E1', 'Ngày Kết Thúc');
    $sheet->setCellValue('F1', 'Kinh Phí');
    $sheet->setCellValue('G1', 'Cố Vấn');
    $sheet->setCellValue('H1', 'Tiến Độ');


    // Thực thi câu lệnh
    $row = 2;
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            // Thêm dữ liệu vào file Excel
            while($row_data = $result->fetch_assoc()) {
                $sheet->setCellValue('A' . $row, $row_data['MaDeTaiGV']);
                $sheet->setCellValue('B' . $row, $row_data['MaNhomGV']);
                $sheet->setCellValue('C' . $row, $row_data['TenDeTai']);
                $sheet->setCellValue('D' . $row, $row_data['NgayThucHien']);
                $sheet->setCellValue('E' . $row, $row_data['NgayKetThuc']);
                $sheet->setCellValue('F' . $row, $row_data['KinhPhiDuKien']);
                $sheet->setCellValue('G' . $row, $row_data['CoVan']);
                $sheet->setCellValue('H' . $row, match ($row_data['isNghiemThu']) {
                    1 => "Đã xong",
                    0 => $row_data['TrangThai'] == 1 ? "Đang thực hiện" : "Chờ duyệt",
                });
                // $sheet->setCellValue('I' . $row, if($row_data['isNghiemThu'] == 1){echo "Đã xong";} else if($row_data['TrangThai'] == 1){echo "Đang thực hiện";} else {echo "Chờ duyệt"; } );
                $row++;
            }
            // Lưu file Excel
            $writer = new Xlsx($spreadsheet);
            $writer->save('C:\Users\USER\Desktop\DanhSachDeTaiGV'.$nam.'.xlsx');
            echo json_encode(array('success' => true, 'messagegv' => 'File Excel đã được tạo thành công!'));
        } else {
            echo json_encode(array('success' => false, 'messagegv' => 'Lỗi: ' . $stmt->error));
        }
    }
?>