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


  <nav class="navbar navbar-expand-lg fixed-top " style="background:url(https://media.giphy.com/media/FpmyVd5td9Vio/giphy.gif); ">
  <div class="container-fluid">
    <img src="img/LOGO.PNG" width="150" height="50" class="d-inline-block align-top" alt="" style="margin-right:10%;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="welcome.php" style="color: red;letter-spacing: 5px;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php" style="color: red; letter-spacing: 5px;">contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pricing.php" style="color: red;letter-spacing: 5px;">Pricing</a>
        </li>
        


    </div>
    <div class="container" >
     <form class="d-flex " >
       

     <input class="form-control mr-sm-2 rounded-pill border-bottom-0 " type="search" placeholder="Search" aria-label="Search"  style="background-color:white;color: darkred;">



      <span class="input-group-text border-0 " id="search-addon" 
      style="margin-right: 20%;background: transparent;color: red;">
        <i class="fas fa-search fa-2x"></i>
      </span>
      
       

       <!-- dropdorn boostrap avec profil parametre logout -->
      <div class="dropdown" style="margin-right:10%">
        <a
          class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

          <img
            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
            class="rounded-circle"
            height="25"
            alt="Black and White Portrait of a Man"
            loading="lazy"

          />
        </a>
        <ul
          class="dropdown-menu "aria-labelledby="dropdownMenuButton"
         style="background-color: black;">
          
          <li>
            <a class="dropdown-item" href="logout.php" style="color: red;">logout</a>
          </li>
         
        </ul>
      </div>
    </div>

  </div>
</nav>
</nav>















<div class="container" style="margin-top: 8%;">
  <div class="row">
    <div class="col-sm">
      <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;"> <iframe style="width:100%;height:100%;position:absolute;left:0px;top:0px;overflow:hidden" frameborder="0" type="text/html" src="https://www.dailymotion.com/embed/video/x6dp6j4" width="100%" height="100%" allowfullscreen > </iframe> </div>
    </div>
    <div class="col-sm">
     <section style="background:url(https://media.giphy.com/media/f4IjBQupqojhqQzKk2/giphy.gif); ">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10 col-xl-8">
        <div class="card" style="background-color:black;">
          <div class="card-body">
            <div class="d-flex flex-start align-items-center">
              <img class="rounded-circle shadow-1-strong me-3"
                src="IMG_4411.jpeg" alt="avatar" width="60"
                height="60" />
              <div>
                <h6 class="fw-bold text-primary mb-1">Mohammed Miri</h6>
                <p class="text-muted small mb-0">
                  Shared publicly - Jan 2020
                </p>
              </div>
            </div>

            <p class="mt-3 mb-4 pb-2" style="color:white;">
              bonjour jaime bien le film franchement il est magnifique donc
               je tiens a vous dire de continuez de partager 
              avec nous ,la meilleur plateforme je vous aime bien 
              
            </p>

            <div class="small d-flex justify-content-start">
              <a href="#!" class="d-flex align-items-center me-3">
                <i class="far fa-thumbs-up me-2"></i>
                <p class="mb-0">Like</p>
              </a>
              <a href="#!" class="d-flex align-items-center me-3">
                <i class="far fa-comment-dots me-2"></i>
                <p class="mb-0">Comment</p>
              </a>
              <a href="#!" class="d-flex align-items-center me-3">
                <i class="fas fa-share me-2"></i>
                <p class="mb-0">Share</p>
              </a>
            </div>
          </div>
          <div class="card-footer py-3 border-0" style="background-color: black;">
            <div class="d-flex flex-start w-100">
              <img class="rounded-circle shadow-1-strong me-3"
                src="IMG_4411.jpeg" alt="avatar" width="40"
                height="40" />
              <div class="form-outline w-100">
                <textarea class="form-control" id="textAreaExample" rows="4"
                  style="background: #fff;"></textarea>
                <label class="form-label" for="textAreaExample">Message</label>
              </div>
            </div>
            <div class="float-end mt-2 pt-1">
              <button type="button" class="btn btn-primary btn-sm">Post comment</button>
              <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>
  </div>
</div>











































<!--probleme de mauvaise lien de  script  -->


 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



 





</body>
</html>