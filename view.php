
<?php include_once("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	<script src="bootstrap/bootstrap.min.js"></script>
	<script src="bootstrap/jquery.min.js"></script>
	<link rel="shortcut icon" href="https://s.ytimg.com/yts/img/favicon-vflz7uhzw.ico" type="image/x-icon"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>

	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	<script src="bootstrap/bootstrap.min.js"></script>
	<script src="bootstrap/jquery.min.js"></script>
	<link rel="shortcut icon" href="https://s.ytimg.com/yts/img/favicon-vflz7uhzw.ico" type="image/x-icon"> 


</head>
<body>



<div class="panel panel-default container">

<div class="panel-heading">
	
	<h1 style="text-align: center;">Attendance Mangement System</h1>

</div>
	

<div class="panel-body">
	
	<a href="admin.php" class="btn btn-primary">Back</a>
<form method="post">
<table class="table">
	

<thead>
	
<tr>
	<th>Sr No.</th>
	<th>Date</th>
	<th>View</th>
</tr>


</thead>

			<?php 

				$query="select distinct date from attendance ";
				$result=$conn->query($query);

				if($result->num_rows>0){
					$i=0;
					while ($val=$result->fetch_assoc()) {
						$i++;


			 ?>

<tr>
	
	<td><?php echo $i; ?></td>

	<td><?php echo $val['date']; ?></td>

	<td><a href="viewp.php?date=<?php echo $val['date'] ?>" class="btn btn-primary" >View </a></td>


</tr>
<?php } } ?>



</div>
	

<div class="panel-footer">
	
	
</div>
	

</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>