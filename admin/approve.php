<?php
include("db.php");
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
    $Investment=$_POST['tag'];

mysqli_query($con,"insert into approve(name, riskrating, producttype, instrument, sector, region, country, currency, content, tag) values ('$name', '$riskrating', '$producttype', '$instrument', '$sector', '$region', '$country', '$currency', '$content', '$tag')") 
			or die ("Query 1 is inncorrect........");
header("location: approve.php"); 
mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Approved Ideas</title>
    <link rel="stylesheet" href="./styless.css">
    <style>
        .wrapper{
            width: 1400px;
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

                <h2 class="mt-5">Approved Ideas</h2>
<table class="table table-bordered">
  <thead class= "thead-light">
    <tr>
      <th scope="col">Investment Name</th>
      <th scope="col">Risk Rating</th>
      <th scope="col">Product Type</th>
      <th scope="col">Instruments</th>
      <th scope="col">Sector</th>
      <th scope="col">Region</th>
      <th scope="col">Country</th>
      <th scope="col">Currency</th>
      <th scope="col">Contents</th>
      <th scope="col">Investment</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
    <tr>
                     <?php 
                        $result=mysqli_query($con,"select id, name, riskrating, producttype, instrument, sector, region, country, currency, content, tag from approve")or die ("query 2 incorrect.......");

                        while(list($user_id, $name, $riskrating, $producttype, $instrument, $sector, $region, $country,  $currency, $content, $tag)=
                        mysqli_fetch_array($result))
                        {
                        echo "<tr><td>$name</td><td>$riskrating</td><td>$producttype</td><td>$instrument</td><td>$sector</td><td>$region</td><td>$country</td><td>$currency</td><td>$content</td><td>$tag</td>";

                        echo"<td>
                        <a href='editapprove.php?user_id=$user_id' type='button' rel='tooltip' title='' class='btn btn-info btn-link btn-sm' data-original-title='Edit User'>
                                <span class='material-icons-sharp'>edit</span></a>
                        <a href='manageapprove.php?user_id=$user_id&action=delete' type='button' rel='tooltip' title='' class='btn btn-link btn-sm' data-original-title='Delete User'>
                                <span class='material-icons-sharp'>close</span></a>
                        </td></tr>";
                        }
                        mysqli_close($con);
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
