<?php
session_start();
include "db.php";
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$id=$_GET['id'];

/*this is delet quer*/
mysqli_query($con,"delete from investments where id='$id'")or die("query is incorrect...");
header("location: investments.php");
}

include "sidenav.php";

?>