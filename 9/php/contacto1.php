<?php
//captura de variables
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$consulta=$_POST['consulta'];
//cuerpo del mail
$mensaje="
<strong>Nombre:</strong>$nombre</br></br>
<strong>email:</strong>$email</br></br>
<strong>consulta:</strong>$consulta</br></br>
";
//envio del email
mail("ignacioalianak@gmail.com", "Consulta desde web site", $mensaje, "From $nombre <$mail>\nReply-To:$mail\nContent-Type: text/html; charset=iso-88591\n");
?>