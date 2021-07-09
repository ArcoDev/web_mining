<?php
$emailDes = 'contacto@wcms.com.mx';
$name = $_POST['name'];
$email = $_POST['email'];
$issue = $_POST['issue'];
$message = $_POST['message'];

$content = "Nombre: " .$name. 
           "\nEmail: " .$email.
           "\nAsunto: " .$issue.
           "\nMensaje: " .$message;
mail($emailDes, 'Han enviado un mensaej de contaco desde tu sitio web', $content);
