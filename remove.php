<?php
include 'connection.php';
$id=$_GET['id'];

$q="DELETE FROM `mem` WHERE mem_id=$id";

mysqli_query($conn,$q);

header('location:members.php');
?>