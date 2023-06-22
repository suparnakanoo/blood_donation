<?php include 'signup.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
    <title>Document</title>
</head>
<body>


    <h1>
        Blood donation
    </h1>
    <nav class="navbar  sticky-top">
        <div class="row">
            <div ><a href="index.html">Home</a></div>
            <div ><a href="search_final.php">Search</a></div>
            <div ><a href="signup_final.php">Sign up</a></div>
            
        </div>
    </nav>
    <img class="signup_bg"src="signup_bg.avif" alt="Blood donation image">
    <?php
    $alert = $_GET['alert'] ?? ''; // Retrieve the message from the query parameter, or use an empty string as the default value
    $alertClass=$_GET['class']??'';
    echo "<div class=\"$alertClass\">$alert</div>"; // Display the message
    ?>
    <?php
    $msg = $_GET['msg'] ?? ''; // Retrieve the message from the query parameter, or use an empty string as the default value
    $msgClass=$_GET['class']??'';
    echo "<div class=\"$msgClass\">$msg</div>"; // Display the message
    ?>

          <div class="container">
          <form action="signup.php" method="post">
            <div class="name">
                <label for="username" class="form-label">Full Name:</label>
                <input type="text"name="name" class="form-control" id="username"  required>
            </div>
            <div class="sid">
                <label for="sid" class="form-label">Scholar Id:</label>
                <input type="text"name="sid" class="form-control" id="sid"  required>
            </div>
            <div class="email">
              <label for="useremail" class="form-label">Email address</label>
              <input type="email"name="email" class="form-control" id="useremail" placeholder="eg: abc@gmail.com" required>
            </div>
            <div class="phone">
              <!-- <div class="input-group-prepend">
                <span class="input-group-text">Phone Number</span>
              </div> -->
              <label for="phonenumber" class="form-label">Contact number:</label>
              <input type="tel"name="phone" id="phonenumber" class="form-control" placeholder="Enter phone number" pattern="{10}" required>
          </div>
          <div>
                <label for="bloodgroup" class="form-label">Blood group: </label>
                    <select class="form-select"name="bloodgroup" id="bloodgroup" aria-label="Default select example" required>
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
                
          </div>
          <label for="gender">Gender:</label>
          <div class="form-check" id="gender" >
              <input class="form-check-input"value="Male"type="radio" name="gender" id="male">
              <label class="form-check-label" for="male">Male</label>
          </div>
          <div class="form-check">
              <input class="form-check-input"value="Female" type="radio" name="gender" id="female" >
              <label class="form-check-label" for="female">Female</label>
          </div>
           
            <!-- <div class="form-group">
                <label for="password">Password:</label>
                <input type="password"name="password" class="form-control" id="password" placeholder="Enter your password" required pattern=".{8,15}">
            </div> 
            <div class="form-group">
                <label for="confirmpassword">Confirm Password:</label>
                <input type="password" name="cpassword" class="form-control" id="confirmpassword" placeholder="Enter your password again" required>
            </div>  -->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="declaration">
                <label class="form-check-label" for="declaration" required>All the above informations furnished by me is true to best of my knowledge. Also I agree to display my details publicly whenever it's required. </label>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        
</body>
</html>
