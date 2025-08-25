<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

        $name = $_POST['names'];
        $score = $_POST['score'];

        if($score >= 80){
            $grade ="A";
        }
        else if($score >= 70){
            $grade = "B";
        }
        else if($score >= 60){
            $grade = "C";
        }
        else if($score >= 50){
            $grade = "D";
        }
        else{
            $grade = "F";
        }
            
        echo"<h3>ผลการคำนวณ:</h3>";
        echo "ชื่อนักศึกษา: $name <br>";
        echo "คะแนน: $score <br>";
        echo "เกรด: $grade";
    ?>


</body>

</html>