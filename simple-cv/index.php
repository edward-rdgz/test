<html>
<head> 
<title>curriculum</title> 
</head> 
<body>
<form action="cv.php" method="post" enctype="multipart/form-data">

Nombre:
<input type="Text" name="Nombre"><br><br>

Apellido Paterno:
<input type="text" name="Apellido_Paterno"><br><br>

Apellido Materno:
<input type="text" name="Apellido_Materno"><br><br>

Sexo:
<input type="radio" name="Sexo" value="Mujer" checked>Mujer
<input type="radio" name="Sexo" value="Hombre" checked>Hombre<br><br>

Edad:
<input type="text" name="Edad"><br><br>

Fecha de Nacimiento:
<select name="Dia">                                                                                                                                              
<option value="01" selected>01
<option value="02" selected>02
<option value="03" selected>03
<option value="04" selected>04
<option value="05" selected>05
<option value="06" selected>06
<option value="07" selected>07
<option value="08" selected>08
<option value="09" selected>09
<option value="10" selected>10
<option value="11" selected>11
<option value="12" selected>12
<option value="13" selected>13
<option value="14" selected>14
<option value="15" selected>15
<option value="16" selected>16
<option value="17" selected>17
<option value="18" selected>18
<option value="19" selected>19
<option value="20" selected>20
<option value="21" selected>21
<option value="22" selected>22
<option value="23" selected>23
<option value="24" selected>24
<option value="25" selected>25
<option value="26" selected>26
<option value="27" selected>27
<option value="28" selected>28
<option value="29" selected>29
<option value="30" selected>30
<option value="31" selected>31
<option value="Dia" selected>Dia</select>

<select name="Mes">
<option value="Enero" selected>Enero
<option value="Febrero" selected>Febrero
<option value="Marzo" selected>Marzo
<option value="Abril" selected>Abril
<option value="Mayo" selected>Mayo
<option value="Junio" selected>Junio
<option value="Julio" selected>Julio
<option value="Agosto" selected>Agosto
<option value="Septiembre" selected>Septiembre
<option value="Octubre" selected>Octubre
<option value="Noviembre" selected>Noviembre
<option value="Diciembre" selected>Diciembre
<option value="Mes" selected>Mes</select>

<select name="Ano">
<option value="1990" selected>1990
<option value="1991" selected>1991
<option value="1992" selected>1992
<option value="1993" selected>1993
<option value="1994" selected>1994
<option value="1995" selected>1995
<option value="1996" selected>1996
<option value="1997" selected>1997
<option value="1998" selected>1998
<option value="1999" selected>1999
<option value="2000" selected>2000
<option value="2001" selected>2001
<option value="2002" selected>2002
<option value="2003" selected>2003
<option value="2004" selected>2004
<option value="2005" selected>2005
<option value="2006" selected>2006
<option value="2007" selected>2007
<option value="2008" selected>2008
<option value="2009" selected>2009
<option value="2010" selected>2010
<option value="2011" selected>2011
<option value="2012" selected>2012
<option value="2013" selected>2013
<option value="Ano" selected>Ano</select><br><br>

Estado Civil:
<input type="radio" name="Civil" value="Soltero" checked>Soltero
<input type="radio" name="Civil" value="Casado">Casado
<input type="radio" name="Civil" value="Divorciado">Divorciado
<input type="radio" name="Civil" value="Union Libre">Union Libre<br><br>

Direccion:<br>

Calle:
<input type="text" name="Calle"> 

Numero Exterior:
<input type="text" name="Numero_Exterior">

Manzana:
<input type="text" name="Manzana">

Lote:
<input type="text" name="Lote"><br><br>

Colonia:
<input type="text" name="Colonia">

Codigo Postal:
<input type="text" name="Codigo_Postal"><br><br>

E-mail:
<input type="text" name="Email"><br><br>

Telefono:
<input type="text" name="Telefono"><br><br>

Experiencia:<br>
<textarea cols="50" rows="4" name="Experiencia"></textarea><br><br>

Foto:
<input type="file" name="foto"><br>

<input type="submit" name="Enviar" value="Enviar">
<input type="button" name="Limpiar" value="Limpiar">
<input type="button" name="Cancelar" value="Cancelar">

</form>
</body>
</html>