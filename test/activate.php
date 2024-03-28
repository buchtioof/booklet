<?php
  
    // Connect to database 
    $con=mysqli_connect("localhost","root","root","bookDB");
  
    // Check if id is set or not if true toggle,
    // else simply go back to the page
    if (isset($_GET['id'])){
  
        // Store the value from get to a 
        // local variable "course_id"
        $database_id=$_GET['id'];
  
        // SQL query that sets the status
        // to 1 to indicate activation.
        $sql="UPDATE `songs` SET 
             `status`=1 WHERE id='$database_id'";
  
        // Execute the query
        mysqli_query($con,$sql);
    }
  
    // Go back to index
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>