 <?php
  session_start();
  include("db.php");
  include "sidenav.php";
  //include "topheader.php";
  if (isset($_POST['btn_save'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password_hash = $_POST['password_hash'];

    mysqli_query($con, "insert into client(firstname, lastname, email, password_hash) values ('$firstname','$lastname','$email','$password_hash')")
      or die("Query 1 is inncorrect........");
    header("location: manage_users.php");
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
           <h4 class="card-title">Add Users</h4>
           <p class="card-category">Complete User profile</p>
         </div>
         <div class="card-body">
           <form action="" method="post" name="form" enctype="multipart/form-data">
             <div class="row">

               <div class="col-md-3">
                 <div class="form-group bmd-form-group">
                   <label class="bmd-label-floating">First Name</label>
                   <input type="text" id="firstname" name="firstname" class="form-control" required>
                 </div>
               </div>
               <div class="col-md-4">
                 <div class="form-group bmd-form-group">
                   <label class="bmd-label-floating">Last Name</label>
                   <input type="text" name="lastname" id="lastname" class="form-control" required>
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col-md-6">
                 <div class="form-group bmd-form-group">
                   <label class="bmd-label-floating">Email</label>
                   <input type="email" name="email" id="email" class="form-control" required>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group bmd-form-group">
                   <label class="bmd-label-floating">Password</label>
                   <input type="password" id="password" name="password_hash" class="form-control" required>
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

             <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary pull-right">Update User</button>
             <div class="clearfix"></div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
 <?php
  include "footer.php";
  ?>