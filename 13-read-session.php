<?php
session_start();
?>
<html>

<body>
    <?php
    echo "fav color is: " . $_SESSION['favcolor'] . "<br>";
    echo "fav animal is: " . $_SESSION['favanimal'] . "<br>";
    ?>
</body>

</html>