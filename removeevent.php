<?php
include 'connection.php';
$id=$_GET['id'];

$q="DELETE FROM `eventregistration` WHERE id=$id";

mysqli_query($conn,$q);

header('location:eventregistration.php');
?>