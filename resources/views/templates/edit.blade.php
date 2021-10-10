@extends('layouts.app')

@section('title', 'Cập nhật mẫu tin nhắn')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('admin.templates.index') !!}">Mẫu tin nhắn</a>
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
                            <strong>Cập nhật mẫu tin nhắn</strong>
                        </div>
                        <div class="card-body">
                            {!! Form::model($template, ['route' => ['admin.templates.update', $template->id], 'method' => 'patch']) !!}

                            @include('templates.fields')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
