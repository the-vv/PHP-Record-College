<html>
<body>
<form>
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
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$sum = $num1 + $num2;
echo "Sum is " . $sum;
?>
</html>