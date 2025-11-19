@extends('admin.layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Студенттер</h4>
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
                                        #ID
                                    </th>
                                    <th>
                                        Login
                                    </th>
                                    <th>
                                        Аты-жөні
                                    </th>
                                    <th>
                                        Почта
                                    </th>
                                    <th>
                                        Бағдарламалау тілі
                                    </th>
                                    <th>
                                        Әрекет
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!$users)
                                    <h1>Данных нет</h1>
                                @else
                                    @foreach($users as $user)
                                        <tr>
                                            <td>
                                                {{$user->id}}
                                            </td>
                                            <td>
                                                {{$user->name}}
                                            </td>
                                            <td>
                                                {{$user->fullname}}
                                            </td>
                                            <td>
                                                {{$user->email}}
                                            </td>
                                            @foreach($user->subjects as $subject)
                                            <td>
                                                {{$subject->name}}
                                            </td>
                                            @endforeach
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="{{route('admin.user.view', $user)}}">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                </a>
{{--                                                <a class="btn btn-info btn-sm" href="{{route('admin.user.edit', $user)}}">--}}
{{--                                                    <i class="fas fa-pencil-alt">--}}
{{--                                                    </i>--}}
{{--                                                </a>--}}
                                                <form action="{{route('admin.user.delete', $user)}}" method="post" style="display: contents">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"  class="btn btn-sm btn-danger show-confirm delete-btn">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach



                                @endif
                                </tbody>
                            </table>
                            <div class="row mt-5">
                                <div class="col-md-4 mx-auto text-center">
                                    {{$users->links()}}
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
