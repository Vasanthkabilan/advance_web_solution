<?php
session_start();
include("db.php");
$user_id=$_REQUEST['user_id'];

$result=mysqli_query($con,"select id, name, riskrating, producttype, instrument, sector, region, country, currency, content from investment where id='$user_id'")or die ("query 1 incorrect.......");

list($user_id, $name, $riskrating, $producttype, $instrument, $sector, $region, $country,  $currency, $content)=mysqli_fetch_array($result);

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

mysqli_query($con,"update investment set name=$name, riskrating=$riskrating, producttype=$producttype, instrument=$instrument, sector=$sector, region=$region, country=$country,  currency=$currency, content=$content where id='$user_id'")or die("Query 2 is inncorrect..........");

header("location: RM.php");
mysqli_close($con);
}
include "sidenav.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        <div class="col-md-5 mx-auto">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Edit Investment</h5>
              </div>
              <form action="edituser.php" name="form" method="post" enctype="multipart/form-data">
              <div class="card-body">
                
                  <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id;?>" />
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Investment Name</label>
                        <input type="text" id="name" name="name"  class="form-control" value="<?php echo $name; ?>" >
                      </div>
                    </div>

                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Risk Rating</label>
                        <input type="text" id="riskrating" name="riskrating"  class="form-control" value="<?php echo $riskrating; ?>" >
                      </div>
                    </div>

                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Product Type</label>
                        <input type="text" id="producttype" name="producttype"  class="form-control" value="<?php echo $producttype; ?>" >
                      </div>
                    </div>

                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Instrument</label>
                        <input type="text" id="instrument" name="instrument"  class="form-control" value="<?php echo $instrument; ?>" >
                      </div>
                    </div>

                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Sector</label>
                        <input type="text" id="sector" name="sector"  class="form-control" value="<?php echo $sector; ?>" >
                      </div>
                    </div>

                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Region</label>
                        <input type="text" id="region" name="region"  class="form-control" value="<?php echo $region; ?>" >
                      </div>
                    </div>

                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Country</label>
                        <input type="text" id="country" name="country"  class="form-control" value="<?php echo $country; ?>" >
                      </div>
                    </div>

                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Currency</label>
                        <input type="text" id="currency" name="currency"  class="form-control" value="<?php echo $currency; ?>" >
                      </div>
                    </div>

                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Contents</label>
                        <input type="text" id="content" name="content"  class="form-control" value="<?php echo $content; ?>" >
                      </div>
                    </div>

                    <!-- <div class="col-md-12 ">
                      <div class="form-group">
                        <label >Password</label>
                        <input type="text" name="password_hash" id="password_hash" class="form-control" value="<?php echo $password_hash; ?>">
                      </div>
                    </div> --> 
                
              </div>
              <div class="card-footer">
                <button type="submit" id="btn_save" name="btn_save" class="btn btn-fill btn-primary">Update</button>
              </div>
              </form>    
            </div>
          </div>
         
          
        </div>
      </div>
      