<div class="table-responsive">
    <table class="table" id="statuses-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Desc</th>
        <th>Color</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($statuses as $status)
            <tr>
                <td>{{ $status->name }}</td>
            <td>{{ $status->desc }}</td>
            <td>{{ $status->color }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['statuses.destroy', $status->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('statuses.show', [$status->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('statuses.edit', [$status->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
