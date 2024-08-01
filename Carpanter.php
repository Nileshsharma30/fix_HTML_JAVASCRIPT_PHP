<?php
session_start();

if (!isset($_SESSION['username'])) {
    $user = "";
} else {
    $user = $_SESSION['username'];
}



?>

<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="fix.css">
    <link rel="stylesheet" href="Register.php" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <title> Fix </title>
    <style>

      .navbar-brand{
        width: 150px;
        height: 80px;
      }
      .navbar-brand img{
        width: 100%;
        height: 100%;
    }
    </style>
</head>

<body style="
  background-color:   #ffffff;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="navbar-brand">
       <a class="" href="index.php">

          <img src="logo.jpeg" alt="">
        </a>
       </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" style="font-weight: 500;">HOME <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        SERVICES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="plumber.php">PLUMBER SERVICES</a>
                        <a class="dropdown-item" href="Electrician.php">ELECTRICIAN SERVICES</a>
                        <a class="dropdown-item" href="Carpanter.php">CARPANTER SERVICES</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Homeappliance.php">HOME APPLIANCE SERVICES</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT US</a>
                </li>

                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="Ratecard.php">RATE CARD</a>
                </li>
                <?php
                  if($user !=""){

              ?>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Welcome  <?php echo $user;  ?>   </a>
                </li>
                  
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li> 
            
              <?php
                }
              ?>


            </ul>
             <?php
                if($user == ""){
                
              ?>
                <form class="form-inline my-2 my-lg-0">
                <a class="nav-link" href="Register.php">Register</a>
                <a class="nav-link" href="login.php">Login</a>

            </form>
            <?php
                } else{

             ?>   
             
             
            
            <?php
            }
            ?> 
            
        </div>
    </nav>

    <div style="background-color:#282a36;color:#ffffff" class="jumbotron jumbotron-fluid">
        <div class="container">
            <h3 class="display-4" style=" font-size: 56px;">Get Instant Access Carpenters Near You</h3>
           
        </div>
    </div>

    <div class="row" style="
    margin-left: 10vw;
">
        <br>

        <h3 style="
        margin-bottom: 60px;
    ">Finish those small jobs that you have been waiting to do now. Use the fix app to book an Carpanter now or
            set an appointment for upto 48 hours.</h3>

        <div class="col-md-3">
            <img src="./html/Images/Carpenters/Doorknob.jpg" alt="Girl in a jacket" width="250" height="200">
            <h2>Fix a Doorknob</h2>
        </div>
        <div class="col-md-3">
            <img src="./html/Images/Carpenters/brokenfurniture.jpg" alt="Girl in a jacket" width="250" height="200">
            <h2>Fix a broken furniture</h2>

        </div>
        <div class="col-md-3 ">
            <img src="./html/Images/Carpenters/mountnewfurniture.jpg" alt="Girl in a jacket" width="250" height="200">
            <h2>Mount New Furniture</h2>

        </div>
        <div class="col-md-3">
            <img src="./html/Images/Carpenters/shelves.jpg" alt="Girl in a jacket" width="250" height="200">
            <h2>Get New Shelves in Your Bathroom</h2>
        </div>
    </div>
    <br><br><br>
    <div class="fusion-column-wrapper" style="padding: 0px 0px 0px 0px;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
        <div class="fusion-sep-clear"></div>
        <div class="fusion-separator fusion-full-width-sep sep-single" style="border-color:#e0dede;border-top-width:1px;margin-left: auto;margin-right: auto;"></div>
        <div class="fusion-text">
            <center>
                <?php

                if ($user != "") {

                ?>
                    <button class="btn btn-primary btn-lg"><a style=" color: white; " href="Booknow.php">Booknow</a></button>
                <?php
                } else {


                ?>

                    <h2>Log in to book</h2>

                <?php
                }
                ?>



                
            </center> <br>
            <h2 style="text-align: center;" data-fontsize="44" data-lineheight="46">Fix Benefits</h2>
            <h3 style="text-align: center;" data-fontsize="26" data-lineheight="29">Verified Service Professionals |
                Reliable Services | Affordable Services</h3>
        </div>
        <div class="fusion-clearfix"></div>

    </div>

    </div>
    <div style="margin-bottom:-100px;min-width:1500px;margin-left:-225px;background-color:#363839;color:#ffffff" class="jumbotron jumbotron-fluid">
        <div class="">
            <div class="row">
                <div class="col-sm-4">
                    <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMPANY INFO</h3>
                    <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fix Pvt. Ltd.,<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S.V.Road, Malad (West), Mumbai- 40097
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;team@Fix.in</br>
                </div>
                <div class="col-sm-4">
                    <h3 style="padding-left: 50px;">Our Services</h3>
                    <p class="px-5"><a href="Carpanter.php">CARPENTER SERVICES</a></p>
                    <p class="px-5"><a href="plumber.php">PLUMBER SERVICES</a></p>
                    <p class="px-5"><a href="Electrician.php">ELECTRICIAN SERVICES</a></p>
                    <p class="px-5"><a href="Homeappliance.php">HOME APPLIANCE SERVICES</a></p>

                </div>
                <div class="col-sm-4">
                    <h3>Contact Us</h3>
                    <p>Call at +91 9263717366</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>