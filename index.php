

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Đăng ký tiêm vaccine covid 19</title>
</head>
<body>
	<?php
	session_start();
	// nếu không tồn tại sesstion, chuyển về trang đăng nhập
	if(!isset($_SESSION["user"])){
		header("location:login.php");
	}
?>
	<div class="container-fluid">
		<h1>Đăng ký tiêm vaccine covid 19</h1>

		<form action="">
			<div class="form-check">
			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			<label class="form-check-label" for="flexCheckDefault">
				Đăng ký bản thân 
			</label>
			</div>
			<div class="form-check">
			<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
			<label class="form-check-label" for="flexCheckChecked">
				Đăng ký cho người thân
			</label>
			</div>
		</form>
	</div>

	<!--  -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>