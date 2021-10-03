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
    <input type="text" name="birthday" value="{{ date('d-m-Y', strtotime($user->birthday)) }}" data-date-format="dd-mm-yyyy" data-date-autoclose="true" class="form-control"
        data-provide="datepicker" data-date-container="#datepicker1">
</div>

<div class="mb-1 col-sm-12">
    <select id="role" name="role[]" class="form-control">
        @foreach ($roles as $role)
            <option value="{{ $role->id }}" @if ($role->id == $userRole) selected @endif>{{ $role->desc }}</option>
        @endforeach
    </select>
</div>

<!-- Email Field -->
<div class="mb-1 col-sm-12">
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Địa chỉ Email']) !!}
</div>

<!-- Tag Field -->
<div class="mb-1 col-sm-6">
    <strong><h5>THẺ NGƯỜI DÙNG</h5></strong>
</div>

<div class="mb-1">
    <div class="row">
        @foreach ($tags as $value)
            <div class="mb-1 col-sm-6">
                <label>{{ Form::checkbox('tag[]', $value->id, in_array($value->id, $userTag) ? true : false, ['class' => 'name']) }}
                    {{ $value->name }}</label>
                <br />
            </div>
        @endforeach
    </div>
</div>

<!-- Password Field -->
{{-- <div class="form-group col-sm-12">
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mật khẩu']) !!}
</div> --}}

<!-- Confirmation Password Field -->
{{-- <div class="form-group col-sm-12">
    {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Xác nhận mật khẩu']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col-6">
            {!! Form::submit('Lưu', ['class' => 'btn btn-primary btn-rounded']) !!}
        </div>
        <div class="col-6 text-right">
            <a href="{!! route('admin.users.index') !!}" class="btn btn-default">Hủy</a>
        </div>
    </div>

</div>
