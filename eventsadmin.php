<?php include 'connection.php';
$msg="";

if(isset($_POST['submitform']))
		{
			$dir="assets/eventposter/";
			$image=$_FILES['uploadfile']['name'];
			$temp_name=$_FILES['uploadfile']['tmp_name'];
			$text=$_POST['text'];

			if($image!="")
			{
				if(file_exists($dir.$image))
				{
					$image= time().'_'.$image;
				}

				$fdir= $dir.$image;
				move_uploaded_file($temp_name, $fdir);
			}

				$query="UPDATE `images` SET `image`='$image',`text`='$text' WHERE 1";
				
				mysqli_query($conn,$query) or die(mysqli_error($conn));
				
				echo "File Uploaded Suucessfully ";

		}
?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<style>
		@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

		body {
			font-family: 'Poppins', sans-serif;
			background: #fafafa
		}

		p {
			font-family: 'Poppins', sans-serif;
			font-size: 1.1em;
			font-weight: 300;
			line-height: 1.7em;
			color: #999;
		}

		a,
		a:hover,
		a:focus {
			color: inherit;
			text-decoration: none;
			transition: all 0.3s;
		}

		.navbar {
			padding: 15px 10px;
			background: #fff;
			border: none;
			border-radius: 0;
			margin-bottom: 40px;
			box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
		}

		.navbar-btn {
			box-shadow: none;
			outline: none !important;
			border: none;
		}

		.line {
			width: 100%;
			height: 1px;
			border-bottom: 1px dashed #ddd;
		}

		.wrapper {
			display: flex;
			width: 100%;
			align-items: stretch;
		}

		#sidebar {
			min-width: 250px;
			max-width: 250px;
			background: #7386D5;
			color: #fff;
			transition: all 0.3s;
		}

		#sidebar.active {
			margin-left: -250px;
		}

		#sidebar .sidebar-header {
			padding: 20px;
			background: #6d7fcc;
		}

		#sidebar ul.components {
			padding: 20px 0px;
			border-bottom: 1px solid #47748b;
		}

		#sidebar ul p {
			padding: 10px;
			font-size: 1.1em;
			display: block;
		}

		#sidebar ul li a {
			padding: 10px;
			font-size: 1.1em;
			display: block;
		}

		#sidebar ul li a:hover {
			color: #7386D5;
			background: #fff;
		}

		#sidebar ul li.active>a,
		a[aria-expanded="true"] {
			color: #fff;
			background: #6d7fcc;
		}

		a[data-toggle="collapse"] {
			position: relative;
		}

		.dropdown-toggle::after {
			display: block;
			position: absolute;
			top: 50%;
			right: 20px;
			transform: translateY(-50%);
		}

		ul ul a {
			font-size: 0.9em !important;
			padding-left: 30px !important;
			background: #6d7fcc;
		}

		ul.CTAs {
			padding: 20px;
		}

		ul.CTAs a {
			text-align: center;
			font-size: 0.9em !important;
			display: block;
			border-radius: 5px;
			margin-bottom: 5px;
		}

		a.download {
			background: #fff;
			color: #7386D5;
		}

		a.article,
		a.article:hover {
			background: #6d7fcc !important;
			color: #fff !important;
		}

		#content {
			width: 100%;
			padding: 20px;
			min-height: 100vh;
			transition: all 0.3s;
		}

		@media(maz-width:768px) {
			#sidebar {
				margin-left: -250px;
			}

			#sidebar.active {
				margin-left: 0px;
			}

			#sidebarCollapse span {
				display: none;
			}
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar">
			<div class="sidebar-header">
				<h3>BOOTSTRAP SIDEBAR</h3>
			</div>


			<ul class="list-unstyled components">
				<li>
					<a href="admin.php"><i class="fa fa-table" aria-hidden="true"></i> Attendance</a>
				</li>

				<li>
					<a href="members.php"><i class="fa fa-users" aria-hidden="true"></i> CDC Members</a>
				</li>

				<li class="active">
					<a href="eventsadmin.php"><i class="fa fa-icons"></i> Events</a>
				</li>
				<li>
					<a href="eventregistration.php"><i class="fa fa-envelope" aria-hidden="true"></i> Event Registration</a>
				</li>
				<li>
					<a href="cp.php"><i class="fa fa-key" aria-hidden="true"></i> Change Password</a>
				</li>
			</ul>

			<ul class="list-unstyled CTAs">
				<li>
					<a href="logout.php" class="download"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
				</li>
			</ul>
		</nav>
		<div class="content" style="width: 100%">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">

				<button type="button" id="sidebarCollapse" class="btn btn-info">
					<i class="fa fa-align-justify"></i> <span></span>
				</button>

				<!--<a class="navbar-brand" href="#">Navbar</a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="events.php">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Reach Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Admin</a>
      </li>
    </ul>
  </div>
			</nav>

			<div class="container">
				<form method="post" action="eventsadmin.php" enctype="multipart/form-data">
					<input type="hidden" name="size" value="1000000">

					<div class="form-group">
						<label for="name">Upload Event's Poster here:</label><br>
						<input type="file" name="uploadfile">


					</div><br>

					<div class="form-group">
						<label for="name">Roll.No:</label>
						<textarea name="text" id="" cols="40" rows="1" placeholder="Deadline Date and Day [DD-MM-YYYY] DAY"></textarea>
					</div>

					<input type="submit" name="submitform" class="btn btn-primary" value="Update">
				</form>
			</div>

			<div class="panel-footer">


			</div>


		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<script>
			$(document).ready(function() {
				$('#sidebarCollapse').on('click', function() {
					$('#sidebar').toggleClass('active');
				});
			});
		</script>
</body>

</html>