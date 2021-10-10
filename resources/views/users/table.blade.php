<div class="table-responsive">
    <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Họ tên</th>
                <th>Điện thoại</th>
                <th>Ngày sinh</th>
                <th>Vai trò</th>
                <th>Thẻ</th>
                <th>Hành động</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $v)
                <tr class="odd">
                    <td class="text-center">{{ $v->id }}</td>
                    <td>{{ $v->name }}</td>
                    <td class="text-center">{{ $v->phone }}</td>
                    <td class="text-center">{{ date('d-m-Y', strtotime($v->birthday)) }}</td>
                    <td>{{ $v->roles[0]->desc }}</td>
                    <td>
                        @foreach ($v->tags as $value)
                            <span
                                class="badge badge-outline-{{ $value->color }} rounded-pill">{{ $value->name }}</span>
                        @endforeach
                    </td>

                    <td class="text-center">
                        {!! Form::open(['route' => ['admin.users.destroy', $v->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('admin.users.getprofile', [$v->id]) !!}" class='btn btn-sm btn-rounded btn-secondary'><i
                                class="mdi mdi-human"></i></a>
                            <a href="{!! route('admin.users.show', [$v->id]) !!}" class='btn btn-sm btn-rounded btn-info'><i
                                    class="uil-eye"></i></a>
                            <a href="{!! route('admin.users.edit', [$v->id]) !!}" class='btn btn-sm btn-rounded btn-warning'><i
                                    class="uil-edit"></i></a>
                            {!! Form::button('<i class="uil-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-rounded btn-danger', 'onclick' => "return confirm('Bạn có muốn xóa?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

