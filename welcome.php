<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>studio</title>
  <!--le lien boostrap css -->



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
   <!--le lien  css et icons-->

	<link rel="stylesheet" type="text/css" href="web.css">
	<script src="https://kit.fontawesome.com/4567f7d4e5.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>



 <!--les liens java query -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="script.js"></script>


 



 

</head>
<body>
 






<nav class="navbar navbar-expand-lg " style="background-color: BLACK;">
 <a class="navbar-brand" href="#" >
    <img src="img/LOGO.PNG" width="110" height="40" alt="" style="margin-left: 10%;">
  </a>
  <button class="navbar-toggler navbar-dark " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon" ></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent" style="margin-left:30%;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color: darkred;text-transform: capitalize;letter-spacing: 2px;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"style="color: darkred;text-transform: capitalize;letter-spacing: 2px;">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color: darkred;text-transform: capitalize;letter-spacing: 2px;">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"style="color: darkred;text-transform: capitalize;letter-spacing: 2px;">Action</a>
          <a class="dropdown-item" href="#"style="color: darkred;text-transform: capitalize;letter-spacing: 2px;">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"style="color: darkred;text-transform: capitalize;letter-spacing: 2px;">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"style="color: darkred;text-transform: capitalize;letter-spacing: 2px;">Disabled</a>
      </li>
    </ul>



<div class="dropdown" style="margin-left:20%">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        

    <img
            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
            class="rounded-circle"
            height="25"
            alt="Black and White Portrait of a Man"
            loading="lazy"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          
            
          <li>
            <a class="dropdown-item" href="logout.php"style="color: darkred;text-transform: capitalize;letter-spacing: 2px;">Logout</a>
          </li>
        </ul>
    
  </div>
</nav>










































<div id="carousel1" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner"  style="height: 70vh;">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="img/tintin.jpeg" class="d-block w-100" alt="..." style="background-image:linear-gradient(rgba(0,0,0,0.60),rgba(0,0,0,0.60))">
      <
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/theexpenda.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block ">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/6.jpg" class="d-block w-100" alt="...">
      
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>





















<h1 style="color:white;">NEW RELEASES</h1>





<div class="container justify-content-center"></div>



<div id="carousel2" class="carousel carousel-dark slide " data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>


  <div class="carousel-inner justify-content-center" style="width: 60%;">
    <div class="carousel-item active" data-bs-interval="100000">
        <div class="row">

         <div class="col-lg-3" >
        <img src="img/film1.jpg" class="d-block w-100" alt="..." >
         </div>
         <div class="col-lg-3">
        <img src="img/film1.jpg" class="d-block w-100" alt="...">
         </div>
         <div class="col-lg-3">
        <img src="img/film1.jpg" class="d-block w-100" alt="...">
         </div>
         <div class="col-lg-3">
        <img src="img/film1.jpg" class="d-block w-100" alt="...">
         </div>
         
         






    </div>
</div>


    <div class="carousel-item" data-bs-interval="2000">
       <div class="row">

         <div class="col-lg-4">
        <img src="img/film5.jpg" class="d-block w-100" alt="...">
         </div>
         <div class="col-lg-4">
        <img src="img/film5.jpg" class="d-block w-100" alt="...">
         </div>
        


    </div>
      
    </div>


    <div class="carousel-item">
       <div class="row">

         <div class="col-lg-4">
        <img src="img/film5.jpg" class="d-block w-100" alt="..." >
         </div>
         <div class="col-lg-4">
        <img src="img/film5.jpg" class="d-block w-100" alt="..." >
         </div>
         


    </div>
  </div>





  <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>






































<h1 style="color:white;">NEW RELEASES</h1>











































<!--probleme de mauvaise lien de  script  -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<



 





</body>
</html>