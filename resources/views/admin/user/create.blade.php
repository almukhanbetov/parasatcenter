@extends('admin.layouts.admin')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Студентті қосу</h3>
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
                                    <label>Login</label>
                                    <input type="text" class="form-control mb-2" name="name" value="{{old('name')}}" placeholder="Login">
                                    @error('name')
                                    <strong style="color: #d9534f">{{ $message }}</strong>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Аты-жөні</label>
                                    <input type="text" class="form-control mb-2" name="fullname" value="{{old('fullname')}}"  placeholder="Аты-жөні">
                                    @error('fullname')
                                    <strong style="color: #d9534f">{{ $message }}</strong>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control mb-2" name="email" value="{{old('email')}}" placeholder="E-mail">
                                    @error('email')
                                    <strong style="color: #d9534f">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="group">Бағдарламалау тілі</label>
                                    <select class="form-control custom-select" name="subject_id">
                                        <option disabled>Выбрать</option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}">{{$subject->name}}
                                            </option>
                                            @error('subject')
                                            <strong style="color: #d9534f">{{ $message }}</strong>
                                            @enderror
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image">Сурет</label>
                                    <input type="file" class="form-control-file" name="image">
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
