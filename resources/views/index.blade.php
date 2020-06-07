@extends('layouts.master')

@section('main')

    <div class="head">
        <div class="img">
            <div class="overlay"></div>
        </div>
        <div class="text">
            <h1>Jelle<br>Stekelenburg</h1>
            <p>Front-End Developer</p>
        </div>

        <div class="social">
            <ul>
                <a target="_blank" href="https://github.com/JellyOnMa"><li><img src="{{asset('images/icon1.png')}}"></li></a>
                <a target="_blank" href="https://www.linkedin.com/in/jelle-stekelenburg-1887ba178/"><li><img src="{{asset('images/icon2.png')}}"></li></a>
                <a href="mailto:info@jellestekelenburg.nl"><li><img src="{{asset('images/icon3.png')}}"></li></a>
            </ul>
        </div>
    </div>

    <div class="test"></div>


@endsection
