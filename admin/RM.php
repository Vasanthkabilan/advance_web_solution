<?php
session_start();
include("../db.php");
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

mysqli_query($con,"insert into investment(name, riskrating, producttype, instrument, sector, region, country, currency, content) values ('$name', '$riskrating', '$producttype', '$instrument', '$sector', '$region', '$country', '$currency', '$content')") 
			or die ("Query 1 is inncorrect........");
header("location: RM.php"); 
mysqli_close($con);
}
?>

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Investment</h4>
                </div>
                <div class="card-body">
                  <form action="" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">
                      
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Investment Name</label>
                          <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Risk Rating</label>
                          <input type="text" id="riskrating" name="riskrating" class="form-control" required>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Product Type</label>
                          <input type="text" name="producttype" id="producttype"  class="form-control" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Instruments</label>
                          <input type="text" name="instrument" id="instrument" class="form-control" required>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Sector</label>
                          <input type="text" name="sector" id="sector" class="form-control" required>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Region</label>
                          <input type="text" name="region" id="region" class="form-control" required>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Country</label>
                          <input type="text" name="country" id="country" class="form-control" required>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">currency</label>
                          <input type="text" id="currency" name="currency" class="form-control" required>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Contents</label>
                          <input type="text" id="content" name="content" class="form-control" required>
                        </div>
                      </div>

                    </div>
                    <!-- <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">phone number</label>
                          <input type="text" id="phone" name="phone" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" name="city" id="city"  class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" name="country" id="country" class="form-control" required>
                        </div>
                      </div>
                      
                    </div> -->
                    
                    <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary pull-right">Add</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>

      <div class="content">
        <div class="container-fluid">
         <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Manage Investment</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter table-hover" id="">
                    <thead class=" text-primary">
                      <tr><th>Investment Name</th>
                      <th>Risk Rating</th>
                      <th>Product Type</th>
                      <th>Instruments</th>
                      <th>Sector</th>
                      <th>Region</th>
                      <th>Country</th>
                      <th>Currency</th>
                      <th>Contents</th>
	                  <!-- <th><a href="adduser.php" class="btn btn-success">Add New</a></th> -->
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result=mysqli_query($con,"select id, name, riskrating, producttype, instrument, sector, region, country, currency, content from investment")or die ("query 2 incorrect.......");

                        while(list($user_id, $user_name, $user_riskrating, $user_producttype, $user_instrument, $user_sector, $user_region, $user_country,  $user_currency, $user_content)=
                        mysqli_fetch_array($result))
                        {
                        echo "<tr><td>$user_name</td><td>$user_riskrating</td><td>$user_producttype</td><td>$user_instrument</td><td>$user_sector</td><td>$user_region</td><td>$user_country</td><td>$user_currency</td><td>$user_content</td>";

                        echo"<td>
                        <a href='Edit Invest.php?user_id=$user_id' type='button' rel='tooltip' title='' class='btn btn-info btn-link btn-sm' data-original-title='Edit User'>
                                <i class='material-icons'>edit</i>
                              <div class='ripple-container'></div></a>
                        <a href='Manage Invest.php?user_id=$user_id&action=delete' type='button' rel='tooltip' title='' class='btn btn-danger btn-link btn-sm' data-original-title='Delete User'>
                                <i class='material-icons'>close</i>
                              <div class='ripple-container'></div></a>
                        </td></tr>";
                        }
                        mysqli_close($con);
                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
