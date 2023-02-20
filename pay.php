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
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<table>
<tr><td><input type="hidden" name="on0" value="Vehicle type">Select vehicle type below</td></tr><tr><td><select name="os0">
	<option value="Motorcyle">Motorcyle $25.00 USD</option>
	<option value="Motorcyle">Motorcyle $47.00 USD</option>
	<option value="Motorcyle">Motorcyle $118.00 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


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