<!DOCTYPE html>

<html>

<head>

    <title>PHP CRUD  |  Add User</title>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 

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



<form action="actions/a_create.php" method="post">


    <h2> - Add User - </h2>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="First Name" name="first_name" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Last Name" name="last_name">
    </div>
  </div>
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Data of birth</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputPassword3" placeholder="Data of birth" name="date_of_birth">
    </div>
  </div>

  <div class="center">
     <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="active">
        <option selected value="ACTIVE">ACTIVE</option>
        <option selected value="NOT ACTIVE">NOT ACTIVE</option>
        <option selected value="NONE">...</option>
      </select>

</div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Insert user</button>
    </div>
  </div>

  
</form>


</center>

 

 

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>