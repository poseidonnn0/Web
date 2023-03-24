<?php
session_start();
if ($_POST["text"])
{
    $textarea = $_POST["text"];
    $count_len = strlen($textarea);
    $count_word = str_word_count($textarea, 0);
}
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
    <title>Задание 2_а</title>
</head>
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
if (!isset($count_word))
{
    $count_len = 0;
}
echo "Количество символов: " . $count_len;
if (!isset($count_word))
{
    $count_word = 0;
}
echo "<br>Количество слов: " . $count_word. "</br>";
?>
</p>
</body>
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
</html>

