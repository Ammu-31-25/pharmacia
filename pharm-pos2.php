<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="nav2.css">
<link rel="stylesheet" type="text/css" href="form3.css">
<link rel="stylesheet" type="text/css" href="table2.css">
<title>
New Sales
</title>
</head>

<body>

		

	<?php
	
		include "config.php";
		session_start();

		$sql="SELECT E_FNAME from EMPLOYEE WHERE E_ID='$_SESSION[user]'";
		$result=$conn->query($sql);
		$row=$result->fetch_row();
		
		$ename=$row[0];
	
	?>

<div class="topnav">
		<a href="logout1.php">Logout(signed in as <?php echo $ename; ?>)</a>
		<h2 style="font-family:Arial; color:white; text-align:left; float:left;"><a href="pharmmainpage.php">PHARMACIA (Dashboard)</a></h2>
	</div>
	
	<center>
	<div class="head">
	<h2> SALES INVOICE</h2>
	</div>
	</center>

	<table id='table1'>
		<tr>
			<th>Medicine ID</th>
			<th>Medicine Name</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Total Price</th>
			<th>Action</th>
		</tr>
	
	<?php
	
		if(isset($_GET['sid'])) {
		$sid=$_GET['sid'];}
		
		if(empty($sid))
		{
			$sql ="SHOW TABLE STATUS LIKE 'sales'";

			if(!$result = $conn->query($sql)){
			die('There was an error running the query [' . $conn->error . ']');
				}

			$row = $result->fetch_assoc();
			$sid=$row['Auto_increment']-1;
		}
	
		if(!empty($sid)) {
		$qry1 = "SELECT med_id,sale_qty,tot_price FROM sales_items where sale_id=$sid";
		$result1 = $conn->query($qry1);
		$sum=0;

			if ($result1->num_rows > 0) {
	
			while($row1 = $result1->fetch_assoc()) {
		
					$medid=$row1["med_id"];
					$qry2 = "SELECT med_name,med_price FROM meds where med_id=$medid";
					$result2 = $conn->query($qry2);
					$row2=$result2->fetch_row();
					
				echo "<tr>";
					echo "<td>" . $row1["med_id"]. "</td>";
					echo "<td>" . $row2[0] . "</td>";
					echo "<td>" . $row1["sale_qty"]. "</td>";
					echo "<td>" . $row2[1] . "</td>";
					echo "<td>" . $row1["tot_price"]. "</td>";
					echo "<td align=center>";
					echo "<a name='delete' class='button1 del-btn' href=pharm-pos-delete.php?mid=".$row1['med_id']."&slid=".$sid.">Delete</a>";	
					echo "</td>";
				echo "</tr>";
				}
			echo "</table>";
			}	
		}
		
	?>
		
		<div class="one" style="background-color:white;">
		<form method=post>
		<a name='pos1' class='button1 view-btn' href=pharm-pos1.php?sid=".$sid.">Go Back to Sales Page</a> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type='submit' name='custadd' value='Complete Order'><br>
		</form>
		</div>
		
	<?php
		
		if(isset($_POST['custadd'])) {
			
			$res=mysqli_query($conn,"SET @p0=$sid;");
			$res=mysqli_query($conn,"CALL `TOTAL_AMT`(@p0,@p1);") or die(mysqli_error($conn));
			$res=mysqli_query($conn,"SELECT @p1 as TOTAL;");
			
			while($row=mysqli_fetch_array($res))
			{
				$tot=$row['TOTAL'];
			}
					
			echo "<table id='table1'>
				<tr style='background-color: #f2f2f2;'>
				<td>Total</td>
				<td>";echo $tot;
				echo "</td>
				</tr>
			</table>";	
		}
					
	?>
	
</body>

<script>
	
		var dropdown = document.getElementsByClassName("dropdown-btn");
		var i;

			for (i = 0; i < dropdown.length; i++) {
			  dropdown[i].addEventListener("click", function() {
			  this.classList.toggle("active");
			  var dropdownContent = this.nextElementSibling;
			  if (dropdownContent.style.display === "block") {
			  dropdownContent.style.display = "none";
			  } else {
			  dropdownContent.style.display = "block";
			  }
			  });
			}
			
</script>
	
</html>