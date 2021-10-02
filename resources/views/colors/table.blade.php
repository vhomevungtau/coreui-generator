<table id="scroll-horizontal-datatable" class="table w-100 nowrap">
    <thead>
        <tr class="text-center">
            <th>ID</th>
            <th>Màu sắc</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($colors as $color)
            <tr class="text-center">
                <td>{{ $color->id }}</td>
                <td><span class="badge badge-outline-{{ $color->name }} rounded-pill">{{ $color->name }}</span></td>
                <td width="120">
                    {!! Form::open(['route' => ['admin.colors.destroy', $color->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('admin.colors.show', [$color->id]) !!}" class='btn btn-sm btn-rounded btn-info'><i
                                class="uil-eye"></i></a>
                        <a href="{!! route('admin.colors.edit', [$color->id]) !!}" class='btn btn-sm btn-rounded btn-warning'><i
                                class="uil-edit"></i></a>
                        {!! Form::button('<i class="uil-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-rounded btn-danger', 'onclick' => "return confirm('Bạn có muốn xóa?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
