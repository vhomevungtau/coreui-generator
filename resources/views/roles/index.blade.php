@extends('layouts.app')

@section('title','Vai trò')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Vai trò</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @include('roles.table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

