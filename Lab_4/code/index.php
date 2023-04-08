<!doctype html>
<html lang = "ru">
<style>
    body {
        background:url("fon2.jpg"); background-size: 100%;
        background-attachment: fixed;
        background-repeat: repeat-x;
    }
</style>
<head>
    <title>Доска объявлений</title>
</head>
<?php
function GOOGLE_GET()
{
    require __DIR__ . '/vendor/autoload.php';

    $client = new Google_Client();
    $client->setApplicationName('Google_table');
    $client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
    $client->setAccessType('offline');
    $client->setAuthConfig(__DIR__ . '/credentials.json');

    $service = new Google_Service_Sheets($client);
    $range = "A:D";
    $spreadsheetId = '1IbVe8g1RQHnAS1hDpZIxvOEvrsn-cNqDSe1J4ToFSFo';

    $response = $service->spreadsheets_values->get($spreadsheetId, $range);

    return($response);
}
?>
<title>4_lab</title>
</head>
<body style = "text-align: center">
<div id="form">
    <form action ="save.php" method= "POST">
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
       /* $dir = "categories/";
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
        }*/
        $mas = array();
        $mas[0] = 'Cars';
        $mas[1] = 'Games';
        $mas[2] = 'Music';
        $mas[3] = 'Other';
        $mas[4] = 'Serials';
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
        <?php

        ?>
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
            <th>Category</th>
            <th>Email</th>
            <th>Title</th>
            <th>Description</th>
            </thead>
            <?php  $mas_1 = GOOGLE_GET();?>
            <?php for($i = 0; $i < count ($mas_1); $i++): ?>
            <?php for($j = 0; $j < count ($mas_1[$i]); $j = $j + 4): ?>
            <tbody>
            <tr>
                <td>
                    <?php echo $mas_1[$i][$j]; ?>
                </td>
                <td>
                    <?php echo $mas_1[$i][$j+1]; ?>
                </td>
                <td>
                    <?php echo $mas_1[$i][$j+2]; ?>
                </td>
                <td>
                    <?php echo $mas_1[$i][$j+3]; ?>
                </td>
                <?php endfor; ?>
                <?php endfor; ?>
            </tr>
            </tbody>
        </table>
    </div >
</body>
</html>
