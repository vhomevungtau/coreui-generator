@extends('layouts.app')

@section('title', 'Màu sắc')

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
                            {{-- Add button --}}
                            <div class="col-sm-4">
                                <a class="btn btn-sm btn-primary btn-rounded text-end"
                                    href="{{ route('admin.colors.create') }}">
                                    <i class="mdi mdi-plus-circle me-2"></i> Thêm</a>
                            </div>

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
