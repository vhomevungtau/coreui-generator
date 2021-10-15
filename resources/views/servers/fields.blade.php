<!-- Url Field -->
<div class="mb-1 col-sm-12">
    {!! Form::label('url', 'Địa chỉ URL') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<!-- Key Field -->
<div class="mb-1 col-sm-12">
    {!! Form::label('key', 'Key') !!}
    {!! Form::text('key', null, ['class' => 'form-control']) !!}
</div>

<!-- Devices Field -->
<div class="mb-1 col-sm-12">
    {!! Form::label('devices', 'Thiết bị') !!}
    {!! Form::text('devices', null, ['class' => 'form-control']) !!}
</div>

<!-- 'bootstrap / Toggle Switch Prioritize Field' -->
<div class="mb-1 col-sm-12">
    {!! Form::label('prioritize', 'Ưu tiên') !!}
    {!! Form::hidden('prioritize', 0) !!}
    {!! Form::checkbox('prioritize', 1, null,  ['data-bootstrap-switch']) !!}
</div>


<div class="mb-1 col-sm-12">
    <button type="submit" class="btn btn-primary btn-rounded">Lưu</button>
    <a href="{{ route('admin.servers.index') }}" class="btn btn-default justify-content-md-end">Hủy</a>
</div>
