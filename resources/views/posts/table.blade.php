<div class="table-responsive-sm">
    <table id="data-table" class="table table-responsive-sm table-striped table-bordered table-hover" style="width:100%"">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Name</th>
                <th>Desc</th>
                <th colspan=" 3">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td class="text-center">{{ $post->id }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->desc }}</td>
                    <td class="text-center">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('posts.show', [$post->id]) }}" class='btn btn-ghost-success'><i
                                    class="fa fa-eye"></i></a>
                            <a href="{{ route('posts.edit', [$post->id]) }}" class='btn btn-ghost-info'><i
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
