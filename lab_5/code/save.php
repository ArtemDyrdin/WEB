<?php

use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function redirectToHome(): void
{
    header('Location:index.php');
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['name'], $_POST['description'])) {
    redirectToHome();
}

$category = $_POST['category'];
$name = $_POST['name'];
$desc = $_POST['description'];
$email = $_POST['email'];

// Подключение к базе данных
$mysqli = new mysqli('db', 'root', '1234', 'web');
if ($mysqli->connect_errno) {
    printf("Подключение к серверу MySQL невозможно, код ошибки: %s\n", $mysqli->connect_error);
    exit();
}

// Экранирование данных для предотвращения SQL-инъекций
$category = $mysqli->real_escape_string($category);
$name = $mysqli->real_escape_string($name);
$desc = $mysqli->real_escape_string($desc);
$email = $mysqli->real_escape_string($email);

// Вставка данных в таблицу
$query = "INSERT INTO ad (email, title, description, category) VALUES ('$email', '$name', '$desc', '$category')";
$mysqli->query($query);

// Получение всех данных из таблицы
$result = $mysqli->query('SELECT * FROM ad');
$data = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Закрытие соединения с базой данных
$mysqli->close();

redirectToHome();

