<!-- Name Field -->
<div class="mb-1 col-sm-12">
    {!! Form::label('name', 'Thẻ người dùng') !!}
    {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Thẻ người dùng']) !!}
</div>

<!-- Color Field -->
<div class="mb-1">
    <select class="form-select" name="color" id="color">
        @foreach ($colors as $value)
            <option value="{{ $value->name }}" >{{ $value->name }}</option>
        @endforeach
    </select>
</div>

<!-- Submit Field -->
<div class="mb-1 col-sm-12">
    <button type="submit" class="btn btn-primary">Lưu</button>
    <a href="{{ route('admin.tags.index') }}" class="btn btn-default justify-content-md-end">Hủy</a>
</div>
