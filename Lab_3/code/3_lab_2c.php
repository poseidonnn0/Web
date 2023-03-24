<?php
session_start();
if(!empty($_POST))
{
    $_SESSION['arr'] = $_POST;
}
?>

<div class = "lab_2b">
    <body style = "background-color:#2b2c32;
        text-align: center;">
    <form action= "" method="POST">
        <br>
        <label for="button" style = "background-color:#2b2c32;
        text-align: center;
        border-radius: 3px 3px 0 0;
        line-height: 30px;
        position: relative;
        font-size: 15px;
        font-weight: 500;
        min-width: 50px;
        right: 20px;
        background-color: rgba(105, 105, 105, 0.5);
        box-shadow: -10px 0 0 rgba(0, 0, 0, 0.5), 10px 0 0 rgba(0, 0, 0, 0.5);
        padding: 0 0px 0 0;
        color: #FFFFFF;">
            <b>Введите, пожалуйста, ваше имя: </b></label>
        <input style = "background-color:#2b2c32;
        text-align: center;
        border-radius: 3px 3px 0 0;
        line-height: 30px;
        font-size: 14px;
        font-weight: 500;
        min-width: 40px;
        right: 20px;
        background-color: rgba(105, 105, 105, 0.5);
        padding: 0 0px 0 0;
        color: #FFFFFF;" type = "text" name="name" required>
        </br>
        <br>
        <label for="button" style = "background-color:#2b2c32;
        text-align: center;
        border-radius: 3px 3px 0 0;
        line-height: 30px;
        font-size: 15px;
        font-weight: 500;
        min-width: 50px;
        position: relative;
        right: 20px;
        background-color: rgba(105, 105, 105, 0.5);
        box-shadow: -10px 0 0 rgba(0, 0, 0, 0.5), 10px 0 0 rgba(0, 0, 0, 0.5);
        padding: 0 0px 0 0;
        color: #FFFFFF;">
            <b>Введите, пожалуйста, ваш рост: </b></label>
        <input style = "background-color:#2b2c32;
        text-align: center;
        border-radius: 3px 3px 0 0;
        line-height: 30px;
        font-size: 14px;
        font-weight: 500;
        min-width: 40px;
        right: 20px;
        background-color: rgba(105, 105, 105, 0.5);
        padding: 0 0px 0 0;
        color: #FFFFFF;" type = "text" name="huge" required>
        </br>
        <br>
        <label for="button" style = "background-color:#2b2c32;
        text-align: center;
        border-radius: 3px 3px 0 0;
        line-height: 30px;
        font-size: 15px;
        font-weight: 500;
        position: relative;
        min-width: 50px;
        right: 20px;
        background-color: rgba(105, 105, 105, 0.5);
        box-shadow: -10px 0 0 rgba(0, 0, 0, 0.5), 10px 0 0 rgba(0, 0, 0, 0.5);
        padding: 0 0px 0 0;
        color: #FFFFFF;">
            <b>Введите, пожалуйста, ваш возраст: </b></label>
        <input style = "background-color:#2b2c32;
        text-align: center;
        border-radius: 3px 3px 0 0;
        line-height: 30px;
        font-size: 14px;
        font-weight: 500;
        min-width: 40px;
        right: 20px;
        background-color: rgba(105, 105, 105, 0.5);
        padding: 0 0px 0 0;
        color: #FFFFFF;" type = "text" name="age" required>
        </br>
        <br>
        <label for="button" style = "background-color:#2b2c32;
        text-align: center;
        border-radius: 3px 3px 0 0;
        line-height: 30px;
        font-size: 15px;
        font-weight: 500;
        position: relative;
        min-width: 50px;
        right: 20px;
        background-color: rgba(105, 105, 105, 0.5);
        box-shadow: -10px 0 0 rgba(0, 0, 0, 0.5), 10px 0 0 rgba(0, 0, 0, 0.5);
        padding: 0 0px 0 0;
        color: #FFFFFF;">
            <b>Введите, пожалуйста, вашу зарплату: </b></label>
        <input style = "background-color:#2b2c32;
        text-align: center;
        border-radius: 3px 3px 0 0;
        line-height: 30px;
        font-size: 14px;
        font-weight: 500;
        min-width: 40px;
        right: 20px;
        background-color: rgba(105, 105, 105, 0.5);
        padding: 0 0px 0 0;
        color: #FFFFFF;" type = "text" name="salary" required>
        </br>
        <input style = "background-color:#2b2c32;
        text-align: center;
        border-radius: 3px 3px 0 0;
        line-height: 30px;
        font-size: 14px;
        font-weight: 500;
        min-width: 40px;
        right: 20px;
        background-color: rgba(105, 105, 105, 0.5);
        padding: 0 0px 0 0;
        color: #FFFFFF;"type = "submit" value="Сохранить">
    </form>
    </body>
    <td> <a href="3_lab_2cS.php"style = " line-height: 2.5;
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

	padding: 0 10px 0 0;">Переход на другую страницу для проверки сохранения сессии в 2b </a></td>
</div>