@extends('layouts.app')

@section('title', 'Lịch hẹn')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Lịch hẹn</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @include('books.table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
