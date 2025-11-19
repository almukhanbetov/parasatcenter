@extends('layouts.srm')
@section('title', 'Войти')
@section('content')
    <!-- Page Header Start -->

    <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s" style="margin: 0 auto">
                    <div class="p-lg-5 ps-lg-0">
                        <h1 class="mb-4 text-muted">@yield('title')</h1>
                        <form action="{{route('login_store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail адрес</label>
                                <input type="email" class="form-control text-muted" id="email" name="email" value="{{old('email')}}">
                                @error('email')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Введите пароль</label>
                                <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
                                @error('password')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <p class="mb-2"><a href="#">Забыли пароль</a></p>
                            <p class="mb-3">Если Вы не зарегистрировались: <a href="{{route('register')}}">Регистрация</a></p>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="submit">Войти</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
