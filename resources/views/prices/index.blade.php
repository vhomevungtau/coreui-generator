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
                        <div class="card-body">
                            @include('prices.table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
