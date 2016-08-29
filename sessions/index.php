<?php
session_start();
switch(@$_REQUEST['cmd']){
	case 'salir':{
		session_destroy();
		echo "salir";
		header('location:index.php?msg=1');
		break;
	}
	case 'iniciar':{
		$_SESSION['nombre']=$_REQUEST['nombre'];
		$_SESSION['password']=$_REQUEST['password'];
		$_SESSION['sesion']='1';
		header('location:index.php?msg=2');
		break;
	}
	default:{
		
		
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php if(!isset($_SESSION['sesion'])){?>
<form method="post" enctype="multipart/form-data" action="index.php">
<input type="text" name="nombre" />
<input type="password" name="password" />
<input type="hidden" name="cmd" value="iniciar">
<input type="submit">
</form>
<?php } else { ?>
<a href="index.php?cmd=salir">Cerrar Sesion</a>
<?php } ?>

</body>
</html>