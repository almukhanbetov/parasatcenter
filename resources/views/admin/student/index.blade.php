@php
    use Illuminate\Support\Str;
@endphp
@extends('layouts.admin')
@section('title', 'Все услуги')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@yield('title')</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-body p-0">
                <p class="card-description">
                    @if (session('success'))
                        <div class="alert alert-success">
                            <h4>{{ session('success') }}</h4>
                        </div>
                    @endif
                </p>
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 5%">
                                №
                            </th>
                            <th style="width: 15%">
                                ФИО
                            </th>
                            <th style="width: 10%">
                                Сертификат
                            </th>
                            <th style="width: 15%">
                                ИИН
                            </th>
                            <th style="width: 20%">
                                Курс
                            </th>
                            <th style="width: 20%">
                                Фирма
                            </th>
                            <th style="width: 15%" class="text-right">
                                Действия
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $student)
                            <tr>
                                <td>
                                    {{ $student->id }}
                                </td>
                                <td>
                                    {{ $student->lastname }}
                                </td>
                                <td>
                                    <iframe src="{{ asset('/storage/students/' . $student->image) }}"
                                        alt="{{ $student->name ?? '' }}" height="60" width="60"></iframe>
                                </td>
                                <td>
                                    {{ $student->iin }}
                                </td>
                                <td>
                                    {{ Str::limit($student->course?->name ?? '', 30, '...') }}
                                </td>
                                <td>
                                    {{ $student->firm->name ?? '' }}
                                </td>

                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.student.view', $student) }}">
                                        <i class="fas fa-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{ route('admin.student.edit', $student) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a>
                                    <form action="{{ route('admin.student.destroy', $student) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Удалить услугу?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th>
                                </th>
                                <th>
                                </th>
                                <th>
                                    Услуг пока нет
                                </th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection



{{-- <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Студенты</h4>
                <p class="card-description">
                    @if (session('success'))
                        <div class="alert alert-success">
                            <h4>{{ session('success') }}</h4>
                        </div>
                    @endif
                </p>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered table-fixed">
                        <thead>
                            <tr>
                                <th>
                                    #ID
                                </th>
                                <th style="width: 15%">
                                    ФИО
                                </th>
                                <th style="width: 10%">
                                    Сертификат
                                </th>
                                <th style="width: 20%">
                                    ИИН
                                </th>
                                <th style="width: 20%">
                                    Курс
                                </th>
                                <th style="width: 10%">
                                    Компания
                                </th>

                                <th style="width: 20%">
                                    Действие
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($students as $student)
                                <tr>
                                    <td>
                                        {{ $student->id }}
                                    </td>
                                    <td>
                                        {{ $student->lastname }}
                                    </td>
                                    <td>
                                        <iframe src="{{ asset('/storage/students/' . $student->image) }}"
                                            alt="{{ $student->name ?? '' }}" height="60" width="60"></iframe>

                                    </td>
                                    <td>
                                        {{ $student->iin }}
                                    </td>
                                    <td>
                                        {{ Str::limit($student->course?->name ?? '', 30, '...') }}
                                    </td>
                                    <td>
                                        {{ $student->firm_id ?? '' }}
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('admin.student.view', $student) }}">
                                            <i class="fas fa-folder">
                                            </i>
                                        </a>
                                        <a class="btn btn-info btn-sm"
                                            href="{{ route('admin.student.edit', $student) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        <form action="{{ route('admin.student.destroy', $student) }}"
                                            style="display: contents">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm delete-btn" type="submit">
                                                <i class="fas fa-trash">
                                                </i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center">
                                        Пока нет данных
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}
