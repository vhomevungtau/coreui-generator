@extends('layouts.app')

@section('title', 'Thiết lập máy chủ tin nhắn')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('admin.index') !!}">Tổng quan</a>
        </li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <i class="uil-edit"></i>
                            <strong>Thiết lập máy chủ tin nhắn</strong>
                        </div>
                        <div class="card-body">
                            {!! Form::model($server, ['route' => ['admin.servers.store'], 'method' => 'post']) !!}

                            @include('servers.fields')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
