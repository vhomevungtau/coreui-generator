@extends('layouts.app')

@section('title', 'Người dùng')

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
                            {{-- Custome --}}
                            <div class="row mb-2">
                                {{-- Add button --}}
                                <div class="col-sm-4">
                                    <a class="btn btn-sm btn-primary btn-rounded text-end"
                                        href="{{ route('admin.users.create') }}">
                                        <i class="mdi mdi-plus-circle me-2"></i> Thêm</a>
                                </div>
                                {{-- Button right --}}
                                <div class="col-sm-8">
                                    <div class="text-sm-end">
                                        <a type="button" class="btn btn-light mb-2 me-1"><i class="mdi mdi-file-excel"></i> Excel</a>
                                        <a type="button" class="btn btn-light mb-2"><i class="mdi mdi-file-pdf"></i> Pdf</a>
                                        <a type="button" class="btn btn-light mb-2 me-1"><i class="mdi mdi-database-import"></i> Nhập</a>
                                        <a type="button" class="btn btn-light mb-2"><i class="mdi mdi-database-export"></i> Xuất</a>
                                    </div>
                                </div><!-- end col-->
                            </div>



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
