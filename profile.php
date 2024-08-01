
<?php
  session_start();
  include('config.php');

  if(!isset($_SESSION['username'])){
    $user="";
  }
  else{
    $user = $_SESSION['username'];
    $user_id =  $_SESSION['user_id'];
    
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
    .info-table-main{
  width: 100%;
  height: auto;
  padding: 2%;
  margin-top: 2%;
  background-color: #FEFFFF ;
  /* border: 1px solid rgba(0, 0, 0, 0.2);
  box-shadow: 0 0 1px 0 rgba(0,0,0,0.3); */
}
.main-table{
  width: 100%;
  height: auto;
  padding: 2%;
}
tr:nth-child(even) {background-color: #f2f2f2;}
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
                    <a class="nav-link" href="#">Welcome  <?php echo $user;  ?>   </a>
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
          <h1 class="display-4">Your Bookings </h1>
         
      </div>
  </div> 
    
<div class="container" style="margin-bottom: 5%;">


<div class="row" style="margin:0;">

<div class="info-table-main">

    <table class="main-table" style="margin-bottom: 5%; color: #222222;"> 
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      
                      
                      <th>Region</th>
                      <th>Pincode</th>
                      <th>Address</th>
                      <th>Services</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th class="text-center">Status</th>
                      <th></th>
                    </tr>
                    <?php
                    $query = "SELECT * from booknow where user_id='$user_id'";
                    $result = mysqli_query($conn,$query);
                    $count = mysqli_num_rows($result);

                    if($count > 0){
                        while($count != 0 ){
                            $row = mysqli_fetch_assoc($result);
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $phone_number = $row['phone_number'];
                            $pincode = $row['pincode'];
                            $region = $row['region'];
                            $addr = $row['address'];
                            $services = $row['services'];
                            $status = $row['status'];
                            $date = $row['date'];
                            $time = $row['time'];
                            $status = $row['status'];
                                     
                    
                    ?>

                    <tr>
                    <td>
                            <?php echo $name; ?>
                        </td>
                        <td>
                            <?php echo $email; ?>
                        </td>
                        <td>
                            <?php echo $phone_number; ?>
                        </td>
                        <td>
                            <?php echo $region; ?>
                        </td>
                        <td>
                            <?php echo $pincode; ?>
                        </td>
                        <td>
                            <?php echo $addr; ?>
                        </td>
                        <td>
                            <?php echo $services; ?>
                        </td>
                        <td>
                            <?php echo $date; ?>
                        </td>
                        <td>
                            <?php echo $time; ?>
                        </td>
                        <td>
                            <?php echo $status; ?>
                        </td>

                        <td>

                        <?php
                            if($status != 'Cancelled'){
                        ?>

                            <form action="deleteBooking.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <button type="submit" class="btn btn-danger" >Cancel</button>
                            </form>

                        <?php        
                            }
                        ?>
                            
                        
                        
                        </td>
                       
                       
                    </tr>
                    <?php
                           $count--; }
                          
                        }
                        else{

                            echo "No records to show";
                        }
                    ?>
                  </table>
                  </div>
                </div>
     
            </div>
    
    <div class="row">
    <div style="margin-bottom:-100px;min-width:1500px;margin-left:-225px;background-color:#363839;color:#ffffff" class="jumbotron jumbotron-fluid">
      <div class="">
        <div class="row">
          <div class="col-sm-4">
            <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMPANY INFO</h3>
            <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fix Pvt. Ltd.,<br> 
              S.V.Road, Malad (West), Mumbai- 40097           
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;team@Fix.in</p>
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