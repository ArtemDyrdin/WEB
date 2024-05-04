<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>объявления</title>
</head>
<body>
    <form action="save.php" method="post">
        <label for "email"> Email: </label>
        <label>
            <input name="email" type="email" required placeholder="Введите свой email">
        </label>
        <label for "category"> Категория: </label>
        <label>
            <select  name="category" required>
                <option disabled>Выберите категорию</option>
                <option value="Phones">Телефоны</option>
                <option value="Cars">Машины</option>
                <option value="Another">Другое</option>
            </select>
        </label>
        <p>
            <label for "name">Название:</label>
            <input type="text" name="name" required placeholder="Введите название товара">
        </p>
        <p>
            <label for "description">Описание:</label>
            <textarea name="description" rows="3" placeholder="Опишите товар"></textarea>
        </p>

        <p><input type="submit" value="Отправить"></p>
    </form>

        <?php
        require __DIR__ . "/vendor/autoload.php";
        $client = new Google_Client();
        $client->setApplicationName('Google Pets');
        $client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
        $client->setAccessType('offline');
        try
        {
            $client->setAuthConfig(__DIR__ . '/web-lab4-422218-8443dcf946dc.json');
        }
        catch (\Google\Exception $e)
        {
            echo "Ошибка!\n";
        }
        $service = new Google_Service_Sheets($client);
        $sheetID = "1ZTkKfrTr_3vXl5Y6V9SM7DyPjfdoiVpYZJfPaZiJx0M";
        ?>

    <table>
        <thead>
        <?php
        $range1 = "Product!A1:D1";
        $result1 = null;
        try
        {
            $result1 = ($service->spreadsheets_values->get($sheetID, $range1))->getValues();
        }
        catch (\Google\Service\Exception $e)
        {
            echo "Ошибка при получении заголовков в таблицу\n";
        }
        if (null != $result1)
            foreach ($result1 as $row)
                foreach ($row as $item)
                    echo "<th>$item</th>";

        ?>
        </thead>
        <tbody>
        <?php
        $range2 = "Products!A2:D999";
        $result2 = null;
        try
        {
            $result2 = ($service->spreadsheets_values->get($sheetID, $range2))->getValues();
        }
        catch (\Google\Service\Exception $e)
        {
            echo "Ошибка при получении данных в таблицу\n";
        }
        if (null != $result2)
            foreach ($result2 as $row)
            {
                echo "<tr>";
                foreach ($row as $item)
                    echo "<td>", $item, "</td>";
                echo "</tr>";
            }

        ?>
        </tbody>
    </table>
</body>
</html>