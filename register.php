<?php
    include 'connection.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        $college=$_POST['college'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];

        if($name=="" || $college==""|| $email=="" || $phone==""){
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
        $query="insert into images(name,college,email,phone) values('$name','$college','$email','$phone')";
        $result=$conn->query($query);
        if($result){
            echo "<div class='alert alert-success'>
                
                Data inserted successfully;

            </div>";
            
    }
}
        }
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles/register.css">
    <title>CDC</title>
  </head>
  <body>
  <div class="panel panel-default container">

<div class="panel-heading">
	
	<h1 style="text-align: center;">Register</h1>

</div>
	

<div class="panel-body">

<?php 

			if($_SERVER['REQUEST_METHOD']=='POST'){
				$name=$_POST['name'];
				$roll=$_POST['college'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];

				if($name=="" || $roll==""|| $email==""|| $phone==""){
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
				$query="INSERT INTO `eventregistration`(`name`, `college`, `email`, `phone`) VALUES ('$name','$college','$email','$phone')";
				$result=$conn->query($query);
				if($result){
					echo "<div class='alert alert-success'>
						
						Registered successfully;

					</div>";
					
			}
		}
				}

 ?>

	<form method="post">
	
    <a href="events.php" class="btn btn-primary">Back</a>
	<div class="form-group">
	<label for="name">Name:</label>
	<input type="text" name="name" class="form-control">
		

	</div>

<div class="form-group">
	<label for="name">College Name:</label>
	<input type="text" name="college" class="form-control">
		

	</div>

<div class="form-group">
	<label for="name">Email:</label>
	<input type="text" name="email" class="form-control">
		

	</div>
    <div class="form-group">
	<label for="name">Phone:</label>
	<input type="text" name="phone" class="form-control">
		

	</div>
	<input type="submit" class="btn btn-primary" value="Submit">
</form>

</div>
	

<div class="panel-footer">
	
	
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>