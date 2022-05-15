<?php

$message = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$p_number = $_POST['p_number'];
	$password = $_POST['password'];
	$re_password = $_POST['re_password'];

	if ($name == "" && $email == "" && $p_number == "") {
		$message = "Please fill all the requered field";
	} else {
		if ($password != $re_password) {
			$message = "Password not mached";
		} else {
			$db_connect = mysqli_connect("localhost", "root", "", "anamul");
			
			$insert = $db_connect->query("insert into registrations(name,email,p_number, password, re_password) values('$name', '$email', '$p_number', '$password', '$re_password')");
			if ($insert) {
				$message = "Successfully insert ". $name;
			} else {
				$message = "Opp! Data not insert ";
			}
		}
	}
	header('Location: http://localhost/invoice/login.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<link href="css/style.css" type="text/css" rel="stylesheet">

</head>

<body>






	<div class="card bg-light">
		<article class="card-body mx-auto" style="max-width: 400px;">

		<div class="card-body-success">
            <?php 
                if(!empty($message)){
                    echo $message;
                }
            
            ?>

			<h4 class="card-title mt-9 text-center">Create Account</h4>

			<form action="" method="POST">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-user"></i> </span>
					</div>
					<input name="name" id="name" class="form-control" placeholder="Full name" type="text">
				</div> <!-- form-group// -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
					</div>
					<input name="email" id="email" class="form-control" placeholder="Email address" type="email">
				</div> <!-- form-group// -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
					</div>

					<input name="p_number" id="p_number" class="form-control" placeholder="Phone number" type="text">
				</div> <!-- form-group// -->
				<div class="form-group input-group">

					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						</div>
						<input name="password" id="password" class="form-control" placeholder="Create password" type="password">
					</div> <!-- form-group// -->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						</div>
						<input name="re_password" id="re_password" class="form-control" placeholder="Repeat password" type="password">
					</div> <!-- form-group// -->
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block"> Create Account </button>
					</div> <!-- form-group// -->
					<p class="text-center">Have an account? <a href="">Log In</a> </p>
			</form>
		</article>
	</div> <!-- card.// -->

	</div>
	<!--container end.//-->

</body>

</html>