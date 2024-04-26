<?php  
error_reporting(E_ALL ^ E_WARNING);
include_once('config.php');  
   
$id = $_GET['del'];  
$sql = "DELETE FROM job_post where Company_id = '$id'";
        if (mysqli_query($conn, $sql)) {
            header("location: success.php");

         } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
         }  
   
?>