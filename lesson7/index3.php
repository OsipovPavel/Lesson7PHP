<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Время суток</title>
</head>
<body>
    <?php
        $new_hour = intval(strftime("%H"));
        if ($new_hour < 4) $color = 'black';
        elseif ($new_hour < 12) $color = 'blue';
        elseif ($new_hour < 17) $color = 'yellow';
        else $color = 'orange';
        echo "<style>
            body {
                background-color: $color;
            }
        </style>";
        echo strftime("%H:%M:%S");
    ?>
</body>
</html>