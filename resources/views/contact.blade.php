@extends('layouts.master')

@section('main')

    <nav>
        <div class="grid">
            <div class="left">
                <h1>JS<span class="blue">.</span></h1>
            </div>
            <div class="right">
                <ul>
                    <a href="/"><li>Home</li></a>
                    <a href="/about"><li>About</li></a>
                    <a href="/portfolio"><li>Portfolio</li></a>
                    <a href="/contact" class="active"><li>Contact</li></a>
                </ul>
            </div>
        </div>
    </nav>
    <div class="line_nav"></div>
    {{--end nav--}}

    <div class="contact__spacing"></div>

    <div class="contact">
        <div class="sidetext">
            <p class="" data-aos="fade-right">- Contact me</p>
        </div>

        <div class="heading" data-aos="fade-down">
            <h1>Neem contact<br> met mij op<span class="blue">.</span></h1>
        </div>
        <div class="width">
            <div class="grid">
                <div class="left" data-aos="fade-right">
                    <p class="b">Heb je een opmerking of vraag?<br>Stuur mij een bericht.</p>
                    <div class="light_spacing"></div>
                    <p>Tel: (+031) 6 24421363</p>
                    <p><a href="mailto:jelle@nwave.nl">Mail: Jelle@nwave.nl</a></p>
                </div>
                <div class="right" data-aos="fade-left">
                    <form class="contact-form" action="{{asset('contactform.php')}}" method="post">
                        <input type="text" name="afd1" placeholder="Naam">
                        <input type="text" name="afd2" placeholder="Mail">
                        <textarea name="afd3" placeholder="Bericht" ></textarea>
                        <button type="submit" name="submit">Stuur</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="big_spacing"></div>
    <div class="big_spacing"></div>

@endsection
