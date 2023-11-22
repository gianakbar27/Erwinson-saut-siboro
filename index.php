<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div class="container">
		<form action="controller/login.php" method="POST" class="login-username">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register">Anda Belum Punya Akun <a href="register_view.php">Silahkan Register</a></p>
		</form>
	</div>
</body>
</html>