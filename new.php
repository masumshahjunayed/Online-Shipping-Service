<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $user_id = $_POST['user_id'];
 $password = $_POST['password'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(user_id,password) VALUES('$user_id','$password')";
 mysql_query($sql_query);
        
        // sql query for inserting data into database
 
}
?>