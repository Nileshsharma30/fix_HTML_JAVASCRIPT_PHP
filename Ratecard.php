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
	<title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
	
@media (min-width: 320px) and (max-width: 480px) {

body{
	font-family:helvetica;
	font-size: 20px;
	/*background-color: red;*/
}

#sk{
	width: 26.9318px;
	vertical-align: top;
		text-align: left;
}

img{
	margin-left: 158px;
}

.table1{height: 25px; width: 600px; padding-top:20px;}
.table1 tr{ height: 42.6023px;}
.table1-td1{width: 16px; height: 42.6023px;}
.table1-td1 span{color: #999999;}
.table1-td2{width: 50.699px; height: 42.6023px;}
.table1-td3{width: 58.301px; height: 42.6023px;}
.table1-td3 span{color: #999999;}

.table2{height: 150px; width: 400px;}
.table2 tr{text-align: center;}
.table2-td1{width: 80.841px;text-align: center;}
.table2-td1 p{text-align: left;}
.table2-td2{width: 250.75px;text-align: center;}
.table2-td3{width: 117.841px;}
.table2-td3 p{text-align: left;}
.table2-td4{width: 118.75px;}

.table3{height: 143px; width: 1000px;}
.table3-td2{width: 400.023px;float: left;}
.table3-td2 span{color: #999999;}

}

@media (min-width: 0px) and (max-width: 320px) {

	.table1{height: 25px; width: 600px; padding-top:20px;}
	.table1 tr{ height: 42.6023px;}
	.table1-td1{width: 16px; height: 42.6023px;}
	.table1-td1 span{color: #999999;}
	.table1-td2{width: 50.699px; height: 42.6023px;}
	.table1-td3{width: 190.301px; height: 42.6023px;}
	.table1-td3 span{color: #999999;}

	.table2{height: 150px; width: 250px;}
	.table2 tr{text-align: center;}
	.table2-td1{width: 80.841px;text-align: center;}
	.table2-td1 p{text-align: left;}
	.table2-td2{width: 250.75px;text-align: center;}
	.table2-td3{width: 117.841px;}
	.table2-td3 p{text-align: left;}
	.table2-td4{width: 118.75px;}

}

@media (min-width: 1240px){

	body{
		font-family:helvetica;
		font-size: 15px;
	}

	#sk{
		width: 26.9318px;
		vertical-align: top;
			text-align: left;
	}

	img{
		margin-left: 38%;
	}
	
	.ratecard{
	    margin-left:30%;
	}

	.table1{height: 25px; width: 300px; padding-top:20px;}
	.table1 tr{ height: 42.6023px;}
	.table1-td1{width: 16px; height: 42.6023px;}
	.table1-td1 span{color: #999999;}
	.table1-td2{width: 125.699px; height: 42.6023px;}
	.table1-td3{width: 158.301px; height: 42.6023px;}
	.table1-td3 span{color: #999999;}

	.table2{height: 150px; width: 500px;}
	.table2 tr{text-align: center;}
	.table2-td1{width: 80.841px;text-align: center;}
	.table2-td1 p{text-align: left;}
	.table2-td2{width: 250.75px;text-align: center;}
	.table2-td3{width: 117.841px;}
	.table2-td3 p{text-align: left;}
	.table2-td4{width: 118.75px;}

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


<body style="background-color: #E0E0E0;">

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


<div class='ratecard'>
    



<table class='table1' cellspacing="0" cellpadding="0">
	<tbody>
		<tr>
			<td class="table1-td1">
				<h1><span>&bull;</span></h1>
			</td>
			<td class="table1-td2">
				<h5><strong>RATE CARD</strong></h5>
			</td>
			<td class="table1-td3">
				<p><span><strong>(Plumber)</strong></span></p>
			</td>
		</tr>
	</tbody>
</table>


<table class='table2' border="1" cellspacing="0">
	<tbody>
		<tr>
			<td class="table2-td1">
				<p><strong>&nbsp; &nbsp;30 mins</strong></p>
			</td>
			<td class="table2-td2">
				<p><strong>100 INR</strong></p>
			</td>
		</tr>
		<tr>
			<td class="table2-td3">
				<p><strong>&nbsp; &nbsp;1 hours</strong></p>
			</td>
			<td class="table2-td4">
				<p><strong>200 INR</strong></p>
			</td>
		</tr>
		<tr>
			<td class="table2-td3">
				<p><strong>&nbsp; &nbsp;1.5 hours</strong></p>
			</td>
			<td class="table2-td4">
				<p><strong>300 INR</strong></p>
			</td>
		</tr>
		<tr>
			<td class="table2-td3">
				<p><strong>&nbsp; &nbsp;2 hours</strong></p>
			</td>
			<td class="table2-td4">
				<p><strong>400 INR</strong></p>
			</td>
		</tr>
	</tbody>
</table>

	

<p><strong>NOTE:</strong></p>

<table class="table3" cellspacing="0">
	<tbody>
		<tr>
			<td id="sk" ><strong>1.</strong></td>
			<td class="table3-td2"><span>INR 100 Visiting fee is applicable if services is not availed.</span></td>
		</tr>
		<tr>
			<td id="sk"><strong>2.</strong></td>
			<td class="table3-td2"><span>Cost of material or spares as per actual [Please request invoice from service provider].</span></td>
		</tr>
		<tr>
			<td id="sk"><strong>3.</strong></td>
			<td class="table3-td2"><span>Additional Cost : INR 50 (convenience fee for material).</span></td>
		</tr>
	</tbody>
</table>
<br><br>

<table class='table1' cellspacing="0" cellpadding="0">
	<tbody>
		<tr>
			<td class="table1-td1">
				<h2><span>&bull;</span></h2>
			</td>
			<td class="table1-td2">
				<h5><strong>RATE CARD</strong></h5>
			</td>
			<td class="table1-td3">
				<p><span><strong>(Electrician)</strong></span></p>
			</td>
		</tr>
	</tbody>
</table>


<table class='table2' border="1" cellspacing="0">
	<tbody>
		<tr>
			<td class="table2-td1">
				<p><strong>&nbsp; &nbsp;30 mins</strong></p>
			</td>
			<td class="table2-td2">
				<p><strong>100 INR</strong></p>
			</td>
		</tr>
		<tr>
			<td class="table2-td3">
				<p><strong>&nbsp; &nbsp;1 hours</strong></p>
			</td>
			<td class="table2-td4">
				<p><strong>200 INR</strong></p>
			</td>
		</tr>
		<tr>
			<td class="table2-td3">
				<p><strong>&nbsp; &nbsp;1.5 hours</strong></p>
			</td>
			<td class="table2-td4">
				<p><strong>300 INR</strong></p>
			</td>
		</tr>
		<tr>
			<td class="table2-td3">
				<p><strong>&nbsp; &nbsp;2 hours</strong></p>
			</td>
			<td class="table2-td4">
				<p><strong>400 INR</strong></p>
			</td>
		</tr>
	</tbody>
</table>

	

<p><strong>NOTE:</strong></p>

<table class="table3" cellspacing="0">
	<tbody>
		<tr>
			<td id="sk" ><strong>1.</strong></td>
			<td class="table3-td2"><span>INR 100 Visiting fee is applicable if services is not availed.</span></td>
		</tr>
		<tr>
			<td id="sk"><strong>2.</strong></td>
			<td class="table3-td2"><span>Cost of material or spares as per actual [Please request invoice from service provider].</span></td>
		</tr>
		<tr>
			<td id="sk"><strong>3.</strong></td>
			<td class="table3-td2"><span>Additional Cost : INR 50 (convenience fee for material).</span></td>
		</tr>
	</tbody>
</table>
<br><br>

<table class='table1' cellspacing="0" cellpadding="0">
	<tbody>
		<tr>
			<td class="table1-td1">
				<h2><span>&bull;</span></h2>
			</td>
			<td class="table1-td2">
				<h5><strong>RATE CARD</strong></h5>
			</td>
			<td class="table1-td3">
				<p><span><strong>(Carpanter)</strong></span></p>
			</td>
		</tr>
	</tbody>
</table>


<table class='table2' border="1" cellspacing="0">
	<tbody>
		<tr>
			<td class="table2-td1">
				<p><strong>&nbsp; &nbsp;30 mins</strong></p>
			</td>
			<td class="table2-td2">
				<p><strong>100 INR</strong></p>
			</td>
		</tr>
		<tr>
			<td class="table2-td3">
				<p><strong>&nbsp; &nbsp;1 hours</strong></p>
			</td>
			<td class="table2-td4">
				<p><strong>200 INR</strong></p>
			</td>
		</tr>
		<tr>
			<td class="table2-td3">
				<p><strong>&nbsp; &nbsp;1.5 hours</strong></p>
			</td>
			<td class="table2-td4">
				<p><strong>300 INR</strong></p>
			</td>
		</tr>
		<tr>
			<td class="table2-td3">
				<p><strong>&nbsp; &nbsp;2 hours</strong></p>
			</td>
			<td class="table2-td4">
				<p><strong>400 INR</strong></p>
			</td>
		</tr>
	</tbody>
</table>

	

<p><strong>NOTE:</strong></p>

<table class="table3" cellspacing="0">
	<tbody>
		<tr>
			<td id="sk" ><strong>1.</strong></td>
			<td class="table3-td2"><span>INR 100 Visiting fee is applicable if services is not availed.</span></td>
		</tr>
		<tr>
			<td id="sk"><strong>2.</strong></td>
			<td class="table3-td2"><span>Cost of material or spares as per actual [Please request invoice from service provider].</span></td>
		</tr>
		<tr>
			<td id="sk"><strong>3.</strong></td>
			<td class="table3-td2"><span>Additional Cost : INR 50 (convenience fee for material).</span></td>
		</tr>
	</tbody>
</table>

<br>
<tr>
<table class='table1' cellspacing="0" cellpadding="0">
	<tbody>
		<tr>
			<td class="table1-td1">
				<h1><span>&bull;</span></h1>
			</td>
			<td class="table1-td2">
				<h5><strong>RATE CARD</strong></h5>
			</td>
			<td class="table1-td3">
				<p><span><strong>(AC Mechanic)</strong></span></p>
			</td>
		</tr>
	</tbody>
</table>
</tr>

<div>
	<table class="table2" border="1" cellspacing="0">
	<tbody>
		<tr>
			<td class="table2-td1">
				<p><strong>Window AC Dry Service</strong></p>
			</td>
			<td class="table2-td2">
				<p><strong>299 INR</strong></p>
			</td>
		</tr>
		<tr>
			<td class="table2-td3">
				<p><strong>Window AC Washing Service</strong></p>
			</td>
			<td class="table2-td4">
				<p><strong>599 INR</strong></p>
			</td>
		</tr>
		<tr>
			<td class="table2-td3">
				<p><strong>Split AC Dry Service</strong></p>
			</td>
			<td class="table2-td4">
				<p><strong>399 INR</strong></p>
			</td>
		</tr>
		<tr>
			<td class="table2-td3">
				<p><strong>Split AC Washing Jet Service</strong></p>
			</td>
			<td class="table2-td4">
				<p><strong>750 INR</strong></p>
			</td>
		</tr>
		<tr>
			<td class="table2-td3">
				<p><strong>Split AC Break Down Service</strong></p>
			</td>
			<td class="table2-td4">
				<p><strong>1299 INR</strong></p>
			</td>
		</tr>
		<tr>
			<td class="table2-td3">
				<p><strong>Window AC Installation</strong></p>
			</td>
			<td class="table2-td4">
				<p><strong>399 INR</strong></p>
			</td>
		</tr>
		<tr>
			<td class="table2-td3">
				<p><strong>Window AC Uninstallation</strong></p>
			</td>
			<td class="table2-td4">
				<p><strong>299 INR</strong></p>
			</td>
		</tr>
		<tr>
			<td class="table2-td3">
				<p><strong>Split AC Installation</strong></p>
			</td>
			<td class="table2-td4">
				<p><strong>1399 INR</strong></p>
			</td>
		</tr>
		<tr>
			<td class="table2-td3">
				<p><strong>Split AC Uninstallation</strong></p>
			</td>
			<td class="table2-td4">
				<p><strong>499 INR</strong></p>
			</td>
		</tr>
	</tbody>
</table>
</div>

<p><strong>NOTE:</strong></p>

<table class="table3" cellspacing="0">
	<tbody>
		<tr>
			<td id="sk" ><strong>1.</strong></td>
			<td class="table3-td2"><span>INR 150 Visiting fee is applicable if services is not availed.</span></td>
		</tr>
		<tr>
			<td id="sk"><strong>2.</strong></td>
			<td class="table3-td2"><span>Cost of material or spares as per actual [Please request invoice from service provider].</span></td>
		</tr>
		<tr>
			<td id="sk"><strong>3.</strong></td>
			<td class="table3-td2"><span>Additional Cost : INR 50 (convenience fee for material).</span></td>
		</tr>
	</tbody>
</table>


<br><br>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>