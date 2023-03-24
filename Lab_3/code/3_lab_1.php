<?php
#a)
echo '1_a';
echo '<pre>';
$str = 'ahb acb aeb aeeb adcb axeb'; # Пример строки
$pattern_1a = '/a..b/'; # То, что мы ищем
preg_match_all($pattern_1a, $str, $matches); # matches - массив, куда мы вставим найденные данные
var_dump($matches[0]);
echo 'end_1_a';
echo '</pre>';
#b)
function pow_3 ($nubmer)
{
    return pow($nubmer[0], 3);
}
$str_b = 'a1b2c3';
echo '<pre>';
    $newString = preg_replace_callback('#[0-9]#', 'pow_3', $str_b);
    echo '1_b';
    echo "\n";
    echo $newString;
echo '</pre>';
echo 'end_1_a';
?>

<div class = "Ссылка обратно на index.php" >
    <body>
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