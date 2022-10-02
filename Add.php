<?php
	$tovar = readline(); // Новый товар
	$filename = __DIR__ .'/'. "$File";
	$AddText = fopen($filename, "a+");
	fwrite($AddText, "\n$tovar");
	fclose($AddText);
?>