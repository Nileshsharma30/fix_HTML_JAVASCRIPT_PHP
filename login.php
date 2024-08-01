<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text],input[type=email] ,input[type=number], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color:  #ff0000;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


/* Style all input fields */
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  width: 530px;
}

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}
#pass-alert{
    display: none;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "&#10004;";
}

/* Add a red text color and an "x" icon when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "&#10006;";
}

.navbar-brand{
        width: 150px;
        height: 80px;
      }
      .navbar-brand img{
        width: 100%;
        height: 100%;
    } 
    .pass-icon{
    position: relative;
    top: 50%;
    left: -5%;
    margin-top: 5%;
    
  }
  
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
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
          
        </div>
    </nav>
<div class="container">
<h2>Login Form</h2>

<form action="loginModule.php" method="POST">

			<div class="row">
				<div class="col-md-6">
				<label>Email</label>
				<input class="form-control" type="email" id="email" name="email" required/>
				</div>
			</div>
			<div class="row" >
			<div class="col-md-6">
				<label>Password</label>
		
      <div style="display: flex; flex-direction: row;">
        <input type="password" id="psw" name="pass" onkeyup="checkPass1()" required>   
        <div class="pass-icon" onclick="showPass()"><i id="passIcon" class='fas fa-eye'></i></div>
      </div>
        
        <div class="alert alert-danger" role="alert" id="pass-alert">
            
            </div>
				</div>
			</div>
			  <div class="row" ><br>
				&nbsp;&nbsp;&nbsp;<input type="submit" class="btn" id="btnSubmit" value="Login"/>
				
			  </div>	
			
			<div class="row" style="width:530px"><br>
				<a href="Register.php" class="btn">Go Back.</a>
				<a href="forgotPassword.php" class="btn">Forgot Password.</a>
      
		</div>

   


</form>
</div>




<script>
 function checkPass1(){
            var regex = (/^(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+*!=]).*$/);
            var btnSubmit = document.getElementById('btnSubmit');
            if(!regex.test($("#psw").val())){
                btnSubmit.disabled = true;
                $("#pass-alert").html(' Password should contain at least 1 special character, 1 capital letter and min length is 8.');
                $("#pass-alert").css("display","block");
            }
            else{
                
              btnSubmit.disabled = false;
                $("#pass-alert").css("display","none");
            }
    }
    function showPass(){
        
      var pass = document.getElementById("psw");
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




</script>






<div style="margin-bottom:-100px;min-width:1500px;margin-left:-225px;background-color:#363839;color:#ffffff" class="jumbotron jumbotron-fluid">
  <div class="">
    <div class="row">
      <div class="col-sm-4">
        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspCOMPANY INFO</h3>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fix Pvt. Ltd.,<br> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S.V.Road, Malad (West), Mumbai- 40097           
          team@Fix.in</p>
          
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
<script src="https://kit.fontawesome.com/a165ea29e6.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
