@extends('layouts.app')

@section('title','Cập nhật người dùng')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('admin.users.index') !!}">Người dùng</a>
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
                              <strong>Cập nhật người dùng</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'patch']) !!}

                              @include('users.fields-edit')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
