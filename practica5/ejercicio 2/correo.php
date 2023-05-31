
<?php
	if(isset($_POST['enviar'])){
		if(!empty($_POST['nombre'])&& !empty($_POST['email'])&& !empty($_POST['asunto']) && !empty($_POST['msg']))
			$name = $_POST['nombre'];
			$asunto = $_POST['asunto'];
			$msg = $_POST['msg'];
			$email = = $_POST['email'];
			$header = "From: $nombre <$email>\r\n";
			$header .= "MIME-Version: 1.0\r\n";
			$header .= "Content-Type: text/html; charset=utf-8\r\n";
			$mail = mail($email,$asunto,$msg,$header);
			if($email){
				echo "<h4>Mail enviado exitosamente! </h4>";

			}
	}





?>