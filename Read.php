<?php
$filename = __DIR__ .'/'. "$File";
$fh = fopen($filename, "r");
$line = '';
$number = '0';
	while (!feof($fh)) {
		$line = fgets($fh);
		$trimmed = trim($line);
		$arr[] = explode("—",$trimmed);/// Массив где хранится наименование товара и цена
	}
	fclose($fh);
?>