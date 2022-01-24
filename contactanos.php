<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = "Enviado de pagina web"
    $phone = $_POST['phone'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "dentalinnjl@gmail.com";
    $headers = "From: ".$mailFrom. "\r\n" .
    "CC: 96392130+BrianDLara@users.noreply.github.com";
    $txt = "Haz recivido un e-mail de ".$name ."\r\nTelefono: " .$phone ."\r\n
    Message: " .$message;
    mail($mailTo, $subject, $txt, $headers);
    header("Location: contactanos.html?mailsend");
}
