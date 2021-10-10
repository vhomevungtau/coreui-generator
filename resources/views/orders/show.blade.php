@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('admin.orders.index') !!}">Đơn hàng</a>
        </li>
        <li class="breadcrumb-item active">Thông tin</li>
    </ol>

    <div class="content px-3">
        <div class="card">
            @include('orders.show_fields')
        </div>
    </div>
@endsection
