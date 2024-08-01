
<?php
  session_start();

  if(!isset($_SESSION['username'])){
    $user="";
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
input[type=text],input[type=email] ,input[type=number],input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
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


input[type="number"] {
  -moz-appearance: textfield;
}

.pass-icon{
    position: relative;
    top: 50%;
    left: -5%;
    margin-top: 5%;
    
  }
  /* .pass-icon i{
    position: absolute;
    top: 40%;
    left:50%;
  } */

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
.navbar-brand{
        width: 150px;
        height: 80px;
      }
      .navbar-brand img{
        width: 100%;
        height: 100%;
    }
    #pass-alert{
          display: none;
      }
      #pass-alert1{
          display: none;
      }
      #phone-alert{
          display: none;
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
                        <a class="dropdown-item" href="Homeappliance.html">HOME APPLIANCE SERVICES</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT US</a>
                </li>

                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="Ratecard.php">RATE CARD</a>
                </li>
            </ul>
           
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

<div class="container">
  <h3><b>Register</h3>

  <form action="register_action.php" method="post" id="form1">
    <div class="row">
			<div class="col-md-6">
				<label >Username</label>
				<input class="form-control"  placeholder="UserName" type="text" id="user" name="user" onblur="checkUsername()" required/>
        <div class="alert alert-danger" role="alert" id="name-alert" style="display: none">
            Username Exists!
        </div>
      </div>
		</div>

    <div class="row" >
			<div class="col-md-6">
				<label>Email</label>
				<input type="email"  placeholder="Email" class="form-control" id="email" name="email" onblur= "checkEmail()"required/>
        <div class="alert alert-danger" role="alert" id="email-alert" style="display: none">
        Email Exists!
        </div>
      </div>
		</div>

		<div class="row" >
			<div class="col-md-6">
				<label for="psw">Password</label>
        <div style="display: flex; flex-direction: row;">
          <input placeholder="Password" class="form-control" onkeyup="checkPass1()" type="password" id="pass" name="pass" required/>
          <div class="pass-icon" onclick="showPass()"><i id="passIcon" class='fas fa-eye'></i></div>
        </div>
			
        <div class="alert alert-danger" role="alert" id="pass-alert">
            
        </div>
      </div>
		</div>
		
			<div class="row" >
			<div class="col-md-6">
				<label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" onkeyup="checkPass2()" id="cf_pass" required/>
    <div class="alert alert-danger" role="alert" id="pass-alert1">
            
            </div>
  
  </div>
		</div>
		
		
		<div class="row" >
			<div class="col-md-6">
				<label for="Number"><b>Phone Number</b></label>
          <input type="number" placeholder="Enter Phone Number" name="Phone Number" id="phone" onkeyup="checkPhone()" required>
          <div class="alert alert-danger" role="alert" id="phone-alert">
            
            </div>
				</div>
		</div>

		<div class="row" ><br>
				<input type="button" class="btn btn-primary" value="Submit" id="btnSubmit"/>
				
		</div>	
            <input type="hidden" id="emailStat">
            <input type="hidden" id="nameStat">
  </form>

 


</div> 



</body>


<script src="https://kit.fontawesome.com/a165ea29e6.js" crossorigin="anonymous"></script>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script type="text/javascript">

        function checkPass1(){
            var regex = (/^(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+*!=]).*$/);
            var btnSubmit = document.getElementById('btnSubmit');
            if(!regex.test($("#pass").val())){
                btnSubmit.disabled = true;
                $("#pass-alert").html(' Password should contain at least 1 special character, 1 capital letter and min length is 8.');
                $("#pass-alert").css("display","block");
            }
            else{
             
                
                $("#pass-alert").css("display","none");
            }
        }


        function checkPass2(){
            var btnSubmit = document.getElementById('btnSubmit');
            var flag = true;
            if($("#pass").val() != $("#cf_pass").val()){
                btnSubmit.disabled = true;
                $("#pass-alert1").html("Passwords don't match.");
                $("#pass-alert1").css("display","block");
                flag = false;

            }
            else{
                btnSubmit.disabled = false;
                $("#pass-alert1").css("display","none");
            }
            return flag;
        }

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
        function showPass(){
        
        var pass = document.getElementById("pass");
        var icon = document.getElementById("passIcon");
  
        if(pass.type === "password"){
          pass.type="text";
          icon.classList.remove('fa-eye');
          icon.classList.add('fa-eye-slash');
        }
        else{
          pass.type="password";
          icon.classList.add('fa-eye');
          icon.classList.remove('fa-eye-slash');
  
        }
  
  
      }

      function checkEmail(){
       
        var email = $("#email").val();
        var btnSubmit = document.getElementById('btnSubmit');

        $.ajax({
          url: 'checkEmailAjax.php?',
          data: {mail: email},
          type: 'post',
          success: function(data){
            console.log(data);
            if(data == "false"){
              $("#email-alert").css("display","none");
              btnSubmit.disabled = false;
             $("#emailStat").val("0");
            }
            else{
              $("#email-alert").css("display","block");
              btnSubmit.disabled = true;
              
              $("#emailStat").val("1");
            }
            
          }

        })
      }

      function checkUsername(){

        var username = $("#user").val();
        var btnSubmit = document.getElementById('btnSubmit');
        $.ajax({
          url: 'checkUsernameAjax.php?',
          data: {user: username},
          type: 'post',
          success: function(data){
            
            console.log(data);

            if(data == "false"){
              $("#name-alert").css("display","none");
              btnSubmit.disabled = false;
              $("#nameStat").val("0");
            }
            else{
              $("#name-alert").css("display","block");
              btnSubmit.disabled = true;
              $("#nameStat").val("1");
            }
          },
          error: function(data){
            console.log(data);
          }

        })

      }


    $( "#btnSubmit" ).click(function( event ) {
      var username = $("#user").val();


      var checkMail = checkEmail();
      var checkUsername =  $.ajax({
          url: 'checkUsernameAjax.php?',
          data: {user: username},
          type: 'post',
          success: function(data){
            
            console.log(data);

            if(data == "false"){

              $("#name-alert").css("display","none");
             
              $("#nameStat").val("0");
            }
            else{

              $("#name-alert").css("display","block");
              
              $("#nameStat").val("1");
            }
          },
          error: function(data){
            console.log(data);
          }

        });
        console.log($("#nameStat").val());
        console.log($("#emailStat").val());

        if($("#emailStat").val() == "0" && $("#nameStat").val() == "0"){
          $("#form1").submit();
         
        }
        

    
    });



    </script>




</html>
