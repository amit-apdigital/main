<li class="tutorials">
    <a class="changePage" data-link="/tutorials">Tutorials</a>
</li>

<!-- @if (Route::has('login')) -->
    <!-- @auth
    @else -->
<li class="login">
    <a class="changePage" data-link="/login">Log in</a>
    <!-- <a class="changePage" data-link="/login" href="{{ route('login') }}" class="">Log in</a> -->
</li>

<!-- @if (Route::has('register')) -->
<li>
    <a class="changePage" data-link="/register">Register</a>

    <!-- <a href="{{ route('register') }}" class="">Register</a> -->
</li>
<!-- @endif
@endauth

@endif -->