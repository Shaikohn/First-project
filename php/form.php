<?php
     $name = $lastname = $visitor_email = $telefono = $message = "";
     $name = $_POST["nombre"];
     $lastname = $_POST["apellido"];
     $visitor_email = $_POST["correo"];
     $telefono = $_POST["telefono"];
     $message = $_POST["mensaje"];
     $email_from = "contacto@shai.com.ar";
     $email_subject = "Nuevo mensaje de un usuario";
     $txt = "$name $lastname, usuario cuyo correo electrónico es $visitor_email y su telefono $telefono, te escribió el siguiente mensaje:\n\n".$message;
     $to = "contacto@shai.com.ar";
     $headers = "From: $email_from \r\n";
     $headers = "Reply-To: $visitor_email \r\n".
     mail($to,$email_subject,$txt,$headers);
     header("Location: /index.html");
?>