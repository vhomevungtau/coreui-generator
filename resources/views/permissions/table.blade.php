<table id="scroll-horizontal-datatable" class="table w-100 nowrap">
    <thead>
        <tr class="text-center">
            <th>ID</th>
            <th>Quyền hạn</th>
            <th>Mô tả</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($permissions as $permission)
            <tr>
                <td class="text-center">{{ $permission->id }}</td>
                <td>{{ $permission->name }}</td>
                <td>{{ $permission->desc }}</td>
                <td class="text-center">
                    {!! Form::open(['route' => ['admin.permissions.destroy', $permission->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('admin.permissions.show', [$permission->id]) !!}" class='btn btn-sm btn-rounded btn-info'><i
                                class="uil-eye"></i></a>
                        <a href="{!! route('admin.permissions.edit', [$permission->id]) !!}" class='btn btn-sm btn-rounded btn-warning'><i
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
