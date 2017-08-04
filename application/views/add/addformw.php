<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<title>Dodawanie Wątku</title>
<link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/css/style.php";?>"/>
</head>
<body>
<h1>Dodaj Wątek</h1>
<?php
	$attributes=array('id' => 'addform','method'=>'post');
	echo form_open('add/watek',$attributes);
	echo form_hidden('username',$username);
	echo form_hidden('time',date("Y-m-d"));
	echo "Nazwa wątku: ";
	echo form_input('name');
	$options=array(
		'1' =>"Tak",
		'0'=> "Nie"
					 );
	echo "Ważny: ";
	echo form_dropdown('important',$options);
	echo form_submit('submit','Dodaj Watek');
	echo form_close();
?>
<p><a href="<?php echo base_url() ?>">Wróć</a></p>
</body>
</html>
