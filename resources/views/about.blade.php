@extends('layouts.master')

@section('main')

    {{--nav--}}
    <nav>
        <div class="grid">
            <div class="left">
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
        <div class="big_spacing"></div>
        <div class="big_spacing"></div>
        <div class="sidetext">
            <p class="" data-aos="fade-right">- About me</p>
        </div>
        <div class="text" data-aos="fade-down">
            <h1>Wie ben ik en<br> wat doe ik<span class="blue">.</span></h1>
        </div>
        <div class="light_spacing"></div>
        <div class="text2">
            <div class="about1" data-aos="fade-up">
                <p>Hoi, Ik ben Jelle Stekelenburg, een 18 jarige gemotiveerde Front-End Developer uit Schagen. Ik volg de opleiding Mediadeveloper op het Mediacollege Amsterdam waar ik leer progammeren. Momenteel progammeer ik veel met de framework Laravel, waar deze website ook in is gemaakt. En probeer ik mezelf steeds meer te leren, door middel van stage of eigen initiatief<span class="blue">.</span>
                </p>
            </div>
        </div>
        <div class="big_spacing"></div>
    </div>
    <div class="big_spacing"></div>
    <div class="big_spacing"></div>
    <div class="big_spacing"></div>

@endsection
