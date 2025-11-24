@extends('layouts.srm')
@section('content')

<div class="min-vh-100 bg-light d-flex flex-column align-items-center justify-content-center py-5">

    <!-- Альбомный сертификат (название вверху) + убрана чёрная полоса -->
    <div class="mb-5">
        <div class="album-pdf-container">
            <iframe 
                src="{{ asset('storage/students/' . $student->image) }}#toolbar=0&navpanes=0&scrollbar=0&view=Fit&zoom=108"
                class="album-pdf"
                frameborder="0"
                allowfullscreen>
            </iframe>
        </div>
    </div>

    <!-- Блок с данными и кнопкой -->
    <div class="bg-white rounded-4 shadow p-4 text-start" style="min-width: 380px; max-width: 450px;">
        <p class="mb-3 text-success fs-5">ИИН: <strong>{{ $student->iin }}</strong></p>
        <p class="text-success fs-5">Фамилия: <strong>{{ $student->lastname }}</strong></p>
        <a href="{{ route('site.student') }}" 
           class="btn btn-success rounded-pill px-5 py-3 fs-5 w-100 mt-3 shadow">
            Возврат
        </a>
    </div>
</div>




@endsection