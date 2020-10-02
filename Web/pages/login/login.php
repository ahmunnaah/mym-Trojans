<!DOCTYPE html>
<?php include_once "../db.php" ?>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="login_style.css">
	<style>
		body{
			background-image: linear-gradient(#400080, #000000);
		}
	</style>
</head>
<body>


	<div class="log">
		<div class="log_content">
			<!-- login form -->
			<div class="heading">
				<h1>Welcome to SpaceO!</h1>
				<p>Don't miss new updates! Sign in to Stay connected</p>
			</div>
			<div class="form">
			<form action="login_handler.php" method="post">
					<label>Enter your email or phone</label>
					<input type="text" placeholder="Email or Phone" name="uname">
					<label>Enter your password</label>
						<input type="password" placeholder="Password" name="pass">
						<button type="submit">Sign in</button>
			</form>
			</div>

			<div class="ending">
				<span><a href="">Forgot Password?</a></span>
				<p>New to SpaceO? <a href="">Join now</a></p>
			</div>

		</div>
	</div>

</body>
</html>
