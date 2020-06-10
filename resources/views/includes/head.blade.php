<!DOCTYPE html>
<html>
<head>
    <title>Portfolio - Jelle Stekelenburg</title>

    <link rel="stylesheet" href="css/nav.css">          {{-- Nav Styling --}}
    <link rel="stylesheet" href="css/footer.css">       {{-- Footer Styling --}}
    <link rel="stylesheet" href="css/main.css">         {{-- Main/index Styling --}}
    <link rel="stylesheet" href="css/keyframes.css">    {{-- keyframes/animations Styling --}}

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
