<div class="table-responsive-sm">
    <table id="role-table" class="table table-striped table-bordered table-hover" style="width:100%">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Name</th>
                <th>Desc</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td class="text-center">{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->desc }}</td>
                    <td class="text-center">
                        {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('roles.show', [$role->id]) }}" class='btn btn-ghost-success'><i
                                    class="fa fa-eye"></i></a>
                            <a href="{{ route('roles.edit', [$role->id]) }}" class='btn btn-ghost-info'><i
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
