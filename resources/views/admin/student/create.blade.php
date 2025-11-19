@extends('admin.layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Добавить студентов</h4>
                    <form action="{{ route('admin.student.store') }}" class="forms-sample" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>ФИО</label>
                            <input type="text" class="form-control" name="lastname" placeholder="FIO"
                                value="{{ old('lastname') }}">
                            @error('lastname')
                                <strong style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Сертификат</label>
                            <input type="file" class="form-control" name="image" placeholder="Сертификат"
                                accept="application/pdf*" value="{{ old('image') }}">
                            @error('image')
                                <strong style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>
                        {{-- Множественные фото --}}
                        <div class="mb-3">
                            <label>Дополнительные сертификаты (можно выбрать несколько)</label>
                            <input type="file" name="images[]" class="form-control" accept="application/pdf" multiple>
                            @error('images.*')
                                <strong style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>ИИН</label>
                            <input type="text" class="form-control" name="iin" placeholder="ИИН"
                                value="{{ old('iin') }}">
                            @error('iin')
                                <strong style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="group">Курсы</label>
                            <select class="form-control custom-select" name="course_id">
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}"
                                        {{ old('course_id') == $course->id ? 'selected' : '' }}>
                                        {{ $course->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('course_id')
                                <strong style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="group">Организация</label>
                            <select class="form-control custom-select" name="firm_id">
                                @foreach ($firms as $firm)
                                    <option value="{{ $firm->id }}"
                                        {{ old('firm_id') == $firm->id ? 'selected' : '' }}>
                                        {{ $firm->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('firm_id')
                                <strong style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mr-2">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
