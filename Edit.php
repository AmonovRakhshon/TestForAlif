<?php
	require_once 'Read.php';
	$number = readline(); // Id Товара Наименование и цена
	$New = explode(" ", $number);
	$Id = $New[0];
	$arr[$Id][0] = $New[1];
	$arr[$Id][1] = $New[3];
	$EditText = fopen($filename, "w+t");
	for($i=0; $i < count($arr); $i++) {  // обновляю данные в файле
		if($i < count($arr)-1) {
		$text = $arr[$i][0]." — ".$arr[$i][1]."\n";
		} else {
			$text = $arr[$i][0]." — ".$arr[$i][1];		
		}
		file_put_contents($filename, "$text", FILE_APPEND);
	}
	fclose($EditText);
?>