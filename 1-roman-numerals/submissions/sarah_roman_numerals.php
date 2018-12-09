<?php
$givenYear = $year = 999;
$result = '';

$romanArrayList = [
	'M' => 1000,
	'CM' => 900,
	'D' => 500,
	'CD' => 400,
	'C' => 100,
	'XC' => 90,
	'L' => 50,
	'XL' => 40,
	'X'=> 10,
	'IX' => 9,
	'V' => 5,
	'IV' => 4,
	'I' => 1
];

do {
	foreach ($romanArrayList as $key => $value) {
		if ($year >= $value) {
			$year -= $value;
			$result .= $key;
			break;
		}
	}

} while ($year > 0);

echo $givenYear . ' : ' . $result;
echo '<br>';
