<?php
	require_once 'Read.php';
	$number = readline(); // Id товара которое нужно удалить
	unset($arr[$number]); // Удаляю
	$arr = array_values($arr);// раставляю
	$DeleteText = fopen($filename, "w+");
	for($i=0; $i < count($arr); $i++) { // Обнавляю данные в файле 
		if($i < count($arr)-1) {
		$text = $arr[$i][0]." — ".$arr[$i][1]."\n";
		} else {
			$text = $arr[$i][0]." — ".$arr[$i][1];		
		}
		fwrite($DeleteText, "$text");
	}
	fclose($DeleteText);
?>