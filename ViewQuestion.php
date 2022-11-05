<?php 
session_start();
include('connect.php');
include('header.php');
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assignment/ViewQuestion.php");  
$Question="SELECT * from QandA";
$run=mysqli_query($connect,$Question);

 ?>

 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="" method="POST">
 <table width="100%" border="1"> 
 	<th>QuestionId</th>
 	<th>UserId</th>
 	<th>Question</th>
 	<th>QuestionDate</th>
 	<th>Answer</th>
 	<th>Action</th>
<?php 
$ret=mysqli_fetch_array($run);


echo "<tr>";
echo "<td>".$ret['Question_ID']."</td>";
echo "<td>".$ret['User_ID']."</td>";
echo "<td>".$ret['Question']."</td>";
echo "<td>".$ret['Question_Date']."</td>";
echo "<td>".$ret['Answer']."</td>";
echo "<td><a href='answer.php?QID=".$ret['Question_ID']."'>Answer</a></td>";
echo "</tr>";
 ?>
 
 </table>
 </form>
 </body>
 </html>
 <?php 
include('footer.php');
 ?>