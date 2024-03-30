<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $city = $_POST['city'];

    $_SESSION['user_data'] = array(
        'name' => $name,
        'age' => $age,
        'salary' => $salary,
        'city' => $city
    );

    header("Location: data_output_c.php");
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
    Имя: <input type="text" name="name"><br><br>
    Возраст: <input type="text" name="age"><br><br>
    Зарплата: <input type="text" name="salary"><br><br>
    Город: <input type="text" name="city"><br><br>
    <input type="submit" value="Отправить">
</form>
</body>
</html>
