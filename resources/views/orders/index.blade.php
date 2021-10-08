@extends('layouts.app')

@section('title', 'Đơn hàng')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Đơn hàng</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @include('orders.table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
