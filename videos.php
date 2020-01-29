<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

      <?php 
echo ' <a href=
"index1.php">page1</a>';

      ?>
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




</body>
</html>