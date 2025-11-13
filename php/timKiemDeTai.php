<?php
    include("connect.php");

    $tendetai = $_POST['keysearch'];
    $tendetailike = "%".$tendetai."%";

    $data = array();
    
    $sql = "SELECT MaDeTai, TenDeTai FROM detai WHERE TenDeTai LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $tendetailike);

    $sql2 = "SELECT MaDeTaiGV, TenDeTai FROM detaigiangvien WHERE TenDeTai LIKE ?";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->bind_param("s", $tendetailike);

    // Thực thi câu lệnh
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        if ($stmt2->execute()) {
            $result2 = $stmt2->get_result();
            
            if ($result2->num_rows > 0) {
                while($row = $result2->fetch_assoc()) {
                    $data[] = $row;
                }
            }
            header('Content-Type: application/json');
            echo json_encode($data);
        } else {
            echo "Lỗi: " . $stmt->error;
        }
    }
    
    $stmt->close();
    $stmt2->close();
    $conn->close();
?>