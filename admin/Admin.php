<?php
// Database connection 
include("db.php");
include "sidenav.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="./styless.css">
  <style>
    .wrapper {
      width: 800px;
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
            <h2 class="mt-5">Clients List</h2>
            <table class="table table-bordered">
              <thead class="thead-light">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Email</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php
                  // Query client table in DB awsdb
                  $result = mysqli_query($con, "select * from client") or die("query 1 incorrect.....");

                  while (list($id, $firstname, $lastname, $email, $password_hash) = mysqli_fetch_array($result)) {
                    echo "<tr><td>$id</td><td>$firstname</td><td>$lastname</td><td>$email</td>
                 </tr>";
                  }
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