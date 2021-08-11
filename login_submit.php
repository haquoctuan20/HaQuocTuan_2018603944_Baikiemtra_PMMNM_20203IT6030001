<?php
	session_start();
	include 'config.php';
	if(isset($_POST["submit"]) && $_POST["username"] != "" && $_POST["password"] != "" ){
		//khac rong
			$username = $_POST["username"];
			$password = $_POST["password"];	

			$sql_admin = "SELECT * FROM nguoidung WHERE username = '$username' AND password = '$password' AND leve = 1 ";

			$sql = "SELECT * FROM nguoidung WHERE username = '$username' AND password = '$password'";
			$user = mysqli_query($conn,$sql);

			if(mysqli_num_rows($user) > 0){
				// Thêm vào sesstion khi đăng nhập thanh công
				$_SESSION["user"] = $username;
				header("location:index.php");
			}else{
				
				echo "Đăng nhập thất bại, kiểm tra username và password";
			}

	}
	else{
		header("location:login.php");
	}

	if(isset($_POST["submit_register"])){
		header("location:register.php");
	}

?>