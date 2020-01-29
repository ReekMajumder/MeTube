<!DOCTYPE html>
<html lang="en">
<head>
  <title> Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
 

<nav class="navbar navbar-expand-sm bg-light navbar-dark sticky-top">
  <a class="navbar-brand text-dark" href="#">
<img src="https://img.icons8.com/color/24/000000/youtube-play.png" style="width=90%">
  MeTube</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class=" collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
    	<li class="nav-item">
        <a class="nav-link text-dark" data-toggle="modal" href="#">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" data-toggle="modal" href="videos.php">Videos</a>
      </li>
    	<li class="nav-item">
        <a class="nav-link text-dark" data-toggle="modal" href="#">Contact List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" data-toggle="modal" href="#"  >Sign out</a>
      </li>
      
      
    </ul>
  </div>  
</nav>




<div class="container">
  
  <h2>Hi Reek</h2>
    <div class="card" style="width:200px">
    <img class="card-img-top" src="images/avatar-img-male.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h3 class="card-title">Reek Majumder</h3>
      <p class="card-text">Student at Clemson University</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  <br>
  <div class="row">
  	<div class="embed-responsive embed-responsive-1by1">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
</div>
  </div>

</div>

</body>
</html>
