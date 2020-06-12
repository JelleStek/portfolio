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
            <a href="" class="cv_button"><img src="{{asset('images/icon/download.png')}}" alt="">Download CV</a>
        </div>
        <div class="img">
            <img src="{{asset('images/head.png')}}" alt="image">
        </div>
    </div>
    {{--End landing header--}}

    <div class="test"></div>


@endsection
