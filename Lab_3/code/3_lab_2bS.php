<?php
session_start();
    $name = $_SESSION['name'];
    $surname = $_SESSION['surname'];
    $age = $_SESSION['age'];
?>
<!DOCTYPE html>
<html lang = "ru">
<style>
    body {
        background:url("fon2.jpg"); background-size: 100%;
        background-attachment: fixed;
        background-repeat: repeat-x;
    }
</style>

<head>
    <meta charset="UTF-8">
    <title>Задание 2_bS</title>
</head>

<div class = "Ссылка обратно на index.php" >
    <body style = "text-align: center;">
    <td> <a href="index.php"style = " line-height: 2.5;
        text-align: center;
        color: #FFFFFF;
        background: #151619;
        border-bottom: 2px solid #2b2c32;
        border-top: 2px solid #000;
        margin: 0 0 15px;
        width: 99%;
        position: relative;
        left: 15px;
        background-color: rgba(0, 0, 0, 0.5);
        box-shadow: -10px 0 0 rgba(0, 0, 0, 0.5), 10px 0 0 rgba(0, 0, 0, 0.);
        padding: 0 10px 0 0;">Переход обратно на основную страницу </a></td>
    </body>
</div>

<div class = "Result">
    <p style = "background-color:#2b2c32;
    text-align: center;
    border-radius: 3px 3px 0 0;
    line-height: 30px;
    font-size: 15px;
    font-weight: 500;
    min-width: 50px;
    right: 20px;
    background-color: rgba(105, 105, 105, 0.5);
    box-shadow: -10px 0 0 rgba(0, 0, 0, 0.5), 10px 0 0 rgba(0, 0, 0, 0.);
    padding: 0 0px 0 0;
    color: #FFFFFF;">
        <?php
        echo "Имя = " . $name;
        echo "<br> Фамилия = " . $surname;
        echo "<br> Возраст = " . $age . "</br>";
        ?>
    </p>
</div>

</html>