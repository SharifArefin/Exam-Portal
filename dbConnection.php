<?php
//all the variables defined here are accessible in all the files that include this one
$con= new mysqli('localhost','your_db_user','your_db_pass','your_db_name')or die("Could not connect to mysql".mysqli_error($con));

?>