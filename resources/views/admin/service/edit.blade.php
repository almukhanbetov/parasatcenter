@extends('layouts.admin')
@section('title', 'Редактировать услугу')
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
        <form action="{{ route('admin.service.update', $service) }}" class="forms-sample" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Название</label>
                                <input type="text" class="form-control" name="name" placeholder="Наименование"
                                    value="{{ $service->name }}">
                                @error('name')
                                    <strong style="color: #d9534f">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Описание</label>
                                <textarea id="summernote" class="form-control" rows="4" name="desc" placeholder="Описание"
                                    >{{ $service->desc }}</textarea>
                                @error('desc')
                                    <strong style="color: #d9534f">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="file">Изображение</label>
                                <input type="file" class="form-control" name="image" value="{{ $service->desc }}">
                                @error('image')
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
