<html>
<body>
<form method="POST">
Enter First Number:
<input type="number" name="num1">
<br>
Enter Second Number:
<input type="number" name="num2">
<br>
<input type="submit" value="add" name="addbutton">
</form>
</body>
<?php
if(isset($_POST['addbutton']))
{
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$sum = $num1 + $num2;
echo "Sum is " . $sum;
}
?>
</html>
