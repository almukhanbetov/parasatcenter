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

                </div>
            </div>
            {{--            </div>--}}
        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection





{{--<table class="table w-75" style="margin: 0 auto">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th scope="col">#</th>--}}
{{--        <th scope="col">FIO</th>--}}
{{--        --}}{{--                        <th scope="col">ИИН</th>--}}
{{--        <th scope="col">Курс</th>--}}
{{--        <th scope="col">Компания</th>--}}
{{--        <th scope="col">Действие</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody class="table-group-divider">--}}
{{--    @forelse($students as $student)--}}
{{--        <tr>--}}
{{--            <th scope="row">{{$student->id}}</th>--}}
{{--            <td>{{$student->lastname ?? ''}}</td>--}}
{{--            --}}{{--                            <td>{{$student->iin}}</td>--}}
{{--            <td>{{$student->course->name ?? ''}}</td>--}}
{{--            <td>{{$student->firm->name ?? ''}}</td>--}}
{{--            <td>--}}
{{--                <a href="{{route('site.student.show', $student)}}" class="btn btn-primary text-center"><i class="las la-eye"></i></a>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--    @empty--}}
{{--        <tr>--}}
{{--            <th scope="row">Нет данных</th>--}}
{{--        </tr>--}}
{{--    @endforelse--}}


{{--    </tbody>--}}
{{--</table>--}}
