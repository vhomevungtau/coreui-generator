@extends('layouts.app')

@section('title', 'Thông tin mẫu tin nhắn')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('admin.users.index') !!}">Mẫu tin nhắn</a>
        </li>
        <li class="breadcrumb-item active">Thông tin</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-custome">
                        @include('templates.show_fields')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
