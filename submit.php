<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $attendance = htmlspecialchars($_POST["attendance"]);

    $line = date("Y-m-d H:i:s") . " — $name: $attendance\n";
    file_put_contents("responses.txt", $line, FILE_APPEND);

    echo "<!DOCTYPE html><html lang='ru'><head><meta charset='UTF-8'><title>Спасибо!</title></head><body>";
    echo "<h1>Спасибо за ответ, $name!</h1>";
    echo "<p>Ваш ответ: <strong>$attendance</strong></p>";
    echo "<a href='index.html'>Вернуться на сайт</a>";
    echo "</body></html>";
}
?>
