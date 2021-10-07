@extends('layouts.app')

@section('title', 'Cập nhật dịch vụ')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('admin.products.index') !!}">Dịch vụ</a>
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
                            <strong>Cập nhật dịch vụ</strong>
                        </div>
                        <div class="card-body">
                            {!! Form::model($product, ['route' => ['admin.products.update', $product->id], 'method' => 'patch']) !!}

                            @include('products.edit-fields')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
