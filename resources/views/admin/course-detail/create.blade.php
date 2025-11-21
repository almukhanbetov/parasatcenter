@extends('layouts.admin')
@section('title', 'Создать курс')
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
        <form action="{{ route('admin.course-detail.store') }}" class="forms-sample" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Название</label>
                                <input type="text" class="form-control" name="title" placeholder="Наименование"
                                    value="{{ old('title') }}">
                                @error('title')
                                    <strong style="color: #d9534f">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="course_id">Выберите курс</label>
                                <select name="course_id" id="course_id" class="form-control">
                                    <option value="">-- Выберите курс --</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                    @endforeach
                                </select>

                                @error('course_id')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Описание</label>
                                <textarea id="summernote" class="form-control" rows="4" name="description" placeholder="Описание"
                                    value="{{ old('description') }}"></textarea>
                                @error('description')
                                    <strong style="color: #d9534f">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input type="submit" value="Сохранить" class="btn btn-success float-left">
                </div>
            </div>
        </form>
    </section>
@endsection
