<?php
include("db.php");
include "sidenav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employees</title>
    <link rel="stylesheet" href="./styless.css">
    <style>
        .wrapper{
            width: 800px;
            margin: 0 auto;
        }

    </style>
</head>

<body>
      <div class="wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 ">
              <form action="" method="post" name="form" enctype="multipart/form-data">

                <a href='addclient.php' type='button' name="btn_save" id="btn_save" class="btn btn-primary">Add New Employee</a>

                <h2 class="mt-5">Manage Employees</h2>
<table class="table table-bordered">
  <thead class= "thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
                      <?php 
                        $result=mysqli_query($con,"select id, firstname, lastname, email  from employee")or die ("query 2 incorrect.......");

                        while(list($user_id,$firstname,$lastname,$email)=
                        mysqli_fetch_array($result))
                        {
                        echo "<tr><td>$user_id</td><td>$firstname</td><td>$lastname</td><td>$email</td>";

                        echo"<td>
                        <a href='edituser.php?user_id=$user_id' type='button' rel='tooltip' title='' class='btn btn-info btn-link btn-sm' data-original-title='Edit User'>
                               <span class='material-icons-sharp'>edit</span></a>
                        <a href='manageuser.php?user_id=$user_id&action=delete' type='button' rel='tooltip' title='' class='btn btn-link btn-sm' data-original-title='Delete User'>
                                <span class='material-icons-sharp'>close</span></a>
                        </td></tr>";
                        }
                        mysqli_close($con);
                      ?>
    </tr>
  </tbody>
</table>    
              </form> 
            </div>
        </div>  
        </div>
      </div>
</body>
</html>

