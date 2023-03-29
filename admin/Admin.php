<?php
session_start();
include "db.php";

include "sidenav.php";
?>

<!DOCTYPE html> 
<htmI lang="en">
<head> 
    <meta charset= "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./min.css"> -->
    <link rel="stylesheet" href="./style.css">
</head>


<body>
             <h1>Clients List</h1>
              <table>
                <tr id="header">  
                 <th scope="col">Name</th>
                 <th scope="col">Product Name</th>
                 <th scope="col">Product Type</th>
                 <th scope="col">Instrument</th>
                 <th scope="col">Sector</th>
                 <th scope="col">Region</th>
                 <th scope="col">Country</th>
                 <th scope="col">Potential Investment</th>
                 <th scope="col">Tag</th>
                </tr>
               <tr>
               <?php 
                   $result=mysqli_query($con,"select * from clients")or die ("query 1 incorrect.....");

                 while(list($name,$productname,$producttype,$instrument,$sector,$region,$country,$potentialinvestment,$tag)=mysqli_fetch_array($result))
                 {	
                 echo "<tr><td>$name</td><td>$productname</td><td>$producttype</td><td>$instrument</td><td>$sector</td><td>$region</td><td>$country</td><td>$potentialinvestment</td><td>$tag</td>
                 </tr>";
                 }
                ?>
               </tr>
              </table>
              <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div>
</body>
</html>



<style>

  body{
    padding: 0;
    margin: 0;
    font-family: Poppins;
  }

  table{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border-collapse: collapse;
    width: 900px;
    height: 300px;
    border: 1px solid #bdc3c7;
    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px, -1px, 8px rgba(0, 0, 0, 0.2); 
  }

  tr{
    transition: all .2s ease-in;
    cursor: pointer;
  }

  th,
  td{
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  #header{
    background-color: rgb(109, 92, 151);
    color: #fff;
  }

  h1{
    position: absolute;
    font-weight: 500;
    text-align: left;
    color: black;
  }

  tr:hover{
    background-color: #f5f5f5;
    transform: scale(1.02);
    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px, -1px, 8px rgba(0, 0, 0, 0.2); 
  }

</style>


