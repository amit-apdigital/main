<li class="tutorials">
    <a class="changePage" data-link="/tutorials">Tutorials</a>
</li>

@if (Route::has('login'))
<li>
    @auth
    @else
<li class="login">
    <a href="{{ route('login') }}" class="">Log in</a>
</li>

@if (Route::has('register'))
<li>
    <a href="{{ route('register') }}" class="">Register</a>
</li>
@endif
@endauth

@endif