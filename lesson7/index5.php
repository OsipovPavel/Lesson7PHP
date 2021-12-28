<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Рекурсия для числа</title>
</head>
<body>
    <style>
        span {
        padding: 20px;
        }
    </style>
    <?php
        function print_recurce ($a) {
            if ($a < 1) return '';
            return "<span>$a</span>". print_recurce($a-1);
        } 

        echo print_recurce(8);
    ?>
</body>
</html>