<?php
    session_start();
?>
<ul>
    <?php
        foreach ($_SESSION['arr'] as $s):
    ?>
    <li>
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
            echo $s;
        ?>
        </p>
    </li>
    <?php
        endforeach;
    ?>
</ul>
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