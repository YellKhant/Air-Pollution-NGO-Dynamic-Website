<?php 
session_start();
include('connect.php');
include('header.php');
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assignment/countrydetail.php");  
	
if (!isset($_SESSION['userid']))
	{
	echo "<script>alert('Please Login Account');</script>";
	echo "<script>window.location='userlogin.php';</script>";
	}

	if(isset($_REQUEST['CID']))
	{
		$CountryID=$_REQUEST['CID'];
		$Country="SELECT * FROM Countries WHERE Country_ID='$CountryID'";
		$result=mysqli_query($connect,$Country);
		$arr=mysqli_fetch_array($result);
	}
 ?>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="" method="POST">
 	<table>
 		<tr>
 			<td><img src="<?php echo $arr['Image_1']; ?>" width="200" height="200"></td>
 			<td><img src="<?php echo $arr['Image_2']; ?>" width="200" height="200"></td>
 			<td><img src="<?php echo $arr['Image_3']; ?>" width="200" height="200"></td>
 		</tr>
 				<table>
 					<tr>
 						<td width="120pt">Country Name:</td>
 						<td><?php echo $arr['Country_Name']; ?></td>
 					</tr>
					<tr>
 						<td width="120pt">Pollution Rate:</td>
 						<td><?php echo $arr['Pollution_Rate']; ?>%</td>
					</tr>	
					<tr>
 						<td width="120pt">Description:</td>
 						<td><?php echo $arr['Description']; ?></td>
					</tr>
					<tr>
 						<td width="120pt">Year:  </td>
 						<td><?php echo $arr['Year']; ?></td>
					</tr>			
					<tr>
						<td></td>
						<td><a href="Feedback.php">Feedback</a></td>
					</tr>	
 				</table>
 	</table>
 	</form>	
 </body>
 </html>
 <?php 
include('footer.php');
 ?>
