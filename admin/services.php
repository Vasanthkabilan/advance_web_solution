<?php
session_start();
include("../db.php");
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
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Services</h4>
                </div>
                <div class="card-body">
                  <form action="" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">
                      
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Service Name</label>
                          <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Product Type</label>
                          <input type="text" name="producttype" id="producttype"  class="form-control" required>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Contents</label>
                          <input type="text" id="contents" name="contents" class="form-control" required>
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
                <h4 class="card-title">Manage Services</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter table-hover" id="">
                  <thead class=" text-primary">
                      <tr><th>Service Name</th>
                      <th>Product Type</th>
                      <th>Contents</th>
	                  <!-- <th><a href="adduser.php" class="btn btn-success">Add New</a></th> -->
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result=mysqli_query($con,"select id, name, producttype, contents from services")or die ("query 2 incorrect.......");

                        while(list($user_id, $user_name, $user_producttype, $user_contents)=
                        mysqli_fetch_array($result))
                        {
                        echo "<tr><td>$user_name</td><td>$user_producttype</td><td>$user_contents</td>";

                        echo"<td>
                        <a href='editservices.php?user_id=$user_id' type='button' rel='tooltip' title='' class='btn btn-info btn-link btn-sm' data-original-title='Edit User'>
                                <i class='material-icons'>edit</i>
                              <div class='ripple-container'></div></a>
                        <a href='manageservices.php?user_id=$user_id&action=delete' type='button' rel='tooltip' title='' class='btn btn-danger btn-link btn-sm' data-original-title='Delete User'>
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
