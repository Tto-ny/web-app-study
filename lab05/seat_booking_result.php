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
        $seats = isset($_POST['seat']) ? $_POST['seat'] : [];
        
        echo "<h2>ผลการจองที่นั่ง</h2>";
        echo "ชื่อผู้จอง: <b>$name</b> <br>";
        echo "ที่นั่งที่จอง: <br>";
    ?>
    
    <ul>
        <?php foreach($seats as $s): ?>
            <li><?= $s ?></li>
        <?php endforeach; ?>
    </ul>



</body>
</html>
