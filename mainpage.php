<!DOCTYPE html>
<html>

<!-- <link rel="stylesheet" type="text/css" href="login1.css"> -->

<head>
	<title>
		Pharmacia
	</title>
	<!-- copy this line of code -->
	<link rel="stylesheet" href="bootstrap/node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
	<div class="header">
		<h1 class="display-1">PHARMACIA</h1>
		<p class="lead">Pharmacy Management System</p>
	</div>
	<div class="container-fluid">
		<form method="post" action="">
			<div id="div_login">
				<h1 class="display-3">Admin Login</h1>

				<!-- <div>
					<input type="text" class="textbox" id="uname" name="uname" placeholder="Username" />
				</div> -->

				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1">@</span>
					<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="uname" name="uname">
				</div>

				<!-- <div>
					<input type="password" class="textbox" id="pwd" name="pwd" placeholder="Password" />
				</div> -->

				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1">*</span>
					<input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" id="pwd" name="pwd">
				</div>

				<div>

					<input type="submit" value="Submit" name="submit" id="submit" />
					<br>
					<input type="submit" value="Click here for Pharmacist Login" name="psubmit" id="submit" />

					<?php

					include "config.php";

					if (isset($_POST['submit'])) {

						$uname = mysqli_real_escape_string($conn, $_POST['uname']);
						$password = mysqli_real_escape_string($conn, $_POST['pwd']);

						if ($uname != "" && $password != "") {

							$sql = "SELECT * FROM admin WHERE a_username='$uname' AND a_password='$password'";
							$result = $conn->query($sql);
							$row = $result->fetch_row();
							if (!$row) {
								echo "<p style='color:red;'>Invalid username or password!</p>";
							} else {
								session_start();
								$_SESSION['user'] = $uname;
								header('location:adminmainpage.php');
							}
						}
					}

					if (isset($_POST['psubmit'])) {
						header("location:mainpage1.php");
					}
					?>

				</div>

			</div>
		</form>
	</div>

	<div class=footer>
		<!-- FOOTER GOES HERE -->
	</div>
	<!-- copy these two lines of code -->
	<script src="bootstrap/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bootstrap/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
</body>

</html>