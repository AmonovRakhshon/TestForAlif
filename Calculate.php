<?php
	require_once 'Read.php';
	$calculate = '0';
	for($i=0; $i < count($arr); $i++) { /// Считываю общую сумму
		$calculate += $arr[$i][1];
	}
	$filename = __DIR__ .'/'. "$File";
	file_put_contents($filename, "\n$calculate", FILE_APPEND); // Добавляю в конец файла
?>