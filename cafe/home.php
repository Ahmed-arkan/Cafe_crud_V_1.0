<?php
	ob_start();
	session_start();
require_once 'actions/db_connect.php';

	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}

	// select logged-in users detail
	$query = "SELECT * FROM users WHERE id=".$_SESSION['user'];
	$res = mysqli_query($conn, $query);
	$userRow = mysqli_fetch_assoc($res);
	$userID = $userRow['id'];
    $userD = $userRow['delete'];
    


?>

<!-- HTML================================= -->
<?php include('navbar.php'); ?>

<div class="manageUser">

     <h3> ALL Tabells </h3>

<table class="table" border="2 px">

        <thead class="thead-dark">

            <tr>

                <th>ID</th>

                <th>Size</th>

                <th>Status</th>

                <th>Option</th>

            </tr>

        </thead>

        <tbody>


            <?php

            $sql = "SELECT * FROM tabells ";

            $result = $conn->query($sql);

 

            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    if ($userD == 1) {
                   
                    echo "<tr>

                        <td>".$row['id']."

                        <td>".$row['size']."</td>

                        <td>".$row['active']."</td>

                        <td>

                            <a href='update.php?id=".$row['id']."'><button type='button' class='btn btn-info'>Edit</button></a>

                            <a href='delete.php?id=".$row['id']."'><button type='button' class='btn btn-danger'>Delete</button></a>

                        </td>

                    </tr>";

                }else{


                    echo "<tr>

                        <td>".$row['id']."

                        <td>".$row['size']."</td>

                        <td>".$row['active']."</td>

                        <td>
                 
                           

                        </td>

                    </tr>";

                   
            }
 
             }
         }else {

                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

            }

            ?>


        </tbody>

    </table>

</div>

<br><br>
<hr>

<div class="container">    
  <div class="row">
    <div class="col-sm-6">

        <div class="manageUser1">
                
                <h3> AVILABLE Tabells </h3>

                <table class="table" border="2 px">

                    <thead class="thead-dark">

                        <tr>

                            <th>ID</th>

                            <th>Size</th>

                             <th>Status</th>

                            <th>Option</th>

                        </tr>

                    </thead>

                    <tbody>


                        <?php

                        $sql = "SELECT * FROM tabells WHERE active = 'ACTIVE' AND reservation =0 ";

                        $result = $conn->query($sql);

             

                        if($result->num_rows > 0) {

                            while($row = $result->fetch_assoc()) {

                               if ($userD == 1) {
                   
                    echo "<tr>

                        <td>".$row['id']."

                        <td>".$row['size']."</td>

                        <td>".$row['active']."</td>

                        <td>

                            <a href='update.php?id=".$row['id']."'><button type='button' class='btn btn-info'>Edit</button></a>

                            <a href='delete.php?id=".$row['id']."'><button type='button' class='btn btn-danger'>Delete</button></a>

                            <a href='reservation.php?id=".$row['id']."'><button type='button' class='btn btn-info'>Reservation</button></a>


                        </td>

                    </tr>";

                }else{


                    echo "<tr>

                        <td>".$row['id']."

                        <td>".$row['size']."</td>

                        <td>".$row['active']."</td>

                        <td>
                 <a href='reservation.php?id=".$row['id']."'><button type='button' class='btn btn-info'>Reservation</button></a>
                           

                        </td>

                    </tr>";

                   
            }
 
             }
         }else {

                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

            }

            ?>


                    </tbody>

                </table>
            </div>
        </div>
  

 <div class="col-sm-6"> 
            <div class="manageUser2">
                
                <h3> UNAVILABLE Tabells </h3>

                <table class="table" border="2 px">

                    <thead class="thead-dark">

                        <tr>

                            <th>ID</th>

                            <th>Size</th>

                             <th>Status</th>

                            <th>Option</th>

                        </tr>

                    </thead>

                    <tbody>


                        <?php

                        $sql = "SELECT * FROM tabells WHERE reservation = 1";

                        $result = $conn->query($sql);

             

                        if($result->num_rows > 0) {

                            while($row = $result->fetch_assoc()) {
                    if ($userD == 1) {
                   
                    echo "<tr>

                        <td>".$row['id']."

                        <td>".$row['size']."</td>

                        <td>".$row['active']."</td>

                        <td>

                            <a href='update.php?id=".$row['id']."'><button type='button' class='btn btn-info'>Edit</button></a>

                            <a href='delete.php?id=".$row['id']."'><button type='button' class='btn btn-danger'>Delete</button></a>

                               <a href='reservation.php?id=".$row['id']."'><button type='button' class='btn btn-info'>Reservation</button></a>

                        </td>

                    </tr>";

                }else{


                    echo "<tr>

                        <td>".$row['id']."

                        <td>".$row['size']."</td>

                        <td>".$row['active']."</td>

                        <td>
  
                           

                        </td>

                    </tr>";

                   
            }
 
             }
         }else {

                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

            }

            ?>

                    </tbody>

                </table>
            </div>
  </div>

</div>
</div>
<!-- html/head/<body> -->

		

<!-- footer + </body-html> -->
<?php include('footer.php'); ?>

<?php ob_end_flush(); ?>