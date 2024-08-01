<body>
      <div class="navbar navbar-expand-sm navbar-custom">
       
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-2">
                   <h6 class="welcome">  Welcome <span><?php echo $_SESSION['adminDetail'];  ?></span></h6> 
                </li> 
                <li class="nav-item">
                   <a href="../module/logout.php">  Logout </a> 
                </li>
            </ul> 
     </div>
     <div class="main-panel-cont" id="beforeScroll">
        <div class="left-container" style="background-color: #282a36;">
            <ol class="left-item-cont text-center">
                 <li class="header-wrapper">  
                    <div class="logo-img-cont">
                        <!-- <img src="./img/logo.jpeg" alt=""> -->
                       <h3  style="color:#ffffff">Admin Panel</h3>
                    </div>
                    
                </li>
                <li class="hover-style">
                    <!-- <i class="fas fa-home icon"></i> -->
                    <div class="align-cont">
                        <a href="index.php" class="item-inner" style="color:#ffffff">Dashboard</a>
                    </div></li>
                
            </ol>
        </div>
   