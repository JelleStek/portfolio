@extends('layouts.master')

@section('main')

    {{--nav--}}
    <nav>
        <div class="grid">
            <div class="left" style="margin: 0;">
                <h1>JS<span class="blue">.</span></h1>
            </div>
            <div class="right">
                <ul>
                    <a href="/"><li>Home</li></a>
                    <a href="/about" class="active"><li>About</li></a>
                    <a href="/portfolio"><li>Portfolio</li></a>
                    <a href="/contact"><li>Contact</li></a>
                </ul>
            </div>
        </div>
    </nav>
    <div class="line_nav"></div>
    {{--end nav--}}

    <div class="main-info">
        <div class="big_spacing"></div>
        <div class="big_spacing amr"></div>
        <div class="sidetext">
            <p class="" >- About me</p>
        </div>
        <div class="text" >
            <h1>Wie ben ik en<br> wat doe ik<span class="blue">.</span></h1>
        </div>
        <div class="light_spacing"></div>
            <div class="about1">
                <p>Hoi, Ik ben Jelle Stekelenburg, een 18 jarige gemotiveerde Front-End Developer uit Schagen. Ik volg de opleiding Mediadeveloper op het Mediacollege Amsterdam waar ik leer progammeren. Momenteel progammeer ik veel met de framework Laravel, waar deze website ook in is gemaakt. En probeer ik mezelf steeds meer te leren, door middel van stage of eigen initiatief<span class="blue">.</span>
                </p>
            </div>
        <div class="big_spacing"></div>
    </div>


    <div class="biggest_spacing"></div>


    <div class="stage">
        <div class="sidetext">
            <p class="">- Stage</p>
        </div>
        <div class="width">
            <h1>Stage<span class="blue">.</span></h1>
            <div class="light_spacing"></div>
            <div class="text">
                <p>De opleiding die ik volg is 3 jaar. In die 3 jaar moet ik 1 jaar lang stage lopen bij 2 verschillende bedrijven. Ik ben sinds eind Juni 2020 klaar met mijn eerste stage bij Justbetter, een bedrijf gespecialiseerd in Magento en Wordpress. Helaas was tijdens mijn stageperiode Covid-19 uitgebroken en heb ik maar 6 weken op kantoor gewerkt en de rest thuis. Dit was iets waar helaas niks aan te doen was, gelukkig heb ik wel veel geleerd van de stage zoals werken met Bedrock en Sage voor Wordpress, gnrok, SEO voor websites, git, git-flow en nog veel meer.</p>
            </div>
            <div class="light_spacing"></div>
            <a href="{{asset('downloads/CV.pdf')}}" download class="cv_button"><img src="{{asset('images/icon/download.png')}}" alt="">Download CV</a>
            <div class="light_spacing"></div>
        </div>
    </div>


@endsection
