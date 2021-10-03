<!-- Name Field -->
<div class="mb-1 col-sm-12">
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Họ tên']) !!}
</div>

<!-- Phone Field -->
<div class="mb-1 col-sm-12">
    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Điện thoại']) !!}
</div>

<!-- Birthday Field -->
<div class="mb-1 position-relative" id="datepicker1">
    <input type="text" name="birthday" value="{{ date_format(\Carbon\Carbon::now(), 'd-m-Y') }}" data-date-format="dd-mm-yyyy" data-date-autoclose="true" class="form-control"
        data-provide="datepicker" data-date-container="#datepicker1">
</div>

<!-- Role Field -->
<div class="mb-1">
    <select class="form-select" name="role[]" id="role[]">
        @foreach ($roles as $role)
            <option value="{{ $role->id }}" @if ($role->id == 210002) selected @endif>{{ $role->desc }}</option>
        @endforeach
    </select>
</div>

<!-- Email Field -->
<div class="mb-1 col-sm-12">
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Địa chỉ Email']) !!}
</div>

<!-- Password Field -->
<div class="mb-1 col-sm-12">
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mật khẩu']) !!}
</div>

<!-- Confirmation Password Field -->
<div class="mb-1 col-sm-12">
    {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Xác nhận mật khẩu']) !!}
</div>

<!-- Tag Field -->
<div class="mb-1 col-sm-6">
    <strong><h5>THẺ NGƯỜI DÙNG</h5></strong>
</div>

<div class="mb-1">
    <div class="row">
        @foreach ($tags as $value)
            <div class="mb-1 col-sm-6">
                <label>{{ Form::checkbox('tag[]', $value->id,false, ['class' => 'name']) }}
                    {{ $value->name }}</label>
                <br />
            </div>
        @endforeach
    </div>
</div>

<!-- Submit Field -->
<div class="mb-1 col-sm-12">
    <button type="submit" class="btn btn-primary btn-rounded">Lưu</button>
    <a href="{{ route('admin.users.index') }}" class="btn btn-default justify-content-md-end">Hủy</a>
</div>
