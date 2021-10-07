<table id="scroll-horizontal-datatable" class="table w-100 nowrap">
    <thead>
        <tr class="text-center">
            <th>ID</th>
            <th>Vai trò</th>
            <th>Mô tả</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $role)
            <tr class="text-center">
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>{{ $role->desc }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
