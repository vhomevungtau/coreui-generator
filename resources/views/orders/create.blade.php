@extends('layouts.app')

@section('title', 'Thêm đơn hàng')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.orders.index') }}">Đơn hàng</a>
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
                            <strong>Thêm đơn hàng</strong>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['route' => 'admin.orders.store']) !!}

                            @include('orders.create-fields')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
