@extends('admin.layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Добавить компанию</h4>
                    <form action="{{route('admin.firm.store')}}" class="forms-sample" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Название</label>
                            <input type="text" class="form-control"  name="name" placeholder="Название">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
