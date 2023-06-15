<nav class="navbar">
    <div class="nav-center">
        <div class="nav-header">
            <a href="index.html" class="nav-logo">
                <img src="{{ asset('logo.png') }}" alt="simply recipes" />
            </a>
            <button class="nav-btn btn">
                <i class="far fa-bars"></i>
            </button>
        </div>
        <div class="nav-links">
            <a href="{{ route('index') }}" class="nav-link"> Home </a>
            <a href="{{ route('about') }}" class="nav-link"> About </a>
            <a href="{{ route('tags') }}" class="nav-link"> Tags </a>
            <a href="{{ route('recipes') }}" class="nav-link"> Recipes </a>
            <a href="{{ route('contact') }}" class="nav-link"> Contact </a>
            <a href="{{ route('premium') }}" class="nav-link"> Premium </a>

            <div class="nav-link contact-link">
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">Logout</button>
                    </form>
                @endauth
                @guest
                    <a href="{{ route('auth.view', ['type' => 'register']) }}" class="btn"> Register </a>
                @endguest
            </div>
        </div>
    </div>
</nav>
