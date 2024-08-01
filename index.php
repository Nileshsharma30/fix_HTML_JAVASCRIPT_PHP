
<?php
  session_start();

  if(!isset($_SESSION['username'])){
    $user="";
  }
  else{
    $user = $_SESSION['username'];
  }



?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="fix.css">
    <link rel="stylesheet" href="Register.php"integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


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
  <body style="background-color:#282a36;color:#ffffff">
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <div class="navbar-brand">
       <a class="" href="index.php">

          <img src="logo.jpeg" alt="">
        </a>
       </div>
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" style="font-weight: 500;">HOME <span
                            class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
          <h1 class="display-4">Home Repair & Maintenance At Your Fingertip </h1>
          <br><br><br>
          <p class="lead">We guarantee you skilled professionals within minutes. All of our professionals are verified by our tecnical experts </p>
      </div>
  </div>
    
    <div class="row">

      <div class=".col-md-3 card text-white bg-primary mb-1" style="max-width: 18rem;">
        <div class="card-header">PLUMBER SERVICES</div>
        <div class="card-body" style="
        background-color: #282a36; ">
          <h5 class="card-title"></h5>
         <a href="plumber.php"> <img src="./html/Images/Plumberservice.jpg" alt="Girl in a jacket" width="250" height="200"></a>
          <p class="card-text"> Fix a leaky tap or pipe, unclog a washbasin, sink or toilet. Get your bathroom fittings done. Get a skilled plumber at your doorstep within minutes of your request. We’ve simplified the plumber service rate card. Plumbing services start at Rs 99/- for a 30 minute service.</p>
        </div>
      </div>

      <div class=".col-md-4 card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">ELECTRICIAN SERVICES</div>
        <div class="card-body" style="
        background-color: #282a36; ">
          <h5 class="card-title"></h5>
          <a href="Electrician.php"> <img src="https://hookagency.com/wp-content/uploads/2020/05/electrical-seo.jpeg" alt="Girl in a jacket" width="250" height="200"> </a>
          <p class="card-text"> Fix a switch, meter or fuse. Fix a fan or it’s regulator. Fit new lights. Install new or repair wirings. Get a skilled electrician at your doorstep within minutes of your request. We’ve simplified the electrician service rate card. electrician services start at Rs 99/- for a 30 minute service. </p>
        </div>
      </div>

      <div class=".col-md-4 card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">CARPANTER SERVICES</div>
        <div class="card-body"  style="
        background-color: #282a36; ">
          <h5 class="card-title"></h5>
          <a href="Carpanter.php"><img src= "https://blog.servicemarket.com/wp-content/uploads/2019/01/cost-hire-carpenter-dubai-745x400-1.jpg" alt="Girl in a jacket" width="250" height="200"> </a>
          <p class="card-text">Fit a new or fix a broken door stopper, handle, latch, door chain, hinge. Repair a broken furniture or mount new furniture. Get a skilled carpenter at your doorstep within minutes of your request. We’ve simplified the carpentry service rate card. Carpentry services start at Rs 99/- for a 30 minute service.
             </p>
        </div>
      </div>

      <div class=".col-md-4 card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Home Appliance Repair</div>
        <div class="card-body"  style="
        background-color: #282a36; ">
          <h5 class="card-title"></h5>
          <a href="Homeappliance.php"> <img src= "./html/Images/HomeApplianceRepair.jpg" alt="Girl in a jacket" width="250" height="200"> </a>
          <p class="card-text">Fix a kitchen mixer, a vacuum cleaner, exhaust fan, chimney, geyser, microwave, OTG and many more home appliances. Get a skilled technician at your doorstep within minutes of your request. We’ve simplified home appliance services rate card. Appliance repair starts at Rs 99/- for a 30 minute service</p>
        </div>
      </div>

      <div class=".col-md-4 card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">AIR CONDITIONER SERVICES</div>
        <div class="card-body"  style="
        background-color: #282a36; ">
          <h5 class="card-title"></h5>
          <a href="Homeappliance.php"> <img src= "./html/Images/AIRCONDITIONERSERVICES.jpg" alt="Girl in a jacket" width="250" height="200"> </a>
          <p class="card-text">Beat the summer heat. Install an air conditioner or remove it. Clean an air conditioner or repair it. Get a skilled AC service or AC repair technician at your doorstep within minutes of your request. We’ve simplified the AC services rate card. AC servicing starts at Rs 150/- for a 30 minute service. AC installation service rates shall be directly provided by the AC installation expert.</p>
        </div>
      </div>

      <div class=".col-md-4 card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Refrigerator SERVICES</div>
        <div class="card-body"  style="
        background-color: #282a36; ">
          <h5 class="card-title"></h5>
          <a href="Homeappliance.php"><img src= "./html/Images/RefrigeratorServiceman.jpg" alt="Girl in a jacket" width="250" height="200"> </a>
          <p class="card-text">Refrigerator not cooling well? Don’t let your fridge spoil your food. Fix it quickly. Get a skilled technician at your doorstep within minutes of your request.</p>
        </div>
      </div>
      
    <div style="margin-bottom:-100px;min-width:1500px;margin-left:-325px;background-color:#363839;color:#ffffff" class="jumbotron jumbotron-fluid">
      <div class="">
        <div class="row">
          <div class="col-sm-4">
            <h3>&nbsp;COMPANY INFO</h3>
            <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fix Pvt. Ltd.,<br> 
              S.V.Road, Malad (West), Mumbai- 40097           
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;team@Fix.in</p>
            
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