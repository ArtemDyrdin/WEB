<?php
session_start();

$userData = $_SESSION['user_data'] ?? array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вывод данных</title>
</head>
<body>
    <h2>Данные пользователя</h2>
    <ul>
        <?php
        foreach ($userData as $key => $value) {
            echo "<li><strong>$key:</strong> $value</li>";
        }
        ?>
    </ul>
</body>
</html>

