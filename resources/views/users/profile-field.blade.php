<!-- Sms Field -->
<div class="mb-2 col-sm-12">
    {!! Form::label('username', 'Xưng hô (SMS)') !!}
    {!! Form::text('username', $user->profile != null ? $user->profile->username : null, ['class' => 'form-control']) !!}
</div>

<!-- Info Field -->
<div class="mb-2 col-sm-12 col-lg-12">
    {!! Form::label('info', 'Thông tin khách hàng') !!}
    {!! Form::textarea('info', $user->profile != null ? $user->profile->info : null, ['class' => 'form-control','rows'=>'5']) !!}
</div>

<div class="mb-1 col-sm-12">
    <button type="submit" class="btn btn-primary btn-rounded">Lưu</button>
    <a href="{{ route('admin.users.index') }}" class="btn btn-default justify-content-md-end">Hủy</a>
</div>
