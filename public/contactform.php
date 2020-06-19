<?php

if (isset($_POST['submit'])) {
    $name = $_POST['afd1'];
    $mailFrom = $_POST['afd2'];
    $message = $_POST['afd3'];

    $mailTo = "Jelle@nwave.nl";
    $headers = "Mail van ".$mailFrom;

    mail($mailTo, "Mail", $message, $headers);
    header("Location: https://jellestekelenburg.nl/");
}



