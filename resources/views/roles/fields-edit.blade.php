<!-- Name Field -->
<div class="form-group col-sm-12 col-lg-6">
    {{-- {!! Form::label('name', 'Vai trò') !!} --}}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Vai trò']) !!}
    <span class="text-secondary">Viết chữ thường: admin</span>
</div>

<!-- Desc Field -->
<div class="form-group col-sm-12 col-lg-6">
    {{-- {!! Form::label('desc', 'Mô tả') !!} --}}
    {!! Form::text('desc', null, ['class' => 'form-control', 'placeholder' => 'Mô tả']) !!}
</div>

<!-- Permissions Field -->
<div class="form-group col-sm-4">
    {!! Form::label('desc', 'Quyền hạn của vai trò') !!}

</div>


<div class="form-group container">
    <div class="row">
        @foreach ($permissions as $value)
            <div class="col-lg-3 col-sm-6 col-md-4">
                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePerms) ? true : false, ['class' => 'name']) }}
                    {{ $value->name }}</label>
                <br />
            </div>
        @endforeach
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col-6">
            {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
        </div>
        <div class="col-6 text-right">
            <a href="{{ route('roles.index') }}" class="btn btn-secondary">Hủy</a>
        </div>
    </div>
</div>
