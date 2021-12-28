<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>выборка из textarea</title>
</head>
<body>
    <style>
        textarea {
            width: 354px;
            height: 180px;
        }
    </style>
    <form action='index6.php' method='POST'>
        <textarea name='text' cols='10' rows='5'></textarea><br/>
        <input type='submit' name='btn'><br/>
        <?php
            function count_symbol ($str, $letter) {
                $lenght_str = strlen($str);
                $sum = 0;
                    if ($lenght_str>0) {
                        for ($i=0; $i<$lenght_str; $i++) {
                            if ($str[$i] == $letter) $sum ++;
                        }
                    }
                return $sum;
            } 
            $char = 'a';
            if (isset($_POST['btn'])) {
                echo "В этом тексте символ $char встречается ". count_symbol($_POST['text'], $char). " раз";
            }
        ?>
    </form>
</body>
</html>