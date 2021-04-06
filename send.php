<?php
	if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["telefono"]) && isset($_POST["mensaje"]) ){
		$to = "hello@waffle.social";
		$subject = "Consulta desde vitaminavida.com.ar";		
		$contenido = "Nombre: ".$_POST["nombre"]."\n\nEmail: ".$_POST["email"]."\n\nTelefono: ".$_POST["telefono"]."\n\nMensaje: ".$_POST["mensaje"]."\n\n";
		$header = "From: hello@waffle.social\nReply-To: ".$_POST["email"]."\n";
		$header .= "Mime-Version: 1.0\n";
		$header .= "Content-Type: text/plain";
		if(mail($to, $subject, $contenido ,$header)){
			include 'confirmation.html';
		}
	}
?>