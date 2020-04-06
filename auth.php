<?php
include 'connection.php';
if($_POST)
{
$username=$_POST['username'];
$password=$_POST['password'];
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