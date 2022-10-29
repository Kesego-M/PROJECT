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
                    <li><a href="contact.php">CONTACT US</a></li>
                    <li><a href="#bottom">ABOUT</a></li>
                    <li><a href="#">SIGN OUT</a></li>
                </ul>
            </div>
            </div>
            </header>
        </div>
</header>
<div class="main-body">
      <h2>Dashboard</h2>
      <div class="promo_card">
        <h1>Welcome username </h1>
        <span>Lorem ipsum dolor sit amet.</span>
        <button>Learn More</button>
</div>
<div class="history_lists">
        <div class="list1">
          <div class="row">
            <h4>Vehicles</h4>
            <a href="#">See all</a>
          </div>
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Make</th>
                <th>Type</th>
                <th>VIN</th>
                <th>Renewal</th>
              </tr>
            </thead>
            <tbody>
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
<div class="sidebar">
      <h4>Account Balance</h4>
      
      <div class="balance">
        <i class="fas fa-money icon"></i>
        <div class="info">
          <h5>Rands</h5>
          <span><i class="fas fa-dollar"></i>25,000.00</span>
          <br> <a href="#">Pay now</a>  </br>
        </div>
 </div>    
</body>
</html>