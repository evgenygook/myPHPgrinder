
<?php
$rows = $_POST['rows']; // количество строк, tr
$cols = $_POST['cols']; // количество столбцов, td
$value = $_POST['value'];

if (is_numeric($rows) && is_numeric($cols) && is_numeric($value)) { //Проверка: пользователь ввёл числа
 echo "It's your bingo's string:";
    //Создаём массив bingo
    //длинна массива равна количеству столбцов. Каждый элеемнт массива-это случаное число. Массив нужно вывести.
     for ($e=1; $e<=$cols; $e++){  //создаём незаполненный массив длинной $cols
        $k=rand(0,$value);
         $bingo[$e]=$k;
     }

    echo "<table border='1'><tr>"; //Публикуем одной строкой
    foreach($bingo as $prt){
        echo "<td>"."$prt"."</td> ";
        unset($prt);
    }
    echo "  </tr></table> <br>";


    echo '<table border="1">'; //начинаем рисовать таблицу при помощи вложенного цикла ниже
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo '<tr>';
        for ($td = 1; $td <= $cols; $td++) {
            $key = rand(1,$value);
            echo '<td>' . $key. '</td>';
            foreach($bingo as $b){

                if ($key == $b){

                    echo "[BINGO: $key]  ";

                }

            }
        }
        echo '</tr>';
    }

    echo '</table>';

}
else {
    echo "NOT THE INTEGER";
} //Сообщение об ошибке

?>



