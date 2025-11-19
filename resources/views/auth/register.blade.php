@extends('layouts.srm')
@section('title', 'Регистрация')
@section('content')
<!-- Page Header Start -->

<div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s" style="margin: 0 auto">
                <div class="p-lg-5 ps-lg-0">
{{--                   <h6 class="text-primary text-muted">Вход</h6>--}}
                   <h2 class="mb-4 text-muted">@yield('title')</h2>

                    <form action="{{route('register_store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Имя</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                            @error('name')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
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
                        <div class="mb-3">
                            <label for="password" class="form-label">Повторите пароль</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                            @error('password_confirmation')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                        <p class="mb-2"><a href="#">Забыли пароль</a></p>
                        <p class="mb-3">Если зарегистрировались: <a href="{{route('login')}}">Войти</a></p>
                        <div class="col-12">
                            <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="submit">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
{{--            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">--}}
{{--                <div class="p-lg-5 ps-lg-0">--}}
{{--                    <h6 class="text-primary">Регистрация</h6>--}}
{{--                    <h1 class="mb-4">Регистрация</h1>--}}
{{--                    <p class="mb-4">The contact form is currently inactive. <a href="#">Забыли пароль</a>.</p>--}}
{{--                    <form>--}}
{{--                        <div class="row g-3">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-floating">--}}
{{--                                    <input type="text" class="form-control" id="name" placeholder="">--}}
{{--                                    <label for="name"></label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-floating">--}}
{{--                                    <input type="email" class="form-control" id="email" placeholder="">--}}
{{--                                    <label for="email"></label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12">--}}
{{--                                <div class="form-floating">--}}
{{--                                    <input type="text" class="form-control" id="subject" placeholder="">--}}
{{--                                    <label for="subject"></label>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-12">--}}
{{--                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Сохранить</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection
