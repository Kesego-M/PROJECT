<?php

@include 'config.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $regnum = $_POST['regnum'];
    $vinnum = $_POST['vinnum'];
    $make = $_POST['cars'];
    $type = $_POST['cartype'];

    $result = mysqli_query($conn, "SELECT client_id FROM client WHERE email = '$email'");

    $row = mysqli_fetch_array($result);
 
    $query = "INSERT INTO vehicle (registration, vin, make, type, client_client_id) VALUES ('$regnum', '$vinnum', '$make', '$type','$row[0]')";
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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <li><a href="contact.php">CONTACT US</a></li>
                    <li><a href="#bottom">ABOUT</a></li>
                </ul>
            </div>
            </div>
            </header>
        </div>
</header> 
<div class="container">  
     <h2>Add a new vehicle</h2>  
     <form action="vehicle.php" method="POST">  
     <div class="box">  
               <span><i class="fa fa-envelope"></i></span>  
               <input type="text" name="email" placeholder="Email" class="input-data" required>  
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
          <div class="space">  
               <input type="submit" name="submit" class="btn" value="Submit">  
          </div>  
     </form>  
</div>
<footer>
          <div class="footer-content">
            <h3>Licence_ease</h3>
            <p>As Licence-Ease we promise to save you time and money. We aim to provide a system that is always online. Our website can be accessed from anywhere, with any internet enabled device. We promise to make administration easy for you. We also offer licence disk holders at competitive prices. We are customer focused - Customer service is available at all times.</p>
            <ul class="socials">
              <li><a href="" class="fa fa-facebook"></a></li>
              <li><a href="" class="fa fa-instagram"></a></li>
              <li><a href="" class="fa fa-twitter"></a></li>
              <li><a href="" class="fa fa-youtube"></a></li>  
            </ul>
          </div>
        </footer> 
</div>  
</body>  
</html>