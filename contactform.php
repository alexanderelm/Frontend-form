<?php

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $tags = $_POST['tags'];

    $mailTo = "wrgsoavzkvijzieleo@avxrja.com";
    $headers = "From: ".$mailFrom;
    $txt = "you recvied a mail from ".$name.".\n\n".$tags;

    mail($mailTo);
    header("Location: index.php?mailsend")
}
