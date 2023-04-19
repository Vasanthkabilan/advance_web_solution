<?php
include("db.php");
include "sidenav.php";
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
            width: 1000px;
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

                <a href='addservices.php' type='button' name="btn_save" id="btn_save" class="btn btn-primary">Add New Service</a>

                <h2 class="mt-5">Manage Services</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Service Name</th>
      <th scope="col">Product Type</th>
      <th scope="col">Contents</th>
    </tr>
  </thead>
  <tbody>
    <tr>
                     <?php 
                        $result=mysqli_query($con,"select id, name, producttype, contents from services")or die ("query 2 incorrect.......");

                        while(list($user_id, $name, $producttype, $contents)=
                        mysqli_fetch_array($result))
                        {
                        echo"<tr><td>$name</td><td>$producttype</td><td>$contents</td>";

                        echo"<td>
                        <a href='editservices.php?user_id=$user_id' type='button' rel='tooltip' title='' class='btn btn-info btn-link btn-sm' data-original-title='Edit User'>
                                <span class='material-icons-sharp'>edit</span></a>
                        <a href='manageservices.php?user_id=$user_id&action=delete' type='button' rel='tooltip' title='' class='btn btn-danger btn-link btn-sm' data-original-title='Delete User'>
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