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
                    <a href="/about"><li>About</li></a>
                    <a href="/portfolio" class="active"><li>Portfolio</li></a>
                    <a href="/contact"><li>Contact</li></a>
                </ul>
            </div>
        </div>
    </nav>
    <div class="line_nav"></div>
    {{--end nav--}}

    <div class="portfolio__spacing"></div>

    <div class="projects">
        <div class="sidetext">
            <p class="" data-aos="fade-right">- Latest projects</p>
        </div>
        <div class="width">
            <h1 data-aos="fade-down">Mijn werk<span class="blue">.</span></h1>
            <div class="grid">
                <div class="prj">
                    <div class="bg">
                        <h3>Portfolio<span class="blue">.</span></h3>
                        <div class="next_button"><a href="/case-portfolio" class="next"><img src="{{asset('images/icon/next.png')}}" alt=""></a></div>
                    </div>
                </div>
                <div class="prj" >
                    <div class="bg">
                        <h3>Coming Soon<span class="blue">.</span></h3>
                        <div class="next_button"><a href="" class="next"><img src="{{asset('images/icon/next.png')}}" alt=""></a></div>
                    </div>
                </div>
                <div class="prj" >
                    <div class="bg">
                        <h3>Coming Soon<span class="blue">.</span></h3>
                        <div class="next_button"><a href="" class="next"><img src="{{asset('images/icon/next.png')}}" alt=""></a></div>
                    </div>
                </div>
                <div class="prj">
                    <div class="bg">
                        <h3>Coming Soon<span class="blue">.</span></h3>
                        <div class="next_button"><a href="" class="next"><img src="{{asset('images/icon/next.png')}}" alt=""></a></div>
                    </div>
                </div>
                <div class="prj">
                    <div class="bg">
                        <h3>Coming Soon<span class="blue">.</span></h3>
                        <div class="next_button"><a href="" class="next"><img src="{{asset('images/icon/next.png')}}" alt=""></a></div>
                    </div>
                </div>
                <div class="prj">
                    <div class="bg">
                        <h3>Coming Soon<span class="blue">.</span></h3>
                        <div class="next_button"><a href="" class="next"><img src="{{asset('images/icon/next.png')}}" alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="big_spacing"></div>

@endsection
