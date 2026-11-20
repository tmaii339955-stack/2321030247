<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 'Hello World!' -->
    <?php
        // code php viet o day
        echo "Hello World! <br>";
        // biến $
        $hoTen = "Tuyet Mai";
        $tuoi = 21;

        //nối chuỗi .
        echo $hoTen . " " . $tuoi . " tuổi <br>";

        $soThuNhat = 10;
        $soThuHai = 5;

        // + - * / %
        $ketQua = $soThuNhat + $soThuHai;
        echo $ketQua . "<br>";

        // += -= *= /=
        $soThuNhat += $soThuHai; // $soThuNhat = $soThuNhat + $soThuHai
        echo $soThuNhat . "<br>";

        $diem = 5;
        if($diem <4){
            echo "F";
        } 
        elseif($diem >=4 && $diem < 5){
            echo "D";
        }
        elseif($diem >=5 && $diem < 7){
            echo "C";
        }
        elseif($diem >=7 && $diem < 8){
            echo "B";
        }
        else {
            echo "A";
        }
        echo "<br>";

        // Switch case
        $color = "blue";
        switch($color){
            case "red":
                echo "<br>";
                echo "IS RED";
                break;
            case "blue":
                echo "<br>";
                echo "IS BLUE";
                break;
            default:
                echo "<br>";
                echo "no color";
                break;
        }
        echo "<br>";

        // Vòng lặp for
        for($i = 0; $i < 5; $i++){
            echo $i . "<br>";
        }
    ?>
</body>
</html>