<?php
if(isset($_GET['bloodgroupToSearch'])){ 
$server="localhost";//the server  that we want to connect to
$username="root";//in case of localhost, username is always taken as root
$password="";//password is kept blank in case of local host
$database="blood_donation";

$con=mysqli_connect($server,$username,$password,$database);//connecton variable

if(!$con){
    die("Connection to this database failed due to".mysqli_connect_error());
}
// else{
//     header("Location: search_final.php?msg=These are the available donors.&class=msg");
// }

//Selecting database
// $db_select=mysqli_select_db($con,$database);

$valueToSearch =$_GET['bloodgroupToSearch'];

// $sql="SELECT*FROM `signup` WHERE `bloodgroup`='$valueToSearch'";

$result =mysqli_query($con,"SELECT*FROM `signup` WHERE `bloodgroup`='$valueToSearch'");

    if($result){
        while($row=mysqli_fetch_array($result)){
            //header("Location: search_final.php?msg=These are the available donors.&class=msg");
             echo $row["name"]."<br>";
             echo $row["Scholar Id"]."<br>";
             echo $row["email"]."<br>";
             echo $row["phone"]."<br>";
             echo $row["bloodgroup"]."<br>";
             echo $row["gender"]."<br>";
             echo "<br>";
            }
    }
    else{
        echo "No donors found.";
    }
}
?>
    