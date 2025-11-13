<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Form 6</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- <link href="http://infiniteiotdevices.com/images/logo.png" rel="icon" sizes="16x16" type="image/gif" /> -->
	<link rel="stylesheet" type="text/css" href="css/logincss.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- <script src="js/jquery.min.js"></script> -->

	<script>
		$(document).ready(function(){
            $("#form_login").click(function(){
                var username = $("#username").val();
                var password = $("#password").val();

				console.log(username);
				console.log(password);

                $.ajax({
					url: './php/login.php',
					type: 'post',
					dataType: 'html',
					data: {
						username: username,
						password: password
					},
					success: function(response) {
						// if(response == "login successfully"){
						// 	window.location.href = './homePage.php';
						// }
						// else{
                        //     alert(response);
                        // }
						if(response == "QTV"){
							window.location.href = './homePage.php';
						} else if (response == "GV") {
							window.location.href = './giangvien.php';
						} else if (response == "SV") {
							window.location.href = './sinhvien.php';
						}
					},
					error: function() {
						// Xử lý lỗi khi gửi AJAX
						$('#error-message').text('Đã xảy ra lỗi, vui lòng thử lại sau.');
					}
				});
            });
        });

	</script>

</head>
<body>
	
	<div class="formlogin">
		<!-- <form class="login_form"> -->
			<h2>Đăng Nhập</h2>
			<div class="input-box">
				<i class="fa fa-user"></i>
				<input type="text" id="username" placeholder="Username" required="">
			</div>
			<div class="input-box">
				<i class="fa fa-lock"></i>
				<input type="password" id="password" placeholder="Password" required="">
			</div>
			<div class="input-box">
				<input type="submit" id="form_login" value="Đăng nhập">
			</div>
			<div id="error-message" style="color:red;"></div>

			<a href="#" class="a">Quên mật khẩu</a>
		<!-- </form> -->
	</div>

	<div class = "logoTruong">
		<img class = "logoTruong_img" src="./images/logotruong2.png" alt="">
	</div>
</body>
</html>