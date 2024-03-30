<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    $_SESSION['user_data'] = array(
        'surname' => $surname,
        'name' => $name,
        'age' => $age
    );

    header("Location: data_output_b.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ввод данных</title>
</head>
<body>
<h2>Введите данные</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Фамилия: <input type="text" name="surname"><br><br>
        Имя: <input type="text" name="name"><br><br>
        Возраст: <input type="text" name="age"><br><br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
