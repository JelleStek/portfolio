<!DOCTYPE html>
<html>
<head>
    <title>Portfolio - Jelle Stekelenburg</title>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/keyframes.css">

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script>
        $(window).on('scroll', function () {
            if($(window).scrollTop()) {
                $('nav').addClass('bg');
            }
            else {
                $('nav').removeClass('bg');
            }
        })

    </script>
</head>

<body>
