@extends('layouts.site')
@section('title', 'Описание курсов')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h5 class="text-primary">{{ $course->name }}</h5>
            </div>
            <div class="row g-4">
                <div class="col-lg-12 grid-margin stretch-card text-black">
                    {!! $course->desc !!}
                </div>

            </div>
        </div>
    </div>

    <!-- Quote End -->
@endsection
