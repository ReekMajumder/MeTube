<?php
include_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to Metube</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<!-- Top name of site -->
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Welcome To MeTube</h1>
  <p>A new way to view and share your videos</p> 
</div>

<nav class="navbar navbar-expand-sm bg-light navbar-dark sticky-top">
  <a class="navbar-brand text-dark" href="#">
<img src="https://img.icons8.com/color/24/000000/youtube-play.png">
  MeTube</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class=" collapse navbar-collapse" id="collapsibleNavbar">
    <form class="form-inline my-3 my-lg-1">
      <input class="form-control mr-lg-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-lg-1" type="submit">Search</button> <pre> </pre>
    </form>
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
        <a class="nav-link text-dark sign" data-toggle="modal" href="#login" >Sign In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark sign" data-toggle="modal" href="#register">Sign Up</a>
      </li>
      
    </ul>
  </div>  
</nav>

<!--

VIDEOS DISPLAYED
-->

<h4> 

<div>
  <?php
    if(isset($_POST['register'])){
      echo 'User Submitted';
      $fname = $_POST['fname'];
      echo $fname;
    }
  ?>

</div>

<div class="container">
  
  <!-- The login Modal -->
  <div class="modal fade" id="login">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="/action_page.php" class="needs-validated">
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
            </div>
          <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" placeholder="Enter password" id="pwd" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember" required> I agree on the Terms and Conditions.
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Check this checkbox to continue.</div>
            </label>
          </div>
    

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="login">Login</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        

</form>
      </div>
    </div>
  </div>


  <!-- the register modal -->
  <div class="modal fade" id="register">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Register/ Sign Up</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h2>Welcome to MeTube</h2>
          <form action="Welcome.php" class="needs-validated" method="post">
          <div class="form-group">
            <label for="fname">FirstName</label>
            <input type="text" class="form-control" placeholder="Enter firstname" id="fname" name='fname' required>
            <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
            <label for="lname">LastName</label>
            <input type="text" class="form-control" placeholder="Enter lastName" id="lname" required>
            <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" placeholder="Enter email" id="email" required>
            <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
          </div>

          <div class="form-group">
            <label for="uname">Username</label>
            <input type="text" class="form-control" placeholder="Enter username" id="uname" required>
            <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
          </div>
         
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" id="pwd" required>
            <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
          </div>

          <div class="form-group">
            <label for="gender">Gender</label>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="gender" value="male" checked>Male
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="gender" value="female">Female
              </label>
            </div>
          </div>
          
          <!-- <div></div> -->

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="register">Submit</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </form>
        
      </div>
    </div>
  </div>
  

</div>  <!-- Container div -->

<!-- SIDEBAR FOR NAVIGATION-->

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
</style>
</head>
<body>

<div class="sidenav">
  <a href="#home">Home</a>
  <button class="dropdown-btn">Popular Media 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Videos</a>
    <a href="#">Audio</a>
    <a href="#">Images</a>
    <a href="#">Graphics</a>
  </div>
  <a href="#recentuploads">Recent Uploads</a>
  <a href="#recommended">Recommended</a>
  
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}

</script>


</body>
</html>