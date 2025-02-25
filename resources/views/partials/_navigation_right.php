
<li class="tutorials">
    <a class="changePage" data-link="/tutorials">Tutorials</a>
</li>
<li>
    <a class="changePage" data-link="/privacy-policy">Privacy Policy</a>
</li>
<li class="contact">
    <a class="changePage" data-link="/contact">Contact</a>
</li>

        @if (Route::has('login'))
        <li>
        <div class="">
            @auth
            <a href="{{ url('/home') }}" class="">Home</a>
            @else
            <a href="{{ route('login') }}" class="">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="">Register</a>
            @endif
            @endauth
        </div>
        </li>
        @endif
        