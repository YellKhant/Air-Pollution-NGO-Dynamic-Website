<?php 
session_start();
	include ('connect.php');
	include('header.php');
	include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assignment/CountryRegister.php");  
 ?> 

<?php 

$connect=mysqli_connect('localhost','root','','pollutiondb');

if (isset($_POST['btnsave']))
{
	$N=$_POST['name'];
	$R=$_POST['rate'];
	$Y=$_POST['year'];
	$D=$_POST['desc'];
	
//----------------------------------------

	$image1=$_FILES['img1']['name'];
	$folder1="Countries_Image/";
	if ($image1) 
	{
		$filename1=$folder1."_".$image1;
		$copied1=copy($_FILES['img1']['tmp_name'],$filename1);
		if(!$copied1)
		{
			exit("Problem Occured.Cannot uplode image");
		}
	}

//----------------------------------------
	
	$image2=$_FILES['img2']['name'];
	$folder2="Countries_Image/";
	if ($image2) 
	{
		$filename2=$folder2."_".$image2;
		$copied2=copy($_FILES['img2']['tmp_name'],$filename2);
		if(!$copied2)
		{
			exit("Problem Occured.Cannot uplode image");
		}
	}

//----------------------------------------
	$image3=$_FILES['img3']['name'];
	$folder3="Countries_Image/";
	if ($image3) 
	{
		$filename3=$folder3."_".$image3;
		$copied3=copy($_FILES['img3']['tmp_name'],$filename3);
		if(!$copied3)
		{
			exit("Problem Occured.Cannot uplode image");
		}
	}

//----------------------------------------

	$create="INSERT INTO `Countries`(`Country_Name`, `Pollution_Rate`, `Year`, `Description`, `Image_1`, `Image_2`, `Image_3`) VALUES
	('$N','$R','$Y','$D','$filename1','$filename2','$filename3')";
			
	$run=mysqli_query($connect,$create);

	if ($run)
    {
		echo "<script>altert('Save');</script>"; //Javascript cmd//
	}
	else
	{
		echo mysqli_error($connect);
	}

}
 ?>

<form action='CountryRegister.php' method='POST' enctype="multipart/form-data">
	
Country Name <br>
<input name="name" type="text" required><br> 
Pollution Rate <br>
<input name="rate" type="text" required><br>
Year <br>
<input name="year" type="text" required><br>
Description <br>
<input name="desc" type="text" required><br>
Image 1 <br>
<input name="img1" type="file" required><br>
Image 2 <br>
<input name="img2" type="file" required><br>
Image 3 <br>
<input name="img3" type="file" required><br>

<input name="btnsave" type="submit" value="Save">

</form>

 <?php 
    include'footer.php';
 ?>