<?php
session_start();
include("db.php");
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$user_id=$_GET['user_id'];

/*this is delet quer*/
mysqli_query($con,"delete from employee where id='$user_id'")or die("query is incorrect...");
header("location: Client.php"); 
mysqli_close($con);
}

include "sidenav.php";

?>