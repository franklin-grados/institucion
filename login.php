<!DOCTYPE html>
<html lang="en">
<head>
	<title>log in</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="librari/login/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="librari/login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="librari/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="librari/login/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="librari/login/vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="librari/login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="librari/login/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="librari/login/vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="librari/login/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="librari/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="librari/login/css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form id="form_login" class="login100-form validate-form">
					<span class="login100-form-title p-b-10">
						<h1 class="fs-60">Stanford</h1>
						<h1 class="fs-35">University</h1>
					</span>
					<span class="login100-form-title p-b-20">
						<img src="librari/login/images/logo-stanford.png" alt="">
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email" id="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass p-t-5">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" id="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
					<div id="respuesta" class="text-center error m-t-5"></div>

					<div class="text-center p-t-10">
						<span class="txt1">
							did you forget your password?
						</span>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="librari/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="librari/login/vendor/animsition/js/animsition.min.js"></script>
	<script src="librari/login/vendor/bootstrap/js/popper.js"></script>
	<script src="librari/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="librari/login/vendor/select2/select2.min.js"></script>
	<script src="librari/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="librari/login/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="librari/login/vendor/countdowntime/countdowntime.js"></script>
	<script src="librari/login/js/main.js"></script>

	<script src="vistas/script/login.js"></script>

</body>
</html>