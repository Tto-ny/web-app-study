<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "ai_lab06";
    $conn = mysqli_connect($host, $user, $password, $dbname);
    if($conn){
        if(isset($_POST["title"]) && isset($_POST["author"]) && isset($_POST["year"]) && isset($_POST["category"])){
            $title = $_POST["title"];
            $author = $_POST["author"];
            $year = $_POST["year"];
            $category = $_POST["category"];
            $sql = "INSERT INTO books(title, author, year,category) VALUES ('$title', '$author', $year,'$category')";
                if(mysqli_query($conn, $sql)){
                    $last_id = mysqli_insert_id($conn);
                    echo "<h3>เพิ่มหนังสือเรียบร้อยแล้ว</h3>";}
                else{
                    echo "ไม่สามารถบันทึกข้อมูลได้<br>";
                }
                $sql = "SELECT * FROM books";
                $result = mysqli_query($conn, $sql);
            }
        else{
            echo "ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้";
            exit;
        }}
            ?>
    <?php
        echo "<h2>รายการหนังสือในห้องสมุด</h2>";

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1' cellpadding='10'>";
        echo "<tr><th>ชื่อหนังสือ</th><th>ผู้แต่ง</th><th>ปีที่พิมพ์</th><th>หมวดหมู่</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['title']}</td>
                    <td>{$row['author']}</td>
                    <td>{$row['year']}</td>
                    <td>{$row['category']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "ไม่มีข้อมูลหนังสือในห้องสมุด";
    }

    mysqli_close($conn);

    echo "<br><a href='book_form.html'>เพิ่มหนังสือ</a>";
?>
</body>
</html>