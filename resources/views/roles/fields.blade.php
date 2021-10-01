<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Vai trò') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Vai trò']) !!}
    <span class="text-secondary">Viết chữ thường: admin</span>
</div>

<!-- Desc Field -->
<div class="form-group col-sm-12">
    {!! Form::label('desc', 'Mô tả') !!}
    {!! Form::text('desc', null, ['class' => 'form-control', 'placeholder' => 'Mô tả']) !!}
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
