nhận r hả
Um
m ve coi lai ong shipper do di nghe
me coc vai
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
http://localhost
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        function sum(){
            $a = $_POST["hsa"];
            $b = $_POST["hsb"];
            $sum = $a + $b;
            return $sum;
        }
        $kq = sum();
    ?>
    <form action="form.php" method="POST">
        First number: <input type="number" name="hsa"><br>
        Last number: <input type="number" name="hsb"><br>
        <input type="hidden" name="submit" value="1">
        <input type="submit" value="Submit">
    </form>
    <p class="kp"><?php echo $kq ?></p>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #container{
            width:500px;
            height:auto;
            background-color: rgb(121, 135, 141);
            margin-left:250px ;
            
        }
        .box{
            display:flex;
            padding:5px;
           
        }
        h1{
            text-align: center;
        }

        .button{
            margin-left: 150px;
        
        }
        .button .btn{
            margin: 5px;
        }
        .box #year{
            margin-left: 40px;
        }

               
    </style>

</head>
<body>
    <div id="container">
        <h1> BẢNG ĐIỂM CỦA EM</h1> 
        <div class="box">
            <p>Semester1: </p>
            <input id ="se1" class="input_number" type="number">
        </div>
        <div class="box">
            <p>Semester2: </p>
            <input id="se2" class="input_number" type="number">
        </div>

        <div class="box">
            <p>Year:</p>
           <select id="year">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
           </select>
              
        </div>

        <div class="box">
            <p>Summarise: </p>
            <input  id="kq" class="input_number" type="number" disabled>
        </div>

        <!-- <div class="text">
            <p id="xl"></p>

        </div> -->

        <div class="button">
            <button class="btn" id="ok" cancle="ok"  onclick="myFunction()"> OK</button>
            <button class="btn" id="cancel" value="cancel" onclick="myFunction2()"> Cancle</button>
        </div>
    
        <div id="xl"> </div>
        <script src="Bang_diem.js"></script>

    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* #container{
            width:700px;
            height:auto;
            background-color: rgb(121, 135, 141);
            margin-left:250px ;
            
        }
        .box{
            display:flex;
            padding:5px;
           
        }
        h1,p,button{
            font-size: 25px;
        }
        h1{
            text-align: center;
        }

        .button{
            margin-left: 150px;
        
        }
        .button .btn{
            margin: 5px;
        }
        .box #year{
            margin-left: 40px;
        } */

               
    </style>

</head>
<body>
    <?php
     $num1=$_POST["semester1"];
     $num2=$_POST["semester2"];
     $num3=$_POST["year"];

    function ok($num1,$num2,$num3){

        if ($num3==1){
            $kq=(($num1+($num2))/2);

        }else{
            $kq=(($num1+($num2*3))/4);
        }
        return $kq;
    }
    $kq=ok($num1,$num2,$num3);
0
    ?>




    <div id="container">
        <h1> BẢNG ĐIỂM CỦA EM</h1> 
        <form action="form_mark.php" method="POST">
        <div class="box">
            <p>Semester1: </p>
            <input id ="se1" class="input_number" type="number" name="semester1" value="<?php echo $a?>">
                </div>
                <div class="box">
                    <p>Semester2: </p>
                    <input id="se2" class="input_number" type="number"  name="semester2"value="<?php echo $a?>">
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

                <div class="button">
                    <input type="submit" value="oK">
                    <input type="reset" value="cancle">
                </div>
            
                <div id="xl"> </div>
      

        </form>
       

    </div>
    
</body>
</html>
if($kq>=9){
        echo "Học sinh Xuất Sắc";
   
    }else if( $kq>=8){
        echo "Học sinh Giỏi";
           
    }else if($kq>=6){
        echo "Học sinh Khá";
       
    }else if($kq>=5){
        echo "Học sinh Trung Bình";
    
    }else{
        echo "Học sinh Yếu";
        
    }
Alo
M đâu ròi
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2{
            text-align: center;
        }

        .input-find{
            margin-left: 500px;
            margin-bottom: 8px;
        }

        table{
            border:1px solid black;
            border-collapse: collapse; /* Gộp các đường viền lại */
            margin-left: 170px;
        }

        th, td {
            border: 1px solid black; /* Kẻ đường viền đen */
            padding: 10px;
            text-align: center;
        }
       

        
    </style>
</head>
<body>
    <h2>Danh sách sinh viên</h2>
    <div class="input-find">
        <input type="text"  name="find_key" placeholder="Nhập từ khóa cần tìm">
        <input type="submit" name="find" value="Tìm">
        <input type="submit" name="all" value="Tất cả">
    </div>
    <table>
        <thead>
            <th>Mã sinh viên</th>
            <th>Họ và tên</th>
            <th>Giới tính</th>
            <th>Quê Quán</th>
            <th>Năm sinh</th>
            <th>Ngành học</th>
            <th>Tác vụ</th>
        </thead>
        <tbody>
            <tr>
                <td>202020</td>
                <td>Hồ Thị Duyên Hà</td>
                <td>Nữ</td>
                <td>Hướng Phùng-Hướng Hóa</td>
                <td>2005</td>
                <td>Ngôn ngữ Anh</td>
                <td><a href="#">Sửa</a> <a href="#">Xóa</a></td>
              
            </tr>
            <tr>
                <td>202021</td>
                <td>Hồ Vũ Minh Hiếu</td>
                <td>Nam</td>
                <td>Hướng Phùng-Hướng Hóa</td>
                <td>2015</td>
                <td>Công nghệ thông tin</td>
                <td><a href="#">Sửa</a> <a href="#">Xóa</a></td>

            </tr>
            <tr>
                <td>202022</td>
                <td>Nguyễn Hoàng Quân</td>
                <td>Nam</td>
                <td>Hướng Hóa- Quảng Trị</td>
                <td>2000</td>
                <td>Công nghệ thông tin</td>
                <td><a href="#">Sửa</a> <a href="#">Xóa</a></td>

            </tr>
            <tr>
                <td>202023</td>
                <td>Nguyễn Phương Thảo</td>
                <td>Nữ</td>
                <td>Khe Sanh-Hướng Hóa</td>
                <td>2001</td>
                <td>Hướng dẫn viên du lịch</td>
                <td><a href="#">Sửa</a> <a href="#">Xóa</a></td>

            </tr>
            <tr>
                <td>202024</td>
                <td>Hoàng Thu Hạnh</td>
                <td>Nữ</td>
                <td>Gia Lộc-Hải Dương</td>
                <td>2002</td>
                <td>Kế toán</td>
                <td><a href="#">Sửa</a> <a href="#">Xóa</a></td>

            </tr>
            <tr>
                <td>202025</td>
                <td>vũ Giang Sơn</td>
                <td>Nữ</td>
                <td>Nho Quan-Ninh Bình</td>
                <td>2004</td>
                <td>Hướng dẫn viên du lịch</td>
                <td><a href="#">Sửa</a> <a href="#">Xóa</a></td>
            </tr>
                    <!-- Gộp ô cho nút Thêm mới -->
            <tr>
                <td colspan="7" class="button-container">
                    <button>Thêm mới</button>
                </td>
            </tr>

        </tbody>
    </table>

    <?php
    
    ?>
</body>
</html>
