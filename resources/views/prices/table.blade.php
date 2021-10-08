<div class="table-responsive">
    <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Dịch vụ</th>
                <th>Số lần</th>
                <th>Giá</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($prices as $v)
                <tr class="odd">
                    <td class="text-center">{{ $v->id }}</td>
                    <td>{{ $v->product->name }}</td>
                    <td class="text-center">{{ $v->number }}</td>
                    <td class="text-end">{{ number_format($v->price,0) }}</td>
                    <td class="text-center">
                        @if ($v->publish == 1)
                            Hiển thị
                        @else
                            Ẩn
                        @endif
                    </td>
                    <td class="text-center">
                        {!! Form::open(['route' => ['admin.prices.destroy', $v->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('admin.prices.getorder', [$v->id]) !!}" class='btn btn-sm btn-rounded btn-secondary'><i
                                class="mdi mdi-cart"></i></a>
                            <a href="{!! route('admin.prices.edit', [$v->id]) !!}" class='btn btn-sm btn-rounded btn-warning'><i
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
