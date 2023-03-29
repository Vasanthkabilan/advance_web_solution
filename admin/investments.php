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
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    

    <main>
        <section class="middle">
            <div class="header">
             <h1>Welcome Admin</h1>
            </div>
            <!-- <div class="search">
             <input type="text" placeholder="Search...">
             <button class="favorite styled" type="button"> Submit
             </button>
            </div> -->
            <br>

            <div class="Investments">
                <h1>Investments</h1>
                <br>

                <?php
                echo"<td>
                <a href='invest.php?' type='button' rel='tooltip' title='' class='btn btn-info btn-link btn-sm' data-original-title='Edit User'>
                        <i class='material-icons'>Add an Investment</i>
                      <div class='ripple-container'></div></a>
                      </td>";
                ?>      


                <?php
                             // Include config file
                            //  require_once "config.php";
                    
                             // Attempt select query execution
                             $sql = "SELECT * FROM investments";
                             if($result = $con->query($sql)){
                             if($result->num_rows > 0){
                              echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Title</th>";
                                        echo "<th>Risk Rating</th>";
                                        echo "<th>Product Type</th>";
                                        echo "<th>Instrument</th>";
                                        echo "<th>Sector</th>";
                                        echo "<th>Region</th>";
                                        echo "<th>Country</th>";
                                        echo "<th>Currency</th>";
                                        echo "<th>Description</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['riskrating'] . "</td>";
                                        echo "<td>" . $row['producttype'] . "</td>";
                                        echo "<td>" . $row['instrument'] . "</td>";
                                        echo "<td>" . $row['sector'] . "</td>";
                                        echo "<td>" . $row['region'] . "</td>";
                                        echo "<td>" . $row['country'] . "</td>";
                                        echo "<td>" . $row['currency'] . "</td>";
                                        echo "<td>" . $row['content'] . "</td>";
                                        echo "<td>";
                                            
                                            echo '<a href="editinvest.php?id='. $row['id'] .'"><span class="material-symbols-sharp">edit</span></a>';
                                            echo '<a href="manageinvest.php?id='. $row['id'] .'"><span class="material-symbols-sharp">cancel</span></a>';
                                            
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                              echo "</table>";
                             // Free result set
                             $result->free();
                             } else{
                              echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                              }
                              } else{
                              echo "Oops! Something went wrong. Please try again later.";
                              }
                    
                               // Close connection
                              $con->close();
                 
                ?>
           </div>

        </section>
    </main>
</body>
</htmI>