<html>
<head>
<title>...</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="mobile-web-app-capable" content="yes">
</head>
<body>
<style type="text/css">
body {
	background-color: #333333;
}
a:hover {
	color: #FF9900;
}
.Textos {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color:#ffffff;
}
.Links {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	color:#ffffff;
}
</style>
<a href="JavaScript: window.history.back();" class="Links">Voltar</a>
<div><br></div>
<?php

$location = $_GET['Arquivo'];
if ( file_exists( $location )) {
$file = fopen($location, "r");

echo "<table width=100% border=0 cellspacing=0 cellpadding=0 class=Textos>";

while(!feof( $file )) {
	echo "<tr>";
	echo "<td>".fgets($file)."</td>";
	echo "</tr>";
	
} 
fclose($file);
echo "</table>";
}
else
{
echo "Erro";}
?>
</body>
</html>