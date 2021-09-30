<div class="table-responsive-sm">
    <table id="perm-table" class="table table-striped table-bordered table-hover" style="width:100%">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Name</th>
                <th>Desc</th>
                <th colspan=" 3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $permission)
                <tr>
                    <td class="text-center">{{ $permission->id }}</td>
                    <td>{{ $permission->name }}</td>
                    <td>{{ $permission->desc }}</td>
                    <td class="text-center">
                        {!! Form::open(['route' => ['permissions.destroy', $permission->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('permissions.show', [$permission->id]) }}"
                                class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                            <a href="{{ route('permissions.edit', [$permission->id]) }}" class='btn btn-ghost-info'><i
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
