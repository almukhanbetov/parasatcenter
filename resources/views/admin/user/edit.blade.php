@extends('admin.layouts.admin')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Студентті әсерлеу</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">Студент жайында</h4>
                        </div>
                        <form action="{{route('admin.user.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Аты</label>
                                    <input type="text" class="form-control mb-2" name="name" value="{{$user->name}}" placeholder="Аты">
                                    @error('name')
                                    <strong style="color: #d9534f">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Тегі</label>
                                    <input type="text" class="form-control mb-2" name="lastname" value="{{$user->fullname}}"  placeholder="Фамилия">
                                    @error('fullname')
                                    <strong style="color: #d9534f">{{ $message }}</strong>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control mb-2" name="email" value="{{$user->email}}" placeholder="E-mail">
                                    @error('email')
                                    <strong style="color: #d9534f">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="group">Категория</label>
                                    <select class="form-control custom-select" name="category_id">
                                        <option disabled>Выбрать</option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}">{{$subject->title}}
                                            </option>
                                            @error('subject')
                                            <strong style="color: #d9534f">{{ $message }}</strong>
                                            @enderror
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image">Сурет</label>
                                    <input type="file" class="form-control-file" id="image" name="image">
                                    @error('image')
                                    <strong style="color: #d9534f">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сақтау</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
