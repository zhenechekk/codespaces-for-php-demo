<p> Дата и время:
<?php
    // Устанавливаем временную зону (по желанию)
    date_default_timezone_set('Europe/Moscow');

    // Получаем текущую дату и время
    $d = date("d.m.Y H:i");

    // Выводим на экран
    echo $d;
?>