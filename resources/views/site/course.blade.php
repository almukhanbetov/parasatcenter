@extends('layouts.site')
@section('title', 'Курсы')
@section('content')

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="text-primary fw-bold">@yield('title')</h1>
            <p class="text-muted">Выберите направление, чтобы узнать подробнее о курсах</p>
        </div>

        <div class="row g-4">
            @forelse($courses as $kind)
                <div class="col-md-6 col-lg-4 d-flex justify-content-center">
                    <div class="service-item position-relative text-white text-center rounded-4 overflow-hidden shadow-sm"
                         style="height: 320px; background: url('{{ asset('storage/courses/' . $kind->image) }}') center/cover no-repeat; transition: all 0.4s ease; cursor: pointer;">

                        <!-- Полупрозрачное затемнение -->
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100"
                             style="transition: background 0.4s ease; background: rgba(0,0,0,0.3);">
                        </div>

                        <!-- Контент карточки -->
                        <div class="position-absolute bottom-0 start-0 w-100 p-4"
                             style="background: linear-gradient(to top, rgba(0,0,0,0.7), rgba(0,0,0,0));">
                            <h5 class="fw-semibold mb-3 text-uppercase text-white" 
                                style="letter-spacing: 0.5px; font-size: 1rem;">
                                {{ \Illuminate\Support\Str::words($kind->name, 13, '...') }}
                            </h5>
                            <a href="{{ route('site.course.kind', $kind) }}" 
                               class="btn btn-outline-light btn-sm px-3 py-2 rounded-pill fw-medium"
                               style="transition: all 0.3s ease;text-shadow:
                              0 0 2px rgba(0,0,0,0.7),
                              0 0 4px rgba(0,0,0,0.7),
                              0 2px 4px rgba(0,0,0,0.5);">
                                Подробнее <i class="fa fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center py-5">
                    <h4 class="text-muted">Нет данных</h4>
                </div>
            @endforelse
        </div>
    </div>
</div>

@endsection
