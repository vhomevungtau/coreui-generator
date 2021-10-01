<div class="table-responsive-sm">
    <table class="table table-striped table-bordered table-hover" style="width:100%" id="tag-table">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Thẻ người dùng</th>
                <th colspan="3">Hành động</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tags as $tag)
            <tr class="text-center">
                <td>{{ $tag->id }}</td>
                <td>{{ $tag->name }}</td>
                <td>
                    {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tags.show', [$tag->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('tags.edit', [$tag->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
