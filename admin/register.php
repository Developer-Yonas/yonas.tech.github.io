<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Admin Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="header">
		<h2>Admin</h2>
	</div>

	<form method="post" action="register.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" placeholder="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" placeholder="email"value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" placeholder="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>

			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>
		</div>
	</form>
</body>

</html>