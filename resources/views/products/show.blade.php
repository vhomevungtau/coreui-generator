@extends('layouts.app')

@section('title', 'Thông tin người dùng')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('admin.products.index') !!}">Dịch vụ</a>
        </li>
        <li class="breadcrumb-item active">Thông tin</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-custome">
                        @include('products.show_fields')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
