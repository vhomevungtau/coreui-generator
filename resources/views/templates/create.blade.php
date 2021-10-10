@extends('layouts.app')

@section('title', 'Thêm mẫu tin nhắn')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.templates.index') }}">Mẫu tin nhắn</a>
        </li>
        <li class="breadcrumb-item active">Thêm</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <i class="uil-focus-add"></i>
                            <strong>Thêm mẫu tin nhắn</strong>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['route' => 'admin.templates.store']) !!}

                            @include('templates.fields')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
