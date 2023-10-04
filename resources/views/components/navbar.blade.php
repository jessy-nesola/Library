<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-lg" id="mainNav">
    <div class="container px-5">
        <a class="navbar-brand text-light" href="{{ route('homepage') }}">Libreria di Jessy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item">
                        <a class="btn btn-outline-light m-2" href="{{ route('login') }}">Entra</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light m-2" href="{{ route('register') }}">Registrati</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <a class="btn btn-outline-light m-2" href="{{ route('profile') }}">
                            {{ Auth::user()->name }} - {{ Auth::user()->email }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-outline-light m-2" onclick="event.preventDefault(); this.closest('form').submit();">
                                Esci
                            </button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
