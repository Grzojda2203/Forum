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
<body onload="loadDoc(); loadPrimary(); loadNewer();">
<p>Najlepsze Forum</p>
<div id="who">
</div>
<table>
	<tr>
		<td><a href="forum/regulamin">Regulamin</a></td>
		<td><a href="forum/regulamin">Najnowsze</a></td>
		<td><a href="forum/regulamin">Kontakt</a></td>
	</tr>
</table>
<div id="primary">
</div>
<div id="newer">
</div>
<div>
<?php foreach($watek->result() as $w): ?>
<tr>
<td><?php echo $w->name; ?></td>
<td><?php echo $w->authorname; ?></td>
<?php endforeach; ?>
<?php foreach($posty->result() as $w): ?>
<?php echo "Tylko w ramach testu-nazwa posta ".$w->name; ?>
<?php endforeach; ?>
</div>
</body>
</html>