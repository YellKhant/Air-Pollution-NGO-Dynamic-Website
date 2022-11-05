<?php 

session_start();
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assignment/staff_register.php");

$connect=mysqli_connect('localhost','root','','pollutiondb');

if (isset($_POST['btnsave']))
{
	$ne=$_POST['txtname'];
	$email=$_POST['txtemail'];
	$pw=md5($_POST['txtpw']);
	$image=$_FILES['txtimg']['name'];
	$folder="Staffs_Image/";
	if ($image) 
	{
		$filename=$folder."_".$image;
		$copied=copy($_FILES['txtimg']['tmp_name'],$filename);
		if (!$copied) 
		{
			exit("Problem occured. Cannot Upload Event Image.");
		}
	}

$insert="INSERT INTO Staffs (`Staff_Name`,`Email`,`Password`,`Staff_Image`) values ('$ne','$email','$pw','$filename')";

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

<form action="staff_register.php" method="POST" enctype="multipart/form-data">
	
	Staff Name <br> <input name="txtname" type="text" required=""> <br>

	Staff Email <br> <input name="txtemail" type="email" required=""> <br>

	Staff Password <br> <input name="txtpw" type="password" required=""> <br>

	Staff Image <br> <input name="txtimg" type="file" required=""> <br>

	<input name="btnsave" type="submit" value="Sign Up">

</form>

<?php include "footer.php" ?>
