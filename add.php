
<?php include_once("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="https://s.ytimg.com/yts/img/favicon-vflz7uhzw.ico" type="image/x-icon"> 
	<link rel="stylesheet" href="assets/styles/sidebar.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>


</head>
<body>



<div class="panel panel-default container">

<div class="panel-heading">
	
	<h1 style="text-align: center;">Attendance Mangement System</h1>

</div>
	

<div class="panel-body">

<?php 

			if($_SERVER['REQUEST_METHOD']=='POST'){
				$name=$_POST['name'];
				$roll=$_POST['roll'];
				$email=$_POST['email'];

				if($name=="" || $roll==""|| $email==""){
					echo "<div class='alert alert-danger'>
						
						Fields must not be empty;

					</div>";
				}
				else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
					echo "<div class='alert alert-danger'>
						
						Invalid email format!!!;

					</div>";
				}


				else{
				$query="insert into mem(name,roll,email) values('$name','$roll','$email')";
				$result=$conn->query($query);
				if($result){
					echo "<div class='alert alert-success'>
						
						Data inserted successfully;

					</div>";
					
			}
		}
				}

 ?>

	<form method="post">
	<a href="#" class="btn btn-primary">View</a>
	<a href="admin.php" class="btn btn-primary pull-right">Back</a>
	

	<div class="form-group">
	<label for="name">Name:</label>
	<input type="text" name="name" class="form-control">
		

	</div>

<div class="form-group">
	<label for="name">Roll.No:</label>
	<input type="text" name="roll" class="form-control">
		

	</div>

<div class="form-group">
	<label for="name">Email:</label>
	<input type="text" name="email" class="form-control">
		

	</div>

	<input type="submit" class="btn btn-primary">
</form>

</div>
	

<div class="panel-footer">
	
	
</div>
	

</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>