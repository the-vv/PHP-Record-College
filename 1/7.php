<?php
if(isset($_POST['addbutton']))
{
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$sum = $num1 + $num2;
echo "Sum is " . $sum;
}
?>