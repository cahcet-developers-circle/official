<?php
    include 'connection.php';
    session_start();
if(!$_SESSION['CDC'])
{
    header('location:login.php');
}

if(isset($_POST['done']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id=$_GET['id'];
    $q="UPDATE `auth` SET `username`='$username',`password`='$password' WHERE id=1";
    $query= mysqli_query($conn,$q);
    header('location:login.php');
}
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="col-lg-6 m-auto">
       <form method="POST">
           <br><br>
           <div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Change password</h1>
                </div>
                <br>
                <label>New Username</label>
                <input type="text" name="username" id="" class="form-control"><br>
                <label>New Password</label>
                <input type="text" name="password" id="" class="form-control"><br>
                <button class="btn btn-success" type="submit" name="done">Confirm</button>
                <br>
           </div>
       </form> 

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
