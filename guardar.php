<?php 
	$nom=$_POST["nom"];
	$ape=$_POST["ape"];
	$tdoc=$_POST["tdoc"];
	$doc=$_POST["doc"];
	$dirr=$_POST["dirr"];
	$barr=$_POST["barr"];
	$ciu=$_POST["ciu"];
	$tel=$_POST["tel"];
	$cor=$_POST["cor"];
	$db=mysql_connect("localhost","root","");
	mysql_select_db("nuschi",$db);
	mysql_query("insert into acudiente values('$nom','$ape','$tdoc','$doc','$dirr','$barr','$ciu','$tel','$cor')");
?>


<html>
<head>
	<title>REGISTRO GUARDADO</title>
</head>
<body>
	<div class="form-group">
		<div class="col-sm-offset-10 col-sm-10">
		<button type="submit" class="btn btn-default">REGISTRO GUARDADO</button>
	</div>
	</div>


</body>
</html>

















    