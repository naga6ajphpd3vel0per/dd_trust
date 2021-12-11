<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url(); ?>login/images/bg.svg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="<?php echo base_url('main/login'); ?>" method="POST">
					<span class="login100-form-title p-b-49">
						Login
					</span>
					  <?php
			            $success_msg = $this->session->flashdata('success_msg');
			            $error_msg = $this->session->flashdata('error_msg');
			          ?>
			          <?php if($success_msg){  ?>
			            <div class="alert alert-success text-center" role="alert">
			              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
			              <strong><?php echo $success_msg; ?></strong>
			            </div>
			          <?php } if($error_msg){ ?>
			            <div class="alert alert-danger text-center" role="alert">
			              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
			              <strong><?php echo $error_msg; ?></strong>
			            </div>
			          <?php } ?>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div><br><br>
					<div class="text-right p-t-8 p-b-31" style="display: none;">
						<a href="#">
							Forgot password?
						</a>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
	<script src="<?php echo base_url(); ?>login/js/main.js"></script>
</body>
</html>
