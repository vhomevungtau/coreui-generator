@extends('layouts.app')

@section('title','Màu sắc')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Màu sắc</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="uil-list-ul"></i>
                            Danh sách màu
                            <a class="btn btn-sm btn-primary pull-right" href="{{ route('admin.colors.create') }}">Thêm</a>
                        </div>
                        <div class="card-body">
                            @include('colors.table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
