@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('admin.users.index') !!}">Người dùng</a>
        </li>
        <li class="breadcrumb-item active">Tài khoản</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-custome">
                        @include('users.show_fields')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
