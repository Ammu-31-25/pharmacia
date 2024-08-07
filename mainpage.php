<!DOCTYPE html>
<html>

<!-- <link rel="stylesheet" type="text/css" href="login1.css"> -->

<head>
	<title>
		Pharmacia
	</title>
	<!-- copy this line of code -->
	<link rel="stylesheet" href="bootstrap/node_modules/bootstrap/dist/css/bootstrap.min.css">
	<style>
		body{
            background-image:url('pharm1.png');
            background-repeat: no-repeat; 
            background-size: cover; 
            background-position: center; 
		}
	</style>
</head>


<body>
	<div class="d-flex flex-column mb-3 vh-100 justify-content-between">
		<div class="container-fluid bg-primary-subtle opacity-75 d-flex flex-row justify-content-center">
			<div class="">
				<h1 class="display-1">PHARMACIA</h1>
				<p class="lead text-center">Pharmacy Management System</p>
			</div>


		</div>
		<div class="container border border-1 rounded-4 shadow m-auto p-5 bg-body-tertiary">

				<form method="post" action="">
					<div id="div_login">
						<h1 class="display-3">Admin Login</h1>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"></span>
							<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="uname" name="uname">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"></span>
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
			<div class="container">
				<footer class="d-flex flex-wrap justify-content-between align-items-center  border-top">
					<div class="col-md-4 d-flex align-items-center">
						<a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
							<svg class="bi" width="30" height="24">
								<use xlink:href="#bootstrap"></use>
							</svg>
						</a>
						<span class="mb-3 mb-md-0 text-body-secondary">© 2024 Company, Inc</span>
					</div>
				</footer>
			</div>
		</div>
	</div>
	<!-- copy these two lines of code -->
	<script src="bootstrap/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bootstrap/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
</body>

</html>