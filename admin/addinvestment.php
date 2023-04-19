<?php
include("db.php");
include "sidenav.php";
if(isset($_POST['btn_save']))
{
    $name=$_POST['name'];
    $riskrating=$_POST['riskrating'];
    $producttype=$_POST['producttype'];
    $instrument=$_POST['instrument'];
    $sector=$_POST['sector'];
    $region=$_POST['region'];
    $country=$_POST['country'];
    $currency=$_POST['currency'];
    $content=$_POST['content'];
    $investment=$_POST['investment'];

mysqli_query($con,"insert into investment(name, riskrating, producttype, instrument, sector, region, country, currency, content, investment) values ('$name', '$riskrating', '$producttype', '$instrument', '$sector', '$region', '$country', '$currency', '$content', '$investment')") 
			or die ("Query 1 is inncorrect........");
header("location: invest.php"); 
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
            width: 500px;
            margin: 0 auto;
        }

    </style>
</head>

<body>
      <div class="wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 ">
             <h2 class="mt-5">Add Investment</h2>
              <form action="" method="post" name="form" enctype="multipart/form-data">    
                      <div class="form-group">
                        <label>Investment Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                      </div>
                    
                      <div class="form-group">
                      <label>Risk Rating</label>
                          <input type="text" id="riskrating" name="riskrating" class="form-control" required>
                      </div>
                    
                      <div class="form-group">
                      <label>Product Type</label>
                          <input type="text" name="producttype" id="producttype"  class="form-control" required>
                      </div>

                      <div class="form-group">
                      <label>Instruments</label>
                          <input type="text" name="instrument" id="instrument" class="form-control" required>
                      </div>

                      <div class="form-group">
                        <label>Sector</label>
                          <input type="text" name="sector" id="sector" class="form-control" required>
                      </div>

                      <div class="form-group">
                      <label>Region</label>
                          <input type="text" name="region" id="region" class="form-control" required>
                      </div>

                      <div class="form-group">
                      <label>Country</label>
                          <input type="text" name="country" id="country" class="form-control" required>
                      </div>

                      <div class="form-group">
                      <label>currency</label>
                          <input type="text" id="currency" name="currency" class="form-control" required>
                      </div>

                      <div class="form-group">
                      <label>Contents</label>
                          <input type="text" id="content" name="content" class="form-control" required>
                      </div>

                      <div class="form-group">
                      <label>Investment</label>
                          <input type="text" id="content" name="investment" class="form-control" required>
                      </div>

                      <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary">Add</button>
                      <a href="invest.php" class="btn btn-secondary ml-2">Cancel</a>
                      
                    </form> 
            </div>
        </div>  
        </div>
      </div>
</body>
</html>