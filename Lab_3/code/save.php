<?php
function redirectToHome(): void
{
    header('Location: 3_lab_3.php');
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description']))
{
    redirectToHome();
}

$category = $_POST['category'];
$title = $_POST['title'];
$desc = $_POST['description'];
$ema = $_POST['email'];

$dir = "categories/{$category}/{$ema}";
if (is_dir($dir))
{
    $filePath = "categories/{$category}/{$ema}/{$title}.txt";
}
else
{
    $folder = "categories/{$category}/{$ema}";
    $result = mkdir($folder);
    $filePath = "categories/{$category}/{$ema}/{$title}.txt";
}
if (false ===  file_put_contents($filePath, $desc))
{
    throw new Exception('Something went wrong, pls: ');
}
chmod($filePath, 0777);
redirectToHome();