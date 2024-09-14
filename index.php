<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movies_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM movies_series";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سایت دانلود فیلم و سریال</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <h1>لیست فیلم‌ها و سریال‌ها</h1>
    <div class="movies-container">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='movie'>";
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<p>ژانر: " . $row["genre"] . "</p>";
                echo "<p>سال انتشار: " . $row["release_year"] . "</p>";
                echo "<p>توضیحات: " . $row["description"] . "</p>";
                echo "<p>امتیاز: " . $row["rating"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "هیچ فیلم یا سریالی پیدا نشد.";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
