@extends('layouts.app')

@section('title', 'Cập nhật trạng thái')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('admin.statuses.index') !!}">Trạng thái</a>
        </li>
        <li class="breadcrumb-item active">Cập nhật</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <i class="uil-edit"></i>
                            <strong>Cập nhật trạng thái</strong>
                        </div>
                        <div class="card-body">
                            {!! Form::model($status, ['route' => ['admin.statuses.update', $status->id], 'method' => 'patch']) !!}

                            @include('statuses.fields')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
