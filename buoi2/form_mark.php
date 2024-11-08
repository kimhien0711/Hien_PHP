<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        #container {
            width: 600px;
            background-color: #ffffff;
            margin: 40px auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #333333;
            font-size: 28px;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .box p {
            font-size: 18px;
            color: #333333;
            margin-right: 20px;
        }

        input[type="number"], select {
            width: 60%;
            padding: 8px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }

        input[type="number"]:focus, select:focus {
            border-color: #6c757d;
            outline: none;
            background-color: #ffffff;
        }

        .button {
            text-align: center;
            margin-top: 20px;
        }

        .button input[type="submit"], .button input[type="reset"] {
            font-size: 16px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-right: 10px;
        }

        .button input[type="reset"] {
            background-color: #dc3545;
        }

        .button input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .button input[type="reset"]:hover {
            background-color: #c82333;
        }

        input[type="number"]:disabled {
            background-color: #e9ecef;
            color: #6c757d;
            border-color: #ced4da;
        }
      
    </style>

</head>
<body>
    <?php
    error_reporting(0) ;

    $num1=$_POST["semester1"];
    $num2=$_POST["semester2"];
    $num3=$_POST["year"];

    function OK($num1, $num2, $num3){

        if ($num3==1){
            $kq=($num1 + $num2)/2;

        }else{
            $kq=($num1+ $num2*2)/3;
        }
        return $kq;
    }

    $kq=OK($num1,$num2,$num3);


    $result = "";

    if(!$kq){
        $result = "";
    }elseif($kq >= 9){
        $result = "HỌC SINH XUẤT SẮC";
    }else if($kq >= 8){
        $result = "HỌC SINH GIỎI";        
    }else if($kq >= 6){
        $result = "HỌC SINH KHÁ";      
    }else if($kq >= 5){
         $result = "HỌC SINH TRUNG BÌNH";
    }else{
        $result = "HỌC SINH YẾU";
    }
    ?>


    <div id="container">
        <h1> BẢNG ĐIỂM CỦA EM</h1> 
        <form action="form_mark.php" method="POST">
        <div class="box">
            <p>Semester1: </p>
            <input id ="se1" class="input_number" type="number" name="semester1" value="<?php echo $num1?>">
                </div>
                <div class="box">
                    <p>Semester2: </p>
                    <input id="se2" class="input_number" type="number"  name="semester2"value="<?php echo $num2?>">
                </div>

                <div class="box">
                    <p>Year:</p>
                <select name="year">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
                    
                </div>

                <div class="box">
                    <p>Summarise: </p>
                    <input  id="kq" class="input_number" type="number" value="<?php echo $kq?>">
                </div>

                <div id="result">
                <?php echo $result; ?>
                </div>

                <div class="button">
                    <input type="submit" value="OK">
                    <input type="reset" value="CANCEL" onclick="window.location.href='http://localhost/Hien_PHP/buoi2/form_mark.php'">
                </div>
        </form>
    </div>  
</body>
</html>