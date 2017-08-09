<?php
/**Resultated by PhpStorm.
 * User: PraID
 * Date: 18.07.2017
 * Time: 15:04
 */

require_once ('functions.php');

// Task1
$str = 'Have you got a minute?';
$strArray = explode(' ', $str);
echo '<br> Result task1: ' . task1($strArray, true).'<br>';

// Task2
$the = [4, 66, 7, 9, 2];
echo '<br><br> Result task2: ' . task2($the, "+") . '<br>';

// Task3
echo '<br><br> Result task3: ' . task3("+", 1, 2, 3, 5.2) . '<br>';

// Task4
echo '<br><br> Result task4: ';
$rx = mt_rand(1, 20);
$ry = mt_rand(1, 20);

task4($rx, $ry);
echo '<br>';

// Task5
$str = 'Анна';
echo '<br><br> Result task5: ' . '<br>';
$res = task5_1($str);
task5_2($res);
echo '<br>';

// Task6
echo '<br><br> Result task6:<br>';
task6();
echo '<br>';

// Task7
echo '<br><br> Result task7:<br>';
$str1 = 'Карл у Клары украл Кораллы';
$str2 = 'Две бутылки лимонада';
task7($str1, $str2);
echo '<br>';

// Task8
echo '<br><br> Result task8:<br>';
$rn = rand(500, 1500);
$LogStr = "RX packets:$rn errors:0 dropped:0 overruns:0 frame:0.";
task8($LogStr);
echo '<br>';

// Task9
echo '<br><br> Result task9:<br>';
task9();
echo '<br>';

// Task10
echo '<br><br> Result task10:<br>';
task10();
echo '<br>';