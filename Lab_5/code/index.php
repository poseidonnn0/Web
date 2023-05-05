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
<title>5_lab</title>
</head>
<body style = "text-align: center">
<div id="form">
    <form action ="index_2.php" method= "POST">
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
            require_once __DIR__ . '/connect-database.php';
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
            //Где $connection = getDBConnection();

            <?php

            $connection = new mysqli("localhost", "login", "password", "web");
            if (mysqli_connect_errno())
            {
                printf("Подключение к серверу _ MySQL _ невозможно. Код ошибки: %s\n", mysqli_connect_error());
                exit;
            }
            if ($result = $connection->query('SELECT * FROM ad ORDER BY created DESC'))
            {
                while( $row = $result->fetch_assoc())
                {
                ?>
                 <tr><td><?php echo $row['category'];?></td><td>
                     </td><td><?php echo $row['description'];?></td><td><?php echo $row['email'];?></td></tr>
                     <?php
                }
                $result->close();
            }
            $connection->close();
            ?>
        </table>
    </div >
</body>
</html>
