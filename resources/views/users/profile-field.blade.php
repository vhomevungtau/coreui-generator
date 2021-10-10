<!-- Sms Field -->
<div class="mb-2 col-sm-12">
    {!! Form::label('sms', 'Xưng hô (SMS)') !!}
    {!! Form::text('sms', $user->profile->sms, ['class' => 'form-control']) !!}
</div>

<!-- Info Field -->
<div class="mb-2 col-sm-12 col-lg-12">
    {!! Form::label('info', 'Thông tin khách hàng') !!}
    {!! Form::textarea('info', $user->profile->info, ['class' => 'form-control','rows'=>'5']) !!}
</div>

<div class="mb-1 col-sm-12">
    <button type="submit" class="btn btn-primary btn-rounded">Lưu</button>
    <a href="{{ route('admin.users.index') }}" class="btn btn-default justify-content-md-end">Hủy</a>
</div>
