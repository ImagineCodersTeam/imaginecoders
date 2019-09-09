<!DOCTYPE html>
<html lang="en">
<head>

  <title>CUSTOMER DETAILS</title>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<style>
.col-md-7{
			
		content:text-center;
}
.bg{
  background-color:#99A3A4 ;
}
</style>


<body class="bg" style="background-image:url(page48.jpg);">
<div class="container container-fluid "><br>
	<div class="col-md-7" ">
		<h4 class="text-left" style="color: white;"><b><a href="index.html">HOME</a></b></h4><br>
	</div>
  </div>  
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "imaginecoders";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT id, name, email, subject, message FROM customers";
		$result = $conn->query($sql);	
		if ($result->num_rows > 0) 
		{
	?>
	
		  <div class="limiter">
				<div class="container-table100">
					<div class="wrap-table100">
					<div class="container container-fluid "><br>
	<div class="col-md-7" ">
		<h1 class="text-left" style="color: white;"><b>CUTOMER DETAILS</b></h1><br>
	</div>
  </div>
						<div class="table100 ver3 m-b-110">
							<div class="table100-head">
								<table>
									<thead>
										<tr class="row100 head">
											<th class="cell100 column1">S.No</th>
											<th class="cell100 column2">Name</th>
											<th class="cell100 column3">Email Id</th>
											<th class="cell100 column4">Subject</th>
											<th class="cell100 column5">Message</th>
										</tr>
									</thead>
								</table>
							</div>

							<div class="table100-body js-pscroll">
								<table>
									<tbody>
										<tr class="row100 body">
										<?php
										 while($row = $result->fetch_assoc()) 
										 {
											echo"<td class='cell100 column1'>" .$row["id"]. "</td>";
											echo"<td class='cell100 column2'>" .$row["name"]. "</td>";
											echo"<td class='cell100 column3'>" .$row["email"]. "</td>";
											echo"<td class='cell100 column4'>" .$row["subject"]. "</td>";
											echo"<td class='cell100 column5'>" .$row["message"]. "</td>";
										 }
										 ?>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php
		}
			else 
			{
				?>
					<script>
					function myFunction() {
					alert("No Data Found");
}
					</script>
					<?php
				header("location:index.html");
		}
		$conn->close();
		?>


	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
	</script>
	<script src="js/main.js"></script>
</body>
</html>
