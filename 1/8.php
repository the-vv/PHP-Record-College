<html>
<form method ="post">
Enter Name
<input type="text" name="name">
<br><br>
Enter Email
<input type="email" name="email">
<br><br>
Enter Number
<input type="number" name="no">
<br><br>
<input type="submit" name="submit">
<br><br>
</form>
</html>
<?php
$servern="localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servern, $username, $password);
if(!$conn)
{
echo "Connection to database failed" . mysqli_connect_error();
}
$sql = "CREATE DATABASE IF NOT EXISTS BCA";
if(mysqli_query($conn, $sql))
{
echo "<br>Databbase created Successfully";
}
else 
{
echo "Error creating database" . mysqli_error($conn);
}
mysqli_select_db($conn, "BCA");
$sql = "CREATE TABLE IF NOT EXISTS s4bca (ID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(15) NOT NULL, email VARCHAR(15) NOT NULL, mobile INT(20) NOT NULL)";
if(mysqli_query($conn, $sql))
{
echo "<br>Table s4bca created successfully";
}
else 
{
echo "<br>Error creating table" . mysqli_error($conn);
}
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['no'];
$sql = "INSERT INTO s4bca (name, email, mobile) VALUES('$name', '$email', '$mobile')";
if(mysqli_query($conn, $sql))
{
echo "<br>New record inserted successfully";
}
else
{
echo "<br>Error" . mysqli_error($conn);
}
}
?>

