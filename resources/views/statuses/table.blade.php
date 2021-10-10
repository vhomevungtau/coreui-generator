<div class="table-responsive">
    <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Phân loại</th>
                <th>Tên</th>
                <th>Mô tả</th>
                <th>Hành động</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($statuses as $v)
                <tr class="odd">
                    <td class="text-center">{{ $v->id }}</td>
                    <td>{{ $v->type }}</td>
                    <td class="text-{{ $v->color }}">{{ $v->name }}</td>
                    <td class="text-{{ $v->color }}">{{ $v->desc }}</td>
                    <td class="text-center">
                        {!! Form::open(['route' => ['admin.statuses.destroy', $v->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('admin.statuses.edit', [$v->id]) !!}" class='btn btn-sm btn-rounded btn-warning'><i
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

