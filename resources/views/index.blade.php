@extends('layouts.master')
{{--nav--}}
<nav>
    <div class="grid">
        <div class="left">
            <h1>JS.</h1>
        </div>
        <div class="right">
            <ul>
                <a href="" class="active"><li>Home</li></a>
                <a href=""><li>About</li></a>
                <a href=""><li>Portfolio</li></a>
                <a href=""><li>Contact</li></a>
            </ul>
        </div>
    </div>
</nav>
<div class="line_nav"></div>
{{--end nav--}}

@section('main')

    {{--landing header--}}
    <div class="head">
        <div class="text">
            <h1>Hoi, Ik ben Jelle &mdash; een <span class="blue">Front-End</span> Developer in de regio Amsterdam.</h1>
            <div class="light_spacing"></div>
            <a href="" class="p_buttom">Portfolio.</a>
            <a href="{{asset('downloads/CV.pdf')}}" download class="cv_button"><img src="{{asset('images/icon/download.png')}}" alt="">Download CV</a>
        </div>
        <div class="img">
            <img src="{{asset('images/head.png')}}" alt="image">
        </div>
    </div>
    {{--End landing header--}}

    <div class="main-info">
        <div class="big_spacing"></div>
        <div class="sidetext">
            <p class="">- About me</p>
        </div>
        <div class="text">
            <h1>Wie ben ik en wat doe <span class="blue">ik</span>.</h1>
        </div>
        <div class="light_spacing"></div>
        <div class="text2">
            <div class="about1">
                <p>Ik ben Jelle Stekelenburg, een 18 jarige Front-end developer uit Schagen. Ik hou ervan om een moeilijke opdracht te krijgen en kijk er erg naar uit om stage te lopen. In mijn stage periode hoop ik op een leuk bedrijf wat mij gaat helpen een betere developer te worden en goed te worden in mijn vak.
                </p>
            </div>
        </div>
        <div class="big_spacing"></div>
        <div class="projects">
            <div class="sidetext">
                <p class="">- Latest projects</p>
            </div>
            <div class="middle">
                <h1>Mijn werk.</h1>
                <div class="grid">
                    <div class="prj">
                        <div class="bg1 bg">
                            <h3>Get up Stand up</h3>
                            <p>Website voor comedian groep in Medemblik</p>
                            <a href="https://getupstandup.nl/" target="_blank">Resultaat</a>
                        </div>
                    </div>
                    <div class="prj">
                        <div class="bg2 bg">
                            <h3>Coming Soon</h3>
                            <p>Coming Soon</p>
                            <a href="" target="_blank">Resultaat</a>
                        </div>
                    </div>
                    <div class="prj">
                        <div class="bg3 bg">
                            <h3>Coming Soon</h3>
                            <p>Coming Soon</p>
                            <a href="" target="_blank">Resultaat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="test"></div>


@endsection
