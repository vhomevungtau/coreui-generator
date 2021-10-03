<!-- Name Field -->
<div class="mb-1 col-sm-12">
    {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Quyền hạn']) !!}
    <span class="text-secondary">Định dạng theo mẫu: user-view</span>
</div>

<!-- Desc Field -->
<div class="mb-1 col-sm-12">
    {!! Form::text('desc', null, ['class' => 'form-control','placeholder' => 'Mô tả']) !!}
</div>

<!-- Submit Field -->
<div class="mb-1 col-sm-12">
    <button type="submit" class="btn btn-primary btn-rounded">Lưu</button>
    <a href="{{ route('admin.permissions.index') }}" class="btn btn-default justify-content-md-end">Hủy</a>
</div>
