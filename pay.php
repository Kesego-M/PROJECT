<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign in</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous">  
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

<form action="/action_page.php" onsubmit="myFunction()">  
     <h2>Payment details</h2>

          <div class="box">  
               <span><i class="fa fa-id-card-o"></i></span>  
               <input type="number"  placeholder="Valid card Number" class="input-data" required>  
          </div>  
          <div class="box">  
               <span><i class="fa fa-calendar
               "></i></span>  
               <input type="date" class="input-data" required>  
          </div> 
          <div class="box">  
               <span><i class="fa fa-credit-card"></i></span>  
               <input type="number"  placeholder="Valid CVC number" class="input-data" required>  
          </div>
          <div class="box">  
               <span><i class="fa fa-user"></i></span>  
               <input type="text"  placeholder="Card owner" class="input-data" required>  
          </div>
          
          <div class="space">  
               <input type="submit" name="submit" class="btn" value="Submit">  
          </div>  
     </form> 
     <script>
function myFunction() {
  alert("Payment Successful: REF: INV50444");
}
</script> 


</div>  
<footer>
          <div class="footer-content">
            <h3>Licence_ease</h3>
            <p>As Licence-Ease we promise to save you time and money. We aim to provide a system that is always online. Our website can be accessed from anywhere, with any internet enabled device. We promise to make administration easy for you. We also offer licence disk holders at competitive prices. We are customer focused - Customer service is available at all times..</p>
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