<?php
  session_start();

  if(!isset($_SESSION['username'])){
    $user="";
  }
  else{
    $user = $_SESSION['username'];
  }

// test commit

?>


<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="fix.css">
    <link rel="stylesheet" href="Register.php" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <title> Fix </title>
<style>
    .row{
        padding-bottom: 100px;
        
    }
    .card{
        padding: 30px;
    }
    .card-title{
        
        color:#333645;
    }
    .navbar-brand{
        width: 150px;
        height: 80px;
      }
      .navbar-brand img{
        width: 100%;
        height: 100%;
    }
</style>
<link rel="stylesheet" id="font-awesome-css" href="https://jackworks.in/wp-content/plugins/tm-timeline/css/font-awesome.min.css?ver=4.6.3" type="text/css" media="all">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body style="background-color: #333645;">
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

    <div class="fusion-fullwidth fullwidth-box fusion-parallax-none nonhundred-percent-fullwidth non-hundred-percent-height-scrolling" style="background-color: #eeeeee;background-image: url(&quot;http://jackworks.in/wp-content/uploads/2018/02/contact.jpg&quot;);background-position: center center;background-repeat: no-repeat;padding-top:45px;padding-right:20px;padding-bottom:0px;padding-left:20px;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;">
      <div class="fusion-builder-row fusion-row "><div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_6  fusion-one-sixth fusion-column-first fusion-no-small-visibility 1_6" style="margin-top:15px;margin-bottom:15px;width:16.66%;width:calc(16.66% - ( ( 4% + 4% ) * 0.1666 ) );margin-right: 4%;">
        <div class="fusion-column-wrapper" style="padding: 0px 0px 0px 0px;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;padding-bottom: 35px;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
            <div class="fusion-clearfix"></div>

        </div>
    </div><div data-animationtype="zoomIn" data-animationduration="0.9" data-animationoffset="100%" class="fusion-layout-column fusion_builder_column fusion_builder_column_2_3  fusion-two-third fusion-animated 2_3" style="margin-top: 85px; margin-bottom: 60px; width: calc(61.3272%); margin-right: 4%; visibility: visible; animation-duration: 0.9s;">
        <div class="fusion-column-wrapper" style="padding: 0px 0px 0px 0px;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
            <div class="fusion-title title fusion-sep-none fusion-title-center fusion-title-size-one fusion-border-below-title" style="margin-top:15px;margin-bottom:15px;"><h1 class="title-heading-center" data-fontsize="68" data-lineheight="71" style=""><span style="color: #333645;position: relative;bottom: 100px;left:500px;">ABOUT US</span></h1></div><div class="fusion-sep-clear"></div><div class="fusion-separator sep-single" style="border-color:#e0dede;border-top-width:2px;margin-left: auto;margin-right: auto;margin-top:16px;margin-bottom:36px;width:100%;max-width:24%;"></div><div class="fusion-text"><p style="text-align: center;position: relative;bottom: 100px;left:200px;">Our goal is to help our customers get quick and on demand access&nbsp; to repair personnel. Why wait for a few days when you can fix it now!</p>
</div><div class="fusion-clearfix"></div>

        </div>
    </div><div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_6  fusion-one-sixth fusion-column-last fusion-no-small-visibility 1_6" style="margin-top:15px;margin-bottom:15px;width:16.66%;width:calc(16.66% - ( ( 4% + 4% ) * 0.1666 ) );">
        <div class="fusion-column-wrapper" style="padding: 0px 0px 0px 0px;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
            <div class="fusion-clearfix"></div>

        </div>
    </div><div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_1  fusion-one-full fusion-column-first fusion-column-last 1_1" style="margin-top:0px;margin-bottom:0px;">
        <div class="fusion-column-wrapper" style="padding: 0px 0px 0px 0px;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
            <div class="fusion-column-content-centered"><div class="fusion-column-content"></div></div><div class="fusion-clearfix"></div>

        </div>
    </div></div></div>

    <div class="row">

        <div class="col-md-3 card text-center" style="width: 18rem;">
            <div class="card-body">
                <div class="icon"><i style="background-color:transparent;border-color:transparent;height:auto;width: 32px;line-height:normal;color:#5f616f;font-size:32px;" class="fontawesome-icon fa-check fa circle-no"></i></div>
              <h5 class="card-title">Quality Guarantee</h5>
              <p class="card-text">All of our professionals are trained at leading technical institutes and evaluated by our internal experts before we enroll them.</p>
            </div>
          </div>

          <div class="col-md-3 card text-center" style="width: 18rem;">
            <div class="card-body">
                <div class="icon"><i style="border-color:rgba(255,170,6,0.1);border-width:0px;background-color:#333645;box-sizing:content-box;height:64px;width:64px;line-height:64px;border-radius:100%;color:#ffffff;font-size:32px;" class="fontawesome-icon fa-phone fa circle-yes"></i></div>
              <h5 class="card-title">Emergency Callouts</h5>
              <p class="card-text">Safe job execution is our priority. Our  professionals are trained for this. Yet, in case of emergency you can use the helpline icon on the app or call 9699678720</p>
            </div>
          </div>

          <div class="col-md-3 card text-center" style="width: 18rem;">
            <div class="card-body">
                <div class="icon"><i style="border-color:rgba(255,170,6,0.1);border-width:0px;background-color:#ffaa06;box-sizing:content-box;height:64px;width:64px;line-height:64px;border-radius:100%;color:#ffffff;font-size:32px;" class="fontawesome-icon fa-gem far circle-no"></i></div>


              <h5 class="card-title">5 Years Experience</h5>
              <p class="card-text">Our team is a great mix of both young and experienced professionals. We are a great combination of energy and wisdom.</p>
            </div>
          </div>

    </div>
    <div style="margin-bottom:-100px;min-width:1500px;margin-left:-225px;background-color:#363839;color:#ffffff" class="jumbotron jumbotron-fluid">
      <div class="">
        <div class="row">
          <div class="col-sm-4">
            <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMPANY INFO</h3>
            <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fix Pvt. Ltd.,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
              S.V.Road, Malad (West), Mumbai- 40097            
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;team@Fix.in</p>
              <!-- <p> Jackhathon Pvt. Ltd.,60, Dwarka Niketan, Gokhale Road North, Dadar, Mumbai 400097 team@jackworks.in  </p> -->
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