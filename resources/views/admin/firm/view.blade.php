@extends('admin.layouts.admin')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{$firm->name}}</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                        <div class="row">
                            <div class="col-12">
                                <h4>Категория</h4>
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="{{asset('/landing/images/cover2.jpg')}}" width="600" height="400"  alt="user image">
                                        <span class="username">
                                          <a href="#">Superblue</a>
                                        </span>
                                        <span class="description">⭐️ with you</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <h3 class="text-primary"><i class="fas fa-paint-brush"></i> {{$firm->name}}</h3>
                        <p class="text-muted">Программалау тілі - деп деректерді жазуға және оларды белгілі ережелер бойынша өңдеуге арналған адам мен компьютерді байланыстыратын формальды тілді айтамыз.</p>
                        <br>
                        <div class="text-muted">
                            <p class="text-sm">Директор:
                                <b class="d-block">Мұхтар Алимбетов</b>
                            </p>
                            <p class="text-sm">Директор орынбасары:
                                <b class="d-block">Төлеген Нұрдәулет</b>
                            </p>
                        </div>

                        <h5 class="mt-5 text-muted">Контакт:</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-map"></i> Конаева 49/1</a>
                            </li>
                            <li>
                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i>BilimEdu@gmail.com</a>
                            </li>
                            <li>
                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i>  <img class="img-circle img-bordered-sm" src="{{asset('/assets/images/logo.png')}}" width="110" height="30" alt=""></a>
                            </li>
                            <li>
                                <a href="" class="btn-link text-secondary">☎️</i> +7 708 407 11 96</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



