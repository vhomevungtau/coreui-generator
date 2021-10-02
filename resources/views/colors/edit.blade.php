@extends('layouts.app')

@section('title','Cập nhật màu sắc')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('admin.colors.index') !!}">Màu sắc</a>
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
                              <strong>Cập nhật màu sắc</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($color, ['route' => ['admin.colors.update', $color->id], 'method' => 'patch']) !!}

                              @include('colors.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
