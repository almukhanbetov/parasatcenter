@extends('layouts.site')
@section('title', 'Услуги')
@section('content')
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary">@yield('title')</h1>
            </div>
            <div class="row g-4">
                @forelse($services as $service)
                <div class="col-md-6 col-lg-4 d-flex justify-content-center">
                 <div class="service-item position-relative text-white text-center rounded-4 overflow-hidden shadow-sm"
                    style="height: 320px; background: url('{{ asset('storage/categories/' . $service->image) }}') center/cover no-repeat; transition: all 0.4s ease; cursor: pointer;">

                    <div class="overlay position-absolute top-0 start-0 w-100 h-100"
                    style="backgrounf:rgba(0,0,0,0.75); transition: background 0.4s ease;"></div>
                    <div class="position-absolute bottom-0 start-0 w-100 p-4"
                     style="background: linear-gradient(to top, rgba(0,0,0,0.75), rgba(0,0,0,0));">
                      <h5 class="fw-semibold mb-3 text-uppercase" 
                                style="letter-spacing: 0.5px; font-size: 1rem;">
                      {{ \Illuminate\Support\Str::words($service->name, 8, '...') }}
                      </h5>
                     <a href="{{ route('site.service.category', $service) }}" 
                      class="btn btn-outline-light btn-sm px-3 py-2 rounded-pill fw-medium"
                      style="transition: all 0.3s ease; text-shadow:
                       0 0 2px rgba(0,0,0,0.7),
                       0 0 4px rgba(0,0,0,0.7),
                       0 2px 4px rgba(0,0,0,0.5);">
                      Подробнее <i class="fa fa-arrow-right ms-1"></i>
                     </a>
                    </div>
                 </div>
                </div>
                @empty
                    <div class="position-relative p-4 pt-0">
                        <h4 class="mb-3">Нет данных</h4>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
   
    <!-- Feature End -->

@endsection