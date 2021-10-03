<!-- Name Field -->
<div class="mb-1 col-sm-6">
    {!! Form::label('name', 'Màu sắc') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="mb-1 col-sm-12">
    <button type="submit" class="btn btn-primary btn-rounded">Lưu</button>
    <a href="{{ route('admin.colors.index') }}" class="btn btn-default justify-content-md-end">Hủy</a>
</div>
