<?php 
session_start();
include('connect.php');
include "header.php";
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assignment/userupdate.php"); 
if (!isset($_SESSION['userid'])) 
	{
		echo "<script>alert('Please Login Account.');</script>";
		echo "<script>window.location='userlogin.php';</script>";
	}
if (isset($_SESSION['userid'])) 
{
	$userid=$_SESSION['userid'];
	$select="SELECT * from Users where User_ID='$userid'";
	$run=mysqli_query($connect,$select);
	$ret=mysqli_fetch_array($run);
	$fullname=$ret['Full_Name'];
	$email=$ret['Email'];
	$pass=$ret['Password'];
	$dob=$ret['Dob'];
	$address=$ret['Address'];
	$code=$ret['Postcode'];
}
if (isset($_POST['btnupdate'])) 
{
	$id=$_POST['txtid'];
	$name=$_POST['txtfullname'];
	$Email=$_POST['txtemail'];
	$Password=md5($_POST['txtpassword']);
	$DOB=$_POST['txtdob'];
	$Address=$_POST['txtaddress'];
	$Code=$_POST['txtcode'];

	$Update="UPDATE Users
			 Set Full_Name='$name',
			 Email='$Email',
			 Password='$Password',
			 Dob='$DOB',
			 Address='$Address',
			 Postcode='$Code'
			 where User_ID='$id'";

	$runupdate=mysqli_query($connect,$Update);

	if ($runupdate) 
	{
		echo "<script>alert('User Update Successful')</script>";
		echo "<script>window.location='userupdate.php'</script>";
	}
	else
	{
		echo "<script>alert('Invalid User')</script>";
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

 		<input type="hidden" name="txtid" value="<?php echo $userid ?>">

 		<tr><td>Full Name</td>
 		<td><input type="text" name="txtfullname" value="<?php echo $fullname ?>" required></td></tr>

 		<tr><td>Email</td>
 		<td><input type="email" name="txtemail" value="<?php echo $email ?>" required></td></tr>

 		<tr><td>password</td>
 		<td><input type="text" name="txtpassword" value="<?php echo $pass ?>" required></td></tr>

 		<tr><td>Date Of Birth</td>
 		<td><input type="date" name="txtdob" value="<?php echo $dob ?>" required></td></tr>

  		<tr><td>Postal Address</td>
 		<td><input type="text" name="txtaddress" value="<?php echo $address ?>" required></td></tr>

 		<tr><td>Post Code</td>
 		<td><input type="text" name="txtcode" value="<?php echo $code ?>" required></td></tr>

 		<tr>
 		<td><input type="submit" name="btnupdate" value="Update"></td>
 		<td><input type="reset" name="btnclear" value="Clear"></td></tr>

 		
 	</table>
 </form>
 </body>
 </html>

 <?php include "footer.php" ?>
