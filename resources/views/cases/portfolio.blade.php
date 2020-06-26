@extends('layouts.master')

<nav>
    <div class="grid">
        <div class="left">
            <h1>JS<span class="blue">.</span></h1>
        </div>
        <div class="right">
            <ul>
                <a href="/"><li>Home</li></a>
                <a href="/about"><li>About</li></a>
                <a href="/portfolio" class="active"><li>Portfolio</li></a>
                <a href="/contact"><li>Contact</li></a>
            </ul>
        </div>
    </div>
</nav>
<div class="line_nav"></div>
{{--end nav--}}

@section('main')

    <div class="case">
        <div class="bigger_spacing"></div>

        <h1 class="case_head"><span class="blue">"</span>Portfolio<span class="blue">"</span></h1>

        <div class="light_spacing"></div>

        <p>Dit project gaat over mijn portfolio (deze website). Ik heb deze website gemaakt om mijn werk goed te kunnen laten zien aan bedrijven en school,
            Ik ben via <a href="https://www.behance.net/">Bëhance</a> een design tegen gekomen wat mij de inspiratie gaf om dit porfolio te maken.
            Scroll verder voor de case<span class="blue">.</span></p>

        <img src="{{asset('images/cases/portfolio/macbook_main.png')}}" alt="">

        <div class="big_spacing"></div>

        <h2>Devlog <span class="blue">#1</span>.</h2>
        <div class="light_spacing"></div>
        <p>Deze week ben ik begonnen aan mijn nieuwe portfolio, in de eerste week ben ik begonnen met de landing header. De header is het visitekaartje van heel de website, en het is belangrijk om deze zo veel mogelijk informatie te geven en toch clean te houden. Dit heb ik geprobeerd.</p>
        <div class="light_spacing"></div>
        <p><b>Gedaan</b></p>
        <div class="light_spacing"></div>
        <ul>
            <li>Laravel geinstalleerd</li>
            <li>Paths gefixed</li>
            <li>Includes aangemaakt</li>
            <li>Header gemaakt</li>
            <li>Navigatie gemaakt</li>
        </ul>

        <div class="big_spacing"></div>

        <h2>Devlog <span class="blue">#2</span>.</h2>
        <div class="light_spacing"></div>
        <p>Deze week ben ik een design tegen gekomen van een website waar ik erg door ben geïnspireerd. Ik heb aan de hand van het design de landing header aangepast en ben zo verder gegaan aan andere dingen. De hele week ben ik bezig geweest met de volledige index van de website. Ik ben tot nu toe klaar met alles behalve de footer en het responsive maken, de footer moet nog helemaal gemaakt worden, alleen ben ik er nog niet uit hoe die er precies uit moet komen te zien. En qua responsive maken moet ik nog de nav en footer plus een paar kleine dingen.</p>
        <div class="light_spacing"></div>
        <p><b>Gedaan</b></p>
        <div class="light_spacing"></div>
        <ul>
            <li>Design van landing header aangepast</li>
            <li>Nieuwe sass files gemaakt (nav, footer, pages)</li>
            <li>Moodbord gemaakt voor de kleuren die ik gebruik</li>
            <li>Nieuw font toegevoegd genaamt: Neue Machina</li>
            <li>Landing header foto veranderd naar iets met meer style</li>
            <li>Index geüpdate
                <ul>
                    <li>About aangemaakt en gestyled</li>
                    <li>Projecten (portfolio) aangemaakt en gestyled</li>
                    <li>Contact aangemaakt en gestyled</li>
                </ul>
            </li>
            <li>Nieuwe pagina's aangemaakt en in routes gezet
                <ul>
                    <li>/About</li>
                    <li>/portfolio</li>
                    <li>/Contact</li>
                </ul>
            </li>
        </ul>

        <div class="light_spacing"></div>

        <div class="grid">
            <img src="{{asset('images/cases/portfolio/iphone.png')}}" alt="">
            <img src="{{asset('images/cases/portfolio/samsung.png')}}" alt="">
        </div>

        <div class="light_spacing"></div>

        <h2>Devlog <span class="blue">#3</span>.</h2>
        <div class="light_spacing"></div>
        <p>Deze week ben ik voornamelijk bezig geweest met het responsive maken van de website, de index is volledig responsive, net als de about page, de portfolio page en de contact page, het doel is volgende week de eerste case geschreven te hebben. zodat de website volledig klaar is voor gebruik en geen bugs zoals non-responsive design bevat. Sinds deze week staat de website ook live op jellestekelenburg.nl door middel van Laravel Forge en DigitalOcean. Ik heb met mijn docent back-end developent gebeld voor hulp omdat de website op het begin niet reageerde, nu dus wel.</p>
        <div class="light_spacing"></div>
        <p><b>Gedaan</b></p>
        <div class="light_spacing"></div>
        <ul>
            <li>Scroll bar styling veranderd</li>
            <li>Index responsive gemaakt</li>
            <li>Begonnen aan eerste case</li>
            <li>.idea folder verwijderd</li>
            <li>bugs gefixt in verband met contactform</li>
            <li>deisgn op index page tweaks gegeven qua styling</li>
            <li>website live gezet</li>
        </ul>

        <div class="bigger_spacing"></div>

    </div>

@endsection
