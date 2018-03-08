<!DOCTYPE html>
<html>
<head>
    <title></title>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>



<?php

 

require_once 'db_connect.php';

 

if($_POST) {


   $res = $_POST['reservation']; 

    $id = $_POST['id'];

 


    $sql = "UPDATE tabells SET reservation = '$res' WHERE id = {$id}";





    if($conn->query($sql) === TRUE) {

        ?>

        <body>

    <div class="card text-center">
        <div class="card-header">
                Succcessfully Updated
        </div>
    <div class="card-body">
    
    <a href="../index.php"><button type="button" class="btn btn-success">Home</button></a>
    <?php
    echo "<a href='../reservation.php?id=".$id."'><button type='button' class='btn btn-primary' >Back</button></a>";
    ?>

  </div>
  
</div>

<?php

    } else {

        echo "Erorr while updating record : ". $conn->error;

    }

 

    $conn->close();

 

}

 

?>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>