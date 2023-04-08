<!doctype html>
<html lang = "ru">
<style>
    body {
        background:url("fon2.jpg"); background-size: 100%;
        background-attachment: fixed;
        background-repeat: repeat-x;
    }
</style>
<?php
function filePA()
{
    $dir = 'categories/';
    $files1 = scandir($dir);
    $arr = array();
    $t = 0;
    for ($i = 0; $i < count($files1); $i++)
    {
        if ($files1[$i] != '.')
        {
            if ($files1[$i] != '..')
            {
                $dir = "categories/{$files1[$i]}";
                $files2 = scandir($dir);
                for ($j = 0; $j < count($files2); $j++)
                {
                    if ($files2[$j] != '.'){
                        if ($files2[$j] != '..')
                        {
                            $dir = "categories/{$files1[$i]}/$files2[$j]/";
                            $files3 = scandir($dir);
                            for ($k = 0; $k < count($files3); $k++)
                            {
                                if ( $files3[$k] != '.')
                                {
                                    if ($files3[$k] != '..')
                                    {
                                        $lines = file_get_contents("categories/{$files1[$i]}/$files2[$j]/$files3[$k]");
                                        $arr[$t] = $files1[$i]; $t++;
                                        $arr[$t] = $files2[$j]; $t++;
                                        $arr[$t] = $files3[$k]; $t++;
                                        $arr[$t] =  $lines; $t++;
}}}}}}}}}
    return ($arr);
}?>
<title>3_lab</title>
</head>
<body style = "text-align: center">
<div id="form">
    <form action ="save.php" method= "post">
        <label for="email" style = "background-color:#2b2c32;
        text-align: center;
        border-radius: 3px 3px 0 0;
        line-height: 30px;
        font-size: 14px;
        font-weight: 500;
        min-width: 40px;
        right: 20px;
        background-color: rgba(105, 105, 105, 0.5);
        padding: 0 0px 0 0;
        color: #FFFFFF;">
            <b>Email:</b></label>
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
        color: #FFFFFF;" type = "email" name= "email" required>
        <label for="category" style = "background-color:#2b2c32;
        text-align: center;
        border-radius: 3px 3px 0 0;
        line-height: 30px;
        font-size: 14px;
        font-weight: 500;
        min-width: 40px;
        right: 20px;
        background-color: rgba(105, 105, 105, 0.5);
        padding: 0 0px 0 0;
        color: #FFFFFF;">
            <b>Category:</b></label>
        <?php
        $dir = "categories/";
        $mas = array();
        $i = 0;
        if (is_dir($dir))
        {
            if ($dh = opendir($dir))
            {
                while (($file = readdir($dh)) !== false)
                {
                    if ($file != '.' && $file != '..')
                    {
                        $mas[$i] = $file;
                        $i++;
                    }
                }
                closedir($dh);
            }
        }
        ?>
        <select style = "background-color:#2b2c32;
        text-align: center;
        border-radius: 3px 3px 0 0;
        line-height: 30px;
        font-size: 14px;
        font-weight: 500;
        min-width: 40px;
        right: 20px;
        background-color: rgba(105, 105, 105, 0.5);
        padding: 0 0px 0 0;
        color: #FFFFFF;" name = "category" required>
            <?php
                foreach ($mas as $s):
            ?>
                <option
                    value = <?php echo $s; ?>><?php echo $s; ?>
                </option>
            <?php endforeach; ?>

        </select>
        <label style = "background-color:#2b2c32;
        text-align: center;
        border-radius: 3px 3px 0 0;
        line-height: 30px;
        font-size: 14px;
        font-weight: 500;
        min-width: 40px;
        right: 20px;
        background-color: rgba(105, 105, 105, 0.5);
        padding: 0 0px 0 0;
        color: #FFFFFF;" for = "title">Title</label>

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
        color: #FFFFFF;" type = "text" name = "title" required>

        <label style = "background-color:#2b2c32;
        text-align: center;
        border-radius: 3px 3px 0 0;
        line-height: 30px;
        font-size: 14px;
        font-weight: 500;
        min-width: 40px;
        right: 20px;
        background-color: rgba(105, 105, 105, 0.5);
        padding: 0 0px 0 0;
        color: #FFFFFF;" for = "description">Description</label>

        <textarea style = "background-color:#2b2c32;
        text-align: center;
        border-radius: 3px 3px 0 0;
        line-height: 30px;
        font-size: 14px;
        font-weight: 500;
        min-width: 40px;
        right: 20px;
        background-color: rgba(105, 105, 105, 0.5);
        padding: 0 0px 0 0;
        color: #FFFFFF;" rows = "1" name = "description"></textarea>

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
        color: #FFFFFF;" type = "submit" value = "Save">
    </form>

    <div id = "table">
        <table style = "background-color:#2b2c32;
        text-align: center;
        border-radius: 3px 3px 0 0;
        line-height: 30px;
        font-size: 14px;
        font-weight: 500;
        min-width: 40px;
        right: 20px;
        background-color: rgba(105, 105, 105, 0.5);
        padding: 0 0px 0 0;
        color: #FFFFFF;">
            <thead>
            <th >Category</th>
            <th>Email</th>
            <th>Title</th>
            <th>Description</th>
            </thead>
            <?php  $mas1 = filePA(); ?>
            <?php for($i =0; $i< count ($mas1); $i = $i+4): ?>
            <tbody>
            <tr>
                <td>
                    <?php
                        echo $mas1[$i];
                    ?>
                </td>
                <td>
                    <?php
                        echo $mas1[$i+1];
                    ?>
                </td>
                <td>
                    <?php
                        echo $mas1[$i+2];
                    ?>
                </td>
                <td>
                    <?php
                        echo $mas1[$i+3];
                    ?>
                </td>
                <?php
                    endfor;
                ?>
            </tr>
            </tbody>
        </table>
    </div >
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
