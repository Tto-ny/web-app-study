<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
        echo "<h3>เพิ่มหนังสือเรียบร้อยแล้ว</h3>";
        echo "<h2>รายการหนังสือในห้องสมุด</h2>";
    ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $category = $_POST['category'];

    $conn = mysqli_connect("localhost", "root", "", "ai_lab06");
    mysqli_set_charset($conn, "utf8");

    $stmt = $conn->prepare("INSERT INTO books (title, author, year, category) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $title, $author, $year, $category);
    $stmt->execute();
    $stmt->close();

    $sql = "SELECT * FROM books";
    $result = mysqli_query($conn, $sql);

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
}
?>

</body>

</html>