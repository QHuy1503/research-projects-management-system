<?php
    session_start();
    include "connect.php";

    if($_POST){
        $username = $_POST['username'];
        $pass_input = md5($_POST['password']);

        if($username != " " && $pass_input != " "){
            $sql = "select * from taikhoan where Username = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $username);

            // thực hiện truy vấn
            $stmt->execute();

            // lấy kết quả
            $result = $stmt->get_result();
            
            if($result->num_rows > 0){
                while ($row = $result->fetch_assoc()) {
                    $get_pass = $row["Password"];
                    $get_loaitk = $row["LoaiTK"];
                }
                if($pass_input == $get_pass){
                    // header("location: ../homePage.php");
                    $_SESSION['username'] = $username;
                    $_SESSION['loaitk'] = $get_loaitk;
                    // echo "login successfully";
                    echo ($get_loaitk);
                } else {                   
                    echo"Mật khẩu không chính xác.";
                }
            } else {
                echo "Tài khoản không chính xác.";
            }           
        } else {
            echo "Tài khoản hoặc mật khẩu không được chứa khoảng trắng";
        } 
    }
?>
