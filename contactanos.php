<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "96392130+BrianDLara@users.noreply.github.com";
    $headers = "From: ".$mailFrom;
    $txt = "Haz recivido un e-mail de ".$name.".\n\n".$message;
    mail($mailTo, $txt, $headers);
    header("Location: contactanos.html?mailsend");
}
