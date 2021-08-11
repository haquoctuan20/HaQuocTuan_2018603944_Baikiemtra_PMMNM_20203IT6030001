<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>ĐĂNG KÝ TIÊM VACCINE</title>
</head>
<body>
	
	<div class="container-fluid">
		<h3>ĐĂNG KÝ TIÊM VACCINE</h3>
		<form action="register_submit.php" method="POST">

			<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Username:</label>
					<input type="text" class="form-control" id="exampleInputEmail1" name="username">
			</div>

			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Password:</label>
				<input type="password" class="form-control" id="exampleInputPassword1" name="password">
			</div>
			

			<div class="mb-3">
				<label for="exampleInputName" class="form-label">Họ tên:</label>
				<input type="text" class="form-control" id="exampleInputName" name="fullName">
			</div>
			

			<div class="mb-3">
				<label for="exampleInputPhoneNumber" class="form-label">Số điện thoại:</label>
				<input type="number" class="form-control" id="exampleInputPhoneNumber" name="phoneNumber">
			</div>
			

			<div class="mb-3">
				<label for="exampleInputAddress" class="form-label">Địa chỉ:</label>
				<input type="text" class="form-control" id="exampleInputAddress" name="address">
			</div>
			
			
			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
	</div>

	<!--  -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>