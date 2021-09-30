<div class="table-responsive-sm">
    <table id="user-table" class="table table-striped table-bordered table-hover" style="width:100%">
        <thead class="text-center">
            <th>ID</th>
            <th>Họ tên</th>
            <th>Điện thoại</th>
            <th>Vai trò</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="text-center">{!! $user->id !!}</td>
                    <td>{!! $user->name !!}</td>
                    <td class="text-center">{!! $user->phone !!}</td>
                    <td></td>
                    <td class="text-center">
                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-ghost-success'><i
                                    class="fa fa-eye"></i></a>
                            <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-ghost-info'><i
                                    class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
