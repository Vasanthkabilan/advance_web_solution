<?php
session_start();
include "db.php";
$id=$_REQUEST['id'];

$result=mysqli_query($con,"select id, name, riskrating, producttype, instrument, sector, region, country, currency, content from investments where id='$id'")or die ("query 1 incorrect.......");

list($id, $name, $riskrating, $producttype, $instrument, $sector, $region, $country,  $currency, $content)=mysqli_fetch_array($result);

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

mysqli_query($con,"update `investments` set name='$name', riskrating='$riskrating', producttype='$producttype', instrument='$instrument', sector='$sector', region='$region', country='$country',  currency='$currency', content='$content' where id='$id'")or die("Query 2 is inncorrect..........");

header("location: investments.php");
mysqli_close($con);
}
//include "sidenav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Investment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

      <div class="wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 ">
             <h2 class="mt-5">Update Investment</h2>
              <form action="editinvest.php" name="form" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" id="id" value="<?php echo $id;?>" />
                      <div class="form-group">
                        <label>Investment Name</label>
                        <input type="text" id="name" name="name"  class="form-control" value="<?php echo $name; ?>" >
                      </div>
                    
                      <div class="form-group">
                        <label>Risk Rating</label>
                        <input type="text" id="riskrating" name="riskrating"  class="form-control" value="<?php echo $riskrating; ?>" >
                      </div>

                      <div class="form-group">
                        <label>Product Type</label>
                        <input type="text" id="producttype" name="producttype"  class="form-control" value="<?php echo $producttype; ?>" >
                      </div>
                    
                      <div class="form-group">
                        <label>Instrument</label>
                        <input type="text" id="instrument" name="instrument"  class="form-control" value="<?php echo $instrument; ?>" >
                      </div>
                    
                      <div class="form-group">
                        <label>Sector</label>
                        <input type="text" id="sector" name="sector"  class="form-control" value="<?php echo $sector; ?>" >
                      </div>
                    
                      <div class="form-group">
                        <label>Region</label>
                        <input type="text" id="region" name="region"  class="form-control" value="<?php echo $region; ?>" >
                      </div>
                    
                      <div class="form-group">
                        <label>Country</label>
                        <input type="text" id="country" name="country"  class="form-control" value="<?php echo $country; ?>" >
                      </div>
                    
                      <div class="form-group">
                        <label>Currency</label>
                        <input type="text" id="currency" name="currency"  class="form-control" value="<?php echo $currency; ?>" >
                      </div>
                    
                      <div class="form-group">
                        <label>Contents</label>
                        <input type="text" id="content" name="content"  class="form-control" value="<?php echo $content; ?>" >
                      </div>

                      <input type="submit" id="btn_save" name="btn_save" class="btn btn-primary" value="Update">
              </form> 
            </div>
        </div>  
        </div>
      </div>
</body>
</html>      