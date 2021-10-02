@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('admin.roles.index') !!}">Vai trò</a>
      </li>
      <li class="breadcrumb-item active">Thêm mới</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="uil-focus-add"></i>
                                <strong>Thêm mới vai trò</strong>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'admin.roles.store']) !!}

                                   @include('roles.fields')

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
