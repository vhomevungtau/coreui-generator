@extends('layouts.app')

@section('title', 'Giá dịch vụ')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Giá dịch vụ</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- Custome --}}
                            <div class="row mb-2">
                                {{-- Add button --}}
                                <div class="col-sm-4">
                                    <a class="btn btn-sm btn-primary btn-rounded text-end"
                                        href="{{ route('admin.prices.create') }}">
                                        <i class="mdi mdi-plus-circle me-2"></i> Thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('prices.table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
