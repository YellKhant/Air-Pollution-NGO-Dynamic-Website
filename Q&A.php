<?php 
session_start();
include('connect.php');
include('header.php');
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assignment/Q&A.php");

if (isset($_REQUEST['btnAsk']))
{
	$name=$_REQUEST['txtName'];
	$email=$_REQUEST['txtEmail'];
	$Ask=$_REQUEST['txtAsk'];
	$Date=$_REQUEST['txtdate'];
	$id=$_SESSION['userid'];

}

if (isset($_POST['btnsubmit'])) 
{
	$CName=$_POST['txtCName'];
	$CEmail=$_POST['txtCEmail'];
	$CDate=$_POST['txtCDate'];
	$CAsk=$_POST['txtCAsk'];

	$insert= mysqli_query($connect,"INSERT INTO QandA (User_ID,Question,Question_Date) VALUES ('$CName','$CAsk','$CDate')");
	if($insert) 
	{
		echo "<script>window.alert('Question Submitted & Thz For the question!')</script>";
		echo "<script>window.location='Contact Us.php'</script>";
	}
}


$select= mysqli_query($connect,"SELECT * FROM QandA");
$count =mysqli_num_rows($select);

 ?>

 <form action="Q&A.php" method="post">
 	<input type="hidden" name="txtCName" value="<?php echo $id ?>"> 
 	<input type="hidden" name="txtCEmail" value="<?php echo $email ?>"> 
 	<input type="hidden" name="txtCDate" value="<?php echo $Date ?>"> 
 	<input type="hidden" name="txtCAsk"   value="<?php echo $Ask ?>"> 


 <?php 
for ($i=1; $i <=$count ; $i++) 
{ 
	$row=mysqli_fetch_array ($select);
	?>
	<h2>Frequently ask questions </h2>
	<div>
		<b>Question <?php echo $i ?>:</b>
		<?php echo $row ['Question'] ?>

	</div>
	<div>
		<b>Answer <?php echo $i ?>:</b>
		<?php echo $row ['Answer'] ?>
	</div>
	<?php
}

  ?>

  <?php 

if (isset($_REQUEST['txtAsk'])) 
{
	echo '<input type="submit" name="btnsubmit" value="Ask Anyway">';
}
else
{
	
}

?>

</form>
<?php 
include('footer.php');
 ?>