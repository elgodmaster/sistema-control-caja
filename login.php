<?php
session_start();
$msg = "";
if(isset($_SESSION['error'])) {
    switch($_SESSION['error']) {
        case "BD":
            $msg = "Error de conexión a la Base de Datos, intente más tarde...";
            break;
	case "DI":
	    $msg = "Correo i/o Clave incorrectos intente nuevamente...!!";
            break;
	}
}
session_destroy();
?>
<html>
<head>
<title>.::. Sistema de Caja SCC 1.0 .::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 30px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 24px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-weight: bold;
	color: #000000;
}
.style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #330000;
	font-weight: bold;
}
-->
</style>
</head>

<body bgcolor="#FFFFFF" onload="forma.correo.focus();">
<form name="forma" method="post" action="login_accion.php" >
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="490" height="395"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td background="images/login_bg.jpg"><table width="100%"  border="0">
          <tr>
            <td><div align="center"><span class="style1">Control de Acceso SCC 1.0 </span></div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="style4"><?=$msg?></span></div></td>
          </tr>
          <tr>
            <td><p><span class="style2">&nbsp;&nbsp;&nbsp;Email<br>
            </span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="correo" style="width:430px; height:30px;font-size:24px;">
            </p>
			</td>
          </tr>
          <tr>
            <td><span class="style2">&nbsp;&nbsp;&nbsp;Clave<br>
            </span>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="clave" style="width:430px; height:30px;font-size:24px;"></td>
          </tr>
          <tr>
            <td><div align="center"></div></td>
          </tr>
          <tr>
            <td><div align="center"><input type="image" src="images/login_ingresar.gif" width="200" height="60">
            </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="style3">Copyright &copy; 2011 Armosoft</span></div></td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>
