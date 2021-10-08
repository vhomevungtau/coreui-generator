<div class="table-responsive">
    <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Dịch vụ</th>
                <th>Khách hàng</th>
                <th>Giờ</th>
                <th>Ngày</th>
                <th>Ghi chú</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($books as $v)
                <tr class="odd">
                    <td class="text-center">{{ $v->id }}</td>
                    <td>{{ $v->order->price->product->name }}</td>
                    <td>{{ $v->order->user->name }}</td>
                    <td class="text-center">{{ date('H:m', strtotime($v->time)) }}</td>
                    <td class="text-center">{{ date('d-m-Y', strtotime($v->date)) }}</td>
                    <td>{{ $v->content }}</td>
                    <td class="text-center"><span
                            class="badge badge-outline-{{ $v->status->color }} rounded-pill">{{ $v->status->name }}</span>
                    </td>
                    <td class="text-center">
                        {!! Form::open(['route' => ['admin.books.destroy', $v->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('admin.books.edit', [$v->id]) !!}" class='btn btn-sm btn-rounded btn-warning'><i
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
