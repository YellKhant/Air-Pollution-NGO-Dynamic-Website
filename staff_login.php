<?php 
session_start();
include('connect.php');
include "header.php";
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assignment/staff_login.php"); 

if (isset($_SESSION['loginCount']))
	{
	if($_SESSION ['loginCount'] >=3)
	{
		echo "<script> window.alert ('Please Try Again in 10 Minutes')</script>";
		echo "<script> window.location = 'LoginTimer.php'</script>";
	}
	}
	else if (!isset($_SESSION['loginCount']))
	{
	$_SESSION['loginCount']=0;
	}
if (isset($_POST['btnlogin'])) 
{
	$name=$_POST['txtname'];
	$password=md5($_POST['txtpassword']);

	$select="SELECT * FROM Staffs where Staff_Name='$name' AND Password='$password'";
	$run=mysqli_query($connect,$select);
	$count=mysqli_num_rows($run);

	if ($count==1) 
	{
		$ret=mysqli_fetch_array($run);

		$_SESSION['staffid']=$ret['Staff_ID'];
		$_SESSION['name']=$ret['Staff_Name'];
		$_SESSION['email']=$ret['Email'];

		echo "<script>alert('User Login Successful')</script>";
		unset($_SESSION['loginCount']);
		echo "<script>window.location='Home.php'</script>";
	}
	else
	{
		$_SESSION['loginCount']++;
 		echo "<script> window.alert ('Invalid! Login Attempt:".$_SESSION['loginCount']."')</script>";
 		echo" <script>alert ('Invalid User') </script>";
	}

}

 ?>

<html>
<head>
	<title></title>
</head>

<body>

<form action="" method="POST">

<table>

Staff Name <br>
<input type="text" name="txtname" required> <br>

Password <br>
<input type="password" name="txtpassword" required> <br> <br>

<input type="submit" name="btnlogin" value="Login">

</table>

</form>

</body>

</html>

<?php include "footer.php" ?>
