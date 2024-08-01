<?php include './header.php' ?>
<?php  include './sidebar.php'?>
<?php include '../config/config.php' ?> 
        <div class="right-container">
            <div class="info-table-main">        
                <h3 class="table-header">Booking Table</h3>
                <table class="main-table table table-bordered"> 
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      
                      <th>Pincode</th>
                      <th>Region</th>
                      <th>Address</th>
                      <th>Services</th>
                      <th>Date</th>
                      <th>Status</th>
                      
                    </tr>
                    <?php
                    $query = "SELECT * from booknow ";
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
                            <?php echo $pincode; ?>
                        </td>
                        <td>
                            <?php echo $region; ?>
                        </td>
                        <td>
                            <?php echo $addr; ?>
                        </td>
                        <td>
                            <?php echo $services; ?>
                        </td>
                        <td>
                            <?php echo $date; ?> <?php echo $time; ?>
                        </td>
                        
                        <td>
                            <?php echo $status; ?>
                        </td>
                        
                        <!-- <td><button class="btn btn-danger" value="<?php echo $id; ?>">Delete</button></td>
                        <td><button class="btn btn-primary" value="<?php echo $id; ?>">Approve</button></td> -->
                       
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
        </div> <!-- Main container closing -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="js/all.js"></script>
<script src="js/main.js"></script>
</html>