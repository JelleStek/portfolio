@include('includes.head')

<nav>
    <div class="grid">
        <div class="left">
            <img src="{{asset('images/nav_logo.png')}}" alt="">
        </div>
        <div class="right">
            <ul>
                <a href="/"><li>Home</li></a>
                <a href="/about"><li>About</li></a>
                <a href=""><li>Portfolio</li></a>
                <a href=""><li>Contact</li></a>
            </ul>
        </div>
    </div>
</nav>

@yield('main')

@include('includes.footer')
