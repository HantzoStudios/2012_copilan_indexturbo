<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="http://www.kopilan.com/icokopilan.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kopilan.Contacto.</title>
<style type="text/css">
<!--
-->
</style>
<link href="construccion.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
a:link {
	text-decoration: none;
	color: #000;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
	color: #000;
}
-->
</style></head>

<body>
 <table width="907" border="0" align="center" cellpadding="0" cellspacing="0" class="tablaalineacion">
  <tr>
    <td class="fondocontactoect">
	
      <form id="form1" name="contacto.php" method="post" action="file:///D|/COSAS FNEX/mesa de trabajo fnx/Dreamweaverfnx/contacto.php">
      <?
if (!$_POST){
?>
      <table width="907" border="0" cellspacing="0">
          <tr>
            <td width="125" align="left" class="fondoblanco"><strong>&nbsp;Nombre:</strong></td>
            <td width="499" class="fondoblanco"><input name="nombre" type="text" id="nombre" size="30" /></td>
            <td width="277" rowspan="9"><img src="imagenes/marcologo.png" width="277" height="470" border="0" align="right" usemap="#Map" /></td>
          </tr>
          <tr class="fondoblanco">
            <td align="left"><strong>&nbsp;Apellidos:</strong></td>
            <td><input name="apellidos" type="text" id="apellidos" size="30" /></td>
          </tr>
          <tr class="fondoblanco">
            <td align="left"><strong>&nbsp;Empresa:</strong></td>
            <td><input name="empresa" type="text" id="empresa" size="30" /></td>
          </tr>
          <tr class="fondoblanco">
            <td align="left"><strong>&nbsp;Teléfono:</strong></td>
            <td><input type="text" name="telefono" id="telefono" /></td>
          </tr>
          <tr class="fondoblanco">
            <td align="left"><strong>&nbsp;E-mail:</strong></td>
            <td><input name="email" type="text" id="email" size="40" /></td>
          </tr>
          <tr class="fondoblanco">
            <td align="left" valign="top"><strong>&nbsp;Comentario:</strong></td>
            <td><textarea name="comentario" cols="55" rows="7" id="comentario"></textarea></td>
          </tr>
          <tr class="fondoblanco">
            <td align="right"><input name="button" type="submit" id="button" value="Enviar" /></td>
            <td><input name="button2" type="reset" class="centro" id="button2" value="Borrar" /></td>
          </tr>
          <tr class="fondoblanco">

            <td colspan="2" align="left">POLÍTICA DE PRIVACIDAD</td>
          </tr>
          <tr class="fondoblanco">
            <td colspan="2" align="left" valign="top" class="fondoblanco">En cumplimiento a los dispuesto en la Ley Orgánica 15/1999 de 13 de Diciembre, les informamos que, en todo momento, podrán ejercitar los derechos de acceso, rectificación, oposición, cancelación y, en su caso, revocación del consentimiento para la cesión de sus datos en los términos previstos en la ley y demás normas que la desarrollan, dirigiéndose a Kopilan, Ibaitarte 5,  20870 Elgoibar(Guípuzcoa).</td>
          </tr>
          <tr>
            <td colspan="2" align="center" class="menuabajo"><a href="index.html" class="textomenunegro"></a><a href="index.html" class="textomenunegro">Inicio</a><a href="historia.html" class="textomenunegro">Empresa</a><a href="donde.html" class="textomenunegro">Localización</a><a href="contacto.php" class="textomenunegro"><span class="textomenusverde">Contacto</span></a></td>
            <td align="center" class="menuabajo"><a href="ofertas.html"><img src="imagenes/ofertas.png" alt="ofertas" width="277" height="30" border="0" align="right" /></a></td>
          </tr>
          <tr>
      <td colspan="5" align="right" bgcolor="#CCC">2011© All rights reserved | <a href="legal.html">Aviso legal</a> | <a href="sitemap.html">Mapa Web</a></td>
  </tr>
        </table>
    </form></td>
   </tr>
  <?
}else{
	$cuerpo= "Formulario enviado\n";
	$cuerpo.= "Nombre:".$_POST["nombre"]."\n";
	$cuerpo.= "Apellidos:".$_POST["apellidos"]."\n";
	$cuerpo.= "Empresa:".$_POST["empresa"]."\n";
	$cuerpo.= "Telefono:".$_POST["telefono"]."\n";
	$cuerpo.= "E-mail:".$_POST["email"]."\n";
	$cuerpo.= "Comentario:".$_POST["comentario"]."\n";
	
mail("kopilan@kopilan.com","Formulario recibido de la web",$cuerpo);
echo "Se ha enviado correctamente.";
}
?>
</table>

<map name="Map" id="Map">
  <area shape="poly" coords="13,457,10,372,131,378,225,460" href="imagenes/kopilantarjeta2011.jpg" target="_blank" alt="tarjeta de empresa" />
</map>
</body>
</html>