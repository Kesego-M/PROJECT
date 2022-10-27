<?php
@include 'config.php';

if(isset($_POST['submit'])){
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $password = mysqli_real_escape_string($conn, $_POST['password']);

     $select = "SELECT * FROM client WHERE email = '$email' && password = '$password' ";

     $result = mysqli_query($conn, $select);

     if(mysqli_num_rows($result) > 0){
        
          $row = mysqli_fetch_array($result);
          header('Location:dashboard.php');
     } else{
          $error[] = 'Error email or pass';
     }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign in</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous">  
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

<form action="signin.php" method="POST">  
     <h2>Sign in</h2>
     <?php
     if(isset($error)){
          foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
          }
     }

     ?>
          <div class="box">  
               <span><i class="fa fa-envelope"></i></span>  
               <input type="text" name="email" placeholder="Email" class="input-data" required>  
          </div>  
          <div class="box">  
               <span><i class="fa fa-lock"></i></span>  
               <input type="password" name="password" placeholder="Password" class="input-data" required>  
          </div> 
          <br></be><p>New member?
            <a href="signup.php">Sign up</a> <!--and <a href="#">Policy privacy</a>-->
          </p>
          <div class="space">  
               <input type="submit" name="submit" class="btn" value="Submit">  
          </div>  
     </form>  


</div>  
                                                          
</body>
</html>