<div class="table-responsive">
    <table class="table" id="themes-table">
        <thead>
        <tr>
            <th>Theme</th>
        <th>Sidebar</th>
        <th>Option</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($themes as $theme)
            <tr>
                <td>{{ $theme->theme }}</td>
            <td>{{ $theme->sidebar }}</td>
            <td>{{ $theme->option }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['themes.destroy', $theme->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('themes.show', [$theme->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('themes.edit', [$theme->id]) }}"
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
