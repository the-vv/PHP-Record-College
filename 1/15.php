<?php
session_start();
if(!isset($_SESSION['count'])) {
$_SESSION['count'] = 1;
}
else {
$_SESSION['count']++;
}
?>
<html>
<body>
<h2>
you visited this page 
<?php
echo ($_SESSION['count']);
?>
 times in this session
</h2>
</body>
</html>
