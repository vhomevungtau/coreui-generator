@extends('layouts.app')

@section('title', 'Cập nhật đơn hàng')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('admin.prices.index') !!}">Đơn hàng</a>
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
                            <strong>Cập nhật đơn hàng</strong>
                        </div>
                        <div class="card-body">
                            {!! Form::model($price, ['route' => ['admin.prices.update', $price->id], 'method' => 'patch']) !!}

                            @include('prices.edit-fields')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
