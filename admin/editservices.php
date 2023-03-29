<?php
session_start();
include("db.php");
$user_id = $_REQUEST['user_id'];

$result = mysqli_query($con, "select id, name, producttype, contents from services where id='$user_id'") or die("query 1 incorrect.......");

list($user_id, $name, $producttype, $contents) = mysqli_fetch_array($result);

if (isset($_POST['btn_save'])) {
  $name = $_POST['name'];
  $producttype = $_POST['producttype'];
  $contents = $_POST['contents'];

  mysqli_query($con, "update `services` set name='$name', producttype='$producttype', contents='$contents' where id='$user_id'") or die("Query 2 is inncorrect..........");

  header("location: services.php");
  mysqli_close($con);
}
//include "sidenav.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Update Record</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .wrapper {
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
          <h2 class="mt-5">Update Record</h2>
          <form action="editservices.php" name="form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>" />
            <div class="form-group">
              <label>Service Name</label>
              <input type="text" id="name" name="name" class="form-control" value="<?php echo $name; ?>">
            </div>

            <div class="form-group">
              <label>Product Type</label>
              <input type="text" id="producttype" name="producttype" class="form-control" value="<?php echo $producttype; ?>">
            </div>

            <div class="form-group">
              <label>Contents</label>
              <input type="text" id="contents" name="contents" class="form-control" value="<?php echo $contents; ?>">
            </div>

            <input type="submit" id="btn_save" name="btn_save" class="btn btn-primary" value="Update">
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>