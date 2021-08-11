<?php
	include 'config.php';
	if(isset($_POST["submit"]) && $_POST["username"] != "" && $_POST["password"] != "" && $_POST["fullName"] != "" && $_POST["phoneNumber"] != "" && $_POST["address"] != "" ){
		//khi nhap du thong tin
		$username = $_POST["username"];
		$password = $_POST["password"];
		$fullName = $_POST["fullName"];
		$phoneNumber = $_POST["phoneNumber"];
		$address = $_POST["address"];

		$sql = "SELECT * FROM nguoidung WHERE username = '$username'";
		$old = mysqli_query($conn,$sql);

		if(mysqli_num_rows($old) > 0){
			header("location:register.php");
		}else{
			$sql = "INSERT INTO nguoidung( username, password, hoten, sodienthoai, diachi) VALUES ('$username','$password','$fullName','$phoneNumber','$address')";
			mysqli_query($conn,$sql);
			header("location:login.php");
		}

	}
	else 
	{
		header("location:register.php");
	}
?>