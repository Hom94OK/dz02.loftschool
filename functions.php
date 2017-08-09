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
function task1($ArrayString, $bool = false)
{
	if ($bool) {
		return join(' ', $ArrayString);
	} else {
		foreach ($ArrayString as $value) {
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
function task2($Array_Number, $Arithmetic_symbol)
{
	$cof = count($Array_Number) - 1;
	for ($i = 0, $sum = 1; $i <= $cof; $i++) {
		switch ($Arithmetic_symbol) {
			case "+":
				return array_sum($Array_Number);
			case "-":
				$sum -= $Array_Number[$i];
				break;
			case "*":
				$sum *= $Array_Number[$i];
				break;
			case "/":
				$sum /= $Array_Number[$i];
				break;
			default:
				$s1 = "Ошибка !!!: $Arithmetic_symbol не является арифметическим действием <br>";
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
//	Arithmetic_symbol
	$sum = func_get_arg(1);
	$fna = func_num_args();
	$i = 2;

	switch (func_get_arg(0)) {
		case "+":
			for (; $i < $fna; $i++) {
				$sum += func_get_arg($i);
			}
			break;
		case "-":
			for (; $i < $fna; $i++) {
				$sum -= func_get_arg($i);
			}
			break;
		case "*":
			for (; $i < $fna; $i++) {
				$sum *= func_get_arg($i);
			}
			break;
		case "/":
			for (; $i < $fna; $i++) {
				$sum /= func_get_arg($i);
			}
			break;
		default:
			$s1 = "Ошибка !!!: " . func_get_arg(0) . " не является арифметическим действием <br>";
			return "$s1 Попробуйте + - * / ";
	}
	for ($str = '', $i = 1; $i < $fna; $i++) {
		if ($i == $fna - 1) {
			$str .= func_get_arg($i) . ' = ';
		} else {
			$str .= func_get_arg($i) . ' ' . func_get_arg(0) . ' ';
		}
	}
	return $str . $sum;
}

// TASK 4?
/**
 * @param $x
 * @param $y
 */
function task4($x, $y)
{
	if (empty($x) || empty($y)) {
		echo 'Одна из переменних пуста';
	} elseif (is_int($x) && is_int($y)) {
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
	} elseif (is_double($x) || is_double($y)) {
		echo 'Одна или две переменные дробные числа';
	} elseif (is_string($x) || is_string($y)) {
		echo 'Одна или две переменные строки';
	}
}

// TASK 5
function task5_1($words)
{
	$words = mb_strtolower($words);
	$words = str_replace(' ', '', $words);
	$words = iconv('utf-8', 'windows-1251', $words);
	$words = strrev($words);
	if ($words === strrev($words)) {
		$words = iconv('windows-1251', 'utf-8', $words);
		return true;
	} else {
		$words = iconv('windows-1251', 'utf-8', $words);
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
	file_put_contents('anothertest.txt', 'Hello again!', LOCK_EX);
	echo 'В файл anothertest.txt з вмістом "Hello again!" создан.';
}
