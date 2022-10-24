<?php
if(isset($_POST['create'])){
    $fname - $_POST['fname'];
    $lname - $_POST['lname'];
    $email - $_POST['email'];
    $password - $_POST['password'];
    $address - $_POST['address'];
    $contact - $_POST['contact'];
    $regnum - $_POST['regnum'];
    $vinnum - $_POST['vinnum'];
    $firstname - $_POST['firstname'];
     $firstname - $_POST['firstname'];
}
?>


<!DOCTYPE html>  
<html>  
<head>  
     <meta charset="utf-8">  
     <title>signUp</title>  
     <meta name="viewport" content="width=device-width, initial-scale=1.0">  
     <!--Font Awesome CDN-->  
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous">  
     <!--Custome CSS Link-->  
     <link rel="stylesheet" type="text/css" href="css/style.css">  
</head>  
<body>
     <div class="main">
          <div class="navbar">
              <div class="icon">
                  <h2 class="logo">Licence_ease</h2>
              </div>
  
              <div class="menu"> 
                  <ul>
                      <li><a href="index.php">HOME</a></li>
                      <li><a href="signup.php">SIGN UP</a></li>
                      <li><a href="product.php">PRODUCTS</a></li>
                      <li><a href="#">CONTACT US</a></li>
                      <li><a href="#">ABOUT</a></li>
                  </ul>
              </div>
          </div>  
<div class="container">  
     <h2>Sign Up</h2>  
     <form>  
          <span class="required">*</span> Required field
          <div class="box">  
               <span><i class="fa fa-user"></i></span>  
               <input type="text" name="fname" placeholder="First Name" class="input-data" required>
               <span class="required">* </span>  
          </div>
          <div class="box">  
               <span><i class="fa fa-user"></i></span>  
               <input type="text" name="lname" placeholder="Last Name" class="input-data">  
          </div>  
          <div class="box">  
               <span><i class="fa fa-envelope"></i></span>  
               <input type="text" name="email" placeholder="Email" class="input-data" required>  
          </div>  
          <div class="box">  
               <span><i class="fa fa-lock"></i></span>  
               <input type="password" name="password" placeholder="Password" class="input-data" required>  
          </div>  
          <div class="box">  
               <span><i class="fa fa-lock"></i></span>  
               <input type="password" placeholder="Confirm Password" class="input-data" required>  
          </div>
          <div class="box">  
              <span><i class="fa fa-home"></i></span>  
              <input type="text" name="address" placeholder="Address" class="input-data" required>  
          </div>
          <div class="box">  
              <span><i class="fa fa-phone"></i></span>  
              <input type="number" name="contact" placeholder="Contact Number" class="input-data" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
              type = "number"
              maxlength = "10"  required>  
          </div>
          <div class="box">  
               <span><i class="fas fa-car"></i></span>  
               <input type="text" name="regnum" placeholder="Registration Number" class="input-data" maxlength="6" required>  
           </div> 
           <div class="box">  
               <span><i class="fas fa-car"></i></span>  
               <input type="text" name="vinnum" placeholder="Vehicle identification Number" class="input-data" maxlength="17" required>  
           </div> 
           <div>  
                <?php

                $con = mysqli_connect('localhost:3306', 'root', 'Resegofetse.24', 'mydb');

                if($con === false){
                    die("error" .mysqli_connect_error());

                }

                $sql = 'SELECT * FROM vehicle_make';
                if($result = mysqli_query($con, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                            echo $row ['vehicle_make'];
                        }
                    }

                }

                ?>

           </div>
              <label for="cars">Choose a car type:</label>
              <select name="cars" id="cars">
              <option value="" selected hidden>Select car type</option>
              <option value="Heavy Vehicle">Heavy Vehicle</option>
              <option value="Light Vehicle">Light Vehicle</option>
              <option value="Motorcycle">Motorcycle</option>
              </select><br>
          <br></be><p>Already a member?
            <a href="#">Login</a> <!--and <a href="#">Policy privacy</a>-->
          </p>
          <div class="space">  
               <input type="submit" name="submit" class="btn" value="Submit">  
          </div>  
     </form>  
</div>  
</body>  
</html>