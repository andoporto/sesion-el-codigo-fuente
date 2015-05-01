<?php
session_start(); //Iniciamos la Sesion o la Continuamos
if ($_SESSION['nickname'])
{
	$grabado="El valor Grabado en <a href='index.php'>index.php</a> fué: <strong>".$_SESSION['nickname']."</strong><br />"; //Si existe un nickname generamos el mensaje
}
else
{
	$grabado="No has gradabo ningun Nickname visita la <a href='index.php'>pagina1.php</a>"; //Mensaje que no existe nada Grabado
}
?>

<html>
<head>
</head>
<body>
<?php echo ($grabado); ?>
</body>