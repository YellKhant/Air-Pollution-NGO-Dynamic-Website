<?php 
$connect=mysqli_connect('localhost','root','','pollutiondb');
session_start();
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assignment/user_register.php");

if (isset($_POST['btnsave']))
{
	$fn=$_POST['txtfn'];
	$emaila=$_POST['txtea'];
	$dob=$_POST['txtdob'];
	$add=$_POST['txtadd'];
	$pos=$_POST['txtpos'];
	$ne=$_POST['txtname'];
	$pw=md5($_POST['txtpw']);

	$image=$_FILES['txtimg']['name'];
	$folder="Users_Image/";
	if ($image) 
	{
		$filename=$folder."_".$image;
		$copied=copy($_FILES['txtimg']['tmp_name'],$filename);
		if (!$copied) 
		{
			exit("Problem occured. Cannot Upload Event Image.");
		}
	}

$insert="INSERT INTO Users (`Full_Name`,`Email`,`Dob`,`Address`,`Postcode`,`User_Name`,`Password`,`User_Image`) values ('$fn','$emaila','$dob','$add','$pos','$ne','$pw','$filename')";

$run=mysqli_query($connect,$insert);

if ($run) 
{
	echo "<script>alert('Save');</script>";
}
else
{
	echo mysqli_error($connect);
}

}

 ?>

<?php include "header.php" ?>

<form action="#" method="POST" enctype="multipart/form-data">

	Full Name <br>
	<input name="txtfn" type="text" required=""> <br>

	E-Mail Address <br>
	<input name="txtea" type="email" required=""> <br>

	Date Of Birth <br>
	<input name="txtdob" type="date" placeholder="Year/Month/Day" required=""> <br>

	Address <br>
	<input name="txtadd" type="text" required=""> <br>

	Postcode <br>
	<input name="txtpos" type="text" required=""> <br>
 
	User Name <br>
	<input name="txtname" type="text" required=""> <br>

	Password <br>
	<input name="txtpw" type="password" required=""> <br>

	User Image <br>
	<input name="txtimg" type="file"> <br>

 	<input name="btnsave" type="submit" value="Sign Up">

</form>

<?php include "footer.php" ?>
