<?php 
session_start();
include ('connect.php');
include('header.php');
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assignment/Contact Us.php");
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
 ?>
<html>
<head>
	<title></title>
</head>
<body>
	<form action= "Q&A.php" method="post">
		<h2>Feel Free to Ask Questions!</h2>
		<table>
			<tr> 
				<td>Customer Name</td>
			<td>
				<input type="text" name="txtName" required="" value="<?php echo $_SESSION['name'] ?>" readonly>
			</td>
			</tr>
			<tr> 
				<td>Customer Email</td>
			<td>
				<input type="email" name="txtEmail" value="<?php echo $_SESSION['email'] ?>" readonly>
			</td>
			</tr>

			<tr>
				<td>Question Date</td>
				<td><input type="text" name="txtdate" value="<?php echo date("Y/m/d") ?>" readonly></td>
			</tr>
			</tr>
			<tr> 
				<td>Ask</td>
			<td>
				<textarea name="txtAsk" required=""></textarea>
			</td>
			</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="btnAsk" value="Submit Question">
			</td>
		</tr>
		</table>
	</form>
</body>
</html>

<?php 
include('footer.php');
 ?>