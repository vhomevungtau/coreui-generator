<div class="table-responsive">
    <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Dịch vụ</th>
                <th>Khách hàng</th>
                <th>Số lần</th>
                <th>Giá</th>
                <th>Khuyến mãi</th>
                <th>Thành tiền</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($orders as $v)
                <tr class="odd">
                    <td class="text-center">{{ $v->id }}</td>
                    <td>{{ $v->price->product->name }}</td>
                    <td>{{ $v->user->name }}</td>
                    <td class="text-center">{{ $v->price->number }}</td>
                    <td class="text-end">{{ number_format($v->money, 0) }}</td>
                    <td class="text-end">{{ round((float)($v->discount) * 100 ) . ' %' }}</td>
                    <td class="text-end">{{ number_format($v->total, 0) }}</td>
                    <td class="text-center"><span
                            class="badge badge-outline-{{ $v->status->color }} rounded-pill">{{ $v->status->name }}</span>
                    </td>
                    <td class="text-center">
                        {!! Form::open(['route' => ['admin.orders.destroy', $v->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            @if ($v->status->id != 105)
                            <a href="{!! route('admin.orders.getbook', [$v->id]) !!}" class='btn btn-sm btn-rounded btn-secondary'><i
                                class="mdi mdi-calendar-account-outline"></i></a>
                            @endif
                            <a href="{!! route('admin.orders.show', [$v->id]) !!}" class='btn btn-sm btn-rounded btn-info'><i
                                    class="uil-eye"></i></a>
                            <a href="{!! route('admin.orders.edit', [$v->id]) !!}" class='btn btn-sm btn-rounded btn-warning'><i
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
