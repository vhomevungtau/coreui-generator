@extends('layouts.app')

@section('title','Cập nhật quyền hạn')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('admin.permissions.index') !!}">Quyền hạn</a>
          </li>
          <li class="breadcrumb-item active">Cập nhật</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-6">
                      <div class="card">
                          <div class="card-header">
                              <i class="uil-edit"></i>
                              <strong>Cập nhật quyền hạn</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($permission, ['route' => ['admin.permissions.update', $permission->id], 'method' => 'patch']) !!}

                              @include('permissions.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
