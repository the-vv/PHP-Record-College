<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$conn = mysqli_Connect($servername, $username, $password);
if (!$conn) {
    echo "<br>Connection failed" . mysqli_connect_error();
}
$sql = "CREATE DATABASE IF NOT EXISTS classroom";
if (mysqli_query($conn, $sql)) {
    echo "<br>database Created successfully <br>";
} else {
    echo "<br>error creating database" . mysqli_error($conn);
}
mysqli_select_db($conn, "classroom");
$sql = "CREATE TABLE IF NOT EXISTS s4bca (id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(10) NOT NULL, email VARCHAR(15) NOT NULL, mobile INT(15) NOT NULL)";
if (mysqli_query($conn, $sql)) {
    echo "<br>Table created successfully<br>";
} else {
    echo "<br>error creating table " . mysqli_error($conn);
}
?>
<html>

<body>
    <form method="post">
        <h2>
            Delete Data From DB
        </h2>
        Enter ID to delete
        <input type="text" name="did">
        <input type="submit" value="delete" name="delete">
        <br><br><br>
</body>

</html>
<?php
function show()
{
    echo "<table border='1'><tr><th>ID</th><th>NAME</th><th>EMAIL</th><th>MOBILE</th></tr>";
    $sql = "SELECT * FROM s4bca";
    global $conn;
    $rs = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($rs)) {
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['mobile'] . "</td></td>";
    }
}
if (isset($_POST['delete'])) {
    $id = $_POST['did'];
    $sql = "DELETE FROM s4bca WHERE ID=$id";
    if (mysqli_query($conn, $sql)) {
        echo "<br>Record of ID: " . $id . " Successfully deleted";
        show();
    } else {
        echo "<br> Error in Deletion " . mysqli_error($conn);
    }
}
?>