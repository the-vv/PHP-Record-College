<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$conn = mysqli_Connect($servername, $username, $password);
if($conn)
{
echo "Connection failed" . mysqli_connect_error());
}
$sql = "CREATE DATABSE IF NOT EXISTS classroom";
if(mysqli_query($conn, $sql))
{
echo "database Created successfully <br>";
}
else 
{
echo "error creating database" . mysqli_error($conn);
}
mysqli_select_db($conn, "classroom");
$sql = "CREATE TABLE IF NOT EXISTS s4bca (id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(10)"