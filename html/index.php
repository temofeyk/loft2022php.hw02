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

echo '<br><br><b>2.5</b><br>';
task5();

echo '<br><br><b>2.6</b><br>';

const FILE_NAME = 'text.txt';
file_put_contents(FILE_NAME, 'Hello again!');

task6 (FILE_NAME);