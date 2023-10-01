<nav class="navbar navbar-expand-lg fixed-top shadow">
    <div class="container px-5">
        <a class="navbar-brand text-light" href="{{ route('homepage') }}">Libreria di Jessy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
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
