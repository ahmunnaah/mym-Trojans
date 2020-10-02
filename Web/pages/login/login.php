<!DOCTYPE html>

<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>
	<div class="">
		<?php
		include_once "../nav_bar/menu.php"
		?>
	</div>
	<div class="log">
		<div class="log_content">
			<!-- login form -->
			<div class="heading">
				<h1>Welcome to Space_O!</h1>
				<p>Don't miss new updates! Sign in to Stay connected</p>
			</div>
			<form action="index.html" method="post">
				<div class="form" action="login_handler.php" method="post" >

					<label>Enter your Username</label>
					<input type="text" name="uname" required>
					<label>Enter your password</label>
				    <input type="password" name="pass" required>
				    <button type="submit">Sign in</button>
				 </div>
			</form>


			<div class="ending">
				<span><a href="">Forgot Password?</a></span>
				<p>New to SpaceO? <a href="../reg/reg.php">Join now</a></p>
			</div>

		</div>
	</div>

</body>
</html>
