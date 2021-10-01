@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Người dùng</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-user"></i>
                            Người dùng
                            <a class="btn btn-primary pull-right" href="{!! route('users.create') !!}">
                                Thêm</a>
                        </div>

                        <div class="card-body">
                            @include('users.table')
                            <div class="pull-right mr-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $('#user-table').DataTable({
                "language": {
                    "search": "Tìm:",
                    "zeroRecords": "Không có dữ liệu",
                    "paginate": {
                        "first": "Đầu",
                        "last": "Cuối",
                        "next": "Tiếp",
                        "previous": "Trước"
                    },
                    "info": "Hiển thị _START_ đến _END_ trong _TOTAL_ dòng dữ liệu",
                    "infoEmpty": "",
                    "lengthMenu": "Hiển thị _MENU_ dữ liệu",
                },
                "oLanguage": {
                    "sProcessing": '<span>Please wait ...</span>'
                },
                "pagingType": "simple_numbers",
                "paging": true,
                "lengthMenu": [
                    [10, 25, 50],
                    [10, 25, 50]
                ],
                "processing": false,
                "serverSide": false,
                "ordering": true,
                "columns": [{
                        "title": "ID",
                        "data": "id",
                        "name": "id",
                        "visible": true,
                        "searchable": true
                    },
                    {
                        "title": "Họ tên",
                        "data": "name",
                        "name": "name",
                        "visible": true,
                        "searchable": true
                    },
                    {
                        "title": "Điện thoại",
                        "data": "phone",
                        "name": "phone",
                        "visible": true,
                        "searchable": true
                    },
                    {
                        "title": "Vai trò",
                        "data": "role",
                        "name": "role",
                        "visible": true,
                        "searchable": true
                    },
                    {
                        "title": "Hành động",
                        "data": "action",
                        "name": "action",
                        "visible": true,
                        "searchable": false
                    },
                ],
            });
        });
    </script>

@endpush
