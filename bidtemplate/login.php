<!DOCTYPE html>
<html lang="en">

<head>

	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login assets/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="login assets/css/main.css">
<!--===============================================================================================-->

</head>
<body>
	
<form action="logincheck.php" method="post">
	<div class="limiter">
		<div class="container-login100" style="background-image: url('login assets/images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form">
					<div class="login100-form-avatar">
						<img src="login assets/images/avatar-01.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						LOGIN
					</span>

					<div class="wrap-input100 validate-input m-b-10">
						<input class="input100" type="text" name="username" id= "username"placeholder="Username" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10">
						<input class="input100" type="password" name="pass" id="pass" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
					<?php 
					if(isset($_GET['error']))
					{
						?>
					<div class="wrap-input100 validate-input m-b-10">
						<text style="color:yellow;">!..Wrong Username or password or contact admin..!</text>
					</div>
					<?php
					}
				?>
					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" id="submit">
							Login
						</button>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="register.php" class="txt1">
						Create new account
						</a>
					</div>

				<!--	<div class="text-center w-full">
						<a class="txt1" href="register.php">
							Create new account
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>   -->
				</form>
			</div>
		</div>
	</div>

</form>	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>