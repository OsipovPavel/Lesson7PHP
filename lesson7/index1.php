<!-- Вывод большего числа -->

<?php
    function compare_num($a, $b) {
        if ($a > $b) return $a;
        else return $b;
    }
    
    function pow_num ($a, $b) {
        return $a **$b;
    }
    
    function average_num ($a, $b) {
        $sum = $a + $b;
        return $sum / 2;
    }


    echo 'Из чисел 2 и 15 большее - это ', compare_num(2, 15), '<br/>';
    echo '3 в степени 2 равно ', pow_num (3,2), '<br/>';
    echo 'Среднее арифмитеческое 5 и 7 - это ', average_num(5, 7), '<br/>';
?>