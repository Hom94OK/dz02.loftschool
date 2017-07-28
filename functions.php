<?php
/**
 * Created by PhpStorm.
 * User: PraID
 * Date: 18.07.2017
 * Time: 15:03
 * @param $StAr
 * @param bool $bool
 * @return string
 */
// task1
function task1($StAr, $bool = false)
{
	if ($bool) {
		return join(' ', $StAr);
	} else {
		foreach ($StAr as $value) {
			echo '<p>' . $value . '<p>';
		}

		return '';
	}
}

/**
 * @param $NbAr
 * @param $AChar
 * @return float|int
 */
function task2($NbAr, $AChar)
{
	$cof = count($NbAr) - 1;
	for ($i = 0, $sum = 1; $i <= $cof; $i++) {
		switch ($AChar) {
			case "+":
				return array_sum($NbAr);
			case "-":
				$sum -= $NbAr[$i];
				break;
			case "*":
				$sum *= $NbAr[$i];
				break;
			case "/":
				$sum /= $NbAr[$i];
				break;
			default:
				$s1 = "Ошибка !!!: $AChar не является арифметическим действием <br>";
				return "$s1 Попробуйте + - * / ";
		}
	}
	return $sum;
}

// TASK 3
/**
 * @return string
 */
function task3()
{
	$operator = true;
	switch (func_get_arg(0)) {
		case "+":
			for ($sum = func_get_arg(1), $i = 2; $i < func_num_args(); $i++) {
				$sum += func_get_arg($i);
			}
			break;
		case "-":
			for ($sum = func_get_arg(1), $i = 2; $i < func_num_args(); $i++) {
				$sum -= func_get_arg($i);
			}
			break;
		case "*":
			for ($sum = func_get_arg(1), $i = 2; $i < func_num_args(); $i++) {
				$sum *= func_get_arg($i);
			}
			break;
		case "/":
			for ($sum = func_get_arg(1), $i = 2; $i < func_num_args(); $i++) {
				$sum /= func_get_arg($i);
			}
			break;
		default:
			$operator = false;
			$s1 = "Ошибка !!!: " . func_get_arg(0) . " не является арифметическим действием <br>";
			return "$s1 Попробуйте + - * / ";
	}
	if ($operator) {
		for ($str = '', $i = 1; $i < func_num_args(); $i++) {
			if ($i == func_num_args() - 1) {
				$str .= func_get_arg($i) . ' = ';
			} else {
				$str .= func_get_arg($i) . ' ' . func_get_arg(0) . ' ';
			}
		}
		return $str . $sum;
	}
	return '';
}

// TASK 4?
/**
 * @param $x
 * @param $y
 */
function task4($x, $y)
{
	if (!empty($x) && !empty($y)) {
		echo '<table style="border: 1px solid #000; border-collapse: collapse;">';
		for ($i = 1; $i <= $x; $i++) {
			$ox[] = $i;
		}
		for ($i = 1; $i <= $y; $i++) {
			$oy[] = $i;
		}
		if (!empty($ox) && !empty($oy)) {
			foreach ($oy as $indexY) {
				echo '<tr>';
				foreach ($ox as $indexX) {
					$sum = $indexX * $indexY;
					echo '<td style="border: 1px solid #000; padding: 5px;">';
					echo $sum;
					echo '</td>';
				}
				echo '</tr>';
			}
		}
		echo '<table>';
	} else {
		echo 1123;
	}
}

// TASK 5
function task5_1($str)
{
	if (strrev($str) == $str) {
		return true;
	} else {
		return false;
	}
}
function task5_2($res)
{
	echo 'Резултат виконання функції task5_1: " ';
	var_dump($res);
	echo ' " ';
}

// TASK 6
function task6()
{
	$str = date("d.m.Y H:i");
	$mk = mktime(00, 00, 00, 02, 24, 2016);
	echo 'Текущая дата и время: ' . $str . '<br>';
	echo 'unixtime время cоответствующее 24.02.2016 00:00:00: ' . $mk . '<br>';
}

// TASK 7
function task7($str1, $str2)
{
	$s1 = str_replace('К', '', $str1);
	echo $s1 . '<br>';
	$s2 = str_replace('Две', 'Три', $str2);
	echo $s2 . '<br>';
}

// TASK 8
function task8($str)
{
	function smile()
	{
		echo '<pre>
      @@@@            @@@@
     @@@@@@          @@@@@@
     @@@@@@          @@@@@@
      @@@@            @@@@



@                             @
 @@                         @@
   @@@                   @@@
      @@@@@         @@@@@
         @@@@@@@@@@@@@
</pre>';
	}

	preg_match_all('|([0-9]\d*)|', $str, $matches);

	if (preg_match('|\:\)|', $str)) {
		smile();
	} elseif ($matches[0] > 1000) {
		echo 'Сеть есть';
	} else {
		echo 'Сеть отсутствует';
	}
}

// TASK 9
function task9()
{
	$handler = file_get_contents('test.txt');
	echo $handler;
}

// TASK 10
function task10()
{
	file_put_contents('anothertest.txt', 'Hello again!',LOCK_EX);
	echo 'В файл anothertest.txt з вмістом "Hello again!" создан.';
}
