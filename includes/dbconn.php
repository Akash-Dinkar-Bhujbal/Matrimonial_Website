
<?php 

$host="remotemysql.com"; // Host name 
$username="sBWHJW4Z1G"; // Mysql username 
$password="7PgBf3FWyn"; // Mysql password 
$db_name="sBWHJW4Z1G"; // Database name 

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 

mysqli_select_db($conn,"$db_name")or die("cannot select DB");

?>