@extends('layouts.app')

@section('title','Thông tin vai trò')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.roles.index') }}">Vai trò</a>
            </li>
            <li class="breadcrumb-item active">Thông tin</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-6">
                         <div class="card">
                             <div class="card-header">
                                 <i class="uil-comment-info-alt"></i>
                                 <strong>Thông tin vai trò</strong>
                                  <a href="{{ route('admin.roles.index') }}" class="btn btn-light">Quay lại</a>
                             </div>
                             <div class="card-body">
                                 @include('roles.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
