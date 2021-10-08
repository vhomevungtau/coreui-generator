@extends('layouts.app')

@section('title', 'Cập nhật lịch hẹn')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('admin.books.index') !!}">Lịch hẹn</a>
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
                            <strong>Cập nhật lịch hẹn</strong>
                        </div>
                        <div class="card-body">
                            {!! Form::model($book, ['route' => ['admin.books.update', $book->id], 'method' => 'patch']) !!}

                            @include('books.edit-fields')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
