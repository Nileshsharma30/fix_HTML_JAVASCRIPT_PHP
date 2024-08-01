<?php
  session_start();

  if(!isset($_SESSION['username'])){
    $user="";
    header("Location: login.php");
  }
  else{
    $user = $_SESSION['username'];
  }



?>


<!DOCTYPE html>
<html>
  <head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}



/* Full-width input fields */
input[type=text], input[type=password],  input[type=number], input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: rgb(221, 221, 221);
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
#phone-alert{
  display: none;
}
.navbar-brand{
        width: 150px;
        height: 80px;
      }
      .navbar-brand img{
        width: 100%;
        height: 100%;
    } 
/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

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
          <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
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
            <a class="dropdown-item" href="Homeappliance.php">Home Appliance SERVICES</a>
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

   
      </form> 
      </div>
  </nav>

<form action="Booking_page.php" method="POST" style="border:1px solid #ccc">
  <div class="container" style="
  max-width: 50vw;
  margin-left: 201px;
  padding: 16px;">

    <h1>Book Now</h1>
    
    <hr>

    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="Name" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder=" Enter Email" name="Email" required>

    <label for="email"><b>Phone Number</b></label>
      <input type="number" placeholder="Phone Number" name="Phone" id="phone" onkeyup="checkPhone()" required>
    <div class="alert alert-danger" role="alert" id="phone-alert">
            
    </div>
  
    <label for="email"><b>Pincode</b></label>
      <input type="number" placeholder="Enter pincode" name="pincode" id="pincode" onkeyup="checkPin()" required>

      <label for="Name"><b>Region</b></label>
        <input type="text" name="region" id="region" required readonly>
      
      <label for="Name"><b>Date</b></label>
        <input type="date" name="date" required  class="form-control">
      
      <label for="Name"><b>Time</b></label>
        <input type="time" class="form-control" name="time" required min="09:00" max="18:00" >
      
      <label for="Name"><b>Address</b></label>
        <textarea class="form-control" name="addr" id="addr" rows="6" placeholder="Address" required > </textarea>

    <label for="email"><b>Issue Box</b></label>
   

    <label class="container">
      
     
      <input class="form-check-input" type="checkbox" name="issuebox[]" value="plumber"> PLUMBER
    </label>
    
    <label class="container">
      
     
        <input class="form-check-input" type="checkbox" name="issuebox[]" value="electrician"> ELECTRICIAN
    </label>
    
    <label class="container">
     
     
       <input class="form-check-input" type="checkbox" name='issuebox[]' value="carpenter"> CARPANTER
    </label>
    
    <label class="container">
      
     
        <input class="form-check-input" type="checkbox" name="issuebox[]" value="air"> AIR CONDITIONER
    </label>
    
    <label class="container">
      
     
        <input class="form-check-input" type="checkbox" name="issuebox[]" value="refrigerator">REFRIGERATOR
    </label>

    <label class="container">
      
     
    <input class="form-check-input" type="checkbox" name="issuebox[]" value="washing" id="flexCheckDefault"> WASHING MACHINE
    </label>

    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="
    Message" name="msg" required></textarea>

    <div class="clearfix">
      
      <button type="submit" class="submitbtn" id="btnSubmit">submit</button>
    </div>
  </div>
</form>
<script type="text/javascript">

       

        function checkPhone(){
          var btnSubmit = document.getElementById('btnSubmit');

          if($("#phone").val().length != 10){
                btnSubmit.disabled = true;
                $("#phone-alert").html("Invalid phone number");
                $("#phone-alert").css("display","block");
                console.log("Inside if");

            }
            else{
                btnSubmit.disabled = false;
                $("#phone-alert").css("display","none");
            }

        }
   

    </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script type="text/javascript">

function checkPin(){

    var pincode = $("#pincode").val();

    if(pincode.length != 6){

      //error

    }
    else{

      $.ajax({
        url: 'pincodeAjax.php?pincode='+pincode,
        type: 'post',
        success: function(data){
          $('#region').val(data);
        },
        error: function(data){
          console.log(data);
        }

      })

      


    }



  }



</script>

</body>
</html>
