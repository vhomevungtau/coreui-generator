<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Thẻ người dùng') !!}
    {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Thẻ người dùng']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col-6">
            {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
        </div>
        <div class="col-6 text-right">
            <a href="{{ route('tags.index') }}" class="btn btn-secondary">Hủy</a>
        </div>
    </div>
</div>
