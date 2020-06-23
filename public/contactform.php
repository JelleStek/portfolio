<?php

if (isset($_POST['submit'])) {
    $name = $_POST['afd1'];
    $mailFrom = $_POST['afd2'];
    $message = $_POST['afd3'];

    $mailTo = "Jelle@nwave.nl";
    $headers = "Mail van ".$name;
    $txt = "Email: ".$mailFrom."\n\n".$message;

    mail($mailTo, "Mail", $txt, $headers);
    header("Location: https://jellestekelenburg.nl/");
}



