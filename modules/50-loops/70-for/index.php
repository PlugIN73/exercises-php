<?php

function sumOfSeries($start, $finish)
{
    $i = $start;
    /*
    * Обратите внимание: мы создали новую переменную,
    * и не используем аргумент в качестве счётчика.
    * Счётчик будет меняться в процессе выполнения функции,
    * а изменять аргументы — плохая пратика.

    * Note: we create a new variable here,
    * rather than use the argument as a counter.
    * Counter will be chaning as the function works,
    * and changing arguments is considered harmful.
    */

    $sum = 0;
    for ($i; $i <= $finish; $i++) {
        $sum += $i;
    }

    return $sum;
}
