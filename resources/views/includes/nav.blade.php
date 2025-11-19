<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="#" class="navbar-brand d-flex align-items-center  px-4 px-lg-5">
        <img src="{{asset('/site/img/logo.png')}}" alt="">
        <h2 class="m-0 text-dark">ПAPACAT</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{route('site.index')}}" class="nav-item nav-link active">Главная</a>
            <a href="{{route('site.about')}}" class="nav-item nav-link">О компании</a>
            <a href="{{route('site.service')}}" class="nav-item nav-link">Услуги</a>
            <a href="{{route('site.course')}}" class="nav-item nav-link">Курсы</a>
            <a href="{{route('site.contact')}}" class="nav-item nav-link">Контакты</a>
            @auth('web')
                <a href="{{route('site.student')}}" class="nav-item nav-link">Cтуденты</a>
            @endauth

        </div>
        @auth('web')
            @if(auth()->user()->role === 'admin')
                <a href="{{ route('admin.index') }}" class="nav-item nav-link">АДМИН</a>
            @endif
            <a href="{{route('logout')}}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">
                Выход - ({{auth()->user()->name}})
            </a>
        @endauth
        @guest('web')
            <a href="{{route('site.student')}}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Войти</a>
{{--            <a href="{{route('site.student')}}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block"><img--}}
{{--                    src="{{asset('site/img/qr-code.png')}}" alt="" width="100" height="100"></a>--}}
        @endguest

    </div>
</nav>
