@extends('layouts.srm')
@section('title', 'Студенты')
@section('content')
    <div class="container-fluid bg-light overflow-hidden px-lg-0">
        <div class="container contact px-lg-0">
            {{--            <div class="row g-0 mx-lg-0">--}}
            <div class="card-header text-center">
                @if(session('success'))
                    <div class="alert alert-success">
                        <h4 style="color: #0f5132">{{session('success')}}</h4>
                    </div>
                @endif
            </div>
            <div class="col-lg-12 pe-lg-0" style="min-height: 400px;">
                <div class="row">
                    <div class="col-lg-9" style="margin: 0 auto">
                        <form action="{{route('site.search')}}" method="get">
                            @csrf
                            <div class="row g-3 my-lg-4" style="margin: 0 auto">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="s" name="s" placeholder="Фамилия...">
                                        <label for="s">ИИН</label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Поиск</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{--            </div>--}}
        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection


