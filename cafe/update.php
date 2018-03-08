<?php

 

require_once 'actions/db_connect.php';

 

if($_GET['id']) {

    $id = $_GET['id'];

 

    $sql = "SELECT * FROM tabells WHERE id = {$id}";

    $result = $conn->query($sql);

 

    $data = $result->fetch_assoc();

 

    $conn->close();

 

?>

 

<!DOCTYPE html>

<html>

<head>

    <title>Edit User</title>

 

    <style type="text/css">

 
 body{

        text-align: center;
    }  

 form{

margin-top: 90px;
    width: 45%;
    border: 1px solid black;
    border-radius: 18px;
    padding: 15px;
 }

 .center{
    text-align: center;
    margin-bottom: 20px;
 }

    </style>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">| C R A D |</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
          <a href="index.php"><button type="button" class="btn btn-primary">Back</button></a>
      </li>
    
    </ul>
  </div>
</nav>
 
    <center class="contener">



<form action="actions/a_update.php" method="post">


    <h2> - Update tabel - </h2>

 
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Size</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPassword3" placeholder="Tabel Size" name="size" value="<?php echo $data['size'] ?>">
    </div>
  </div>

   <div class="center">
     <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="active" value="<?php echo $data['active'] ?>">

        
        <option selected value="ACTIVE">ACTIVE</option>
        <option selected value="NOT ACTIVE">NOT ACTIVE</option>
        <option selected value="NONE">...</option>
      </select>


  </div>

  <div class="form-group row">
    <div class="col-sm-10">

        <input type="hidden" name="id" value="<?php echo $data['id']?>" />

      <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>
  </div>

</form>


</center>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>

 

<?php

}

?>