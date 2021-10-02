@extends('layouts.app')

@section('title','Quyền hạn')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Quyền hạn</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="uil-list-ul"></i>
                            Danh sách quyền hạn
                            <a class="btn btn-primary pull-right" href="{{ route('admin.permissions.create') }}">Thêm</a>
                        </div>
                        <div class="card-body">
                            @include('permissions.table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


