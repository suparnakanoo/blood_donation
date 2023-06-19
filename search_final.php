
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="search_style.css">
    <title>Document</title>
</head>
<body>
    <h1>
        Blood donation
    </h1>
    <nav class="navbar  sticky-top">
        <div class="row">
            <div ><a href="index_bd.html">Home</a></div>
            <div ><a href="search_final.php">Search</a></div>
            <div ><a href="signup_final.php">Sign up</a></div>
            
        </div>
    </nav>
    <img class="search_bg"src="search_bg.jpg" alt="Blood donation image">
    <div class="container">
        <form action="search_final.php"method="get">
            <span>
                <label for="bloodgroup" class="form-label">Blood group: </label>
                    <select class="form-select"name="bloodgroupToSearch" id="bloodgroup" aria-label="Default select example" required>
                        <option selected>--Select your blood group--</option>
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="O+">O+</option>
                        <option value="AB+">AB+</option>
                        <option value="A-">A-</option>
                        <option value="B-">B-</option>
                        <option value="O-">O-</option>
                        <option value="AB-">AB-</option>
                      </select>
            </span>
            <span class="btn">
                <button type="submit" class="btn btn-primary">Search</button>
            </span>
        </form>
    </div>
</body>
</html>
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
    
    $valueToSearch =$_GET['bloodgroupToSearch'];

    $result =mysqli_query($con,"SELECT*FROM `signup` WHERE `bloodgroup`='$valueToSearch'");

        if(mysqli_num_rows($result)>0){
            echo "<p class='confirmation'>These are the available donors.<p>";
            while($row=mysqli_fetch_array($result)){
                echo "<div class='result'>";
                echo "<h6>Name: " . $row["name"] . "</h6>";
                echo "<p>Scholar ID: " . $row["Scholar Id"] . "</p>";
                echo "<p>Email: " . $row["email"] . "</p>";
                echo "<p>Phone: " . $row["phone"] . "</p>";
                echo "<p>Blood Group: " . $row["bloodgroup"] . "</p>";
                echo "<p>Gender: " . $row["gender"] . "</p>";
                echo "</div>";
                
                }
        }
        else{
            echo "<p class='error'>No donors found.<p>";
        }
    }
?>