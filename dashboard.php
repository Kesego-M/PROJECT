<?php

@include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User dashboard</title>
  <link rel="stylesheet" type="text/css" href="css/dashboard.css">
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
                    <li><a href="#">CONTACT US</a></li>
                    <li><a href="#bottom">ABOUT</a></li>
                </ul>
            </div>
            </div>
            </header>
        </div>
</header>
<div class="main-body">
      <div class="promo_card">
        <h1>User Dashboard </h1>
        <span>Account balance: R99</span>
        <button class="pay"><a href="pay.php">Pay now</Join></a></button>
</div>
<div class="history_lists">
        <div class="list1">
          <div class="row">
            <h4>Vehicles</h4>
            <a href="#">See all</a>
          </div>
          <table class="vtable">
            <thead>
              <tr>
                <th>#</th>
                <th>REG#</th>
                <th>VIN#</th>
                <th>MAKE</th>
                <th>MODEL</th>
              </tr>
            </thead>
            <tbody>
            <?php
              if($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
              }

              $sql = "SELECT * from vehicle";
              $result = $conn->query($sql);

              if(!$result){
                die("Invalid query: " . $conn->connect_error);
              }

              while($row = $result->fetch_assoc()){
                echo "<tr>
                <td>" .$row['vehicle_id'] . "</td>
                <td>" .$row['registration'] . "</td>
                <td>" .$row['vin'] . "</td>
                <td>" .$row['make'] . "</td>
                <td>" .$row['type'] . "</td>
                </tr>                
                
                ";
              }

              ?>
            </tbody>
          </table>
        </div>
<div class="list2">
          <div class="row">
            <h4>Documents</h4>
            <a href="#" class="fa fa-upload">Upload</a>
          </div>
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Type</th>
                <th>Uplaoded</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
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
</body>
</html>