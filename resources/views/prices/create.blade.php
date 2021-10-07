@extends('layouts.app')

@section('title', 'Thêm giá dịch vụ')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.prices.index') }}">Giá dịch vụ</a>
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
                            <strong>Thêm giá dịch vụ</strong>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['route' => 'admin.prices.store']) !!}

                            @include('prices.create-fields')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
