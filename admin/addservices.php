<?php
include("db.php");
include "sidenav.php";
if(isset($_POST['btn_save']))
{
    $name=$_POST['name'];
    $producttype=$_POST['producttype'];
    $contents=$_POST['contents'];

mysqli_query($con,"insert into services(name, producttype, contents) values ('$name', '$producttype', '$contents')") 
			or die ("Query 1 is inncorrect........");
header("location: services.php"); 
mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Services</title>
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
             <h2 class="mt-5">Add Services</h2>
              <form action="" method="post" name="form" enctype="multipart/form-data">    
                      <div class="form-group">
                      <label>Service Name</label>
                          <input type="text" id="name" name="name" class="form-control" required>
                      </div>
                    
                      <div class="form-group">
                      <label>Product Type</label>
                          <input type="text" name="producttype" id="producttype"  class="form-control" required>
                      </div>
                    
                      <div class="form-group">
                      <label>Contents</label>
                          <input type="text" id="contents" name="contents" class="form-control" required>
                      </div>

                      <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary">Add</button>
                      <a href="services.php" class="btn btn-secondary ml-2">Cancel</a>
                      
              </form> 
            </div>
        </div>  
        </div>
      </div>
</body>
</html>