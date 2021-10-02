@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('admin.tags.index') !!}">Thẻ người dùng</a>
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
                              <strong>Cập nhật thẻ</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($tag, ['route' => ['admin.tags.update', $tag->id], 'method' => 'patch']) !!}

                              @include('tags.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
