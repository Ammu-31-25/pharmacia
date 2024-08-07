<!DOCTYPE html>
<html>

<head>
	<!-- <link rel="stylesheet" type="text/css" href="login1.css"> -->

	<title>
		Pharmacia
	</title>
	<link rel="stylesheet" href="bootstrap/node_modules/bootstrap/dist/css/bootstrap.min.css">

</head>

<body>
	<div class="header">
		<h1>PHARMACIA</h1>
		<p class="lead">Pharmacy Management System</p>
	</div>
	<div class="container-fluid">
		<form method="post" action="">
			<div id="div_login">
				<h1>Pharmacist Login</h1>

				<div>
					<input type="text" class="textbox" id="uname" name="uname" placeholder="Username" />
				</div>
				<div>
					<input type="password" class="textbox" id="pwd" name="pwd" placeholder="Password" />
				</div>
				<div>
					<input type="submit" value="Submit" name="submit" id="submit" />
					<br>
					<input type="submit" value="Click here for Admin Login" name="psubmit" id="submit" />
				</div>


				<?php

				include "config.php";

				if (isset($_POST['submit'])) {

					$uname = mysqli_real_escape_string($conn, $_POST['uname']);
					$password = mysqli_real_escape_string($conn, $_POST['pwd']);

					if ($uname != "" && $password != "") {

						$sql = "SELECT e_id FROM emplogin WHERE e_username='$uname' AND e_pass='$password'";
						$result = $conn->query($sql);
						$row = $result->fetch_row();
						if (!$row) {
							echo "<p style='color:red;'>Invalid username or password!</p>";
						} else {

							$emp = $row[0];
							session_start();
							$_SESSION['user'] = $emp;
							header("location:pharmmainpage.php");
						}
					}
				}

				if (isset($_POST['psubmit'])) {
					header("location:mainpage.php");
				}
				?>


			</div>
		</form>
	</div>
	<div class=footer>
		<br>
		Powered by VE Technologies.
		<br><br>
	</div>
	<script src="bootstrap/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bootstrap/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
</body>

</html>