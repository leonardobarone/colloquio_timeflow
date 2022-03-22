<aside>
    <div class="top">
        <h1>Leonardo Barone</h1>
        <nav>
            <a class="btn" href="{{route('welcome')}}">
                <i class="fa-solid fa-user"></i>
                <h3>Chi sono</h3>
            </a>
            <a class="btn" href="{{route('like')}}">
                <i class="fa-solid fa-heart"></i>
                <h3>Cosa mi piace</h3>
            </a>
            <a class="btn" href="{{route('social')}}">
                <i class="fa-solid fa-share-nodes"></i>
                <h3>Contatti social</h3>
            </a>
            <a class="btn" href="{{route('contact')}}">
                <i class="fa-solid fa-envelope"></i>
                <h3>Contattami</h3>
            </a>
        </nav>
    </div>
    <div class="bottom">
        <div>
            <hr>
            @if (Route::has('login'))
                <div>
                    @auth
                        <a class="btn" href="{{ route('admin.home') }}">Home</a>
                    @else
                    <a class="btn" href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                    <hr>
                    <a class="btn" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</aside>