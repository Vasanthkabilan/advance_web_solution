<?php
session_start();
include "db.php";
include "sidenav.php";
if (isset($_POST['btn_save'])) {
  $name = $_POST['name'];
  $riskrating = $_POST['riskrating'];
  $producttype = $_POST['producttype'];
  $instrument = $_POST['instrument'];
  $sector = $_POST['sector'];
  $region = $_POST['region'];
  $country = $_POST['country'];
  $currency = $_POST['currency'];
  $content = $_POST['content'];

  mysqli_query($con, "insert into investments(name, riskrating, producttype, instrument, sector, region, country, currency, content) values ('$name', '$riskrating', '$producttype', '$instrument', '$sector', '$region', '$country', '$currency', '$content')")
    or die("Query 1 is inncorrect........");
  header("location: investments.php");
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
                  <input type="text" name="producttype" id="producttype" class="form-control" required>
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