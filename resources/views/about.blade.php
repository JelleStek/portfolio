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

@endsection
