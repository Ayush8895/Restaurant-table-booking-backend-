<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                            
                        }
                    }

                }

    }
}    


}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/1645deee2a.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">

    <title>PHP login system!</title>
  </head>
  <body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
 
            </button>
            <div class="collapse navbar-collapse" id="Navbar">
         
            <ul class="navbar-nav mr-auto">
            <i class="fas  fa-pizza-slice fa-5x"></i>
             <li class="nav-item active"><a class="nav-link" href="index2.php"><span class="fa fa-home fa-2x"></span> Home</a></li>
             <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span class="fa fa-info fa-2x"></span> About</a></li>
             <li class="nav-item"><a class="nav-link" href="./contactus.html"><span class="fa fa-address-card fa-2x"></span> Contact</a></li>
             <i class="fa-solid fa-fork-knife"></i>
            </ul>
            <div class="col-12 col-sm-12 align-self-center">
                <div class="text-center">
                  <a class="btn btn-social-icon btn-facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook fa-2x "></i></a>
                  <a class="btn btn-social-icon btn-instagram" href="http://instagram.com" target="_blank"><i class="fab fa-instagram fa-2x "></i></a>
                  <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
                  <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
                  <a class="btn btn-social-icon btn-google" href="http://youtube.com/" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
                  <a class="btn btn-social-icon btn-mail" href="mailto:"><i class="fa fa-envelope fa-2x" target="_blank"></i></a>
                </div>
            </div>
         </div>
</div>
   
<ul class="navbar-nav mr-auto">
 <li class="nav-item active"><a class="nav-link" href="register.php"><span class="fas fa-thin fa-id-card fa-2x "></span> Register</a></li>
 
  
    </ul>
  </div>
</nav>

<!-- 
  <nav class="navbar navbar-dark navbar-expand-sm fixed-top">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" >
  <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index2.php"><span class="fa fa-home fa-2x"></span>Home </a>
        <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span class="fa fa-info fa-2x"></span> About</a></li>
             <li class="nav-item"><a class="nav-link" href="./contactus.html"><span class="fa fa-address-card fa-2x"></span> Contact</a></li>
      </li>
     
   
      <div class="col-12 col-sm-12 align-self-center">
                <div class="text-center">
                  <a class="btn btn-social-icon btn-facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook fa-2x "></i></a>
                  <a class="btn btn-social-icon btn-instagram" href="http://instagram.com" target="_blank"><i class="fab fa-instagram fa-2x "></i></a>
                  <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
                  <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
                  <a class="btn btn-social-icon btn-google" href="http://youtube.com/" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
                  <a class="btn btn-social-icon btn-mail" href="mailto:"><i class="fa fa-envelope fa-2x" target="_blank"></i></a>
                </div>
            </div>
         </div>
     
 <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav> -->
<br>
<br>
<div class="container mt-4">
<h3>Please Login Here:</h3>
<hr>

<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>
<br>
<br>
<br>
<footer class="footer">
            <div class="container">
                <div class="row">             
                    <div class="col-4 offset-1 col-sm-2">
                        <h5>Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="'/aboutus.html">About</a></li>
                            <li><a href="#">Menu</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-7 col-sm-5">
                        <h5>Our Address</h5>
                        <address>
                          C/103 4B SK road<br>
                          New Delhi<br>
                          Tel.: +91 1234 5678<br>
                          Fax: +91 1223 94857<br>
                          Email: <a href="mailto:ayush_2001@outlook.com">AkFoodplaza@outlook.com</a>
                       </address>
                    </div>
                    <div class="col-12 col-sm-4 align-self-center">
                        <div class="text-center">
                            <a class="btn btn-social-icon btn-facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook fa-2x "></i></a>
                            <a class="btn btn-social-icon btn-instagram" href="http://instagram.com" target="_blank"><i class="fab fa-instagram fa-2x "></i></a>
                            <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
                            <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
                            <a class="btn btn-social-icon btn-google" href="http://youtube.com/" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
                            <a class="btn btn-social-icon btn-mail" href="mailto:"><i class="fa fa-envelope fa-2x" target="_blank"></i></a>
                        </div>
    
                    </div>
               </div>
               <div class ="row justify-content-center">             
                    <div class="col-auto">
                        <p>© Copyright 2021 Ayush Kumar</p>
                    </div>
               </div>
            </div>
        </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
