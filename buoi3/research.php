<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="research.php" method="POST">
    Search: <input type="text" name="name" >
        <input type="submit" value="OK">
    </form>

    <?php
        error_reporting();
        $full_name = $_POST["name"];
        function Search ($value, $array){
            return (array_search($value, $array));
        }
        $array = array(
            "ram",
            "aakash",
            "saran",
            "mohan",
            "saran"
        );
        $value =$full_name;
        echo (Search($value, $array));
    ?>
</body>
</html>