@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Thẻ người dùng</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="uil-list-ul"></i>
                             Danh sách thẻ
                             <a class="btn btn-primary pull-right" href="{{ route('admin.tags.create') }}">Thêm</a>
                         </div>
                         <div class="card-body">
                             @include('tags.table')
                              <div class="pull-right mr-3">

                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection
