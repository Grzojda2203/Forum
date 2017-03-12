<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<title>NajlepszeForum</title>
<script type="text/javascript">
function loadDoc()
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("who").innerHTML=this.responseText;
		}
	}
	xhttp.open("GET","/default/index.php/index/who",true);
	xhttp.send();
	setTimeout("loadDoc()",1000);
}
function loadPrimary()
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("primary").innerHTML=this.responseText;
		}
	}
	xhttp.open("GET","/default/index.php/index/primary",true);
	xhttp.send();
}
function loadNewer()
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("newer").innerHTML=this.responseText;
		}
	}
	xhttp.open("GET","/default/index.php/index/newer",true);
	xhttp.send();
	setTimeout("loadNewer()",1000);
}
</script>
</head>
<body onload="loadDoc();<?php if(!isset($watki)&&!isset($posty)){echo "loadPrimary();";}?> loadNewer();">
<div id="who">
</div>
<table>
	<tr>
		<td><a href="forum/regulamin">Regulamin</a></td>
		<td><a href="forum/regulamin">Najnowsze</a></td>
		<td><a href="forum/regulamin">Kontakt</a></td>
	</tr>
</table>
<div id="primary"></div>
<div id="newer">
</div>
<div>
<?php
	if(isset($watek))
	{
		foreach($watek->result() as $w)
		{
			echo "<table>
			<tr>
			<th>Nazwa wątku </th>
			<th>Autor wątku </th>
			</tr>
			<tr>
			<td>".$w->name."</td>
			<td>".$w->authorname."</td>
			</tr>
			</table>";
		}
		foreach($posty->result() as $w)
		{ 
			echo "<table>
			<tr>
			<th>Nazwa posta </th>
			<th>Autor posta </th>
			<th>Data ostatniej aktualizacji</th>
		 	<th>Odpowiedzi </th>
		   	<th>Wyświetleń </th>
		   	</tr>
		  	<tr>
		   	<td><a href=/default/index.php/index/posty/".$w->id.">".$w->name."</a></td>
			<td>".$w->authorname."</td>
			<td>".$w->actudate."</td>
			<td>".$w->odp."</td>
			<td>".$w->wys."</td>
			</tr>
			</table>";
		}
		if(isset($role)&&$role=="administrator"||$role=="administrator_watkow")
		{
			echo "<a href=\"/default/index.php/index/addwatek\">Dodaj watek</a>";
		}
	}
if(isset($wpisy))
{
	foreach($posty->result() as $w)
	{
		 echo "<table>
			<tr>
			<th>Nazwa posta </th>
			<th>Autor posta </th>
			</tr>
			<tr>
			<td>".$w->name."</td>
			<td>".$w->authorname."</td>
			</tr>
			</table>";
	}
	foreach($wpisy->result() as $w)
	{
		echo "Autor: ".$w->authorname;
		echo "Data dodania: ".$w->addtime;
		echo "Treść: ".$w->text;
	}
}
?>
</div>
</body>
</html>