<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Удаление цифры из числа</title>
</head>
<body>
    <?php
        $number = 24578514595385;
        $symbol = 5;

        function delete_symbol ($str, $sym) {
            $new_str = '';
            $lenght_str = strlen($str);
            for ($i = 0; $i < $lenght_str; $i++) {
                if ($str[$i] !== $sym) $new_str .= $str[$i];
            }
            return $new_str;
        }
        echo "$number без цифры $symbol: ", delete_symbol ((string)$number, (string)$symbol);
    ?>
</body>
</html>