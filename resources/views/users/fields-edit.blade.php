<!-- Name Field -->
<div class="form-group col-sm-12">
    {{-- {!! Form::label('name', 'Name') !!} --}}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Họ tên']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-12">
    {{-- {!! Form::label('name', 'Name') !!} --}}
    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Điện thoại']) !!}
</div>

<!-- Birthday Field -->
<div class="form-group col-sm-12">
    {{-- {!! Form::label('name', 'Name') !!} --}}
    {!! Form::date('birthday', \Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'Ngày sinh']) !!}
</div>

<div class="form-group col-sm-12">
    {{-- <label class="form-label" for="inputState">State</label> --}}
    <select id="role" name="role[]" class="form-control">
        @foreach ($roles as $role)
            <option value="{{ $role->id }}" @if ($role->id == $userRole) selected @endif>{{ $role->desc }}</option>
        @endforeach
    </select>
</div>

<!-- Email Field -->
<div class="form-group col-sm-12">
    {{-- {!! Form::label('email', 'Email') !!} --}}
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Địa chỉ Email']) !!}
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
            {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
        </div>
        <div class="col-6 text-right">
            <a href="{!! route('users.index') !!}" class="btn btn-default">Hủy</a>
        </div>
    </div>

</div>
