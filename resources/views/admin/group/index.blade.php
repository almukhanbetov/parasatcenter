@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Категории</h4>
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
                                    Название
                                </th>
                                <th>
                                    Действие
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($groups as $group)
                            <tr>
                                <td>
                                    {{$group->id}}
                                </td>
                                <td>
                                    {{$group->name}}
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.group.view', $group)}}">
                                        <i class="fas fa-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{route('admin.group.edit', $group)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
