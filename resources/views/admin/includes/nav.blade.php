<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">

        {{-- Если пользователь авторизован --}}
        @auth
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Главная</a>
            </li>

            {{-- Кнопка выхода (POST) --}}
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button class="nav-link btn btn-link" style="cursor:pointer;">
                        Выход
                    </button>
                </form>
            </li>
        @endauth

        {{-- Если НЕ авторизован --}}
        @guest
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link"> домой</a>
            </li>
        @endguest

    </ul>
</nav>
