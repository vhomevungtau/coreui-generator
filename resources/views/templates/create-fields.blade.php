<!-- Name Field -->
<!-- Status -->
<div class="mb-1">
    <label class="form-label">Trạng thái</label>
    <select class="form-select" name="status_id">
        @foreach ($statuses as $v)
            <option value="{{ $v->id }}">{{ $v->desc }}</option>
        @endforeach
    </select>
</div>

<!-- Content Field -->
<div class="mb-1 col-sm-12">
    {!! Form::label('content', 'Nội dung') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control','placeholder' => 'Nội dung','rows'=>'3']) !!}
</div>

<div class="mb-1 col-sm-12">
    <button type="submit" class="btn btn-primary btn-rounded">Lưu</button>
    <a href="{{ route('admin.templates.index') }}" class="btn btn-default justify-content-md-end">Hủy</a>
</div>
