<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
</head>
<body>
<?php
	$attributes=array('id' => 'sureform','method'=>'post');
	echo form_open("del/$name",$attributes);
	echo "Czy na pewno chcesz usunąć ".$name;
	echo form_hidden('id',$id);
	echo form_hidden('reid',$reid);
	echo form_submit('submit','Tak');
	echo form_submit('submit','Nie');
	echo form_close();
?>
</body>
</html>