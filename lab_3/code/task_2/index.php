<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST['data'];
    echo "Количество слов: ", str_word_count($data), "<br>";
    echo "Количество символов: ", strlen($data);
}
