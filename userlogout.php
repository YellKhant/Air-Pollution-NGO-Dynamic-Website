<?php 
session_start();
include('connect.php');
include('header.php');
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assignment/Q&A.php");

session_destroy();

echo "<script>alert('User logout Successful')</script>";
echo "<script>window.location = 'userlogin.php'</script>";
?>