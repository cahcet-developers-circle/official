<?php
include 'connection.php';
if($_POST)
{
$username = stripslashes($_POST['username']);
$username = mysqli_real_escape_string($conn,$username);
$password = stripslashes($_POST['password']);
$password = mysqli_real_escape_string($conn,$password);
$query="SELECT 'username' AND 'password' FROM auth WHERE username='$username' AND password='$password'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1)
{
    session_start();
    $_SESSION['CDC']='true';
    header('location:admin.php');
}
else
{
    header('location:login.php');
}   
}
?>
