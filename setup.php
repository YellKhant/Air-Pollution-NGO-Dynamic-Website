<?php

$connect=mysqli_connect('localhost','root','','pollutiondb');

$drop=mysqli_query($connect,"Drop table Feedbacks");
$drop=mysqli_query($connect,"Drop table Countries");
$drop=mysqli_query($connect,"Drop table Recorded_Histories");
$drop=mysqli_query($connect,"Drop table QandA");
$drop=mysqli_query($connect,"Drop table Users");
$drop=mysqli_query($connect,"Drop table Staffs");
// -------------------------------------------------------------------------------

$create=mysqli_query($connect,"	Create table Users
	 (
	User_ID int not null primary key Auto_Increment, 
	Full_Name varchar(30),
	Email varchar(30),
	Dob date,
	Address text,
	Postcode int,
	User_Name varchar(30),
	Password text,
	User_Image text
	 );
");

if($create) 
{
	echo "<p>Users table Created</p>";
}
else
{
	echo mysqli_error($connect);
}


$insert=mysqli_query($connect,"Insert into Users values (1,'Thura Min','asd@gmail.com','2020/2/20','Latha',22,'Thura','827ccb0eea8a706c4c34a16891f84e7b','Users_Image/aaa.jpg');
");
$insert=mysqli_query($connect,"Insert into Users values (2,'Thiha Linn','fgh@gmail.com','2020/2/20','Latha',22,'Linn','827ccb0eea8a706c4c34a16891f84e7b','Users_Image/bbb.jpg');
");
$insert=mysqli_query($connect,"Insert into Users values (3,'Thu Thu','jkl@gmail.com','2020/2/20','Latha',22,'Linn','827ccb0eea8a706c4c34a16891f84e7b','Users_Image/ccc.jpg');
");

$insert=mysqli_query($connect,"Insert into Users values (4,'Thura Linn Htet','123@gmail.com','2011/11/11','Insein',333,'Htet','827ccb0eea8a706c4c34a16891f84e7b','Users_Image/below(1).jpg');
");

if($insert) 
{
	echo "<p>Users table Inserted</p>";
}
else
{
	echo mysqli_error($connect);
}

// -------------------------------------------------------------------------------

$create=mysqli_query($connect,"	Create table Staffs
	 (
	Staff_ID int not null primary key Auto_Increment, 
	Staff_Name varchar(30),
	Email varchar(30),
	Password text,
	Staff_Image text
	 );
");

if($create) 
{
	echo "<p>Staffs table Created</p>";
}
else
{
	echo mysqli_error($connect);
}

$insert=mysqli_query($connect,"Insert into Staffs 
	values (1,'Itachi','itachi@gmail.com','827ccb0eea8a706c4c34a16891f84e7b','aaa.jpg');
");

$insert=mysqli_query($connect,"Insert into Staffs values(2,'Sasori','sasori@gmail.com','827ccb0eea8a706c4c34a16891f84e7b','bbb.jpg');");

$insert=mysqli_query($connect,"Insert into Staffs 
	values (3,'Deidara','deidara@gmail.com','827ccb0eea8a706c4c34a16891f84e7b','ccc.jpg');
");

if($insert) 
{
	echo "<p>Staffs table Inserted</p>";
}
else
{
	echo mysqli_error($connect);
}

// -------------------------------------------------------------------------------

$create=mysqli_query($connect,"	Create table QandA
	 (
	Question_ID int not null primary key Auto_Increment,
	Question text,
	Question_Date date,
	Answer text,
	User_ID int,
	Foreign key (User_ID) references Users(User_ID),
	Staff_ID int,
	Foreign key (Staff_ID) references Staffs(Staff_ID)
	 );
");


if($create) 
{
	echo "<p>QandA table Created</p>";
}
else
{
	echo mysqli_error($connect);
}

$insert=mysqli_query($connect,"Insert into QandA values (1,'How can we reduce air pollution?','2020/1/1','We can reduce air pollution by more reuse, reduce and recycle everything that we are using now',1,1)
");

$insert=mysqli_query($connect,"Insert into QandA values (2,'How air pollution can effect badly to us?','2020/1/2','It can effect global warming and respiratory diseases',2,2)
");

$insert=mysqli_query($connect,"Insert into QandA values (3,'What are the things we made to become pollution?','2020/1/3','Smokes and dusts from industries, car engines and mining can make air pollution',3,3)
");

if($insert) 
{
	echo "<p>QandA table Inserted</p>";
}
else
{
	echo mysqli_error($connect);
}

// -------------------------------------------------------------------------------

$create=mysqli_query($connect,"Create table Recorded_Histories
	 (
	History_ID int not null primary key Auto_Increment,
	History_Date date,
	User_ID int,
	Foreign key (User_ID) references Users(User_ID),
	Page_Name text
	 );");

if($create) 
{
	echo "<p>Records table Created</p>";
}
else
{
	echo mysqli_error($connect);
}

$insert=mysqli_query($connect,"Insert into Recorded_Histories values (1,'2020/1/7',1,'User Register')");
$insert=mysqli_query($connect,"Insert into Recorded_Histories values (2,'2020/1/8',1,'User Register')");
$insert=mysqli_query($connect,"Insert into Recorded_Histories values (3,'2020/1/9',1,'User Register')");

if($insert) 
{
	echo "<p>Records table Inserted</p>";
}
else
{
	echo mysqli_error($connect);
}

// -------------------------------------------------------------------------------

// -------------------------------------------------------------------------------

$create=mysqli_query($connect,"Create table Countries
	 (
	Country_ID int not null primary key Auto_Increment,
	Country_Name varchar(30),
	Pollution_Rate int,
	Year int,
	Description varchar(255),
	Image_1 varchar(255),
	Image_2 varchar(255),
	Image_3 varchar(255),
	Staff_ID int,
	Foreign key (Staff_ID) references Staffs(Staff_ID)
	 );");

if($create) 
{
	echo "<p>Countries table Created</p>";
}
else
{
	echo mysqli_error($connect);
}

$insert=mysqli_query($connect,"INSERT into Countries values (1,'Myanmar','90','2019','The air in Myanmar has been heavily polluted by the Yangon','Countries_Image/mm1.png','Countries_Image/mm2.jpg','Countries_Image/mm3.jpg',1)");
$insert=mysqli_query($connect,"INSERT into Countries values (2,'Thailand','88','2019','The air in Thailand has been heavily polluted by the Bangkok','Countries_Image/tl1.png','Countries_Image/tl2.jpg','Countries_Image/tl3.jpg',2)");
$insert=mysqli_query($connect,"INSERT into Countries values (3,'Japan','85','2019','The air in Japan has been heavily polluted by the Tokyo','Countries_Image/jp1.png','Countries_Image/jp2.jpg','Countries_Image/jp3.jpg',3)");

if($insert) 
{
	echo "<p>Countries table Inserted</p>";
}
else
{
	echo mysqli_error($connect);
}

// -------------------------------------------------------------------------------
$create=mysqli_query($connect,"Create table Feedbacks
	 (
	Feedback_ID int not null primary key Auto_Increment,
	User_ID int,
	foreign key (User_ID) references Users (User_ID),
	FeedbackDate date,
	Comment varchar(255)
	 );");

if($create) 
{
	echo "<p>Feedbacks table Created</p>";
}
else
{
	echo mysqli_error($connect);
}

$insert=mysqli_query($connect,"INSERT into Feedbacks values (1,1,'2020/3/25','I interest this website.')");

if($insert) 
{
	echo "<p>Feedbacks table Inserted</p>";
}
else
{
	echo mysqli_error($connect);
}

// -------------------------------------------------------------------------------

?>