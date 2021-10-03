@extends('layouts.app')

@section('title','Người dùng')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Người dùng</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="uil-list-ul"></i>
                            Danh sách người dùng

                            <a class="btn btn-sm btn-primary btn-rounded text-end" href="{{ route('admin.users.create') }}">
                                Thêm</a>
                        </div>

                        <div class="card-body">
                            @include('users.table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
