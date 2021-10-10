<!-- Type Field -->
<div class="mb-1 col-sm-12">
    {!! Form::label('type', 'Phân loại (user,order...)') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="mb-1 col-sm-12">
    {!! Form::label('name', 'Tên trạng thái') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Desc Field -->
<div class="mb-1 col-sm-12">
    {!! Form::label('desc', 'Mô tả') !!}
    {!! Form::text('desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Color Field -->
<div class="mb-1">
    <label for="">Màu</label>
    <select class="form-select" name="color" id="color">
        @foreach ($colors as $value)
            <option value="{{ $value->name }}">{{ $value->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-1 col-sm-12">
    <button type="submit" class="btn btn-primary btn-rounded">Lưu</button>
    <a href="{{ route('admin.statuses.index') }}" class="btn btn-default justify-content-md-end">Hủy</a>
</div>
