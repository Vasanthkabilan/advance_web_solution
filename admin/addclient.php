<?php
include("db.php");
include "sidenav.php";
if(isset($_POST['btn_save']))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];

mysqli_query($con,"insert into employee(firstname, lastname, email, password) values ('$firstname','$lastname','$email','$password')") 
			or die ("Query 1 is inncorrect........");
header("location: Client.php"); 
mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="./styless.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <style>
        .wrapper{
            width: 400px;
            margin: 0 auto;
        }

        .container{
          width: 800px;
          margin: 0 auto;
          margin-top: 30px;
        }

    </style>
</head>

<body>
      <div class="wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 ">
             <h2 class="mt-5">Add Employee</h2>
              <form action="" method="post" name="form" enctype="multipart/form-data">    
                      <div class="form-group">
                        <label>First name</label>
                        <input type="text" id="firstname" name="firstname" class="form-control" required>
                      </div>
                    
                      <div class="form-group">
                        <label>Last name</label>
                        <input type="text" name="lastname" id="lastname"  class="form-control" required>
                      </div>
                    
                      <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                      </div>

                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                      </div>

                      <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary">Add</button>
                      <a href="Client.php" class="btn btn-secondary ml-2">Cancel</a>
                      
              </form> 
            </div>
        </div>  
        </div>
      </div>
</body>
</html>