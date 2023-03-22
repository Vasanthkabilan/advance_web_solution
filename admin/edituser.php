
    <?php
session_start();
include("../db.php");
$user_id=$_REQUEST['user_id'];

$result=mysqli_query($con,"select id,firstname,lastname, email, password_hash from client where id='$user_id'")or die ("query 1 incorrect.......");

list($user_id,$firstname,$lastname,$email,$password_hash)=mysqli_fetch_array($result);

if(isset($_POST['btn_save'])) 
{

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password_hash=$_POST['password_hash'];

mysqli_query($con,"update client set firstname='$firstname', lastname='$lastname', email='$email', password_hash='$password_hash' where id='$id'")or die("Query 2 is inncorrect..........");

header("location: Client.php");
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
                <h5 class="title">Edit User</h5>
              </div>
              <form action="edituser.php" name="form" method="post" enctype="multipart/form-data">
              <div class="card-body">
                
                  <input type="hidden" name="id" id="user_id" value="<?php echo $id;?>" />
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>First name</label>
                        <input type="text" id="firstname" name="firstname"  class="form-control" value="<?php echo $firstname; ?>" >
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Last name</label>
                        <input type="text" id="lastname" name="lastname" class="form-control" value="<?php echo $lastname; ?>" >
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email"  id="email" name="email" class="form-control" value="<?php echo $email; ?>">
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
      