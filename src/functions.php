<?php

/**
 * @param array $arrayStr
 * @param bool $return
 *
 * Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе (тег <p>)
 * Если в функцию передан второй параметр true,
 * то возвращать (через return) результат в виде одной объединенной строки.
 * @return string
 */

function task1(array $arrayStr, bool $return = false): string
{
    $result = implode("\n", array_map(fn(string $item): string => "<p>$item</p>", $arrayStr));

    if ($return) {
        return $result;
    }

    echo $result;

    return "";
}

/*Задание #2
Функция должна принимать переменное число аргументов.
Первым аргументом обязательно должна быть строка, обозначающая арифметическое действие,
которое необходимо выполнить со всеми передаваемыми аргументами.
Остальные аргументы это целые и/или вещественные числа.*/

/**
 * @param string $operation
 * @param ...$args
 * @return mixed
 */
function task2(string $operation, ...$args): mixed
{

    foreach ($args as $n => $arg) {
        if (!is_numeric($arg)) {
            trigger_error("argument #$n is not numeric");
            return 'ERROR: wrong argument';
        }
    }

    switch ($operation) {
        case '+':
            return array_sum($args);

        case '-':
            return array_shift($args) - array_sum($args);

        case '/':
            $res = array_shift($args);
            if (in_array(0, $args)) {
                trigger_error("Division by zero");
                return false;
            }
            return array_reduce($args, fn($carry, $item) => $carry / $item, $res);

        case '*':
            return array_reduce($args, fn($carry, $item) => $carry * $item, 1);

        default:
            echo "ERROR: unknown operation!";
    }
    return false;
}

/*Задание #3 (Использование рекурсии не обязательно)
Функция должна принимать два параметра – целые числа.
Если в функцию передали 2 целых числа, то функция должна отобразить таблицу умножения размером со значения параметров, переданных в функцию. (Например если передано 8 и 8, то нарисовать от 1х1 до 8х8). Таблица должна быть выполнена с использованием тега <table>
В остальных случаях выдавать корректную ошибку.*/

/**
 * @param $n1
 * @param $n2
 */
function task3($n1, $n2)
{
    if (!(is_int($n1) && is_int($n2) && ($n1 > 0) && ($n2 > 0))) {
        trigger_error('В функцию должны быть переданы два целых числа!');
        return;
    }

    $tab = '<table>';
    for ($i = 1; $i <= $n1; $i++) {
        $tab .= '<tr style="border: 1px solid;">';
        for ($j = 1; $j <= $n2; $j++) {
            $tab .= '<td style="border: 1px solid;">';
            $tab .= $i * $j;
            $tab .= '</td>';
        }
        $tab .= '</tr>';
    }
    $tab .= '</table>';
    echo $tab;
}

/*Задание #4 (выполняется после просмотра модуля “ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
Выведите информацию отекущей дате в формате 31.12.2016 23:59
Выведите unix time время соответствующее 24.02.2016 00:00:00.*/

function task4()
{
    date_default_timezone_set('Europe/Moscow');
    echo date('d.m.Y H:i') . '<br>';
    echo strtotime('24.02.2016 00:00:00');
}
/*Задание #5 (выполняется после просмотра модуля “ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
Дана строка: “Карл у Клары украл Кораллы”. Удалить из этой строки все заглавные буквы “К”.
Дана строка: “Две бутылки лимонада”. Заменить “Две”, на “Три”.*/
function task5()
{
    $proverb = "Карл у Клары украл Кораллы";
    echo str_replace('К', '', $proverb) . '<br>';

    $lime = "Две бутылки лимонада";
    echo str_replace('Две', 'Три', $lime);
}
/*Задание #6 (выполняется после просмотра модуля “ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
Создайте файл test.txt средствами PHP. Поместите в него текст - “Hello again!”
Напишите функцию, которая будет принимать имя файла, открывать файл и выводить содержимое на экран.*/

/**
 * @param string $fileName
 * @return bool
 */
function task6 (string $fileName): bool
{
    $fileResource = fopen($fileName, 'r');

    if (!$fileResource) {
        return false;
    }

    $str = '';
    while (!feof($fileResource)) {
        $str = fgets($fileResource, 1024);
    }

    echo $str;

    return true;
}
