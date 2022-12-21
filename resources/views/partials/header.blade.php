<header>
    <div class="container">
        <div class="header-logo mt-5">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <div class="header-nav">
            <nav class="navbar">
                <ul class="navbar-nav d-flex flex-row w-100 justify-content-between">
                    <li class="nav-item">
                        <a class="nav-link" href="/comics">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('comics.index') }}">Comics</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
