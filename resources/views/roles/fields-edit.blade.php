<!-- Name Field -->
<div class="mb-1 col-sm-12 col-lg-6">
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Vai trò']) !!}
    <span class="text-secondary">Viết chữ thường: admin</span>
</div>

<!-- Desc Field -->
<div class="mb-1 col-sm-12 col-lg-6">
    {!! Form::text('desc', null, ['class' => 'form-control', 'placeholder' => 'Mô tả']) !!}
</div>

<!-- Permissions Field -->
<div class="mb-1 col-sm-4">
    <strong><h5>QUYỀN HẠN CỦA VAI TRÒ</h5></strong>
</div>


<div class="mb-1">
    <div class="row">
        @foreach ($permissions as $value)
            <div class="mb-1 col-lg-3 col-sm-6 col-md-4">
                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePerms) ? true : false, ['class' => 'name']) }}
                    {{ $value->name }}</label>
                <br />
            </div>
        @endforeach
    </div>
</div>

<!-- Submit Field -->
<div class="mb-1 col-sm-12">
    <button type="submit" class="btn btn-primary">Lưu</button>
    <a href="{{ route('admin.roles.index') }}" class="btn btn-default justify-content-md-end">Hủy</a>
</div>
