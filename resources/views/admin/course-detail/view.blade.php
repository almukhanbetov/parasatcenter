@extends('layouts.admin')
@section('title', 'Детальный просмотр')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@yield('title')</h1>
                    <i class="fas fa-folder"></i>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none">{{ $course->name }}</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h3 class="my-3">{{ $course->name }}</h3>
                        <p>{{ $course->desc }}</p>

                        <hr>

                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
