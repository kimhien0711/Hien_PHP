<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result page</title>
</head>
<body>
    <?php
        echo"ten cua ban la <b>".$_SESSION["name"]."</b>";
    ?>
</body>
</html>