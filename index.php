



























<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>studio</title>
  <!--le lien boostrap css -->



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
   <!--le lien  css et icons-->

	<link rel="stylesheet" type="text/css" href="streaming.css">
	<script src="https://kit.fontawesome.com/4567f7d4e5.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
 <!--probleme de mauvaise lien de  script  -->


 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


 



 

</head>
<body >
	
 <style type="text/css">
    body {
  background: url(img/film.png);
}
  </style>





































<section class="h-100 gradient-form" style="background: transparent;margin-top:2%;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4" >

                <div class="text-center">
                  <img src="img/LOGO.PNG"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Bonjour et Bienvenue chez MIRISTREAMING</h4>
                </div>











<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("Location: welcome.php");
  } else {
    echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
  }
}

?>
















                

               <div class="container" >
    <form action="" method="POST" class="login-email">
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
      <div class="input-group">
        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
      </div>
      <div class="input-group">
        <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
      </div>
      <div class="input-group">
        <button name="submit" class="btn">Login</button>
      </div>
      <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
    </form>
  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    
                    
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2" style="background:linear-gradient(rgba(0,0,0,0.60),rgba(0,0,0,0.60)) , url(img/film.png);">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>








  













</body>
</html>