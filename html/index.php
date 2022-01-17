<?php

include '../src/functions.php';

echo '<b>2.1 возврат массива</b><br/>';
echo task1(['blue', 'red', 'yellow', 'grey'], true);
echo '<b>2.1 вывод в поток</b><br/>';
task1(['blue', 'red', 'yellow', 'grey'], false);

echo '<br><br><b>2.2</b><br>';
echo task2('/', 4, 3, 0.5);
echo '<br>';
echo task2('*', 4, 3, 0.5);
echo '<br>';
echo task2('/', 4, 0, 0.5);

echo '<br><br><b>2.3</b><br>';

echo task3(8, 10);
echo task3(-1, 10);


echo '<br><br><b>2.4</b><br>';

task4();


/*Задание #5 (выполняется после просмотра модуля “ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
Дана строка: “Карл у Клары украл Кораллы”. Удалить из этой строки все заглавные буквы “К”.
Дана строка: “Две бутылки лимонада”. Заменить “Две”, на “Три”.*/
echo '<br><br><b>2.5</b><br>';
$proverb = "Карл у Клары украл Кораллы";
echo str_replace('К', '', $proverb) . '<br>';

$lime = "Две бутылки лимонада";
echo str_replace('Две', 'Три', $lime);

/*Задание #6 (выполняется после просмотра модуля “ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
Создайте файл test.txt средствами PHP. Поместите в него текст - “Hello again!”
Напишите функцию, которая будет принимать имя файла, открывать файл и выводить содержимое на экран.*/
echo '<br><br><b>2.6</b><br>';

const FILE_NAME = 'text.txt';
file_put_contents(FILE_NAME, 'Hello again!');

task6 (FILE_NAME);