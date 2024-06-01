<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Объявления</title>
</head>
<body>
<form action="save.php" method="post">
    <label for "email"> Email:
    <label>
        <input name="email" type="email" required placeholder="Введите свой email">
    </label>
    <label for "category"> Категория:
    <label>
        <select  name="category" required>
            <option disabled>Выберите категорию</option>
            <option value="Phones">Телефоны</option>
            <option value="Cars">Машины</option>
            <option value="Another">Другое</option>
        </select>
    </label>
    <p>
        <label for "name">Название:
        <label>
            <input type="text" name="name" required placeholder="Введите название товара">
        </label>
    </p>
    <p>
        <label for "description">Описание:
        <label>
            <textarea name="description" rows="3" placeholder="Опишите товар"></textarea>
        </label>
    </p>

    <p><input type="submit" value="Отправить"></p>
</form>
<?php
