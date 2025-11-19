@extends('admin.layouts.admin')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{$user->fullname}}</h3>

                <div class="card-tools">
                    <h4 class="d-block">Студент</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                        <div class="row">
                            <div class="col-12">

                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="{{asset('storage/users/'.$user->image)}}" width="450" height="350" alt="user image">
                                        <span class="username">
                                          <h4 class="mt-3">{{$user->name}} </h4>
                                        </span>
                                        <span class="description">{{$user->position}}</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <h3 class="text-primary"><i class="fas fa-paint-brush"></i> {{$user->fullname}}</h3>
                        <p class="text-muted">

                        </p>
                        <br>
                        <div class="text-muted">
                            <h4></h4>
                            <p class="text-sm">Оқу орыны:
                                <b class="d-block">Әл-Фараби атындағы қазақ ұлттық университеті</b>
                            </p>
                            <p class="text-sm">Курс мерзімі:
                                <b class="d-block">3-ай</b>
                            </p>
                            <div class="text-muted mt-3">
                                <h5 class="text-muted">Үй жұмысы:
                                    <b class="d-block mt-2"><a href="{{route('admin.subject.index')}}" class="btn btn-primary ">Өту</a></b>
                                </h5>
                        </div>

                        <h5 class="mt-4 text-muted">Контакты</h5>
                        <ul class="list-unstyled">
{{--                            <li>--}}
{{--                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-map"></i>{{$user->fullname}}</a>--}}
{{--                            </li>--}}
                            <li>
                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> {{$user->email}}</a>
                            </li>
                            <li>
                                <a href="" class="btn-link text-secondary">☎️</i> {{$user->name}}</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



