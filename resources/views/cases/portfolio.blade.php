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

        <div class="grid">
            <img src="{{asset('images/cases/portfolio/iphone.png')}}" alt="">
            <img src="{{asset('images/cases/portfolio/samsung.png')}}" alt="">
        </div>
    </div>

@endsection
