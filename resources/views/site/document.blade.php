@extends('layouts.site')
@section('title', 'Программы')
@section('content')
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-12 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text-primary">Оставьте свое мнение в комментариях!</h6>
                        <div class="deadline-timer text-danger" data-deadline="{{ $document->comment_deadline->format('Y-m-d H:i:s') }}">
                            🧪 Загрузка таймера...
                        </div>
                        <h1 class="mb-4">Повышение квалификации педагогов начального, основного среднего, технического и профессионального, после среднего образования
                        </h1>
                        <p class="mb-4 pb-2">Здесь красиво расположить word документы</p>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Lorem ipsum.</p>
                                        <h5 class="mb-0">Lorem ipsum. </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mb-4 pb-2">Здесь красиво расположить word документы</p>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Lorem ipsum.</p>
                                        <h5 class="mb-0">Lorem ipsum. </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Feature End -->

@endsection

