<?php
session_start();
include "db.php";
$user_id = $_REQUEST['user_id'];

$result = mysqli_query($con, "select id,firstname,lastname, email from client where id='$user_id'") or die("query 1 incorrect.......");

list($user_id, $firstname, $lastname, $email) = mysqli_fetch_array($result);

if (isset($_POST['btn_save'])) {

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];

  mysqli_query($con, "update client set firstname='$firstname', lastname='$lastname', email='$email' where id='$user_id'") or die("Query 2 is inncorrect..........");

  header("location: Client.php");
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
          <form action="edituser.php" name="form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>" />
            <div class="form-group">
              <label>First name</label>
              <input type="text" id="firstname" name="firstname" class="form-control" value="<?php echo $firstname; ?>">
            </div>

            <div class="form-group">
              <label>Last name</label>
              <input type="text" id="lastname" name="lastname" class="form-control" value="<?php echo $lastname; ?>">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" id="email" name="email" class="form-control" value="<?php echo $email; ?>">
            </div>
            <input type="submit" id="btn_save" name="btn_save" class="btn btn-primary" value="Update">
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>