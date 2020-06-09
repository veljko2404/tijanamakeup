<?php
session_start();
require 'connect.php';
if(isset($_POST['pass'])) {
	$pass = $_POST['pass'];
	if(!empty($pass)) {
		$password = 'termini94';
		if($pass=$password) {
			$_SESSION['pas'] = $pass;
			header("Location: termini.php");
		}
	} else {
		$empty_err = 'Погрешна шифра !';
	}
}

?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body><br><br>
<div class="container">
	<form action="index.php" method="post">
		<input type="password" name="pass" placeholder="Унеси шифру">
		<input type="submit" value="Пошаљи" class="btn btn-success"><br><br>
	</form>
	<h2><?php if(isset($empty_err)){echo $empty_err;} ?></h2>
</div>
</body>
</html>
