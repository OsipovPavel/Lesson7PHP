<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вывод таблицы</title>
</head>
<body>
    <?php
        function set_table ($row, $col, $w_col, $h_row) {
            $table_str = "
            <style>
                table {
                    border-collapse: collapse;
                }
                td {
                    width: {$w_col}px;
                    height: {$h_row}px;
                    border: 1px solid grey;
                }
            </style>
            <table>
                <tbody>";
                for ($i = 1; $i <= $row; $i++) {
                    $table_str .= "<tr>";
                    for ($j =1; $j <= $col; $j++) {
                        $table_str .= "<td></td>";
                    }
                    $table_str .= "</tr>";
                }
            $table_str .= "</tbody>
            </table>";
            return $table_str;
        }

        echo set_table(4,5,100,75);
    ?>
</body>
</html>