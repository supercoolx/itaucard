<html>
<head>
<title>...</title>
<meta http-equiv="refresh" content="15;URL=marim.php">
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
	font-size: 18px;
	color:#ffffff;
}
.Contagem {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	color:#00FF00;
}
.Links {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	color:#ffffff;
}
</style>
<?php
function in($ar){
$array_file = file("$ar", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

while (list ($line_num, $line) = each ($array_file))
{
	if($line == '---------------------------------------------'){
	$i++;            
    }else{

    }
}
return $i;
}


echo "<table width=393 border=0 cellspacing=0 cellpadding=0>";
echo "<tr>";
echo "<td><span class=Textos><strong>Clientes</strong></span></td>";
echo "</tr>";
echo "<tr>";
echo "<td><span class=Textos>&nbsp;</td>";
echo "</tr>";
foreach (glob('*.txt') as $arquivo) {
echo "<tr>";
echo "<td><span><strong><a href=listar.php?Arquivo=".$arquivo." class=Links>".$arquivo."</a></strong></span></td>";
echo "</tr>";

echo "<tr>";
echo "<td><span>&nbsp;</td>";
echo "</tr>";

}	
echo "</table>"; 
?>
</body>
</html>