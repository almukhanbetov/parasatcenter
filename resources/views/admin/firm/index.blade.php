@extends('admin.layouts.admin')
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
                                    Наименование
                                </th>
                                <th>
                                    Действие
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($firms as $firm)
                            <tr>
                                <td>
                                    {{$firm->id}}
                                </td>
                                <td>
                                    {{$firm->name}}
                                </td>
                                <td>
{{--                                    <a class="btn btn-primary btn-sm" href="{{route('admin.firm.view', $firm)}}">--}}
{{--                                        <i class="fas fa-folder">--}}
{{--                                        </i>--}}
{{--                                    </a>--}}
                                    <a class="btn btn-info btn-sm" href="{{route('admin.firm.edit', $firm)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a>
                                    <form action="{{route('admin.firm.delete', $firm)}}" method="post" style="display: contents">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" id="delete-btn">
                                            <i class="fas fa-trash-alt">
                                            </i>
                                        </button>
                                    </form>
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
