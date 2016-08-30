<html>
<body>
<?php
$Nombre = $_REQUEST['Nombre'];
print "Nombre: $Nombre <br>";

$Apellido_Paterno = $_REQUEST['Apellido_Paterno'];
print "Apellido Paterno: $Apellido_Paterno <br>";

$Apellido_Materno = $_REQUEST['Apellido_Materno'];
print "Apellido Materno: $Apellido_Materno <br>";

$Sexo = $_REQUEST['Sexo'];
print "Sexo: $Sexo <br>";

$Edad = $_REQUEST['Edad'];
print "Edad: $Edad <br>";

$Dia = $_REQUEST['Dia'];
$Mes = $_REQUEST['Mes'];
$Ano = $_REQUEST['Ano'];
print "Fecha de Nacimiento: $Dia/$Mes/$Ano <br>";

$Civil = $_REQUEST['Civil'];
print "Estado Civil: $Civil <br>";

$Calle = $_REQUEST['Calle'];
print "Calle: $Calle <br>";

$Numero_Exterior = $_REQUEST['Numero_Exterior'];
print "Numero Exterior: $Numero_Exterior <br>";

$Manzana = $_REQUEST['Manzana'];
print "Manzana: $Manzana <br>";

$Lote = $_REQUEST['Lote'];
print "Lote: $Lote <br>";

$Colonia = $_REQUEST['Colonia'];
print "Colonia: $Colonia <br>";

$Codigo_Postal = $_REQUEST['Codigo_Postal'];
print "Codigo Postal: $Codigo_Postal <br>";

$Email = $_REQUEST['Email'];
print "Email: $Email <br>";

$Telefono = $_REQUEST['Telefono'];
print "Telefono: $Telefono <br>";

$Experiencia = $_REQUEST['Experiencia'];
print "Experiencia: $Experiencia <br>";


//subir un archivo al servidor web
if(is_uploaded_file($_FILES['foto']['tmp_name']))
{
//$nombreDirectorio = "bd-curriculum";
$nombreArchivo = $_FILES['foto']['name'];
$nombreCompleto = /*$nombreDirectorio.*/$nombreArchivo;
if(is_file($nombreCompleto))
{
$id_unico = date('Y-m-d'); // checar id, porque no detecta la variable
$nombreArchivo = $id_unico."_".$nombreArchivo;
}
move_uploaded_file($_FILES['foto']['tmp_name'],/*$nombreDirectorio.*/$nombreArchivo);
}
else
print "<br> No se ha podido subir el archivo <br>";

//Visualizar el archivo subido al servidor.
print "<td><A target = '_blank' HREF = '".$nombreArchivo."'> Ver Imagen </A></td>\n";

//Regresar al formulario
print "<BR> <A HREF = 'index.php'>[REGRESAR]</A>\n";


$Enviar = $_REQUEST['Enviar'];
if($Enviar == "Enviar")

//$Limpiar = $_REQUEST['Limpiar'];

//$Cancelar = $_REQUEST['Cancelar'];

?>
</body>
</html>