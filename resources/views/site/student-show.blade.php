@extends('layouts.srm')
@section('content')
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">

            {{-- Основной сертификат --}}
            <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 800px; max-width:800px;">
                <div class="position-relative h-100 card pdf-card">
                    <iframe class="position-absolute img-fluid w-100 h-100 pdf-frame"
                            src="{{ asset('storage/students/' . $student->image) }}">
                    </iframe>
                </div>
            </div>

            {{-- Информация --}}
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <h6 class="text-primary">{{ $student->firstname ?? '' }}</h6>
                    <h3 class="mb-4">{{ $student->course->name ?? '' }}</h3>

                    <p><i class="fa fa-check-circle text-primary me-3"></i>ИИН : {{ $student->iin }}</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>Фамилия : {{ $student->lastname }}</p>

                    <a href="{{ route('site.student') }}" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Возврат</a>
                </div>
            </div>
        </div>


        {{-- Дополнительные сертификаты --}}
        <div class="row mt-5">
            @forelse($student->images as $image)
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 800px; max-width:800px;">
                    <div class="position-relative h-100 card pdf-card">
                        <iframe class="position-absolute img-fluid w-100 h-100 pdf-frame"
                                src="{{ asset('storage/students/gallery/' . $image->image) }}">
                        </iframe>
                    </div>
                </div>
            @empty
                <h3 class="text-center">Нет больше сертификатов</h3>
            @endforelse
        </div>

    </div>
</div>
    {{-- <div class="container my-5">
        <div class="row justify-content-center g-4">
            <!-- Карточка PDF -->
            <div class="col-md-4">
                <div class="card pdf-card">
                    <iframe class="pdf-frame" src="{{ asset('/storage/students/' . $student->image ?? '') }}" alt="">
                    </iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card pdf-card">
                    <iframe class="pdf-frame" src="{{ asset('/storage/students/' . $student->image ?? '') }}"
                        alt="">
                    </iframe>
                </div>
            </div>     
        </div> 
    </div>              --}}
@endsection
