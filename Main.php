<?php
 $Scan = readline('');
	$Name = explode(", ", $Scan);
	$File = $Name[0]; /// Имя файла
	$ToDo = $Name[1]; /// Действие
	
if($ToDo == 'add') {
	require_once 'Add.php'; /// Добавление нового товара
}
if($ToDo == 'calculate') {
	require_once 'Calculate.php'; /// Вычесление общей суммы
}
if($ToDo == 'delete') {
	require_once 'Delete.php'; /// Удаление из списка
}
if($ToDo == 'edit') {
	require_once 'Edit.php'; /// Изменение записи в списке
}
?>
