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
 
a.sign:hover {
  background-color: salmon; color: white;
} 
/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 100;
  font-weight: normal;
  left: 0;
  background-color: gainsboro;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-weight: normal;
  font-size: 20px;
  color: black;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: white;
  background-color: salmon;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: cornflowerblue;
  color: lightblue;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: seashell;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}


}
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
    <form class="form-inline my-3 my-lg-1">
      <input class="form-control mr-lg-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-lg-1" type="submit">Search</button>
    </form>
<pre>         </pre>
<div> 

      <label for="cars">Search By:</label>
      <select id="searchby">
        <option value="name">Name</option>
        <option value="keyword">Keyword</option><pre>  </pre>
      </select>
      <label for="organize">Organize By: </label>
      <select id="organize">
        <option value="name">Name</option>
        <option value="type">Media Type</option>
        <option value="uploadtime">Uploading Time</option>
        <option value="filesize">File Size</option>
      </select>
    </div>




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
    <img class="card-img-top" src="images/avatar-img-male.jpg" alt="Card image" style="width:100%;float: right;">
    <div class="card-body">
      <h3 class="card-title">Reek Majumder</h3>
      <p class="card-text">Student at Clemson University</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  <br>
  <div class="row">
  	<div class="embed-responsive embed-responsive-1by1">
      <video width="120" height="140" controls>
  <source src="videos/1.mp4" type="video/mp4">
</video>
 
     <video width="120" height="140" controls>
  <source src="videos/2.mp4" type="video/mp4">
</video>
 
      <video width="120" height="140" controls>
  <source src="videos/3.mp4" type="video/mp4">
</video>
 
      <video width="120" height="140" controls>
  <source src="videos/4.mp4" type="video/mp4">
</video>
 


</div>
  </div>

</div>

</body>
</html>
