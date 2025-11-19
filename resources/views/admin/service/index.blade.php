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
                                Название
                            </th>
                            <th style="width: 45%">
                                Описание
                            </th>
                            <th style="width: 10%">
                                Фото
                            </th>
                            <th style="width: 20%" class="text-center">
                                Действия
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($services as $service)
                            <tr>
                                <td>
                                    №
                                </td>
                                <td>
                                    {{ \Illuminate\Support\Str::limit($service->name, 30) }}
                                </td>
                                <td>
                                    {{ \Illuminate\Support\Str::limit($service->desc, 100) }}
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="Avatar" class="table-avatar"
                                                src="{{ asset('/storage/services/' . $service->image) }}" width="90">
                                        </li>
                                    </ul>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.service.view', $service) }}">
                                        <i class="fas fa-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{ route('admin.service.edit', $service) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a>
                                    <form action="{{ route('admin.service.destroy', $service) }}" method="POST" style="display:inline-block;">
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
