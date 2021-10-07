<!-- Name Field -->
<div class="mb-1 col-sm-12">
    {!! Form::label('name', 'Dịch vụ') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Dịch vụ']) !!}
</div>

<!-- Desc Field -->
<div class="mb-1 col-sm-12">
    {!! Form::label('desc', 'Mô tả') !!}
    {!! Form::text('desc', null, ['class' => 'form-control', 'placeholder' => 'Mô tả']) !!}
</div>


<!-- 'bootstrap / Toggle Switch Publish Field' -->
<div class="mb-1 col-sm-12">
    <input type="checkbox" id="switch3" name="publish" checked data-switch="success" />
    <label for="switch3"></label>
</div>

<div class="mb-1 col-sm-12">
    <button type="submit" class="btn btn-primary btn-rounded">Lưu</button>
    <a href="{{ route('admin.products.index') }}" class="btn btn-default justify-content-md-end">Hủy</a>
</div>
