<?php
session_start();
include('connect.php');
include ('header.php');
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assignment/answer.php");  
if (isset($_REQUEST['QID']))
{
	$QID=$_REQUEST['QID'];
	$Select="SELECT * from WHERE Question_ID='$QID'";
	$run=mysqli_query($connect,$Select);
	$ret=mysqli_fetch_array($run);
	$answer=$ret['Answer'];
}
if (isset($_POST['btnsubmit']))
{
	$ans=$_POST['answer'];
	$id=$_POST['txtid'];
	$insert="UPDATE QandA
			 SET Answer='$ans'
			 Where Question_ID='$id'";
	$run1=mysqli_query($connect,$insert);
	if($run1)
	{
		echo "<script>alert('Answer Successful')</script>";
		echo "<script>location='ViewQuestion.php'</script>";
	}
}
 ?>

 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <form action="" method="POST">
 	<h2>Question back question</h2>
 	<input type="hidden" name="txtid" value="<?php echo $QID ?>">
 <label>Answer</label>
<textarea name="answer"><?php echo $answer ?></textarea>
 <br><input type="submit" name="btnsubmit" value="Submit">
 </body>
 </html>

 <?php 
include ('footer.php');
  ?>