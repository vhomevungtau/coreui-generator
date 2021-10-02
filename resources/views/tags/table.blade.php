<table id="scroll-horizontal-datatable" class="table w-100 nowrap">
    <thead>
        <tr class="text-center">
            <th>ID</th>
            <th>Thẻ người dùng</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tags as $tag)
            <tr class="text-center">
                <td>{{ $tag->id }}</td>
                <td>{{ $tag->name }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.tags.destroy', $tag->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('admin.tags.show', [$tag->id]) !!}" class='btn btn-sm btn-rounded btn-info'><i
                                class="uil-eye"></i></a>
                        <a href="{!! route('admin.tags.edit', [$tag->id]) !!}" class='btn btn-sm btn-rounded btn-warning'><i
                                class="uil-edit"></i></a>
                        {!! Form::button('<i class="uil-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-rounded btn-danger', 'onclick' => "return confirm('Bạn có muốn xóa?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
