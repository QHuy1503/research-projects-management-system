<?php
    include("connect.php");

    $mahoidong = $_POST['mahoidong'];
   

    $sql = "SELECT hoidong.*, HoTenGV FROM hoidong JOIN giangvien ON hoidong.MaGiangVien = giangvien.MaGiangVien WhERE MaHoiDong = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $mahoidong);

    // Thực thi câu lệnh
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $data = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        header('Content-Type: application/json');
        echo json_encode($data);
        // echo '  <tbody id="gv_hoiDongCuaToi">
        //             <tr>
        //                 <td>'<?php echo $data['MaHoiDong']'</td>
        //                 <td>'<?php echo $data['MaGiangVien']'</td>
        //                 <td>'<?php echo $data['HoTenGV']'</td>
        //                 <td>'<?php echo $data['VaiTro']'</td>
        //             </tr>            
        //         </tbody>';
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    // Đóng kết nối
    $stmt->close();
    $conn->close();

?>
