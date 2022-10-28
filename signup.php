<?php

@include 'config.php';

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $idnum = $_POST['idnum']; 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    


    $query = "INSERT INTO client (fname, lname, address, contact, idnum, email, password) VALUES ('$fname', '$lname', '$address', '$contact', '$idnum', '$email', '$password')";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['status'] = "Success";
        header("Location: signin.php");
    } else {
        $_SESSION['status'] = "Not success";
        header("Location: signup.php");
    }
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
         <header>
            <div class="header-content">
            <div class="icon">
                <h2 class="logo">Licence_ease</h2>
            </div>
            <div class="slogan">
            <em>Why stand in a line when you can be online!</em></div> 

            <div class="menu"> <br>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="signin.php">SIGN IN</a></li>
                    <li><a href="product.php">PRODUCTS</a></li>
                    <li><a href="#">CONTACT US</a></li>
                    <li><a href="#bottom">ABOUT</a></li>
                </ul>
            </div>
            </div>
            </header>
        </div>
</header> 
<div class="container">  
     <h2>Sign Up</h2>  
     <form action="signup.php" method="POST">  
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
              <span><i class="fa fa-user"></i></span>  
              <input type="number" name="idnum" placeholder="Identity Number" class="input-data" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "13"  required>  
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
          <label for="cars">Choose a car Make:</label>
              <select name="cars" id="cars">
              <option value="" selected hidden>Select car make</option>
              <option value="Volvo">Volvo</option>
              <option value="BMW">BMW</option>
              <option value="Mercedes">Mercedes</option>
              <option value="Audi">Audi</option>
              <option value="Ford">Ford</option>
              <option value="Toyota">Toyota</option>
              <option value="Volkswagen">Volkswagen</option>
              </select>

              <label for="cartype">Choose a car type:</label>
              <select name="cartype" id="cartype">
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
<footer>
          <div class="footer-content">
            <h3>Licence_ease</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, molestias asperiores architecto quisquam magni voluptatem excepturi veritatis inventore corrupti, incidunt rerum adipisci numquam accusantium recusandae deserunt reprehenderit, ut nemo quam?</p>
            <ul class="socials">
              <li><a href="" class="fa fa-facebook"></a></li>
              <li><a href="" class="fa fa-instagram"></a></li>
              <li><a href="" class="fa fa-twitter"></a></li>
              <li><a href="" class="fa fa-youtube"></a></li>  
            </ul>
          </div>
        </footer>   
</body>  
</html>