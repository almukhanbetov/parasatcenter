@extends('admin.layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Редактировать студента</h4>

                    <form action="{{ route('admin.student.update', $student) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        {{-- ФИО --}}
                        <div class="form-group">
                            <label>ФИО</label>
                            <input type="text" class="form-control" name="lastname"
                                value="{{ old('lastname', $student->lastname) }}">
                            @error('lastname')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>

                        {{-- Текущий сертификат --}}
                        <div class="form-group">
                            <label>Текущий сертификат</label><br>
                            <iframe src="{{ asset('storage/students/' . $student->image) }}" width="150"
                                height="150"></iframe>
                        </div>

                        {{-- Заменить основной PDF --}}
                        <div class="form-group">
                            <label>Заменить основной сертификат (PDF)</label>
                            <input type="file" class="form-control" name="image" accept="application/pdf">
                            @error('image')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>

                        {{-- Добавить дополнительные PDF --}}
                        <div class="form-group">
                            <label>Добавить дополнительные сертификаты (PDF)</label>
                            <input type="file" name="images[]" class="form-control" accept="application/pdf" multiple>
                            @error('images.*')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>

                        {{-- ИИН --}}
                        <div class="form-group">
                            <label>ИИН</label>
                            <input type="text" class="form-control" name="iin"
                                value="{{ old('iin', $student->iin) }}">
                            @error('iin')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>

                        {{-- Курсы --}}
                        <div class="form-group">
                            <label>Курс</label>
                            <select class="form-control" name="course_id">
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}" @selected(old('course_id', $student->course_id) == $course->id)>
                                        {{ $course->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('course_id')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>

                        {{-- Организация --}}
                        <div class="form-group">
                            <label>Организация</label>
                            <select class="form-control" name="firm_id">
                                @foreach ($firms as $firm)
                                    <option value="{{ $firm->id }}" @selected(old('firm_id', $student->firm_id) == $firm->id)>
                                        {{ $firm->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('firm_id')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- Отображение и удаление дополнительных PDF --}}
        <div class="col-md-6">
            <h4>Дополнительные сертификаты:</h4>

            @forelse($student->images as $img)
                <div class="mb-3">
                    <iframe src="{{ asset('storage/students/gallery/' . $img->image) }}" width="120"
                        height="120"></iframe>

                    {{-- <form action="{{ route('admin.student.image.delete', $img) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm mt-1">Удалить</button>
                </form> --}}
                </div>
            @empty
                <p class="text-muted">Нет дополнительных сертификатов</p>
            @endforelse
        </div>
    </div>
@endsection
