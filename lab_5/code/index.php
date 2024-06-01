<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма и объявления</title>
</head>
<body>
<h1>Добавить объявление</h1>
    <form action="save.php" method="post">
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Категория: <input type="text" name="category" required></label><br>
        <label>Название: <input type="text" name="name" required></label><br>
        <label>Описание: <textarea name="description" required></textarea></label><br>
        <button type="submit">Отправить</button>
    </form>

    <h1>Все объявления</h1>
    <?php
    // Подключение к базе данных
    $mysqli = new mysqli('db', 'root', '1234', 'web');
    if ($mysqli->connect_errno) {
        printf("Подключение к серверу MySQL невозможно, код ошибки: %s\n", $mysqli->connect_error);
        exit();
    }

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
    ?>

    <table border="1">
        <tr>
            <th>Email</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Категория</th>
        </tr>
        <?php foreach ($data as $row): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
                <td><?php echo htmlspecialchars($row['title']); ?></td>
                <td><?php echo htmlspecialchars($row['description']); ?></td>
                <td><?php echo htmlspecialchars($row['category']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
