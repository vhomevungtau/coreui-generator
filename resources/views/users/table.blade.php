<div class="table-responsive">
    <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Họ tên</th>
                <th>Điện thoại</th>
                <th>Vai trò</th>
                <th>Trạng thái</th>
                <th>Thẻ</th>
                <th>Hành động</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr class="odd">
                    <td class="text-center">{!! $user->id !!}</td>
                    <td>{!! $user->name !!}</td>
                    <td class="text-center">{!! $user->phone !!}</td>
                    <td>{{ $user->roles()->pluck('desc')[0] ?? '' }}</td>
                    <td>
                        @if ($user->email_verified_at == null)
                            Chưa kích hoạt
                        @else
                            Đang hoạt động
                        @endif
                    </td>
                    {{-- Tags --}}
                    <td>
                        @foreach ($user->tags as $v)
                            <span
                                class="badge badge-outline-{{ $v->color }} rounded-pill">{{ $v->name }}</span>
                        @endforeach
                    </td>

                    <td class="text-center">
                        {!! Form::open(['route' => ['admin.users.destroy', $user->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('admin.users.show', [$user->id]) !!}" class='btn btn-sm btn-rounded btn-info'><i
                                    class="uil-eye"></i></a>
                            <a href="{!! route('admin.users.edit', [$user->id]) !!}" class='btn btn-sm btn-rounded btn-warning'><i
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

@push('scripts')
    <script>

    </script>
@endpush
