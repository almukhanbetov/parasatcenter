@extends('layouts.site')
@section('title', 'Курсы')
@section('content')

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h5 class="text-primary">{{$kind->name}}</h5>
            </div>
            <div class="row g-4">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
{{--                            <h4 class="card-title">Курсы</h4>--}}
                            <p class="card-description">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    <h4>{{session('success')}}</h4>
                                </div>
                                @endif
                                </p>
                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>
                                                №
                                            </th>
                                            <th>
                                                Название
                                            </th>
                                            <th>
                                                PDF
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($courses as $course)
                                            <tr>
                                                <td>
                                                    {{$course->id}}
                                                </td>
                                                <td>
                                                    {{$course->name}}
                                                </td>
                                                <td>
                                                    @if($course->image)
                                                        <a href="{{ asset('/storage/courses/' . $course->image) }}" target="_blank">📄 Открыть PDF</a>
                                                    @else
                                                        <span class="text-muted">Нет файла</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td>
                                                    <th>Нет данных</th>
                                                </td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Quote End -->
@endsection
