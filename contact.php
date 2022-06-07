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

 



 

</head>
<body>
  <style type="text/css">
    body {
  background-color: black;
}
  </style>


  <nav class="navbar navbar-expand-lg fixed-top " style="background-color: black;">
  <div class="container-fluid">
    <img src="LOGO.PNG" width="150" height="50" class="d-inline-block align-top" alt="" style="margin-right:10%;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: red;letter-spacing: 5px;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php" style="color: red; letter-spacing: 5px;">contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pricing.php" style="color: red;letter-spacing: 5px;">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" style="color: red;letter-spacing: 5px;">Disabled</a>
        </li>
      </ul>


    </div>
    <div class="container" >
     <form class="d-flex " >
       

     <input class="form-control mr-sm-2 rounded-pill border-bottom-0 " type="search" placeholder="Search" aria-label="Search"  style="background-color:white;color: darkred;">



      <span class="input-group-text border-0 " id="search-addon" 
      style="margin-right: 20%;background: transparent;color: red;">
        <i class="fas fa-search fa-2x"></i>
      </span>
      
       

     
</nav>




<div class=" container text-center border border-danger" >

<section class="mb-4 "style="margin-top: 7%;" >

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4" style="color:white;">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5"style="color:white;">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <div class="col-md-9 mb-md-0 mb-5" style="margin-left:15%">




            <form name="contact-form" action="#"  style="margin-left: 20%;">

                <div class="row">

                                                <!--le formulaire email  -->
                   <div class="wrapper">

    

    
    <form action="#">
      <div class="dbl-field">
       

<div class="container">


 
  <div class="row">

    <div class="col" >
              <div class="field"style="margin-bottom: 5%; ">
          <input type="text" name="name" placeholder="Enter your name"style="width:90%;height: 50px;">
          <i class='fas fa-user' style="color:white;"></i>

        </div></div>

    <div class="col"><div class="field">
          <input type="text" name="email" placeholder="Enter your email"style="width:90%;height: 50px;">
          <i class='fas fa-envelope'style="color:white;"></i>
        </div>
      </div></div>
</div>

<div class="container">
  <div class="row">
   
    <div class="col" > 
        <div class="field">
          <input type="text" name="phone" placeholder="Enter your phone"style="width:90%;height: 50px;">
          <i class='fas fa-phone-alt'style="color:white;"></i>
        </div></div>

    <div class="col"><div class="field">
          <input type="text" name="website" placeholder="Enter your website"style="width:90%;height: 50px;">
          <i class='fas fa-globe'style="color:white;"></i>
        </div>
      </div></div>

</div>
  </div>
</div>










      <div class="message " >
        <textarea placeholder="Write your message" name="message"style="width:90%;height: 70px;margin-top: 4%;"></textarea>
        <i class="material-icons">message</i>
      </div>
      <div class="button-area " >
        <button type="submit" style="margin-top:5%;width: 10%; border-radius: 10%;color: white;background-color: red;">Send Message</button>
        <span></span>
      </div>
    </form>
  </div>





<div class="container  text-center" >
  <div class="row">
    <div class="col-sm">
      <li ><i class="fas fa-map-marker-alt fa-2x "style="color:white;margin-top: 35%;"></i>
                    <ps style="color:white;">San Francisco, CA 94126, USA</p>
                </li>
    </div>
    <div class="col-sm">
      <li><i class="fas fa-phone  fa-2x "style="color:white;margin-top: 30%;"></i>
                    <p style="color:white;">+ 01 234 567 89</p>
                </li>
    </div>
    <div class="col-sm">
      <li><i class="fas fa-envelope  fa-2x "style="color:white;margin-top: 30%;"></i>
                    <p style="color:white;"> contact@mdbootstrap.com</p>
                </li>
    </div>
  </div>
</div>


</div>














<!--probleme de mauvaise lien de  script  -->


 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>









</body>
</html>