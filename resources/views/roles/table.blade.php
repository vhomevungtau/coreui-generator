<table id="scroll-horizontal-datatable" class="table w-100 nowrap">
    <thead>
        <tr class="text-center">
            <th>ID</th>
            <th>Vai trò</th>
            <th>Mô tả</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $role)
            <tr>
                <td class="text-center">{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>{{ $role->desc }}</td>
                <td class="text-center">
                    {!! Form::open(['route' => ['admin.roles.destroy', $role->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('admin.roles.show', [$role->id]) !!}" class='btn btn-sm btn-rounded btn-info'><i
                                class="uil-eye"></i></a>
                        <a href="{!! route('admin.roles.edit', [$role->id]) !!}" class='btn btn-sm btn-rounded btn-warning'><i
                                class="uil-edit"></i></a>
                        {!! Form::button('<i class="uil-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-rounded btn-danger', 'onclick' => "return confirm('Bạn có muốn xóa?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
