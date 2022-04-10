<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Resturant Website</title>
    <link rel="icon" href="images/dish5.jpg"/>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">

    <!-- Bootstrap CSS -->

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
             <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-2x"></span> Home</a></li>
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
         <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <i class="fas fa-thin fa-user-check fa-2x"></i> <?php echo $_SESSION['username']?></a>
      </li>
  </ul>
  </div>
      <li class="nav-item">
    
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>



  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Php Login System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
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

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav> -->

<header>
        <section id="home"     class="jumbotron">
         <div class="container">
             <div class="row row-header">
            
                 <div class="col-md-8 ml-md-5 text-md-left text-center content">
                    <h1>A K FOOD PLAZA</h1>
                    <h2>Welcome to A K Food Plaza</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta vel quisquam nostrum cum minima nobis consequatur alias eius omnis dolorem.</p>
                    <a href="#down"   data-toggle="tooltip" data-html="true"  title="Or Call us at +852 12345678"><button>Reserve Table</button></a>
                   
                </div>
                 <section id="home" class="container-fluid">

                    <div class="video-container">
                        <video src="images/vid1.mp4" autoplay loop muted class="vid vid1"></video>
  
                    </div>
             </div>
         </div>
         
     </header>
 </div>
    
 
                </div>
            </div>
        </div>
    </div>




    
    
 <!-- special card section starts  -->

<section id="special" class="container-fluid ">
            <div class="heading text-center">
    <h1>Our <span>Special</span></h1>
    <p>Discover out tasty menu </p>
        <p>Food tailored to meet your expactation.</p>
    </div>
    
    
    <div class="card-container">
    
        <div class="card">
            <img src="images/card1.jpg" alt="">
            <p>Chrispy Masala Dosa</p>
            <a href="#"><button>read more</button></a>
        </div>
    
        <div class="card">
            <img src="images/card2.jpg" alt="">
            <p>Samosa</p>
            <a href="#"><button>read more</button></a>
        </div>
    
        <div class="card">
            <img src="images/card3.jpg" alt="">
            <p>Veg Cheese Sandwich</p>
            <a href="#"><button>read more</button></a>
        </div>
    
    </div>
    </section>

<!-- dish section starts  -->

<section id="dish" class="container">

    <div class="heading text-center">
        <h1>our <span>dishes</span></h1>
    </div>

    <div class="box-container">

        <div class="box">
            <img src="images/dish1.jpg" alt="">
            <div class="info">
                <h3>Curry</h3>
                <p>Curry dish, sweet potato curry. sugar pea, paprika, zucchini, shrimps and rice</p>
                <a href="#"><button>view</button></a>
            </div>
        </div>

        <div class="box">
            <img src="images/dish2.jpg" alt="">
            <div class="info">
                <h3>Thali meal- Indian food </h3>
                <p>Round metal plate with a selection of Indian Dishes. Rajasthan, India</p>
                <a href="#"><button>view</button></a>
            </div>
        </div>

        <div class="box">
            <img src="images/dish3.jpg" alt="">
            <div class="info">
                <h3>Tandoori Paneer</h3>
                <p>Tandoori Paneer Salad with Corn Nachos Salsa </p>
                <a href="#"><button>view</button></a>
            </div>
        </div>
       
       
    </div>

</section>


<!-- about section starts  -->

    <section id="about" class="container">

        <div class="heading text-center">
        <h1><span>About</span> Us</h1>
        </div>
    
        <div class="row min-vh-100">
    
            <div class="col-md-6 text-center text-md-left align-self-center content">

                <p>We serve the most authentic, traditional Indian food, providing high standards in service and quality.</p>
                <p>Our sincere effort is to make your dining experience memorable by bringing to you centuries old Cuisine, and recipes from our mother’s kitchen.

                    As a part of the Main Street hub for the food enthusiast, our sole effort is to present you with fresh food, new savors and various robust flavors from turmeric, zeera (cumin), ginger, carom seeds and an array of unique spices which will be a treat to your palate.
                    
                    We specialize in Indian breads(Naan), meats grilled in tandoor, variety of curries,and biryani.
                    
                    We provide an excellent choice of various exotic vegetables, lentils, breads, aromatic rice, meat and much more.</p>
                <a href="aboutus.html"><button>learn more</button></a>
            </div>
            <div class="col-md-5 image">
                <img src="images/pic.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- about section ends  -->
    
    <!--table-->


    <div class="row row-content justify-content-center"  id="down">
        <form action=" insert.php" method="POST">


        <div class="col-md-12 ml-md-5 text-md-left text-center content">
          <h3 class="card-header text-white" style="background-color: rgb(233, 36, 233); font-size: 4rem;">Reserve a Table</h3>
          <div class="card-body">
            Name: <input type="text" id="uname"  name="name">
            Email: <input type="email" id="email"  name="email"><br><br>
              <label class="col-md-3 col-sm-7 " for="fname">Number of Guests</label>
              <input type="radio" id="guests" name="guests" value="1">
              <label id="guestradio" for="one">1</label>
              <input type="radio" id="guests" name="guests" value="2">
              <label id="guestradio" for="two">2</label>
              <input type="radio" id="guests" name="guests" value="3">
              <label id="guestradio" for="three">3</label>
              <input type="radio" id="guests" name="guests" value="4">
              <label id="guestradio" for="four">4</label>
              <input type="radio" id="guests" name="guests" value="5">
              <label id="guestradio" for="five">5</label>
              <input type="radio" id="guests" name="guests" value="6">
              <label id="guestradio" for="six">6+</label>
              <br>
              <br>
              <label class="col-md-2 col-8" for="DateTime">Date and Time</label>
              <input type="date"  id="date" name="date" >
              &nbsp;
              &nbsp;&nbsp;
              &nbsp;
              <input type="time"  id="time" name="Time" >
              <br><br>
              <div class="form-group mt-4">
                <div class="ml-1 ">
                    <div>
                        <a href="./index1.html">Cancel</a>
                    </div>
                    <div id="o">
                        <button type="submit" value="submit" name="submit" class="btn btn-primary" >Reserve</button>
                    </div>
                </div>

            </div>

            </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

        <!--Footer-->

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

     <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
     
     <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
     <script>
     
         
         $(document).ready(function()
     {
         $("input").focus(function()
         {
             $(this).css("background-color","rgb(134, 221, 234)");
         });
         $("input").blur(function()
         {
             $(this).css("background-color","rgb(136, 169, 226)");
         });
     });

    function validate()
    {
        var username=document.getElementById("uname");
        var email=document.getElementById("email");

        if(username.value =="" ||email.value=="" )
        {
            alert("Plese fill the blank");
            return false;
        }
        else{
            alert("Table reservation complected")
        }
    }



     </script>
 
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
