@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('roles.index') !!}">Vai trò</a>
          </li>
          <li class="breadcrumb-item active">Cập nhật</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Cập nhật vai trò</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'patch']) !!}

                              @include('roles.fields-edit')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
