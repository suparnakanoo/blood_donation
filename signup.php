<?php

if(isset($_POST['name'])){ 
    
// to make connection with mysql database we have primarily two ways.
// 1. MySQLi extension
// 2. PHP data objects
// For beginners MySQLi is preffered . i in MySQL stands for improved.
// MySQLi is a improved version

$server="localhost";//the server  that we want to connect to
$username="root";//in case of localhost, username is always taken as root
$password="";//password is kept blank in case of local host
$database="blood_donation";

$con=mysqli_connect($server,$username,$password);//connecton variable

if(!$con){
    die("Connection to this database failed due to".mysqli_connect_error());
}

//Selecting database
$db_select=mysqli_select_db($con,$database);

// echo "Succesfully connected to the database";
//to insert values which are coming through post
//we will remove serial number as it is set to auto increment
$name=$_POST['name'];
$sid=$_POST['sid'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$bloodgroup=$_POST['bloodgroup'];
$gender=$_POST['gender'];
// $password=$_POST['password'];
// $cpassword=$_POST['cpassword'];

$duplicate=mysqli_query($con,"select * from `signup` where `Scholar Id`='$sid'");

if (mysqli_num_rows($duplicate)>0)
{
header("Location: signup_final.php?alert=Scholar Id already exists.&class=alert");
}else{ 
$sql="INSERT INTO `blood_donation`.`signup` ( `name`,`Scholar Id`, `email`, `phone`, `bloodgroup`, `gender`, `datetime`) VALUES ( '$name','$sid', '$email', '$phone', '$bloodgroup', '$gender', current_timestamp())";
}

//To insert into database
//-> is a object operator
//we will use query function to run it
if($con->query($sql)==true){
   header("Location: signup_final.php?msg=Thanks for signing up!&class=msg");
}else{
    echo "ERROR: $sql <br> $con->error";
}

//we are required to close the connection
$con->close();
}

?>