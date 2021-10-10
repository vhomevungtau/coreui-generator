<div class="table-responsive">
    <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Loại tin nhắn</th>
                <th>Nội dung</th>
                <th>Hành động</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($templates as $v)
                <tr class="odd">
                    <td class="text-center">{{ $v->id }}</td>
                    <td>{{ $v->status->desc }}</td>
                    <td>{{ $v->content }}</td>
                    <td class="text-center">
                        {!! Form::open(['route' => ['admin.templates.destroy', $v->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('admin.templates.show', [$v->id]) !!}" class='btn btn-sm btn-rounded btn-info'><i
                                class="uil-eye"></i></a>
                            <a href="{!! route('admin.templates.edit', [$v->id]) !!}" class='btn btn-sm btn-rounded btn-warning'><i
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
