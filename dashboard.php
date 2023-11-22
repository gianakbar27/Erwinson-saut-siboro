<?php
session_start();
if (!isset($_SESSION['nama'])) {
	header("Location: index.php");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div class="container-logout">
		<form action="controller/logout.php" method="POST" class="login-username">
			<h1>Selamat Datang, <?php echo $_SESSION['nama']; ?>!</h1>
			<div class="input-group">
				<button type="submit" class="btn">Logout</button>
			</div>
		</form>
	</div>
</body>
</html>